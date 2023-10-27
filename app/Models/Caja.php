<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id_users',
        'descripcion',

    ];
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id','id_users');
    }
}
