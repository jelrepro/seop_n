<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $fillable = [
        'estado_admin_id',
        'proyecto_id',
        'nombreContrato',
        'contratista',
        'descripcion',
        'nit',
        'sector',
        'k',
        'a',
        'i',
        'u',
        'estado_id',
        'objecto',
        'alcance',
        'costoContrato',
        'proyeccion',
        'anticipo',
        'amortizacion',
        'regarantia',
        'director',
        'telefono',
        'correo',
        'ordenCompra',
        'noSolped',
        'retefuente',
        'reteiva',
        'reteica',
        'banco',
        'tipoCuenta',
        'noCuenta',
    ];

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_user_id');
    }

    public function estadoAdmin()
    {
        return $this->belongsTo(EstadoAdmin::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
