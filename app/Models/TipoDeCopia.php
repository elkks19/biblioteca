<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeCopia extends Model
{
    use HasFactory;

    protected $fillable = [
        'codTipoDeCopia',
        'nombre',
    ];

    public function copias(){
        return $this->hasMany(Copia::class);
    }
}
