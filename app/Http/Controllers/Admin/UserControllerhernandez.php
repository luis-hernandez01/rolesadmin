<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserControllerhernandez extends Controller
{
    public function index()
    {
    	$usersindex=User::orderBy('id','ASC')->paginate(5);
    	return view('admin.users.index')->with(compact('usersindex')); //Listado
    }

    public function edit( User $userid)
    {
    	
    	return view('admin.users.edit')->with(compact('userid')); //Listado; //formularios de registro
    }

    public function show( User $usershowid)
    {
    	
    	return view('admin.users.show')->with(compact('usershowid')); //Listado; //formularios de registro
    }
     public function banned($bannerid)
    {
        $usuban= User::findOrFail($bannerid);
        if($usuban->status == "100"):
            $usuban->status = "1";
            $msg= "Usuario activado con exito";
        else:
            $usuban->status = "100";
            $msg= "Usuario suspendido con exito";
        endif;

        if($usuban->save()):
            return back()->with('message', $msg); //Listado; //formularios de registro
        endif;

        
    }

    public function getpermissions(User $permissionid)
    {
        return view('admin.users.permission')->with(compact('permissionid'));

        
    }
    
    public function postpermissions(Request $request,  $permissionuserid)
    {
        $u=User::findOrFail($permissionuserid);
        $permiso=[
            //permisos de categorias
            'categories_list'=> $request->input('categories_list'),
            //permisos de usuarios
            'users_list'=> $request->input('users_list'),
            'users_form_edit'=> $request->input('users_form_edit'),
            'users_form_show'=> $request->input('users_form_show'),
            'users_banned'=> $request->input('users_banned'),
            //permisos de productos
            'products_list'=> $request->input('products_list')
        ];
        $permiso= json_encode($permiso);
        $u->permissions=$permiso;
        if($u->save()):
                $notification='Permiso asignado con exito.';
                return back()->with(compact('notification'));
        endif;

        
    }
}
