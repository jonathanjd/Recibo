<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'cedula','telefono_uno','telefono_dos',
    ];


    public function scopeBuscar($query,$buscar)
    {
      # code...
      return $query->where('nombre','LIKE',"%$buscar%")->orWhere('apellido','LIKE',"%$buscar%")->orWhere('cedula','LIKE',"%$buscar%");
    }

}
