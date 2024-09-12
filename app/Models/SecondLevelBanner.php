<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondLevelBanner extends Model
{
    use HasFactory;

    public $table = 'second_level_banners';

    public $fillable = ['main_banner', 'small_banner1', 'small_banner2', 'small_banner3', 'small_banner4','main_banner_link','small_banner1_link','small_banner2_link','small_banner3_link','small_banner4_link'];
}
