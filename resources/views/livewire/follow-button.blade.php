<div>
    @if ($status == false)
    <button class = "text-black bg-white font-semibold h-8 w-20 rounded-full hover:opacity-90"
            wire:click="follow()">
            Follow
    </button>
    @endif
    @if ($status == true)
    <button class = "text-black bg-white font-semibold h-8 w-20 rounded-full hover:opacity-90"
            wire:click="unfollow()">
            Unfollow
    </button>
    @endif
</div>
