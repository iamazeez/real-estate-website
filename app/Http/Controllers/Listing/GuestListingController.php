<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestListingController extends Controller
{
    public function index(){
        return view('listings');
    }
}
