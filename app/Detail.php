<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //

    protected $fillable = [
        'invoice_id', 'maquina','modelo','descripcion','abono','costo','estado','entregado',
    ];


    public function invoice()
    {
    	# code...
    	return $this->belongsTo('App\Invoice');
    }
}
