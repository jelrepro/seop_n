<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = [
        'proyectos',
        'municipio_id',
        'costo_proyecto',
        'estado_id',
        'cliente',
        'supervisor',
        'telefono',
        'correo',
        'descripcion',
        'estado_gestion_id',
        'objeto',
        'alcance',
        'estado_admin_id',
        'anio',
        'responsable_user_id',
        'centro_costos',
        'orden_interna',
        'cod_innva',
        'tipo_proyecto_id',
        'grupo_proyecto_id',
    ];

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_user_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function estadoGestion()
    {
        // return $this->belongsTo(EstadoGestion::class);
        return $this->belongsTo(EstadoGestion::class, 'estado_gestion_id');
    }

    public function estadoAdmin()
    {
        return $this->belongsTo(EstadoAdmin::class);
    }

    public function tipoProyecto()
    {
        return $this->belongsTo(TipoProyecto::class);
    }

    public function grupoProyecto()
    {
        return $this->belongsTo(GrupoProyecto::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
