<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = [
        'hora_ini',
        'hora_term',
    ];
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase','id_horario','id');
}
}
