<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthListingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
}
