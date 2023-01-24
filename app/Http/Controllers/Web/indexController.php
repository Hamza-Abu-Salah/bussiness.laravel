<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Content;
use App\Models\Home;
use App\Models\Services;
use App\Models\Settings;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data_home = Home::select("*")->orderby('id','DESC')->get();
        $data_about = About::select("*")->orderby('id','DESC')->get();
        $data_service = Services::select("*")->orderby('id','DESC')->get();
        $data_blog = Blog::select("*")->orderby('id','DESC')->get();
        $data_setting = Settings::select("*")->orderby('id','DESC')->get();


        return view('web.home.index',compact('data_home','data_about','data_service','data_blog','data_setting'));
    }



}
