<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('login');
    }

    public function loginUser(Request $request){

          $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          ]);



          $credentials = $request->only('email', 'password');

          if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/home');
          }

          return response()->json(['errors' => ['loginfail' => ['Please check your email and password.']]], 401);
    }
}
