<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribe To Access The Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <h2 class="inline-flex items-center px-4 py-2 bg-white border border-indigo-700 rounded-md font-semibold text-xs text-indigo-700 uppercase hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Payment Modes</h2>
                </div>
                <div class="flex justify-center">
                    <div class="px-4 py-4">
                        <div class="">
                            <a href="{{ route('make.payments', $options = 'mtn_momo') }}" class="inline-flex items-center px-4 py-4 border font-semibold text-xs text-indigo-700 uppercase">
                                <img src="{{ asset('images/mtn_momo.jpg')}}" alt="MTN MOMO" style="max-width: 100px; height: 52px;" />
                            </a>
                            <a href="{{ route('make.payments', $options = 'airtel_momo') }}" class="inline-flex items-center px-4 py-4 border font-semibold text-xs text-indigo-700 uppercase">
                                <img src="{{ asset('images/airtelmomo.png')}}" alt="AIRTEL MOMO" style="max-width: 100px" />
                            </a>
                            <a href="{{ route('make.payments', $options = 'credit_card') }}" class="inline-flex items-center px-4 py-4 border font-semibold text-xs text-indigo-700 uppercase">
                                <img src="{{ asset('images/visamaster.png')}}" alt="CREDIT CARD" style="max-width: 100px; height: 52px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>