<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'codReserva',
        'estudiante_id',
        'copia_id',
        'fechaReserva',
        'isCancelado',
    ];

    public function copia(){
        return $this->belongsTo(Copia::class);
    }

    public function estudiante(){
        return $this->belongsTo(User::class);
    }

    public function prestamo(){
        return $this->hasOne(Prestamo::class);
    }
}
