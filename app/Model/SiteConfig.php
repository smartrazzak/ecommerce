<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $fillable = [
        'name', 'title','email', 'mobile', 'address', 'logo', 'ficon_logo'
    ];
}
