<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function ratings()
    {
    	return $this->hasMany(Rating::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function prices()
    {
    	return $this->hasMany(ProductPrice::class);
    }

    public function orders()
    {
    	return $this->belongsToMany(Order::class, 'order_product')->withPivot('price', 'quantity')->withTimestamps();
    }
}
