<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   

    public function feature(){
        return view('feature');
    }

    public function contact(){
        return view('contact');
    }

    public function admindash(){
        return view('admindash');
    }

    
}
