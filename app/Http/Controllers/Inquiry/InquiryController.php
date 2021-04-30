<?php

namespace App\Http\Controllers\Inquiry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
}
