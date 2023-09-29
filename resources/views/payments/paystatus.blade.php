<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Status') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    @if(request()->query('status')== 'successful')
                        <div class="flex justify-center px-3 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">
                            {{ __('Your Payment is succeessful click below to continue') }}
                        </div>
                        <form method="POST" action="{{ route('verify.payment') }}" style="width: 60%; margin: 0 auto;">
                            @csrf
                            <x-input class="block mt-1 w-full" type="text" name="status" value="{{ request()->query('status') }}" />
                            <x-input class="block mt-1 w-full" type="text" name="tx_ref" value="{{ request()->query('tx_ref') }}" />
                            <x-input class="block mt-1 w-full" type="text" name="user_id" value="{{ auth()->user()->id }}" />

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Dashboard') }}
                                </x-button>
                            </div>
                        </form>
                    @elseif(request()->query('status')== 'cancelled')
                        <script>
                            window.location.href = "{{route('payment.modes')}}";
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

