<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'cedula',
        'vereda_id',
        'x',
        'y',
        'tipo_usuario_id',
        'estado_usuario_id',
        'anotaciones',
        'codSello',
        'codMedidor',
        'fechaNacimiento',
        'novedad',
        
    ];
    public function vereda()
    {
        return $this->belongsTo(Vereda::class);
    }
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }

    public function estadoUsuario()
    {
        return $this->belongsTo(EstadoUsuario::class);
    }

    
}
