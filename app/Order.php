<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    protected $table = 'orders';

    public function doctor()
    {
       return $this->belongsTo('App\User','doctor_id');
    }
    
    public function patient()
    {
       return $this->belongsTo('App\User','patient_id');
    }
}
