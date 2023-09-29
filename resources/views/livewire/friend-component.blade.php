<div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="rounded-lg max-w-xm">
                                @if(session('status'))
                                    <p class="block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
                                        {{ session('status') }}
                                    </p>
                                @endif
                            </div>
                            <div class="flex justify-between">
                                <div>
                                    <a href="{{ route('friend.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-xs text-white uppercase transition ease-in-out">
                                        <span class="bg-gray-800 rounded-md px-4 py-2">
                                            {{ __('Add Friend') }}
                                        </span>
                                    </a>
                                </div>
                                <div class="mr-4">
                                    <input wire:model="search" placeholder="Search friend..." class="bg-gray-100 my-2 border-1 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                            </div>

                            <div class="table-responsive" style="overflow-x: auto;">
                                <div class="block w-full px-3 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out max-w-screen-xl mx-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('ID')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Name')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Image')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Title')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Message')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Author')}}
                                            </th>
                                            <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                {{__('Actions')}}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($friends as $friend)
                                            <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-300">
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    {{ $friend->id }}
                                                </td>
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    {{ $friend->name }}
                                                </td>
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    <img src="{{ asset('storage/Friends')}}/{{$friend->image }}" style="max-width: 100px" />
                                                </td>
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    {{ $friend->title }}
                                                </td>
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    {!! $friend->message !!}
                                                </td>
                                                <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                    {{ $friend->poster->name }}
                                                </td>
                                                <td class="px-4 py-2">
                                                    <div class="flex items-center justify-start space-x-2">
                                                        @if(auth()->user()->role == 'admin')
                                                            <div class="flex-1">
                                                                <a href="{{ route('friend.edit', $friend) }}" class="font-medium text-indigo-600 indigo:text-indigo-500 hover:underline">
                                                                        <span class="bg-gray-800 rounded-md px-4 py-2">
                                                                            {{ __('Edit') }}
                                                                        </span>
                                                                </a>
                                                            </div>
                                                            <div class="flex-1">
                                                                <x-danger-button class="ml-2">
                                                                    <a href="{{ route('friend.show', $friend) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                        {{__('Delete')}}
                                                                    </a>
                                                                </x-danger-button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td colspan="2"
                                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                    {{ __('No Gallery found') }}
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>

                                    <div class="my-5">{{$friends->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
