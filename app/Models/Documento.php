<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'codDocumento',
        'nombre',
        'fechaSubida',
        'autor',
        'descripcion',
        'tipoDeDocumento_id',
    ];

    public function copias(){
        return $this->hasMany(Copia::class);
    }

    public function tipoDeDocumento(){
        return $this->belongsTo(TipoDeDocumento::class);
    }

    public function descargas(){
        return $this->hasManyThrough(Descarga::class, Copia::class);
    }

    public function categorias(){
        return $this->hasManyThrough(Categoria::class, DocumentoCategoria::class);
    }

    public function carrera(){
        return $this->hasManyThrough(Carrera::class, Categoria::class, 'codDocumento', 'codCategoria');
    }
}
