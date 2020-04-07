@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Editar registro cliente') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cliente.update', $registros1->id)}}">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" name="nombre" class="form-control"  required="true" value="{{$registros1->nombre}}" autocomplete="off" autofocus>          
                            </div>
                        </div>                     
                        <div class="form-group row">
                            <label for="documento" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>
                            <div class="col-md-6">
                                <input id="documento" type="text" name="documento" class="form-control"  required="true" value="{{$registros1->documento}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
                            <div class="col-md-6">
                                <input id="correo" type="email" name="correo" class="form-control"  required="true" value="{{$registros1->correo}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" name="direccion" class="form-control"  required="true" value="{{$registros1->direccion}}" autocomplete="off" autofocus>          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6">
                                <select name="tipo" class="form-control input-sm" placeholder="Asignación de Rol" >
                                    <option disabled selected>Seleccione una opción</option>    
                                    <option value="Administrador"> Cliente</option>          
                                </select>
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
