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

    public function details()
    {
        # code...
        return $this->hasMany('App\Detail');
    }

    public function scopeBuscar($query,$buscar)
    {
      # code...
      return $query->where('id','LIKE',"%$buscar%");
    }

    public function scopeLast($query)
    {
      # code...
      $last = $query->select('id')->orderBy('id','desc')->first();

        if ($last == null) {
          # code...
            $last = 1;
            return $last;
        }else{
            return (int)$last->id + 1;
        }
      
    }


}
