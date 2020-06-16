@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
         

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">

                
                
                {{ Form::open(['url' => '/register']) }}
              
                    <div class="header header-primary text-center">
                        <h4>Registro</h4>
                        <div class="social-line">
                           <!--  <a href="#pablo" class="btn btn-simple btn-just-icon">
                               <i class="fa fa-facebook-square"></i>
                           </a>
                           <a href="#pablo" class="btn btn-simple btn-just-icon">
                               <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#pablo" class="btn btn-simple btn-just-icon">
                               <i class="fa fa-google-plus"></i>
                           </a> -->
                        </div>
                    </div>
                    <p class="text-divider">Ingresar datos</p>
                    <div class="content">

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            {{ Form::text('name',old('name'), [ 'required', 'autofocus','placeholder' =>'Nombre...', 'class' => 'form-control']) }}
                            
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            {{ Form::email('email', null, [ 'required', 'autofocus','placeholder' =>'Email...', 'class' => 'form-control']) }}
                        
                        </div>

                        

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            {{ Form::password('password', [ 'required', 'autofocus','placeholder' =>'Password...', 'class' => 'form-control']) }}
                            
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            {{ Form::password('cpassword', [ 'required', 'autofocus','placeholder' =>'Confirmar contraseña...', 'class' => 'form-control']) }}
                            
                        </div>

                        <!-- If you want to add a checkbox to this form, uncomment this code

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" checked>
                                Subscribe to newsletter
                            </label>
                        </div> -->
                    </div>
                    <div class="footer text-center">
                        {{ Form::submit('Registrar', [ 'class' => 'btn btn-simple btn-primary btn-lg']) }}
                        
                    </div>
                {{ Form::close() }}

                @if (session('notificationderegistro'))
                        <div class="alert alert-success">
                            {{ session('notificationderegistro') }}
                        </div>
                    @endif

                @if (session('notification'))

                
                        <div class="alert alert-danger">
                            {{ session('notification') }}
                        
                    

                @if ($errors->any())

                    
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        
                    
                @endif
                </div>
                
                @endif
            </div>
        </div>
    </div>
</div>

<!-- de esta forma llamamos el includ de unfooter dice que esta dentro de la carpeta includes hay un archivo llamado footer  -->

</div>
@endsection
