<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'codDescarga',
        'codEstudiante',
        'codCopia',
        'fechaDescarga',
    ];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }

    public function copia(){
        return $this->belongsTo(Copia::class);
    }
}
