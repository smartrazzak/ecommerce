<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'category_name', 'category_slug', 'position', 'image' ];

    // protected $fillable = ['id', 'category_name'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'cate_id');
    }
}
