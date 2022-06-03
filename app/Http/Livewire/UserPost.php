<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class UserPost extends Component
{
    public $userID;

    public function mount($username)
    {
        $this->userID = $username;
    }

    public function render()
    {
        $posts = Post::with("user")->where("user_id", '=', $this->userID)->get();
        return view('livewire.user-post')->with(["posts" => $posts]);
    }
}
