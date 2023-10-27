<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_modulo',
        'id_docente',
        'id_dia',
        'id_periodo',
        'id_horario'
    ];
    public function modulo()
    {
     return $this->hasOne('App\Models\Modulo', 'id','id_modulo');
    }
    public function docente()
    {
     return $this->hasOne('App\Models\Docente', 'id','id_docente');
    }
    public function dia()
    {
     return $this->hasOne('App\Models\Dia', 'id','id_dia');
    }
    public function periodo()
    {
     return $this->hasMany('App\Models\Periodo', 'id','id_periodo');
    }
    public function horario()
    {
     return $this->hasOne('App\Models\Horario', 'id','id_horario');
    }
    public function grupo(){
        return $this->belongsTo('App\Models\Grupo', 'id_clase','id');
    }

}
