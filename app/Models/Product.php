<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['product_name','product_price','product_quantity','product_description','product_image','category_id'];

    public function category(){
    	return $this->belongsTo(category::class,'category_id');
    }
}
