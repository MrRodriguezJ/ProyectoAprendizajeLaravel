<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    public $timestamps = false; 

    protected $fillable = ['nomRol', 'estadoRol'];

    public function usuarios(){
        return $this->hasMany(Usuario::class, 'rol_idrol');
    }
}
