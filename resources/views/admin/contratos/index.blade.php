@extends('adminlte::page')

@section('title', 'Contratos')

@section('content_header')

    <div class="clearfix">
        <div class="button-group">
            <h1 class="float-left">Contratos</h1>
            <form method="POST" action="{{ route('contratos.store') }}">
                @csrf
                <button type="submit" class="btn btn-primary float-right" style="background-color: purple; color: white;">Nuevo</button>
            </form>
            </div><br><br>
        <div class="button-group">
            <h1 class="float-left"hidden>.</h1>
            
            <h6 class="float-right">$  <span>( Obras)</span></h6>
        </div>
    </div>

@stop
    
@section('content')

    <div class="container-fluid">
        <div class="row d-flex flex-nowrap overflow-auto" style="height: 70vh;">
            <div class="col-sm-3">
                <h6>PRECONTRACTUAL</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 3)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $contrato->nombreContrato }}</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
                            <p class="card-text">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
                                @if($contrato->estado_id == 0)
                                    rgb(32,160,59)
                                @elseif($contrato->estado_id == 1)
                                    rgb(255,96,90)
                                @elseif($contrato->estado_id == 2)
                                    rgb(255,30,13)
                                @elseif($contrato->estado_id == 3)
                                    rgb(255,193,7)
                                @endif
                            ">
                                {{ $contrato->estado->nombreEstado }}
                                </span>
                                </small>
                                <small><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></small>
                                <small class="text-muted d-block">{{ $contrato->responsable }}</small>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-3">
                <h6>CONTRACTUAL</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 2)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $contrato->nombreContrato }}</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
                            <p class="card-text">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
                                @if($contrato->estado_id == 0)
                                    rgb(32,160,59)
                                @elseif($contrato->estado_id == 1)
                                    rgb(255,96,90)
                                @elseif($contrato->estado_id == 2)
                                    rgb(255,30,13)
                                @elseif($contrato->estado_id == 3)
                                    rgb(255,193,7)
                                @endif
                            ">
                                {{ $contrato->estado->nombreEstado }}
                                </span>
                                </small>
                                <small><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></small>
                                <small class="text-muted d-block">{{ $contrato->responsable }}</small>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-3">
                <h6>EJECUCION</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 1)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $contrato->nombreContrato }}</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
                            <p class="card-text">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
                                @if($contrato->estado_id == 0)
                                    rgb(32,160,59)
                                @elseif($contrato->estado_id == 1)
                                    rgb(255,96,90)
                                @elseif($contrato->estado_id == 2)
                                    rgb(255,30,13)
                                @elseif($contrato->estado_id == 3)
                                    rgb(255,193,7)
                                @endif
                            ">
                                {{ $contrato->estado->nombreEstado }}
                                </span>
                                </small>
                                <small><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></small>
                                <small class="text-muted d-block">{{ $contrato->responsable }}</small>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-3">
                <h6>LIQUIDACION</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 0)
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="mr-3">
                            <h5 class="card-title mb-1">{{ $contrato->nombreContrato }}</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
                            <p class="card-text">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div class="ml-auto text-right">
                                <small class="text-muted d-block">
                                <span class="font-medium rounded-lg m-2 p-1" style="color:#fff; background-color:
                                @if($contrato->estado_id == 0)
                                    rgb(32,160,59)
                                @elseif($contrato->estado_id == 1)
                                    rgb(255,96,90)
                                @elseif($contrato->estado_id == 2)
                                    rgb(255,30,13)
                                @elseif($contrato->estado_id == 3)
                                    rgb(255,193,7)
                                @endif
                            ">
                                {{ $contrato->estado->nombreEstado }}
                                </span>
                                </small>
                                <small><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></small>
                                <small class="text-muted d-block">{{ $contrato->responsable }}</small>
                                <h1>hola desde la card </h1>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('danger'))
            <div class="alert alert-danger">{{ session('danger') }}</div>
        @endif
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop