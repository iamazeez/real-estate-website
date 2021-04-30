<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //render home page
    public function index(){
        return view('index');
    }

    //render about page
    public function about(){
        return view('about');
    }
}
