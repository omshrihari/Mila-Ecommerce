<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';

    protected $fillable = ['category_id','title','slug','image','status','sort','meta_title','meta_key','meta_des'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
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
