<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $posts = Post::with("user")->take(5)->get();
        return view('livewire.sidebar')->with(["posts" => $posts]);
    }
}
