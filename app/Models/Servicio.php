<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    // Definir los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'image',
    ];

    // Si el campo 'image' puede ser nulo, asegúrate de que sea cast en la base de datos
    protected $casts = [
        'precio' => 'decimal:2',
    ];
}
