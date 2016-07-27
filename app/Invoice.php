<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'user_id', 'cliente_id',
    ];

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\User');
    }

    public function cliente()
    {
    	# code...
    	return $this->belongsTo('App\Cliente');
    }

    public function scopeLast($query)
    {
      # code...
      return $query->select('id')->orderBy('id','desc')->first();
    }


}
