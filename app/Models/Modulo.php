<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase','id_modulo','id');
    }
    public function inscripcion()
    {
        return $this->belongsTo('App\Models\Inscripcion','id_modulo','id');
    }
}
