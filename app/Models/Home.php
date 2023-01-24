<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = "homes";
    protected $fillable = ['title','text','content','image','phones','btn_link','btn_text','created_at','updated_at','active','added_by','updated_at'];
}
