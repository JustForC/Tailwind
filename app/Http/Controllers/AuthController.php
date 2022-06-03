<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view("authentication.login");
    }

    public function registerPage()
    {
        return view("authentication.register");
    }

    public function forgotPage()
    {
        return view("authentication.forgetPassword");
    }

    public function login(Request $request)
    {
        $message = [
            "username.required" => "Please input your username!",
            "password.required" => "Please input your password!",
        ];

        $validator = Validator::make($request->all(), [
            "username" => ("required"),
            "password" => ("required"),
        ], $message);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = [
            "username" => $request->username,
            "password" => $request->password,
        ];

        if (Auth::guard()->attempt($credentials)) {
            return redirect()->route("index");
        }

        return redirect()->back();
    }

    public function register(Request $request)
    {
        $message = [
            "required" => "This field can not be empty!",
            "email.unique" => "This email already used!",
            "username.unique" => "Username already exist!",
            "confirmed" => "Password confirmation does not match!",
            "password.min" => "Password must be 8 characters or more!",
            "username.min" => "Username must be 5 characters or more!",
        ];

        $validator = Validator::make($request->all(), [
            "firstName" => ("required"),
            "lastName" => ("required"),
            "email" => ("required|unique:users"),
            "username" => ("required|unique:users|min:5"),
            "password" => ("required|min:8|confirmed"),
        ], $message);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "name" => $request->firstName . " " . $request->lastName,
        ]);

        return redirect()->route("home");

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }

    public function forgot(Request $request)
    {
        dd($request->all());
    }

    public function test()
    {
        $posts = Post::where("user_id", '=', 2)->with("user")->get();
        dd($posts);
    }
}
