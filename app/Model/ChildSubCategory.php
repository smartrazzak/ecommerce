<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChildSubCategory extends Model
{
    protected $fillable = [
        'name', 'cate_id', 'subcate_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category','cate_id','id');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Model\SubCategory','subcate_id','id');
    }
}
