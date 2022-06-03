<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function home()
    {
        return view("user.home.home");
    }

    public function user($username)
    {
        $user = User::where("username", "=", $username)->first();

        return view("user.user.user")->with(["user" => $user]);
    }
}
