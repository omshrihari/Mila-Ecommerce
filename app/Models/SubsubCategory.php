<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubsubCategory extends Model
{
    use HasFactory;

    protected $table = 'subsub_categories';

    protected $fillable = ['category_id', 'subcategory_id', 'title', 'slug', 'image', 'status', 'sort', 'meta_title', 'meta_key', 'meta_des'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products');
    }
}
