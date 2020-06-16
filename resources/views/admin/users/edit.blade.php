@extends('layouts.app')

@section('body-class', 'product-page')
 
@section('tittle', 'Bienvenido a app venta')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    
<div class="container">


    


<div class="section">
    <h2 class="title text-center">Editar categoria</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        
    </div>
    @endif
    <form method="post" action="{{ url('/admin/users/'.$userid->id.'/edit')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

    <div class="row">    
        <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Nombre usuario</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $userid->name) }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $userid->email) }}">
            </div>
    </div>
                   

       
            <!-- <div class="form-group label-floating">
                <label class="control-label">Descripcion corta</label>
                <input type="text" name="description" class="form-control" value="{{ old('description', $userid->description) }}">
            </div> -->

        
            
       
            
            <button class="btn btn-primary">Guardar cambios</button>
            <a href="{{url('/admin/users')}}" class="btn btn-default">Cancelar</a>
        
    </form>
</div>


</div>

</div>

<!-- de esta forma llamamos el includ de unfooter dice que esta dentro de la carpeta includes hay un archivo llamado footer  -->


@endsection
