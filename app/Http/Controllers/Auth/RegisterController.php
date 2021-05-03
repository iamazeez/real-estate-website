<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $fileName = '';


        if ($request->file('profile_image')) {
            $imagePath = $request->file('profile_image');
            $fileName = time().rand(1,100) . '.' . $imagePath->extension();
            $imagePath->move(public_path('images/realtors'), $fileName);
        }else{
            $fileName = 'dummy.png';
        }


        $data = User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_image' => $fileName,
        ]);

          //Login User
          $credentials = $request->only('email', 'password');
          if(Auth::attempt($credentials)){
            $request->session()->regenerate();
          }

        return response()->json($data);
    }

}
