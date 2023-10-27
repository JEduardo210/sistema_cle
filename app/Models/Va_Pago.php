<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Va_Pago extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_inscripcion',
        'status',
        'nota'
    ];

    public function inscripcion()
    {
        return $this->hasMany('App\Models\Inscripcion', 'id','id_inscripcion');
    }
}
