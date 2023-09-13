<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account Unavailable') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <h2 class="inline-flex items-center px-4 py-2 bg-white border border-indigo-700 rounded-md font-semibold text-xs text-indigo-700 uppercase hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                    {{__('Contact Admin, Your Account is Either deactivated or deleted.') }}
                </h2>
            </div>
        </div>
    </div>
</x-app-layout>