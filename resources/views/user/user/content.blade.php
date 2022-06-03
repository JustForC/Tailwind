{{-- Content --}}
<div class="flex flex-col w-9/12">
    <div class="flex flex-col w-full border-l border-r border-b border-gray-600">
        <h1 class="relative text-xl px-8 pt-4 pb-4 font-semibold">{{$user->name}}</h1>
        <div class="flex w-full h-56 bg-gray-500"></div>
        <span class=" absolute ml-8 mt-52 flex-shrink-0 w-32 h-32 bg-gray-400 rounded-full border border-black border-4"></span>
        <div class="flex flex-row-reverse items-center w-full h-20 px-4">
            <livewire:follow-button :username="$user->id">
            </livewire:follow-button>
        </div>
        <div class="flex flex-col border-b border-gray-600 w-full h-24 px-4">
            <h1 class="font-bold text-xl">{{$user->name}}</h1>
            <h1 class="text-base text-gray-300 opacity-25 mt-1">{{"@".$user->username}}</h1>
        </div>
        <livewire:user-post :username="$user->id">
        </livewire:user-post>
    </div>
</div>
{{-- End Content --}}