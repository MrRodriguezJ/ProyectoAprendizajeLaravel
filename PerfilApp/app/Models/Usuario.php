<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;

    protected $fillable = ['nombre', 'password_hash', 'rol_idrol'];

    public function rol(){
        return $thi->belongsTo(Rol::class, 'rol_idrol');
    }

    public function apps(){
        return $this->hasMany(InfApp::Class, 'usuario_idusuario');
    }
}
