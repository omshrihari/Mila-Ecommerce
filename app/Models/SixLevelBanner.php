<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SixLevelBanner extends Model
{
    use HasFactory;

    protected $fillable = [ 'banner1', 'banner1_link', 'banner2', 'banner2_link','banner3', 'banner3_link','banner4','banner4_link','banner5', 'banner5_link' ];
}
