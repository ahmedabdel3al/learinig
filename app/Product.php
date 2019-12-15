<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['description', 'title', 'category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
