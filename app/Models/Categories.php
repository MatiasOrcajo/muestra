<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function subcategories() 
    {
        return $this->hasMany(Subcategories::class,'category_id')->with('products');
    }
}
