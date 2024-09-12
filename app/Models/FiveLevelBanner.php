<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiveLevelBanner extends Model
{
    use HasFactory;

    protected $fillable = [ 'banner1', 'banner1_link', 'banner2', 'banner2_link' ];
}
