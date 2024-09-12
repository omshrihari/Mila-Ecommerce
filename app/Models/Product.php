<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['has_variation','name','slug','image','images','mrp','price','intro','description','gst','sku','hsn','stock_status','status','sort','meta_title','meta_key','meta_des'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'category_products');
    }
    public function subsubcategories()
    {
        return $this->belongsToMany(SubsubCategory::class, 'category_products');
    }
}
