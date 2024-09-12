<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [ 'title', 'sort', 'status', 'slug'];

    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }
    public function subsubcategories(): HasMany
    {
        return $this->hasMany(SubsubCategory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products');
    }
}
