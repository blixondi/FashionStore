<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class,"categories_id");
    }

    public function type()
    {
        return $this->belongsTo(Type::class,"types_id");
    }

    function transactions(){
        return $this->belongsToMany(Transaction::class)->withPivot(["quantity", "total_price"]);
    }
}
