<div>
    <form wire:submit.prevent="sendMessage">
        <div class="flex">
            <input type="text" class="w-full border rounded-lg py-2 px-3 mx-4" wire:model="message" placeholder="Type your message..." />
            <input type="text" value="{{auth()->id()}}" hidden="hidden" wire:model="user_id">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white hover:bg-gray-300 focus:bg-gray-200 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Send</button>
        </div>
    </form>
</div>
