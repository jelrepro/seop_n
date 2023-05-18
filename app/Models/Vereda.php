<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vereda extends Model
{
    use HasFactory;
    protected $fillable = [
        'veredas',
        'sector',
        'contrato_id',
        'proyecto_id',
        'latitud',
        'longitud',
        
    ];
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'vereda_id', 'id');
    }
}
