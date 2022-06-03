<?php

namespace App\Http\Livewire;

use App\Models\Relation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FollowButton extends Component
{
    public $status = false;
    public $userID;

    public function mount($username)
    {
        if (Relation::where("follower_id", '=', Auth::user()->id)->where("followed_id", '=', $username)->exists()) {
            $this->status = true;
        }
        $this->userID = $username;
    }

    public function render()
    {
        return view('livewire.follow-button');
    }

    public function follow()
    {
        Relation::create([
            "follower_id" => Auth::user()->id,
            "followed_id" => $this->userID,
        ]);

        $this->status = true;
    }

    public function unfollow()
    {
        Relation::where("follower_id", '=', Auth::user()->id)->where("followed_id", '=', $this->userID)->delete();
        $this->status = false;
    }
}
