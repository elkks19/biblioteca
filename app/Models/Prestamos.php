<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'codPrestamo',
        'codReserva',
        'codEncargado',
        'fechaPrestamo',
        'fechaDevolucion',
        'fechaLimite'
    ];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function encargado(){
        return $this->belongsTo(Encargado::class);
    }
}
