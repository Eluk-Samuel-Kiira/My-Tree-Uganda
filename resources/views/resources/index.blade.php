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
                {{ __('Resources') }}
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
                    <a href="{{ route('resource.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-xs text-white uppercase transition ease-in-out">
                        <span class="bg-gray-800 rounded-md px-4 py-2">
                            {{ __('Add Resource') }}
                        </span>
                    </a>
                    <div class="table-responsive" style="overflow-x: auto;">
                        <div class="block w-full px-3 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out max-w-screen-xl mx-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 lg:w-1/4">
                                            {{__('FileName')}}
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
                                    @forelse ($resources as $resource)
                                        <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-300">
                                            <td class="px-4 py-0 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                {{ $resource->file_descript }}
                                            </td>
                                            <td class="px-4 py-2 font-medium text-gray-900 white:text-white whitespace-nowrap">
                                                {{ $resource->authors->name }}
                                            </td>
                                            <td class="px-4 py-2">
                                                <div class="flex items-center justify-start">
                                                    @php
                                                        $filePath = storage_path('app/public/ResourceFiles/'.'/');
                                                        $files = glob($filePath . '*.*');
                                                    @endphp  
                                                    @foreach($files as $file)
                                                        @php
                                                            $fileName = basename($file);
                                                            $fileNameWithoutExt = pathinfo($fileName, PATHINFO_FILENAME);
                                                        @endphp
                                                        @if($fileName == $resource->filename)
                                                            <a href="{{ asset('storage/ResourceFiles/'.$fileName) }}" class="font-medium text-indigo-600 indigo:text-indigo-500 hover:underline" download>
                                                                <span class="bg-gray-800 rounded-md px-4 py-2">
                                                                    {{ __('Download') }}
                                                                </span>
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                    @if(auth()->user()->role == 'admin')
                                                        <x-danger-button class="ml-2">
                                                            <a href="{{ route('resource.edit', $resource) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                {{__('Delete')}}
                                                            </a>
                                                        </x-danger-button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-300">
                                            <td colspan="2"
                                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ __('No Resource found') }}
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