<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte Veredas</title>
</head>
<body>
    <h4>Veredas</h4>
    <table class="table table-striped">
        <thead>
            <th>
                <th>Vereda</th>
                <th>Activo</th>
                <th>Revision</th>
                <th>Retirado</th>
            </th>
        </thead>
        <tbody>
            @foreach($veredas as $vereda)
            <tr>
                <td>{{ $vereda->veredas }}</td>
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