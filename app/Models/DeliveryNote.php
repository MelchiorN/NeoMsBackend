<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    use HasFactory;
    protected $fillable =[
        'order_id','delivery_type','delivery_date', 'status'];

    public function order(){
        $this->belongsTo(Order::class);

    }
    
}
