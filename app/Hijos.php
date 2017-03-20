<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hijos extends Authenticatable
{
    //proteccion de la tabla
    use Notifiable;
    protected $table ='hijos';
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'imei', 'image', 'estado', 'idusers'
    ];

}
