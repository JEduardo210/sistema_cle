<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_users',
        'id_grupo',
        'cal_fin',
        'constancia'
    ];


    public function usuario(){
        return $this->hasOne('App\Models\User','id','id_users');
    }
}
