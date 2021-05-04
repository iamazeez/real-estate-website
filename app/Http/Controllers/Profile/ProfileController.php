<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $listing = auth()->user()->listing;
        return view('dashboard',[
            'listing' => $listing
        ]);
    }

    public function showAllListing(Request $request){

    }

}
