<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
    	"name","product_id","specifications","price","description", "image",
    ];
}
