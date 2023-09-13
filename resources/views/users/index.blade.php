@if(auth()->user()->status==0)
    <script>
        window.location.href = "{{route('payment.modes')}}";
    </script>
@elseif (auth()->user()->deleted==1)
    <script>
        window.location.href = "{{route('account.modes')}}";
    </script>
@elseif(auth()->user()->status==1)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('App Users') }}
            </h2>
        </x-slot>

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
                    <div class="inline-flex items-center px-4 py-2 font-semibold text-xs text-white uppercase transition ease-in-out">
                        <span class="bg-gray-800 rounded-md px-4 py-2">
                            {{$number_of_users}}{{ __(' users') }}
                        </span>
                    </div>
                    <div class="table-responsive" style="overflow-x: auto;">
                        <div class="block w-full px-3 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out max-w-screen-xl mx-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('Name')}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('Contact')}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('Emails')}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('Payment Status')}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('Actions')}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-300">
                                            <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                {{ $user->name }}
                                            </td>
                                            <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                {{ $user->phone }}
                                            </td>
                                            <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                {{ $user->email }}
                                            </td>
                                            <td class="px-4 py-0 font-medium text-white-900 white:text-white whitespace-nowrap">
                                                @if($user->status == 1)
                                                    <span class="bg-gray-200 rounded-md px-4 py-2">
                                                        {{ __('Paid') }}
                                                    </span>
                                                @elseif($user->status == 0)
                                                    <span class="bg-gray-500 rounded-md px-4 py-2">
                                                        {{ __('Unpaid') }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-4 py-0">
                                                <div class="flex items-center justify-start">
                                                    <x-danger-button class="ml-2">
                                                        <a href="{{ route('user.destroy', $user->id) }}">
                                                            {{__('Delete')}}
                                                        </a>
                                                    </x-danger-button>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td colspan="2"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ __('No Users found') }}
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endif