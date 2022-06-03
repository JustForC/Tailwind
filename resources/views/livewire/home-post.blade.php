<div>
    @foreach ($posts->posts as $p)
    <div class="flex w-full p-8 border-l border-r border-b border-gray-600">
        <span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
        <div class="flex flex-col flex-grow ml-4">
            <div class="flex">
                <span class="font-semibold">{{$posts->name}}</span>
                <span class="ml-1 text-gray-300 opacity-25">{{"@".$posts->username}} - {{date("h:i")}}</span>
            </div>
            <p class="mt-1">{{$p->content}}</p>
            <div class="flex items-center justify-center rounded-lg h-96 w-72 mt-4 mx-28 bg-gray-200">
                <span class="font-semibold text-gray-500">Image</span>
            </div>
            <div class="flex mt-4">
                <button class="text-sm font-semibold">Like</button>
                <button class="ml-2 text-sm font-semibold">Reply</button>
                <button class="ml-2 text-sm font-semibold">Share</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
