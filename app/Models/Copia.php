<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copia extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'codCopia',
        'paginas',
        'editorial',
        'fechaDePublicacion',
        'documento_id',
        'tipoDeCopia_id',
    ];

    public function documento(){
        return $this->belongsTo(Documento::class);
    }

    public function tipo(){
        return $this->belongsTo(TipoDeCopia::class);
    }
}
