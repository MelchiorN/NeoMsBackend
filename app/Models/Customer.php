<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['seller_id','type','first_name','last_name','raison_sociale','tel','email'];
    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');

    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
