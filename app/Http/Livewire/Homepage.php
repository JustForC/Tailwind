<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Homepage extends Component
{
    public $content;

    public function render()
    {
        return view('livewire.homepage');
    }

    public function save()
    {
        Post::create([
            "content" => $this->content,
            "user_id" => Auth::user()->id,
        ]);
        $this->clearInput();
        $this->emit("refreshPost");
    }

    public function clearInput()
    {
        $this->content = null;
    }
}
