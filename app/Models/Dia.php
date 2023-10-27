<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
    ];
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase','id_dia','id');
}
}
