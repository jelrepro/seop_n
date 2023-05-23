<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Reporte Veredas</title>
</head>
<body>
    <div class="button-group">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-solid fa-users text-success"></i>
                    </div>
                    <div class="col-auto">
                        <h6>{{ $clientes->where('estado_usuario_id', 0)->count() }} Activos</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-solid fa-users text-warning"></i>
                    </div>
                    <div class="col-auto">
                        <h6>{{ $clientes->where('estado_usuario_id', 2)->count() }} Revisar</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-solid fa-users text-danger"></i>
                    </div>
                    <div class="col-auto">
                        <h6>{{ $clientes->where('estado_usuario_id', 3)->count() }} Renuncias</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <h6>
                    <span>{{ $clientes->where('estado_usuario_id', 0)->count() }}</span>
                    <span>/</span>
                    <span>{{ $clientes->count() }}</span>
                </h6>
                <h6>
                    {{ number_format(($clientes->where('estado_usuario_id', 0)->count() / $clientes->count()) * 100, 2) }}%
                </h6>
            </div>
        </div>
    </div>
    <h4 style="text-align: center;">Reporte de Usuarios y Veredas</h4>
    <table class="table table-striped">
        <thead>
            <th>
                <th>Activo</th>
                <th>Revision</th>
                <th>Retirado</th>
            </th>
        </thead>
        <tbody>
            @foreach($veredas as $vereda)
            <tr>
                <td>
                    <span>{{ $vereda->veredas }}</span>
                </td>
                <td>
                    <span class="text-success text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 0)->count() }}</span>                            
                </td>
                <td>
                    <span class="text-warning text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 2)->count() }}</span>    
                </td>
                <td>
                    <span class="text-danger text-bold">{{ $vereda->clientes()->where('estado_usuario_id', 3)->count() }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>