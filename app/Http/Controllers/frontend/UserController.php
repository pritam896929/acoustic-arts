<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function testimonial()
    {
        return view('frontend.testimonial');
    }
    public function teams()
    {
        return view('frontend.teams');
    }
     public function products()
    {
        return view('frontend.product');
    }
    public function project()
    {
        return view('frontend.project');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
