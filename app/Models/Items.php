<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Items extends Model{
    
    protected $table='items';
    const UPDATED_AT = 'updated_on';
}