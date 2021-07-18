<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'subCat_name', 'category_slug', 'image', 'cate_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category','cate_id','id');
    }

    public function child_categories()
    {
        return $this->hasMany(ChildSubCategory::class, 'subcate_id', 'id');
    }

}
