<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function products()
    {
    	return $this->belongsToMany(ProductPrice::class);
    }
}
