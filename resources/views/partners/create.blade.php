<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a New Partner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('partner.store') }}" enctype="multipart/form-data" style="width: 60%; margin: 0 auto;">
                        @csrf
                        <div>
                            <x-label for="name" value="{{ __('Name of Partner') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="category" value="{{ __('Category') }}" />
                            <select id="category" class="block mt-1 w-full" name="category" :value="old('name')" required autofocus autocomplete="category">
                                <option value="Banks">
                                    Banks
                                </option>
                                <option value="Hotels">
                                    Hotels
                                </option>
                                <option value="Law Firms">
                                    Law Firms
                                </option>
                                <option value="Insurance Companies">
                                    Insurance Companies
                                </option>
                                <option value="Hospitals">
                                    Hospitals
                                </option>
                                <option value="Golf Clubs">
                                    Golf Clubs
                                </option>
                                <option value="Media Companies">
                                    Media Companies
                                </option>
                                <option value="International Agencies">
                                    International Agencies
                                </option>
                                <option value="Government Agencies">
                                    Government Agencies
                                </option>
                            </select>
                        </div>

                        <div>
                            <x-label for="message" value="{{ __('Message') }}" />
                            <textarea id="message" class="block mt-1 w-full" name="message"></textarea>
                        </div>

                        <div class="mt-4">
                            <x-label for="image" value="{{ __('Upload Image') }}" />
                            <img id="image_frame" alt="" width="100" height="100" />
                            <x-input class="form-control" id="image" type="file" name="image"
                                     onchange="document.getElementById('image_frame').src = window.URL.createObjectURL(this.files[0])"/>
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
