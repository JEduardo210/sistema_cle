<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_clase',
        'id_alumnos',
        'id_est_externos',
        'descripcion'
    ];

    public function clase()
    {
     return $this->hasOne('App\Models\Clase', 'id','id_clase');
    }

    public function usuarios(){
        return $this->hasMany('App\Models\User','id','id_usuario');
    }
}
