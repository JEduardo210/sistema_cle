<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_users',
        'id_periodo',
        'modulo',
        'consmodulo',
        'vaucher'
    ];
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id','id_users');
    }
    public function modulo()
    {
     return $this->hasOne('App\Models\Modulo', 'id','id_modulo');
    }
    public function periodo()
    {
     return $this->hasMany('App\Models\Periodo', 'id','id_periodo');
    }
    public function va_modulo()
    {
     return $this->hasMany('App\Models\Va_Modulo', 'id','id_inscripcion');
    }
    public function va_pago()
    {
     return $this->hasMany('App\Models\Va_Pago', 'id','id_inscripcion');
    }
    public function vaucher()
    {
        return $this->belongsTo(Vaucher::class, 'id_vauchers');
    }
}
