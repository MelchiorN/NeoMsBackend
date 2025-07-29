<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSchedule extends Model
{
    use HasFactory;
    protected $fillable=['invoice_id', 'payment_amount', 'due_date', 'status' ];
    public function invoice(){
        $this->belongTo(Invoice::class);
    }
}
