<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //

    protected $fillable = [
        'invoice_id', 'maquina','modelo','descripcion','abono','costo','estado','entregado',
    ];

    public function scopeReparada($query)
    {
      # code...
      return $query->where('estado','=','Reparada');
    }

    public function scopeNoReparada($query)
    {
      # code...
      return $query->where('estado','=','No reparada');
    }

    public function scopeEntregado($query)
    {
      # code...
      return $query->where('entregado','=','Si');
    }

    public function scopeNoEntregado($query)
    {
      # code...
      return $query->where('entregado','=','No');
    }


    public function invoice()
    {
    	# code...
    	return $this->belongsTo('App\Invoice');
    }


    
}
