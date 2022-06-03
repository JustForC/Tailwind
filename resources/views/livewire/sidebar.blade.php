<div>
    @foreach ($posts as $post)
    <div class="flex w-full py-4 w-80 border-gray-300">
        <span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
        <div class="flex flex-col flex-grow ml-2">
            <div class="flex text-sm">
                <span class="font-semibold">{{$post->user->name}}</span>
                <span class="ml-1 text-gray-300 opacity-25">{{"@".$post->user->username}}</span>
            </div>
            <p class="mt-1 text-sm">{{$post->content}}</p>
        </div>
    </div>
    @endforeach
</div>
