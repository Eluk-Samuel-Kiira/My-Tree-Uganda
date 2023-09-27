<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a New Friend') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('friend.update', $friend) }}" enctype="multipart/form-data" style="width: 60%; margin: 0 auto;">
                        @csrf
                        @method('PUT') 
                        <x-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value="{{(Auth::user()->id)}}" />
                        <div>
                            <x-label for="name" value="{{ __('Full Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $friend->name }}" required autofocus autocomplete="name" />
                        </div>

                        <div>
                            <x-label for="title" value="{{ __('Title') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $friend->title }}" required autofocus autocomplete="title" />
                        </div>

                        <div>
                            <x-label for="message" value="{{ __('Message') }}" />
                            <textarea id="editor" class="block mt-1 w-full" name="message" required autofocus autocomplete="message">{!! $friend->message !!}</textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>

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