<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Complete Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @php
                    $tx_ref = uniqid();
                    $user_id = Auth::user()->id;
                    // Extract the payment amount from the form
                    $amount = 1000000; // Default amount, you can customize this

                    if (request()->has('amount')) {
                        $amount = request('amount');
                    }

                    // Create a new record in the transactions table
                    \App\Models\Transaction::create([
                        'user_id' => $user_id,
                        'tx_ref' => $tx_ref,
                        'amount' => $amount,
                    ]);
                @endphp
                @if($pay_option == 'mtn_momo')
                    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                        <img src="{{ asset('images/mtn_momo.jpg')}}" alt="MTN MOMO" style="max-width: 100px; height: 52px;" />
                        <div class="flex justify-center px-3 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">
                            {{ __('Checkout to complete payment of UGX 1,000,000') }}
                        </div>
                        <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 60%; margin: 0 auto;">
                            @csrf
                            <x-input class="block mt-1 w-full" type="text" name="public_key" value="FLWPUBK_TEST-54f16ec2c53bdffdb05c7452003a717b-X" />
                            <x-input class="block mt-1 w-full" type="text" name="tx_ref" value="{{ $tx_ref }}" />
                            <x-input class="block mt-1 w-full" type="text" name="currency" value="UGX" />
                            <x-input class="block mt-1 w-full" type="text" name="amount" value="10000" />
                            <x-input class="block mt-1 w-full" type="text" name="meta[token]" value="54" />
                            <x-input class="block mt-1 w-full" type="text" name="payment_options" value="mobilemoneyuganda" />
                            <x-input class="block mt-1 w-full" type="text" name="redirect_url" value="https://google.com" />
                            <div>
                                <x-label for="name" value="{{ __('Full Name') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="customer[name]" value="{{(Auth::user()->name)}}" required />
                            </div>

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="customer[email]" value="{{(Auth::user()->email)}}" required />
                            </div>

                            <div>
                                <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="customer[phone_number]" value="{{(Auth::user()->phone)}}" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Checkout') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                @elseif($pay_option == 'airtel_momo')
                    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                        <img src="{{ asset('images/airtelmomo.png')}}" alt="AIRTEL MOMO" style="max-width: 100px" />
                        <div class="flex justify-center px-3 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">
                            {{ __('Checkout to complete payment of UGX 1,000,000') }}
                        </div>
                        <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 60%; margin: 0 auto;">
                            @csrf
                            <x-input class="block mt-1 w-full" type="text" name="public_key" value="FLWPUBK_TEST-54f16ec2c53bdffdb05c7452003a717b-X" />
                            <x-input class="block mt-1 w-full" type="text" name="tx_ref" value="{{ $tx_ref }}" />
                            <x-input class="block mt-1 w-full" type="text" name="currency" value="UGX" />
                            <x-input class="block mt-1 w-full" type="text" name="amount" value="10000" />
                            <x-input class="block mt-1 w-full" type="text" name="meta[token]" value="54" />
                            <x-input class="block mt-1 w-full" type="text" name="payment_options" value="mobilemoneyuganda" />
                            <x-input class="block mt-1 w-full" type="text" name="redirect_url" value="https://google.com" />
                            <div>
                                <x-label for="name" value="{{ __('Full Name') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="customer[name]" value="{{(Auth::user()->name)}}" required />
                            </div>

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="customer[email]" value="{{(Auth::user()->email)}}" required />
                            </div>

                            <div>
                                <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="customer[phone_number]" value="{{(Auth::user()->phone)}}" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Checkout') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                @elseif($pay_option == 'credit_card')
                    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                        <img src="{{ asset('images/visamaster.png')}}" alt="CREDIT CARD" style="max-width: 100px; height: 52px;" />
                        <div class="flex justify-center px-3 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">
                            {{ __('Select Memembership Level') }}
                        </div>
                        <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 60%; margin: 0 auto;">
                            @csrf
                            <x-input class="block mt-1 w-full" type="text" name="public_key" value="FLWPUBK_TEST-54f16ec2c53bdffdb05c7452003a717b-X" />
                            <x-input class="block mt-1 w-full" type="text" name="tx_ref" value="{{ $tx_ref }}" />
                            <x-input class="block mt-1 w-full" type="text" name="currency" value="UGX" />
                            <x-input class="block mt-1 w-full" type="text" name="meta[token]" value="54" />
                            <x-input class="block mt-1 w-full" type="text" name="payment_options" value="mobilemoneyuganda" />
                            <x-input class="block mt-1 w-full" type="text" name="redirect_url" value="https://google.com" />

                            <div>
                                <x-label for="amount" value="{{ __('Select Amount') }}" />
                                <div>
                                    <x-input id="amount1" type="checkbox" name="amount" value="50000" />
                                    <label for="amount1">50,000 UGX/year for Basic(Friends of My Tree Initiative)</label><br>

                                    <x-input id="amount1" type="checkbox" name="amount" value="1000000" />
                                    <label for="amount1">1,000,000 UGX/year for Basic(Friends of My Tree Initiative)</label><br>

                                    <x-input id="amount2" type="checkbox" name="amount" value="10000000" />
                                    <label for="amount2">10,000,000 UGX/year  for Bronze</label><br>

                                    <x-input id="amount3" type="checkbox" name="amount" value="50000000" />
                                    <label for="amount3">50,000,000 UGX/year  for Silver</label><br>

                                    <x-input id="amount4" type="checkbox" name="amount" value="100000000" />
                                    <label for="amount4">100,000,000 UGX/year  for Gold</label><br>

                                    <x-input id="amount5" type="checkbox" name="amount" value="200000000" />
                                    <label for="amount5">200,000,000 UGX/year  for Platinum</label><br>
                                </div>
                            </div>

                            <div>
                                <x-label for="name" value="{{ __('Full Name') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="customer[name]" value="{{(Auth::user()->name)}}" required />
                            </div>

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="customer[email]" value="{{(Auth::user()->email)}}" required />
                            </div>

                            <div>
                                <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="customer[phone_number]" value="{{(Auth::user()->phone)}}" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Checkout') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>