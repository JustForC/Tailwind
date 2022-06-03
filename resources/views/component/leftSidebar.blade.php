{{-- Left Sidebar --}}
<div class="flex flex-col w-5/12 py-5 px-0 sticky left-0">
    <a class="px-3 py-2 mt-4 ml-32 mr-32 text-xl rounded-full @if(request()->is('home')) font-bold bg-neutral-700 @endif hover:bg-neutral-700" href="#">Home</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-28 text-xl rounded-full hover:bg-neutral-700" href="#">Discover</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-24 text-xl rounded-full hover:bg-neutral-700" href="#">Notifications</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-32 text-xl rounded-full hover:bg-neutral-700" href="#">Inbox</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-24 text-xl rounded-full hover:bg-neutral-700" href="#">Saved Posts</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-32 text-xl rounded-full hover:bg-neutral-700" href="#">Groups</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-32 text-xl rounded-full hover:bg-neutral-700" href="#">Profile</a>
    <a class="px-3 py-2 mt-4 ml-32 mr-32 text-xl rounded-full hover:bg-neutral-700" href="{{ route("logout") }}">Logout</a>
    <button class="px-3 py-2 mt-4 ml-32 mr-6 text-xl rounded-full h-12 px-5 font-bold text-sm bg-blue-500 rounded-full hover:opacity-90">Tweet</button>
    <a class="flex px-3 py-4 mt-4 ml-32 mr-2 mt-auto text-xl rounded-full hover:bg-neutral-700" href="#">
        <span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
        <div class="flex flex-col ml-2">
            <span class="mt-1 text-base font-bold leading-none">{{Auth::user()->name}}</span>
            <span class="mt-1 text-sm text-gray-300 opacity-25 leading-none">{{"@".Auth::user()->username}}</span>
        </div>
    </a>
</div>
{{-- End Left Sidebar --}}