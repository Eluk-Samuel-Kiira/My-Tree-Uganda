@if (auth()->user()->status==0)
    <script>
        window.location.href = "{{route('payment.modes')}}";
    </script>
@elseif (auth()->user()->deleted==1)
    <script>
        window.location.href = "{{route('account.modes')}}";
    </script>
@elseif (auth()->user()->status==1)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <h2 class="inline-flex items-center px-4 py-2 bg-white border border-indigo-700 rounded-md font-semibold text-xs text-indigo-700 uppercase hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Today's Chats</h2>
                </div>
                    <!-- Chat messages container -->
                    <div class="mt-4 h-64 overflow-y-auto">
                        <div class="flex flex-col">
                            <!-- Sample received message -->
                            <div class="mb-2">
                                <div class="flex justify-start">
                                    <div class="rounded-lg max-w-xl">
                                        <p class="block w-full pl-3 pr-4 py-2 border-l-4 border-gray-400 text-left text-base font-medium text-gray-700 bg-gray-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">This is a received message from another user. But we are soon to begin the chatting...</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sample sent message (your own messages) -->
                            <div class="mb-2">
                                <div class="flex justify-end">
                                    <div class="rounded-lg max-w-xm">
                                        <p class="block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-right text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">This is a message you sent. Yes and we all want to be involved</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Repeat the structure for more messages -->
                        </div>
                    </div>

                    <!-- Chat input form -->
                    <div class="mt-4">
                        <form wire:submit.prevent="sendMessage">
                            <div class="flex">
                                <input type="text" class="w-full border rounded-lg py-2 px-3" wire:model="message" placeholder="Type your message..." />
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white hover:bg-gray-300 focus:bg-gray-200 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endif
