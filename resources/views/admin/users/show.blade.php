





@extends('layouts.app')

@section('body-class', 'profile-page')
 
@section('tittle', 'app venta | Dashboard')

@section('styles')
<style>
    .team{
        padding-bottom: 50px;
    }
    .team .rows .col-md-4{
        margin-bottom: 5em;
    }
    .rows{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;

    }
    .row > [class*='col-']{
        display: flex;
        flex-direction: column;
    }
</style>
@endsection

@section('content')

<div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        @if(is_null($usershowid->avatar))
                        <img src="{{ asset('img/default-avatar.png')}}" alt="Imagen representativa del usuario" class="img-circle img-responsive img-raised">
                        @else
                        <img src="{{ url('/img/'.$usershowid->id.'/'.$usershowid->avatar)}}" alt="Imagen representativa del usuario" class="img-circle img-responsive img-raised">
                        @endif
                    </div>
                    
                            @if (session('notification'))
                                        <div class="alert alert-success">
                                            {{ session('notification') }}
                                        </div>
                            @endif
                            </div>
            </div> 
                
                
            


    <div class="team text-center">
        <div class="rows">
           <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Nombre usuario</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $usershowid->name) }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $usershowid->email) }}">
            </div>
    </div>           
        </div>

        <div class="rows">
           <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Fecha de registro</label>
                <input type="text" name="date" class="form-control" value="{{ old('date', $usershowid->created_at) }}">
            </div>
        </div>
        <div class="col-sm-6">
           
            <div class="form-group label-floating">
                <label class="control-label">Rol</label>
                <input type="text" name="email" class="form-control" value="{{getRoleUserArray(null,$usershowid->role)}}">
            </div>
            

    </div>           
        </div>

        <div class="rows">
           
        <div class="col-sm-12">
           
            <div class="form-group label-floating">
                <label class="control-label">estado</label>
                <input type="text" name="email" class="form-control" value="{{getStatusUserArray(null,$usershowid->status)}}">
            </div>
            

    </div>           
        </div>
        <div class="text-center">
        </div>
    </div>


    
<a href="{{url('/admin/users')}}" class="btn btn-default">Atras</a>
@if($usershowid->status == "100")
<a href="{{ url('/admin/users/'.$usershowid->id.'/banned')}}" class="btn btn-success">Activar suspension</a>
@else
<a href="{{ url('/admin/users/'.$usershowid->id.'/banned')}}" class="btn btn-danger">suspender usuario</a>
@endif
               
        </div>
    </div>
</div>






<!-- Cuerpo de la Modal
<div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Selecciona la cantidad que deseas agregar</h4>
      </div>
      <form action="{{url('/cart')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="product_id" value="">
          <div class="modal-body">
            <input type="number" name="quantity" value="1" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
          </div>
      </form> -->
      
   <!--  </div>
     </div>
   </div> -->


<!-- de esta forma llamamos el includ de unfooter dice que esta dentro de la carpeta includes hay un archivo llamado footer  -->

@endsection







