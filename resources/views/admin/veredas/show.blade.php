@extends('adminlte::page')

@section('title', 'Mostrar Usuarios')

@section('content_header')

<div class="clearfix">
    <div class="button-group">
        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <div class="form-group" hidden>
                <label for="vereda_id">Vereda</label>
                <select name="vereda_id" id="vereda_id" class="form-control">
                    <option value="{{ $vereda->id }}"></option>
                </select>
            </div>
            <button type="submit" class="btn float-left" style="background-color: purple; color: white;" name="Nuevo">Nuevo</button>
        </form>
        <div class="float-right">
            <div class="row">
                <div class="col">
                    <i class="fas fa-solid fa-users text-success"></i>
                </div>
                <div class="col-auto">
                    <h6>{{ $vereda->clientes()->where('estado_usuario_id', 0)->count() }} Activos</h6>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class="fas fa-solid fa-users text-warning"></i>
                </div>
                <div class="col-auto">
                    <h6>{{ $vereda->clientes()->where('estado_usuario_id', 2)->count() }} Revisar</h6>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class="fas fa-solid fa-users text-danger"></i>
                </div>
                <div class="col-auto">
                    <h6>{{ $vereda->clientes()->where('estado_usuario_id', 3)->count() }} Renuncias</h6>
                </div>
            </div>
        </div>
        <div class="float-right p-2 m-2">
            <h6><span>{{ $vereda->clientes()->where('estado_usuario_id', 0)->count() }}</span>/<span>{{ $vereda->clientes->count() }}</span></h6>
            <h6>
                {{ number_format(($vereda->clientes()->where('estado_usuario_id', 0)->count() / $vereda->clientes->count()) * 100, 2) }}%
            </h6>
        </div>
        
    </div>
</div>
<br>
<div style="position: relative;">
    <h4><span class="text-bold">{{ $vereda->veredas }}</span></h4>
    <a href="{{ route('veredas.index') }}" class="btn btn-close" style="position: absolute;">
        <i class="fas fa-times"></i>
    </a>
</div>
@stop
    
@section('content')

<!-- <h4>Vereda: <span class="text-bold">{{ $vereda->veredas }}</span></h4> -->

<div class="card-container">
@foreach ($vereda->clientes as $cliente)
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-auto">
                <img src="" alt="Imagen de Usuario" class="img-fluid"><br>
                <i class="fas fa-user"></i>
                <span>ID: {{ $cliente->id }}</span>
            </div>
            <div class="col">
                <h5>{{ $cliente->nombre }}</h5>
                <p>{{ $cliente->vereda_id }}</p>
                <p>{{ $cliente->cedula }}</p>
                <p>{{ $cliente->telefono }}</p>
                <p>{{ $cliente->anotaciones }}</p>
                <a href="{{ route('usuarios.edit', ['usuario' => $cliente->id]) }}">
                    <i class="fas fa-eye"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
        }
        .card {
            flex: 0 0 calc(33.33% - 20px); /* Ajusta el porcentaje según tus necesidades */
            margin: 10px;
        }
        .btn-close {
            /* position: absolute; */
            top: -10px;
            right: 0;
            margin: 1px;
            background-color: rgb(223,0,37);
            border: none;
        }

        .btn-close:hover {
            background-color: rgb(247,0,0);
        }

        .btn-close i {
            color: #fff;
            font-size: 20px;
        }

        .btn-hover-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
@stop

@section('js')
    <script>
    </script>
@stop