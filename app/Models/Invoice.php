<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=['order_id', 'type', 'issued_at', 'total_amount', 'status'];
    public function order(){
        $this ->belongTo(Order::class);

    }
    public function paymentSchedule(){
        $this->hasMany(paymentSchedule::class);

    }
}
