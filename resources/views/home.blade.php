@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="max-width: 100%; flex: 0 0 100.666667%">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body" >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }} 
                            </div>
                        @endif
                        @if (Auth::user()->tipo == "Administrador")
                            <div> Bienvenido: {{Auth::user()->tipo}}</div>
                            <div class="row"style="width: 1098px;>
                            <section class="content">
                                <div class="col-md 8 col-md-offset 1">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="pull-left"><h3>Lista de Usuarios - Registrados en la Plataforma</h3></div>
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <a href="{{ route('usuario.create') }}" class="btn btn-link" >Añadir Registro</a>
                                                    </div>
                                                </div>
                                            <div class="table-container">
                                                <table id="mytable" class="table table-bordred table-striped">
                                                    <thead>
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Documento</th>
                                                        <th>Correo</th>
                                                        <th>Direccion</th>
                                                        <th>Rol</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </thead>
                                                    <tbody>
                                                        @if($registros->count())  
                                                            @foreach($registros as $registrar)  
                                                                <tr>
                                                                    <td>{{$registrar->id}}</td>
                                                                    <td>{{$registrar->name}}</td>
                                                                    <td>{{$registrar->documento}}</td>
                                                                    <td>{{$registrar->email}}</td>
                                                                    <td>{{$registrar->direccion}}</td>
                                                                    <td>{{$registrar->tipo}}</td>
                                                                    <td><a class="btn btn-info btn-xs" href="{{action('UsuarioController@edit', $registrar->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                                    <td><a class="btn btn-danger btn-xs" href="{{action('UsuarioController@delete', $registrar->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                                </tr>
                                                            @endforeach 
                                                        @else
                                                        <tr>
                                                            <td colspan="8"  style="text-align: center;" >No hay registros !!</td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                </table>  
                                            </div>
                                        </div>
                                    {{$registros->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8" style="max-width: 100%; flex: 0 0 100.666667%">
                        <div class="card">
                            <div class="card-header">Dashboard</div>
                                <div class="card-body"y>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }} 
                                        </div>
                                    @endif                          
                                    <div class="row" style="margin-left: 0px;">
                                    <div class="row"style="width: 1098px;>
                                        <section class="content">
                                            <div class="col-md 8 col-md-offset 1">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="pull-left"><h3>Lista de Clientes - Registrados en la Plataforma</h3></div>
                                                            <div class="pull-right">
                                                                <div class="btn-group">
                                                                    <a href="{{ route('cliente.create') }}" class="btn btn-link" >Añadir Registro</a>
                                                                </div>
                                                            </div>
                                                            <div class="table-container">
                                                                <table id="mytable" class="table table-bordred table-striped">
                                                                    <thead>
                                                                        <th>Id</th>
                                                                        <th>Nombre</th>
                                                                        <th>Documento</th>
                                                                        <th>Correo</th>
                                                                        <th>Direccion</th>
                                                                        <th>Rol</th>
                                                                        <th>Editar</th>
                                                                        <th>Eliminar</th>
                                                                    </thead>
                                                                    <tbody>          
                                                                        @if($registros1->count())             
                                                                        @foreach($registros1 as $registrarCliente)  
                                                                        @if($registrarCliente->rol == "Cliente")
                                                                        <tr>   
                                                                            <td>{{$registrarCliente->id}}</td>
                                                                            <td>{{$registrarCliente->nombre}}</td>
                                                                            <td>{{$registrarCliente->documento}}</td>
                                                                            <td>{{$registrarCliente->correo}}</td>
                                                                            <td>{{$registrarCliente->direccion}}</td>  
                                                                            <td>{{$registrarCliente->rol}}</td>                     
                                                                            <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $registrarCliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                                            <td><a class="btn btn-danger btn-xs" href="{{action('ClienteController@delete', $registrarCliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                                        </tr>
                                                                        @endif
                                                                        @endforeach 
                                                                        @else
                                                                        <tr>
                                                                        <td colspan="8" style="text-align: center;" >No hay registros !!</td>
                                                                        </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>  
                                                            </div>
                                                        </div>
                                                    {{ $registros1->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>      
            @else
            <div> Bienvenido: {{Auth::user()->tipo}}</div>      
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }} 
                </div>
            @endif                          
            <div class="row" style="margin-left: 0px;">
            <div class="row"style="width: 1098px;>
                <section class="content">
                    <div class="col-md 8 col-md-offset 1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="pull-left"><h3>Lista de Clientes - Registrados en la Plataforma</h3></div>
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <a href="{{ route('cliente.create') }}" class="btn btn-link" >Añadir Registro</a>
                                        </div>
                                    </div>
                                    <div class="table-container">
                                        <table id="mytable" class="table table-bordred table-striped">
                                            <thead>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Documento</th>
                                                <th>Correo</th>
                                                <th>Direccion</th>
                                                <th>Rol</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </thead>
                                            <tbody>          
                                                @if($registros1->count())             
                                                @foreach($registros1 as $registrarCliente)  
                                                @if($registrarCliente->rol == "Cliente")
                                                <tr>   
                                                    <td>{{$registrarCliente->id}}</td>
                                                    <td>{{$registrarCliente->nombre}}</td>
                                                    <td>{{$registrarCliente->documento}}</td>
                                                    <td>{{$registrarCliente->correo}}</td>
                                                    <td>{{$registrarCliente->direccion}}</td>  
                                                    <td>{{$registrarCliente->rol}}</td>                     
                                                    <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $registrarCliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                    <td><a class="btn btn-danger btn-xs" href="{{action('ClienteController@delete', $registrarCliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>                                                   
                                                </tr>
                                                @endif
                                                @endforeach 
                                                @else
                                                <tr>
                                                <td colspan="8" style="text-align: center;" >No hay registros !!</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>  
                                    </div>
                                </div>
                            {{ $registros1->links() }}
                        </div>
                    </div>
                </div>
                @endif  
            </div>                
        </div>   
    </div>
</div>   
@endsection