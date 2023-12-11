<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionesZonasComunes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_zona',
        'fecha_reserva',
        'horas',
        'estado'
    ];

    protected $table = 'reservaciones_zonas_comunes';
}
