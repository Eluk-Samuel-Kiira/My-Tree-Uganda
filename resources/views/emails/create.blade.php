<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Write News Letter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('email.send') }}" enctype="multipart/form-data" style="width: 60%; margin: 0 auto;">
                        @csrf
                        <x-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value="{{(Auth::user()->id)}}" />
                        <div>
                            <x-label for="subject" value="{{ __('Subject') }}" />
                            <x-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autofocus autocomplete="subject" />
                        </div>

                        <div>
                            <x-label for="message" value="{{ __('Message') }}" />
                            <textarea id="message" class="block mt-1 w-full" name="message"></textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#message' ) )
                                .catch( error => {
                                    console.error( error );
                                });
                        </script>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Send Mail') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>