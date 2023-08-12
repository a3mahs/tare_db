<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categoria',
        'construccion',
        'estado',
        'direccion',
        'estrato',
        'barrio',
        'ciudad',
        'valor',
        'contactos',
        'propietario',
        'tipo_documento',
        'documento',
        'contactos_propietario',
        'direccion_propietario',
        'correo',
        'nota',
        'observacion'
    ];
}
