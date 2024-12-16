<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $guarded = ['id'];

    function transactiondetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
