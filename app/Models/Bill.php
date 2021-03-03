<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'receiver',
        'total',
        'payment_status',
    ];

    public function services(){
        return $this->hasMany(Service::class,'bill_id','id');
    }
}
