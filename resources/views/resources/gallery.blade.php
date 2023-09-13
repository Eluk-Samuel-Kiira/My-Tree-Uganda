<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <h2 class="inline-flex items-center px-4 py-2 bg-white border border-indigo-700 rounded-md font-semibold text-xs text-indigo-700 uppercase hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Our Gallery') }}
                    </h2>
                </div>
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
                            <a href="{{ route('gallery.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-xs text-white uppercase transition ease-in-out">
                                <span class="bg-gray-800 rounded-md px-4 py-2">
                                    {{ __('Add Gallery') }}
                                </span>
                            </a>
                            <div class="table-responsive" style="overflow-x: auto;">
                                <div class="block w-full px-3 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out max-w-screen-xl mx-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                    {{__('Title')}}
                                                </th>
                                                <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                    {{__('Description')}}
                                                </th>
                                                <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                    {{__('Image')}}
                                                </th>
                                                <th scope="col" class="px-6 py-3 lg:w-1/4">
                                                    {{__('Actions')}}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>