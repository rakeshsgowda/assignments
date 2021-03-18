<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';
    const UPDATED_AT = 'updated_on';
    public function address()
    {
        return $this->hasOne(Address::class,'user_id','id');
    }  
}
