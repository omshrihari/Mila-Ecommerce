<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebProfile extends Model
{
    use HasFactory;

    protected $table = 'web_profiles';

    protected $fillable = ['logo','footer_logo','app_name','mobile1','mobile2','email1','email2','address1','address2','fb','insta','yt','x','meta_title','meta_key','meta_des'];
}
