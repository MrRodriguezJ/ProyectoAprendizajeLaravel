<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfApp extends Model
{
    protected $table = 'infApp';
    protected $primatyKey = 'idinfApp';
    public $timestamps = false;

    protected $fillable =['version','ultActualizacion','desarrollador','proveedor','estado','tipo','idioma','almacenamiento','enlaceManual','usuario_idusuario','catalogo_idcatalogo'];
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usuario_idusuario');
    }
    public function catalogo(){
        return $this->belongsTo(Catalogo::class, 'catalogo_idcatalogo');
    }
}
