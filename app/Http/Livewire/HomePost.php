<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomePost extends Component
{
    protected $listeners = [
        "refreshPost" => '$refresh',
    ];

    public function render()
    {
        $posts = User::with("posts")->find(Auth::user()->id);
        return view('livewire.home-post')->with(["posts" => $posts]);
    }
}
