@extends('adminlte::page')

@section('title', 'Obras')

@section('content_header')
    
    <div class="clearfix">
        <div class="button-group">
            <!-- <h1 class="float-left">Proyectos</h1> -->
            <form method="POST" action="{{ route('proyectos.store') }}">
                @csrf
                <button type="submit" class="btn float-left" style="background-color: purple; color: white;" name="Nuevo Proyecto">Nuevo</button>
            </form>

            <h6 class="float-right">$ {{ $totalCostoPD }} <span>({{ $contadorPD }} Obras)</span></h6>
        </div>

    </div><br>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-nowrap overflow-auto" style="height: 75vh;">
            <div class="col-sm-4">
                <h6>FACTIBILIDAD</h6>
                <h6>$ {{ $totalCostoP }} <span>({{ $contadorFactibilidad }} Obras)</span></h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->estado_gestion_id == 3)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $proyecto->cod_inva }}</h1>
                                <h2 style="font-size: 14px; margin-top: 0;">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h2>
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
                                    @if($proyecto->estado_id == 0)
                                        rgb(32,160,59)
                                    @elseif($proyecto->estado_id == 1)
                                        rgb(255,96,90)
                                    @elseif($proyecto->estado_id == 2)
                                        rgb(255,30,13)
                                    @elseif($proyecto->estado_id == 3)
                                        rgb(255,193,7)
                                    @endif
                                ">
                                {{ $proyecto->estado->nombreEstado }}
                                </span>
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $proyecto->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>INICIO</h6>
                <h6>$ {{ $totalCostoD }} <span>({{ $contadorInicio }} Obras)</span></h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->estado_gestion_id == 4)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $proyecto->cod_inva }}</h1>
                                <h2 style="font-size: 14px; margin-top: 0;">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h2>
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
                                    @if($proyecto->estado_id == 0)
                                        rgb(32,160,59)
                                    @elseif($proyecto->estado_id == 1)
                                        rgb(255,96,90)
                                    @elseif($proyecto->estado_id == 2)
                                        rgb(255,30,13)
                                    @elseif($proyecto->estado_id == 3)
                                        rgb(255,193,7)
                                    @endif
                                ">
                                {{ $proyecto->estado->nombreEstado }}
                                </span>
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $proyecto->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>PLANEACÓN</h6>
                <h6>$ {{ $totalCostoC }} <span>({{ $contadorPlaneacion }} Obras)</span></h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->estado_gestion_id == 0)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $proyecto->cod_inva }}</h1>
                                <h2 style="font-size: 14px; margin-top: 0;">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h2>
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
                                    @if($proyecto->estado_id == 0)
                                        rgb(32,160,59)
                                    @elseif($proyecto->estado_id == 1)
                                        rgb(255,96,90)
                                    @elseif($proyecto->estado_id == 2)
                                        rgb(255,30,13)
                                    @elseif($proyecto->estado_id == 3)
                                        rgb(255,193,7)
                                    @endif
                                ">
                                {{ $proyecto->estado->nombreEstado }}
                                </span>
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $proyecto->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>EJECUCION</h6>
                <h6>$ {{ $totalCostoS }} <span>({{ $contadorEjecucion }} Obras)</span></h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->estado_gestion_id == 1)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $proyecto->cod_inva }}</h1>
                                <h2 style="font-size: 14px; margin-top: 0;">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h2>
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
                                    @if($proyecto->estado_id == 0)
                                        rgb(32,160,59)
                                    @elseif($proyecto->estado_id == 1)
                                        rgb(255,96,90)
                                    @elseif($proyecto->estado_id == 2)
                                        rgb(255,30,13)
                                    @elseif($proyecto->estado_id == 3)
                                        rgb(255,193,7)
                                    @endif
                                ">
                                {{ $proyecto->estado->nombreEstado }}
                                </span>
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $proyecto->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4">
                <h6>CIERRE</h6>
                <h6>$ {{ $totalCostoE }} <span>({{ $contadorCierre }} Obras)</span></h6>
                @foreach ($proyectos as $proyecto)
                    @if($proyecto->estado_gestion_id == 2)
                    <div class="card">
                        <div class="card-body d-flex"  style="flex-direction: row; justify-content: space-between;">
                            <div style="flex: 1;">
                                <h1 style="color: rgb(35, 108, 165); font-size: 24px; margin-bottom: 0; padding-bottom: 2px;">{{ $proyecto->cod_inva }}</h1>
                                <h2 style="font-size: 14px; margin-top: 0;">{{ $proyecto->grupoProyecto->nombreGrupoProyecto }}</h2>
                                <p style="font-size: 14px; margin-top: 0;">$ {{ $proyecto->costoProyecto }}</p>
                            </div>
                            <div style="flex: 1; text-align: right;">
                                <p style="margin-top: 0;">
                                <span class="font-medium rounded-lg m-1 p-1 badge" style="color:#fff; background-color:
                                    @if($proyecto->estado_id == 0)
                                        rgb(32,160,59)
                                    @elseif($proyecto->estado_id == 1)
                                        rgb(255,96,90)
                                    @elseif($proyecto->estado_id == 2)
                                        rgb(255,30,13)
                                    @elseif($proyecto->estado_id == 3)
                                        rgb(255,193,7)
                                    @endif
                                ">
                                {{ $proyecto->estado->nombreEstado }}
                                </span>
                                </p>
                                <p style="margin-top: 0;"><p><a href="{{ route('proyectos.edit', $proyecto->id) }}">Mostrar</a></p></p>
                                <p style="margin-top: 0;"><p class="text-muted d-block">{{ $proyecto->responsable->name }}</p></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
    @endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
@stop

@section('js')
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 1000);

    </script>
@stop