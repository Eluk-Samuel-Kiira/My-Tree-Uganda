<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Partners') }}
        </h2>
    </x-slot>

    @livewire('partner-component')


</x-app-layout>
