<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable = ['logo_header','title_service','text_service','title_blogs','text_blogs','logo_footer','btn_Services','btn_blogs','phones','email','address','date','hour','from_the_hour','to_the_hour','created_at','address','updated_at','active','added_by','updated_at'];
}
