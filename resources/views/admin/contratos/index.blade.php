@extends('adminlte::page')

@section('title', 'Contratos')

@section('content_header')

    <div class="clearfix">
        <div class="button-group">
            <h1 class="float-left">Contratos</h1>
            <form method="POST" action="{{ route('contratos.store') }}">
                @csrf
                <button type="submit"  class="btn btn-primary float-right">Nuevo</button>
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
            <div class="col-sm-4">
                <h6>PRECONTRACTUAL</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 3)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $contrato->nombreContrato }}</h1>
                                <!-- <h2 style="font-size: 14px; margin-top: 0;"></h2> -->
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
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
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $contrato->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>CONTRACTUAL</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 2)                 
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $contrato->nombreContrato }}</h1>
                                <!-- <h2 style="font-size: 14px; margin-top: 0;"></h2> -->
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
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
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $contrato->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>EJECUCION</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 1)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $contrato->nombreContrato }}</h1>
                                <!-- <h2 style="font-size: 14px; margin-top: 0;"></h2> -->
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
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
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $contrato->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>LIQUIDACION</h6>
                @foreach ($contratos as $contrato)
                    @if($contrato->estado_admin_id == 0)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $contrato->nombreContrato }}</h1>
                                <!-- <h2 style="font-size: 14px; margin-top: 0;"></h2> -->
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $contrato->costoContrato }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
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
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('contratos.edit', $contrato->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $contrato->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    @if(session('success_contrato'))
        <div class="alert alert-success">{{ session('success_contrato') }}</div>
    @endif

    @if(session('danger_contrato'))
        <div class="alert alert-danger">{{ session('danger_contrato') }}</div>
    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop