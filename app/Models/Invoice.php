<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model{
    
    protected $table='invoice';  
    const UPDATED_AT = 'updated_on';
    
    public function items()
    {
        return $this->hasOne(Items::class,'invoice_id','invoice_no');
    }  
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }  
    
}