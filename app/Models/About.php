<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = "abouts";
    protected $fillable = ['title','content1','content2','content3','image','created_at','updated_at','active','added_by','updated_at'];
}
