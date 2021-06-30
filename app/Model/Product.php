<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';

    protected $guarded = [];

/*     protected $fillable = [
        'eng_name', 'bang_name', 'cate_id', 'subcate_id', 'brand_id', 'size', 'ímage', 'description', 'price', 'discount', 'pro_code', 'quantity'
    ];
 */
    public function category()
    {
        return $this->belongsTo('App\Model\Category','cate_id','id');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Model\SubCategory','subcate_id','id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Model\Brand','brand_id','id');
    }

}
