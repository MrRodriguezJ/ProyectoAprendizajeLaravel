<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table ='catalogo';
    protected $primaryKey ='idcatalogo';

    protected $fillable = ['nomApp', 'funcionApp', 'tipoApp', 'areaNegocio', 'fecha_registro'];

    public function apps(){
        return $this->hasMany(InfApp::class, 'catalogo_idcatalogo');
    }
}
