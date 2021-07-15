<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
    protected $table = ['siteconifgs'];
    
    protected $fillable = [
        'name', 'title','email', 'mobile', 'address', 'logo', 'ficon_logo'
    ];
}
