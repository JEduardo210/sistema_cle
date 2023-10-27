<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
        'nivel',
        'telefono',
        'alterno'
    ];
    public function usuario()
    {
        return$this->hasOne('App\Models\User','id','id_users');
    }
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase','id_docente','id');
} 
}
