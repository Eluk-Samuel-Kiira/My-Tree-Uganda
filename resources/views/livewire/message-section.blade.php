<div wire:poll.750ms>
    <div class="py-12">
        <div class="max-w-7xl h-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <h2 id="chatTitle" class="inline-flex items-center
                            px-4 py-2 bg-white border border-indigo-700 rounded-md
                            font-semibold text-xs text-indigo-700 uppercase hover:bg-gray-50
                            focus:outline-none focus:ring-2 focus:ring-indigo-500
                            focus:ring-offset-2 disabled:opacity-25 transition
                            ease-in-out duration-150"
                    >

                    </h2>
                </div>
                <!-- Chat messages container -->
                <div class="mt-4 h-64 overflow-y-auto">
                    @if(count($chats) > 0)
                        <div class="flex flex-col">
                            @forelse($chats as $chat)
                                @php
                                    $now = now(); // Get the current timestamp
                                    $createdDate = $chat->created_at;
                                    $isSameWeek = $now->isSameWeek($createdDate);
                                @endphp
                                @if($chat->user_id == auth()->id())

                                    <div class="col-start-6 col-end-13 p-3 rounded-lg message-item" id="lastMessage">
                                        <div class="flex flex-col">
                                            <div class="flex items-start justify-start flex-row-reverse">
                                                <div
                                                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                                                >
                                                    @if ($chat->user->profile_photo_path)
                                                        <img src="{{ asset('storage/'.$chat->user->profile_photo_path) }}" alt="Profile Photo">
                                                    @else
                                                        <div class="text-xs font-bold flex items-center justify-center h-full">
                                                            @php
                                                                $nameParts = explode(' ', $chat->user->name);
                                                                $initials = '';
                                                                foreach ($nameParts as $part) {
                                                                    $initials .= strtoupper(substr($part, 0, 1));
                                                                }
                                                            @endphp
                                                            <span>{{ $initials }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="relative mr-3">
                                                    <div
                                                        class="text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                                                    >
                                                        <div>{{$chat->message}}</div>
                                                    </div>
                                                    <span class="text-xs text-gray-400 ml-3 self-end">{{$chat->created_at->format('H:i')}}</span>
                                                    <span class="text-xs text-gray-400 ml-3 self-end date" hidden="hidden">
                                                        @if ($isSameWeek)
                                                            {{ $createdDate->format('l') }} <!-- Display the day of the week -->
                                                        @else
                                                            {{ $createdDate->format('F d, Y') }} <!-- Display the full date -->
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else

                                    <div class="col-start-1 col-end-8 p-3 rounded-lg message-item" id="lastMessage">
                                        <div class="flex flex-row items-start">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                                            >
                                                @if ($chat->user->profile_photo_path)
                                                    <img src="{{ asset('storage/'.$chat->user->profile_photo_path) }}" alt="Profile Photo">
                                                @else
                                                    <div class="text-xs font-bold flex items-center justify-center h-full">
                                                        @php
                                                            $nameParts = explode(' ', $chat->user->name);
                                                            $initials = '';
                                                            foreach ($nameParts as $part) {
                                                                $initials .= strtoupper(substr($part, 0, 1));
                                                            }
                                                        @endphp
                                                        <span>{{ $initials }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="relative ml-3">
                                                <div
                                                    class="text-sm bg-white py-2 px-4 shadow rounded-xl"
                                                >
                                                    <div>{{$chat->message}}</div>
                                                </div>
                                                <span class="text-xs text-gray-400 ml-3">{{$chat->created_at->format('H:i')}}</span>
                                                <span class="text-xs text-gray-400 ml-3 date" hidden="hidden">
                                                    @if ($isSameWeek)
                                                        {{ $createdDate->format('l') }} <!-- Display the day of the week -->
                                                    @else
                                                        {{ $createdDate->format('F d, Y') }} <!-- Display the full date -->
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty

                            @endforelse
                        </div>
                    @endif
                </div>

                <!-- Chat input form -->
                <div class="m-4">
                    @livewire("chat-form")
                </div>
            </div>
        </div>
    </div>

</div>

