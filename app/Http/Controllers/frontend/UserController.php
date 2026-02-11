<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dbStroe(Request $request){
          $user = User::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'number'  => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
          ]);
    }

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
    public function awards(){
      return view('frontend.awards');
    }
        
    public function contact()
    {
        return view('frontend.contact');
    }
}
