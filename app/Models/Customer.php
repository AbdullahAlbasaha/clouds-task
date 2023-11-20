<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class Customer extends Authenticatable
{
    use  HasFactory,Billable;

    protected $guarded = ['id'];


    protected $hidden = [
        'password',
    ];
    public function getActivationAttribute($val) {
        return  strtolower($val) ;
    }
    public function setActivationAttribute($val) {
        $this->attributes['activation'] = strtoupper($val) ;
    }
}
