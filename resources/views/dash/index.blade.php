@extends('adminlte::plantilla')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">


@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
