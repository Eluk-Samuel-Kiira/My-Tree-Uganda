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

        @livewire("resource-component")
    </x-app-layout>
@endif
