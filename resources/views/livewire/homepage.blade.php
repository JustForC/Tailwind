<div>
    <div class="flex flex-col w-full border-l border-r border-b border-gray-600">
        <h1 class="text-xl px-8 pt-4 font-semibold">Home</h1>
        <div class="flex w-full px-8 py-4 border-b border-gray-600">
            <span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
                <textarea   class="p-3 bg-transparent border-b border-gray-600 rounded-sm"
                            name=""
                            id=""
                            rows="3"
                            placeholder="What's happening?"
                            wire:model="content">
                </textarea>
                <div class="flex justify-between mt-2">
                    <button class="flex items-center h-8 px-3 text-xs rounded-sm hover:bg-gray-200">Attach</button>
                    <button
                        class="flex items-center h-10 w-20 px-5 text-sm font-bold rounded-full bg-blue-500 opacity-75 hover:opacity-100"
                        wire:click="save()">
                        Tweet
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
