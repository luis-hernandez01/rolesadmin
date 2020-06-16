@extends('layouts.app')

@section('body-class', 'hernandez-page')

@section('tittle', 'Listados de categorias')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
<div class="container">


<div class="section text-center">
    <h2 class="title">Listados de categorias</h2>

    <div class="team">
        <div class="row">
            <a href="" class="btn btn-primary btn-round">Nueva categoria</a>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="col-md-2 text-center">Nombre </th>
            <th class="col-md-2 text-center">Email</th>
            <th class="col-md-2 text-center">Rol</th>
            <th class="col-md-2 text-center">Estado</th>
            <th class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usersindex as $key => $user)
        <tr>
            <td class="text-center">{{$key+1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{getStatusUserArray(null,$user->status)}}</td>
            <td>{{getRoleUserArray(null,$user->role)}}</td>
                        
             <td class="td-actions text-right">
                
                <form method="post" action="{{url('/admin/users/'.$user->id)}}">
                    {{ csrf_field() }}

                <a href="{{url('/admin/users/'.$user->id.'/show')}}" rel="tooltip" title="Ver categoria" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-info"></i>
                </a>

                <a href="{{url('/admin/users/'.$user->id.'/edit')}}" rel="tooltip" title="Editar categoria" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>

                <a href="{{url('/admin/users/'.$user->id.'/permissions')}}" rel="tooltip" title="Editar Permisos de usuarios" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-check-square-o"></i>
                </a>

                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>  
{{$usersindex->links()}}         
        </div>
    </div>

</div>



</div>

</div>

<!-- de esta forma llamamos el includ de unfooter dice que esta dentro de la carpeta includes hay un archivo llamado footer  -->


@endsection
