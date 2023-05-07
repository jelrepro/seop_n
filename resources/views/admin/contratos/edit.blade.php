@extends('adminlte::page')

@section('title', 'Editar Contrato')

@section('content_header')
  
<h4>{{ $contrato->nombreContrato }}</h4>

<div style="position: relative;">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general">General</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cont">Contratista</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#variables">Variables</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#anotaciones">Anotaciones</a>
        </li>
    </ul>
    <a href="{{ route('contratos.index', $contrato) }}" class="btn btn-close" style="position: absolute;">
        <i class="fas fa-times"></i>
    </a>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="general">
            <form method="POST" action="{{ route('contratos.update', $contrato->id) }}">
                @csrf
                @method('PUT')
                
                <div class="container">
                    <div class="form-group" hidden>
                        <label for="nombreContrato">Contrato</label>
                        <input type="text" name="nombreContrato" id="nombreContrato" class="form-control" value="{{ $contrato->nombreContrato }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($contrato->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_admin_id">Etapa</label>
                                <select name="estado_admin_id" id="estado_admin_id" class="form-control">
                                    @foreach($estadosAdmin as $estadoAdmin)
                                        <option value="{{ $estadoAdmin->id }}" @if($contrato->estado_admin_id == $estadoAdmin->id) selected @endif>{{ $estadoAdmin->nombreEstadosAdmin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inicio">Inicio</label>
                                <input type="date" name="inicio" id="inicio" class="form-control" value="{{ $contrato->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fin">Fin</label>
                                <input type="date" name="fin" id="fin" class="form-control" value="{{ $contrato->fin }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="costoContrato">Costo</label>
                                <input type="text" name="costoContrato" id="costoContrato" class="form-control" value="{{ $contrato->costoContrato }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="proyeccion">Proyeccion</label>
                                <input type="text" name="proyeccion" id="proyeccion" class="form-control" value="{{ $contrato->proyeccion }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control">{{ $contrato->descripcion }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="objeto">Objeto</label>
                        <textarea name="objeto" id="objeto" class="form-control">{{ $contrato->objeto }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="alcance">Alcance</label>
                        <textarea name="alcance" id="alcance" class="form-control">{{ $contrato->alcance }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="contratista">Contratista</label>
                        <input type="text" name="contratista" id="contratista" class="form-control" value="{{ $contrato->contratista }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="nit">NIT</label>
                        <input type="text" name="nit" id="nit" class="form-control" value="{{ $contrato->nit }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $contrato->responsable }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $contrato->telefono }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ $contrato->correo }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" class="form-control" value="{{ $contrato->banco }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="noCuenta">No Cuenta</label>
                        <input type="text" name="noCuenta" id="noCuenta" class="form-control" value="{{ $contrato->noCuenta }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="tipoCuenta">Tipo Cuenta</label>
                        <input type="text" name="tipoCuenta" id="tipoCuenta" class="form-control" value="{{ $contrato->tipoCuenta }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="k">Factor K</label>
                                <input type="text" name="k" id="k" class="form-control" value="{{ $contrato->k }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="a">Administracion</label>
                                <input type="text" name="a" id="a" class="form-control" value="{{ $contrato->a }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="i">Imprevistos</label>
                                <input type="text" name="i" id="i" class="form-control" value="{{ $contrato->i }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="u">Utilidad</label>
                                <input type="text" name="u" id="u" class="form-control" value="{{ $contrato->u }}">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="anticipo">Anticipo</label>
                                <input type="text" name="anticipo" id="anticipo" class="form-control" value="{{ $contrato->anticipo }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="amortizacion">Amortizacion</label>
                                <input type="text" name="amortizacion" id="amortizacion" class="form-control" value="{{ $contrato->amortizacion }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="regarantia">Retegarantia</label>
                                <input type="text" name="regarantia" id="regarantia" class="form-control" value="{{ $contrato->regarantia }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="reteica">ReteICA</label>
                                <input type="text" name="reteica" id="reteica" class="form-control" value="{{ $contrato->reteica }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="retefuente">Retefuente</label>
                                <input type="text" name="retefuente" id="retefuente" class="form-control" value="{{ $contrato->retefuente }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="reteiva">ReteIVA</label>
                                <input type="text" name="reteiva" id="reteiva" class="form-control" value="{{ $contrato->reteiva }}">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group" hidden>
                        <label for="ordenCompra">Orden Compra</label>
                        <input type="text" name="ordenCompra" id="ordenCompra" class="form-control" value="{{ $contrato->ordenCompra }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="noSolped">No Solped</label>
                        <input type="text" name="noSolped" id="noSolped" class="form-control" value="{{ $contrato->noSolped }}">
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
            <form method="POST" action="{{ route('contratos.destroy', $contrato->id) }}" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-white btn-hover-danger" value="{{ $contrato->id }}" onclick="return confirm('¿Está seguro de que desea eliminar este contrato?')">Eliminar</button>
            </form>
        </div>

        <div class="tab-pane fade" id="cont">
            <form method="POST" action="{{ route('contratos.update', $contrato->id) }}">
                @csrf
                @method('PUT')
                
                <div class="container">
                    <div class="form-group" hidden>
                        <label for="nombreContrato">Contrato</label>
                        <input type="text" name="nombreContrato" id="nombreContrato" class="form-control" value="{{ $contrato->nombreContrato }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($contrato->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_admin_id">Etapa</label>
                                <select name="estado_admin_id" id="estado_admin_id" class="form-control">
                                    @foreach($estadosAdmin as $estadoAdmin)
                                        <option value="{{ $estadoAdmin->id }}" @if($contrato->estado_admin_id == $estadoAdmin->id) selected @endif>{{ $estadoAdmin->nombreEstadosAdmin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="inicio">Inicio</label>
                                <input type="date" name="inicio" id="inicio" class="form-control" value="{{ $contrato->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="fin">Fin</label>
                                <input type="date" name="fin" id="fin" class="form-control" value="{{ $contrato->fin }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="costoContrato">Costo</label>
                                <input type="text" name="costoContrato" id="costoContrato" class="form-control" value="{{ $contrato->costoContrato }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="proyeccion">Proyeccion</label>
                                <input type="text" name="proyeccion" id="proyeccion" class="form-control" value="{{ $contrato->proyeccion }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control">{{ $contrato->descripcion }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="objeto">Objeto</label>
                        <textarea name="objeto" id="objeto" class="form-control">{{ $contrato->objeto }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="alcance">Alcance</label>
                        <textarea name="alcance" id="alcance" class="form-control">{{ $contrato->alcance }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="contratista">Contratista</label>
                        <input type="text" name="contratista" id="contratista" class="form-control" value="{{ $contrato->contratista }}">
                    </div>

                    <div class="form-group">
                        <label for="nit">NIT</label>
                        <input type="text" name="nit" id="nit" class="form-control" value="{{ $contrato->nit }}">
                    </div>

                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $contrato->responsable }}">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $contrato->telefono }}">
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ $contrato->correo }}">
                    </div>

                    <div class="form-group">
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" class="form-control" value="{{ $contrato->banco }}">
                    </div>

                    <div class="form-group">
                        <label for="noCuenta">No Cuenta</label>
                        <input type="text" name="noCuenta" id="noCuenta" class="form-control" value="{{ $contrato->noCuenta }}">
                    </div>

                    <div class="form-group">
                        <label for="tipoCuenta">Tipo Cuenta</label>
                        <input type="text" name="tipoCuenta" id="tipoCuenta" class="form-control" value="{{ $contrato->tipoCuenta }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="k">Factor K</label>
                                <input type="text" name="k" id="k" class="form-control" value="{{ $contrato->k }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="a">Administracion</label>
                                <input type="text" name="a" id="a" class="form-control" value="{{ $contrato->a }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="i">Imprevistos</label>
                                <input type="text" name="i" id="i" class="form-control" value="{{ $contrato->i }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="u">Utilidad</label>
                                <input type="text" name="u" id="u" class="form-control" value="{{ $contrato->u }}">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="anticipo">Anticipo</label>
                                <input type="text" name="anticipo" id="anticipo" class="form-control" value="{{ $contrato->anticipo }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="amortizacion">Amortizacion</label>
                                <input type="text" name="amortizacion" id="amortizacion" class="form-control" value="{{ $contrato->amortizacion }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="regarantia">Retegarantia</label>
                                <input type="text" name="regarantia" id="regarantia" class="form-control" value="{{ $contrato->regarantia }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="reteica">ReteICA</label>
                                <input type="text" name="reteica" id="reteica" class="form-control" value="{{ $contrato->reteica }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="retefuente">Retefuente</label>
                                <input type="text" name="retefuente" id="retefuente" class="form-control" value="{{ $contrato->retefuente }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="reteiva">ReteIVA</label>
                                <input type="text" name="reteiva" id="reteiva" class="form-control" value="{{ $contrato->reteiva }}">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group" hidden>
                        <label for="ordenCompra">Orden Compra</label>
                        <input type="text" name="ordenCompra" id="ordenCompra" class="form-control" value="{{ $contrato->ordenCompra }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="noSolped">No Solped</label>
                        <input type="text" name="noSolped" id="noSolped" class="form-control" value="{{ $contrato->noSolped }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>

        <div class="tab-pane fade" id="variables">
        <form method="POST" action="{{ route('contratos.update', $contrato->id) }}">
                @csrf
                @method('PUT')
                
                <div class="container">
                    <div class="form-group" hidden>
                        <label for="nombreContrato">Contrato</label>
                        <input type="text" name="nombreContrato" id="nombreContrato" class="form-control" value="{{ $contrato->nombreContrato }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_id">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-control">
                                    @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if($contrato->estado_id == $estado->id) selected @endif>{{ $estado->nombreEstado }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="estado_admin_id">Etapa</label>
                                <select name="estado_admin_id" id="estado_admin_id" class="form-control">
                                    @foreach($estadosAdmin as $estadoAdmin)
                                        <option value="{{ $estadoAdmin->id }}" @if($contrato->estado_admin_id == $estadoAdmin->id) selected @endif>{{ $estadoAdmin->nombreEstadosAdmin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="inicio">Inicio</label>
                                <input type="date" name="inicio" id="inicio" class="form-control" value="{{ $contrato->inicio }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="fin">Fin</label>
                                <input type="date" name="fin" id="fin" class="form-control" value="{{ $contrato->fin }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="costoContrato">Costo</label>
                                <input type="text" name="costoContrato" id="costoContrato" class="form-control" value="{{ $contrato->costoContrato }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" hidden>
                                <label for="proyeccion">Proyeccion</label>
                                <input type="text" name="proyeccion" id="proyeccion" class="form-control" value="{{ $contrato->proyeccion }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control">{{ $contrato->descripcion }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="objeto">Objeto</label>
                        <textarea name="objeto" id="objeto" class="form-control">{{ $contrato->objeto }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="alcance">Alcance</label>
                        <textarea name="alcance" id="alcance" class="form-control">{{ $contrato->alcance }}</textarea>
                    </div>

                    <div class="form-group" hidden>
                        <label for="contratista">Contratista</label>
                        <input type="text" name="contratista" id="contratista" class="form-control" value="{{ $contrato->contratista }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="nit">NIT</label>
                        <input type="text" name="nit" id="nit" class="form-control" value="{{ $contrato->nit }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $contrato->responsable }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $contrato->telefono }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="{{ $contrato->correo }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" class="form-control" value="{{ $contrato->banco }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="noCuenta">No Cuenta</label>
                        <input type="text" name="noCuenta" id="noCuenta" class="form-control" value="{{ $contrato->noCuenta }}">
                    </div>

                    <div class="form-group" hidden>
                        <label for="tipoCuenta">Tipo Cuenta</label>
                        <input type="text" name="tipoCuenta" id="tipoCuenta" class="form-control" value="{{ $contrato->tipoCuenta }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="k">Factor K</label>
                            <input type="text" name="k" id="k" class="form-control" value="{{ $contrato->k }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="a">Administracion</label>
                            <input type="text" name="a" id="a" class="form-control" value="{{ $contrato->a }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="i">Imprevistos</label>
                            <input type="text" name="i" id="i" class="form-control" value="{{ $contrato->i }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="u">Utilidad</label>
                            <input type="text" name="u" id="u" class="form-control" value="{{ $contrato->u }}">
                        </div>
                    </div><br><br>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="anticipo">Anticipo</label>
                            <input type="text" name="anticipo" id="anticipo" class="form-control" value="{{ $contrato->anticipo }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="amortizacion">Amortizacion</label>
                            <input type="text" name="amortizacion" id="amortizacion" class="form-control" value="{{ $contrato->amortizacion }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="regarantia">Retegarantia</label>
                            <input type="text" name="regarantia" id="regarantia" class="form-control" value="{{ $contrato->regarantia }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="reteica">ReteICA</label>
                            <input type="text" name="reteica" id="reteica" class="form-control" value="{{ $contrato->reteica }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="retefuente">Retefuente</label>
                            <input type="text" name="retefuente" id="retefuente" class="form-control" value="{{ $contrato->retefuente }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="reteiva">ReteIVA</label>
                            <input type="text" name="reteiva" id="reteiva" class="form-control" value="{{ $contrato->reteiva }}">
                        </div>
                    </div><br><br>

                    <div class="form-group">
                        <label for="ordenCompra">Orden Compra</label>
                        <input type="text" name="ordenCompra" id="ordenCompra" class="form-control" value="{{ $contrato->ordenCompra }}">
                    </div>

                    <div class="form-group">
                        <label for="noSolped">No Solped</label>
                        <input type="text" name="noSolped" id="noSolped" class="form-control" value="{{ $contrato->noSolped }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

            </form>
        </div>

        <div class="tab-pane fade" id="anotaciones">
            <center>
            <h1 class="card-subtitle mb-2 text-muted">No hay anotaciones</h1
            </center>>
        </div>

        @if(session('update'))
            <div class="alert alert-primary">{{ session('update') }}</div>
        @endif
    </div>


</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
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