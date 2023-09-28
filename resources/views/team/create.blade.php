<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a New Team Member') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data" style="width: 60%; margin: 0 auto;">
                        @csrf
                        <div>
                            <x-label for="name" value="{{ __('Full Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div>
                            <x-label for="title" value="{{ __('Title') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        </div>

                        <div class="mt-4">
                            <x-label for="image" value="{{ __('Upload Image') }}" />
                            <img id="image_frame" alt="" width="100" height="100" />
                            <x-input class="form-control" id="image" type="file" name="image"
                                     onchange="document.getElementById('image_frame').src = window.URL.createObjectURL(this.files[0])"/>
                        </div>

                        <div>
                            <x-label for="facebook" value="{{ __('Facebook Profile') }}" />
                            <x-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" :value="old('facebook')" autofocus autocomplete="facebook" />
                        </div>
                        <div>
                            <x-label for="twitter" value="{{ __('Twitter Profile') }}" />
                            <x-input id="twitter" class="block mt-1 w-full" type="text" name="twitter" :value="old('twitter')" autofocus autocomplete="twitter" />
                        </div>
                        <div>
                            <x-label for="instagram" value="{{ __('Instagram') }}" />
                            <x-input id="instagram" class="block mt-1 w-full" type="text" name="instagram" :value="old('instagram')" autofocus autocomplete="instagram" />
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
