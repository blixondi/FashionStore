<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function customer(){
        return $this->belongsTo(User::class, "users_id");
    }

    function products(){
        return $this->belongsToMany(Product::class)->withPivot(["quantity", "total_price"]);
    }
}