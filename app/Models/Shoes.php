<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    protected $guarded = ['id'];

    function imagedetail()
    {
        return $this->hasMany(ImageDetail::class);
    }

    function transactiondetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
