<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New Resource') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('resource.store') }}" enctype="multipart/form-data" style="width: 60%; margin: 0 auto;">
                        @csrf
                        <x-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value="{{(Auth::user()->id)}}" />
                        <div>
                            <x-label for="filename" value="{{ __('Filename') }}" />
                            <x-input id="filename" class="block mt-1 w-full" type="text" name="filename" :value="old('filename')" required autofocus autocomplete="filename" />
                        </div>

                        <div class="mt-4">
                            <x-label for="file" value="{{ __('Upload File') }}" />
                            <x-input id="file" type="file"  name="file" class="mt-1 block w-full" wire:model.defer="state.file"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>