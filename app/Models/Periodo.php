<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    protected $fillable = [
        'fech_ini',
        'fech_term',
    ];
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase','id','id_periodo');
}
public function inscripcion()
{
    return $this->belongsTo('App\Models\Inscripcion','id','id_periodo');
}
}
