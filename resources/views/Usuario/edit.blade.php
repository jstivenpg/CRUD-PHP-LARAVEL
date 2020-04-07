@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar registro usuario') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuario.update', $registros->id)}}">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" name="name" class="form-control"  required="true" value="{{$registros->name}}" autocomplete="off" autofocus>          
                            </div>
                        </div>                     
                        <div class="form-group row">
                            <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>
                            <div class="col-md-6">
                                <input id="documento" type="text" name="documenti" class="form-control"  required="true" value="{{$registros->documento}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" name="email" class="form-control"  required="true" value="{{$registros->email}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" name="direccion" class="form-control"  required="true" value="{{$registros->direccion}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6">
                                <select name="tipo" class="form-control input-sm" placeholder="Asignación de Rol" >
                                    <option disabled selected>Seleccione una opción</option>    
                                    <option value="Administrador"> Administrador</option>
                                    <option value="Vendedor"> Vendedor</option>          
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <script>
                                function mostrarContrasena(){
                                    var tipo = document.getElementById("password");
                                    if(tipo.type == "password"){ tipo.type = "text";}
                                    else{tipo.type = "password";}
                                }
                            </script>
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" name="password" class="form-control"  required="true" value="{{$registros->password}}" autofocus>
                                <label for="password"></label>
                                <button class="btn btn-link" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>               
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Actualizar') }}
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-primary " >Atrás</a>
                            </div>                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection