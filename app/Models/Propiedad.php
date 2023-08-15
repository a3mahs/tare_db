<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inmueble;
use App\Models\Documento;
use App\Models\Estado;

class Propiedad extends Model
{
    use HasFactory;

    protected $fillable = [
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

    public function Inmueble()
    {
      return $this->belongsTo(Inmueble::class, 'categoria');
    }

    public function Documento()
    {
      return $this->belongsTo(Documento::class, 'tipo_documento');
    }

    public function Estado()
    {
      return $this->belongsTo(Estado::class, 'estado_propiedad');
    }
}
