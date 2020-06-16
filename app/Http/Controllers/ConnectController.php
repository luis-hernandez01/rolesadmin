<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class ConnectController extends Controller
{

	public function __construct()
    {
    	//una vez coloquemos este midleware nos hiremos a la carpeta de middleware e ingresamos
    	// al archivo RedirectIfAuthenticated.php y cambiamos de return redirect('/home');
    	// a return redirect('/'); y no tengaamos problemas.
    	//logicamente deberia de llevarnos a la pagina de inicio, para las personas que ya estan logueadas
    	// y no necesitan loguearse
        $this->middleware('guest')->except('getlogout');
    }

    public function loginindex()
    {
      return view('conection.login');
    }
    public function postlogin(Request $request)
    {
    	$messages = [
    'password.required' => 'la contraseña es obligatoria.',
    'password.min' => '8 caracteres como minimo.',

    'email.email' => 'El formato de su correo es invalido.',
    'email.required' => 'el correo es obligatorio.'
];
    	$rules = [
    		
    	 	'email'=>'required|email',
    	 	'password'=>'required|min:8'
    	 ];

    	  $validator = Validator::make($request->all(), $rules, $messages);
    	  if($validator->fails()):
    	  	return back()->withErrors($validator);
    	  else:
    	  	if(Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')], true)):
    	  		if(Auth::user()->status=="100"):
    	  			return redirect('/logout');
    	  		else:
    	  			return redirect('/');
    	  		endif;
    	  	else:
    	  		$notification='Se ha producido un error verifica correo o contraseña.';
    			return back()->with(compact('notification'));
    	  	endif;
    	  endif;


      
    }
    public function registerindex()
    {
      return view('conection.register');
    }
    public function postregister(Request $request)
    {
    	 $messages = [
    'name.required' => 'Es necesario colocar un nombre para el producto.',
    'cpassword' => 'Es necesario confirmar la contraseña.',
    'cpassword.same' => 'Las contraseñas no coinsiden.',
    'cpassword.required' => 'Las contraseñas no coinsiden.',
    'password.required' => 'Las contraseñas no coinsiden.',
    'password.min' => '8 caracteres como minimo.',

    'email.email' => 'El formato de su correo es invalido.',
    'email.required' => 'El formato de su correo es invalido.',
    'email.unique' => 'la contraseña.'
];
    	$rules = [
    		'name'=>'required',
    	 	'email'=>'required|email|unique:users,email',
    	 	'password'=>'required|min:8',
    	 	'cpassword'=>'required|same:password'
    	 ];
    	 $validator = Validator::make($request->all(), $rules, $messages);
    	 if($validator->fails()):
    	 	$notification='Se ha producido un error verifica correo o contraseña.';

    	 	return back()->withErrors($validator)->with(compact('notification'));
    	 else:
    	 	$user= new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            if($user->save()):
                $notificationderegistro='Te haz registrado con exito.';
            	return redirect('/login')->with(compact('notificationderegistro'));
            endif;
          
        
    	 endif;
    }

    public function getlogout(){
    	$status= Auth::user()->status;
    	Auth::logout();
    	if($status == "100"):
    		$notification='Su usuario fue suspendido.';
    		return redirect('/login')->with(compact('notification'));
    	else:
    		return redirect('/');
    	endif;
    	
    }
}
