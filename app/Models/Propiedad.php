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
        'contacto1',
        'contacto2',
        'propietario',
        'tipo_documento',
        'documento',
        'contacto1_propietario',
        'contacto2_propietario',
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

    protected $casts = [
      'nota' => 'array'
  ];


  public function setNotass($value)
  {
      $this->attributes['nota'] = json_encode($value);
  }

  public function getNotass($value)
  {
      return $this->attributes['nota'] = json_decode($value);
  }

}