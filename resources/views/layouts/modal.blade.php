<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Donate to Support My Tree Initiative</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                            @php
                                $tx_ref = uniqid();
                            @endphp
                            <img src="{{ asset('images/mtn_momo.jpg')}}" alt="MTN MOMO" style="max-width: 100px; height: 52px;" />
                            <img src="{{ asset('images/airtelmomo.png')}}" alt="AIRTEL MOMO" style="max-width: 100px" />
                            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 100%; margin: 0 auto;">
                                @csrf
                                <x-input class="block mt-1 w-full" type="hidden" name="public_key" value="FLWPUBK-39a44370d7d5c7953cc7e764d212cd03-X" />
                                <x-input class="block mt-1 w-full" type="hidden" name="tx_ref" value="{{ $tx_ref }}" />
                                <x-input class="block mt-1 w-full" type="hidden" name="currency" value="UGX" />
                                <x-input class="block mt-1 w-full" type="hidden" name="meta[token]" value="54" />
                                <x-input class="block mt-1 w-full" type="hidden" name="payment_options" value="mobilemoneyuganda" />
                                <x-input class="block mt-1 w-full" type="hidden" name="redirect_url" value="https://mytreeuganda.org/" />
                                <div>
                                    <x-label for="name" class="form-label" value="{{ __('Full Name') }}" /><br>
                                    <x-input id="name" class="form-control" type="text" name="customer[name]" required />
                                </div>

                                <div>
                                    <x-label for="email" class="form-label" value="{{ __('Your Email') }}" /><br>
                                    <x-input id="email" class="form-control" type="email" name="customer[email]" required />
                                </div>

                                <div class="block mt-1 w-full">
                                    <label for="amount" class="form-label">Select Amount:</label>
                                    <select name="amount" class="form-control" id="amount" required>
                                        <option value="">Select Amout</option>
                                        <option value="10000">10,000 ugx</option>
                                        <option value="20000">20,000 ugx</option>
                                        <option value="50000">50,000 ugx</option>
                                        <option value="100000">100,000 ugx</option>
                                        <option value="150000">150,000 ugx</option>
                                        <option value="200000">200,000 ugx</option>
                                        <option value="500000">500,000 ugx</option>
                                        <option value="700000">700,000 ugx</option>
                                        <option value="1000000">1,000,000 ugx</option>
                                        <option value="5000000">5,000,000 ugx</option>
                                    </select>
                                </div>

                                <div class="block mt-1 w-full">
                                    <label for="network" class="form-label">Select Network:</label>
                                    <select class="form-control" name="network" id="network">
                                        <option value="">Select Network</option>
                                        <option value="MTN">MTN</option>
                                        <option value="AIRTEL">AIRTEL</option>
                                    </select>
                                </div>

                                <div>
                                    <x-label for="phone_number" class="form-label" value="{{ __('Phone Number') }}" /><br>
                                    <x-input id="phone_number" class="form-control" type="text" name="customer[phone_number]" required />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4">
                                        {{ __('Checkout') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                            <img src="{{ asset('images/visamaster.png')}}" alt="CREDIT CARD" style="max-width: 100px; height: 52px;" />
                            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 100%; margin: 0 auto;">
                                @csrf
                                <x-input class="block mt-1 w-full" type="hidden" name="public_key" value="FLWPUBK-39a44370d7d5c7953cc7e764d212cd03-X" />
                                <x-input class="block mt-1 w-full" type="hidden" name="tx_ref" value="{{ $tx_ref }}" />
                                <x-input class="block mt-1 w-full" type="hidden" name="currency" value="USD" />
                                <x-input class="block mt-1 w-full" type="hidden" name="meta[token]" value="54" />
                                <x-input class="block mt-1 w-full" type="hidden" name="payment_options" value="card" />
                                <x-input class="block mt-1 w-full" type="hidden" name="redirect_url" value="https://mytreeuganda.org/" />
                                <div>
                                    <x-label for="name" class="form-label" value="{{ __('Full Name') }}" /><br>
                                    <x-input id="name" class="form-control" type="text" name="customer[name]" required />
                                </div>

                                <div>
                                    <x-label for="email" class="form-label" value="{{ __('Your Email') }}" /><br>
                                    <x-input id="email" class="form-control" type="email" name="customer[email]" required />
                                </div>

                                <div class="block mt-1 w-full">
                                    <label for="amount" class="form-label">Select Amount:</label>
                                    <select name="amount" class="form-control" id="amount" required>
                                        <option value="">Select Amout</option>
                                        <option value="4">4 USD</option>
                                        <option value="9">9 USD</option>
                                        <option value="14">14 USD</option>
                                        <option value="27">27 USD</option>
                                        <option value="40">40 USD</option>
                                        <option value="54">54 USD</option>
                                        <option value="133">133 USD</option>
                                        <option value="186">186 USD</option>
                                        <option value="266">266 USD</option>
                                        <option value="1329">1329 USD</option>
                                    </select>
                                </div>

                                <div>
                                    <x-label for="phone_number" class="form-label" value="{{ __('Phone Number') }}" /><br>
                                    <x-input id="phone_number" class="form-control" type="text" name="customer[phone_number]" required />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4">
                                        {{ __('Checkout') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--end of the modal--}}
