<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Est_Externos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
        'alterno',
        'telefono',
        'status'
    ];
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id','id_users');
    }
    public function inscripcion()
    {
        return $this->hasMany('App\Models\Inscripcion', 'id','id_users');
    }
}
