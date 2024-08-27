@php
    $title = 'My Wallet';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">{{ $title }}</h3>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />
                @if (is_null($userWallet))
                    @include('customer.finance.components.card-agrement-form')
                @else
                    <div class="col-md-12">
                        <div class="row align-items-top">
                            <div class="col-md-6">
                                @include('customer.finance.components.card')
                            </div>
                            <div class="col-md-6 mt-3">
                                <form action="{{ route('wallet.withdraw') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">
                                            Amount
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="number" class="form-control" name="amount" min="0"
                                            placeholder="Enter Amount to Withdraw" required>
                                        <small class="text-danger">
                                            {{ $chargePercent }}% charge applicable.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">
                                            Payment Method
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="exampleRadios1" value="Bank">
                                                    <label class="form-check-label pointer" for="exampleRadios1">
                                                        Bank
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="exampleRadios2" value="Bkash">
                                                    <label class="form-check-label pointer" for="exampleRadios2">
                                                        Bkash
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="exampleRadios3" value="Nagad">
                                                    <label class="form-check-label pointer" for="exampleRadios3">
                                                        Nagad
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="exampleRadios4" value="Rocket">
                                                    <label class="form-check-label pointer" for="exampleRadios4">
                                                        Rocket
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-none" id="account_number">
                                        <label for="account_number">
                                            Account Number
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="number" class="form-control" name="account_number" min="0"
                                            placeholder="Enter Account Number" required>
                                    </div>
                                    <div class="row" id="bank_fields">

                                    </div>
                                    <div class="d-none" id="submit_section">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="agree" name="agree"
                                                required>
                                            <label class="form-check-label" for="agree">
                                                I agree to the
                                                <a href="javascript:void(0)">
                                                    payment terms and condition
                                                </a>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <input type="number" class="form-control col-6" name="security_code"
                                                min="0" placeholder="Enter Security Code" required>
                                            <button type="submit" class="btn btn-primary col-4"
                                                id="submit_btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $(document).ready(function() {
            $("input[name='payment_method']").change(function() {
                // console.log($(this).val());
                if ($(this).val() == 'Bank') {
                    $('#bank_fields').html(
                        `<div class="form-group col-md-6">
                            <label for="bank_name">
                                Bank Name
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" class="form-control" name="bank_name"
                                placeholder="Enter Bank Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="branch_name">
                                Branch Name
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" class="form-control" name="branch_name"
                                placeholder="Enter Branch Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="district">
                                District
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" class="form-control" name="district"
                                placeholder="Enter District" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="routing_number">
                                Routing Number
                            </label>
                            <input type="number" class="form-control" name="routing_number"
                                min="0" placeholder="Enter Routing Number">
                        </div>`
                    );
                } else {
                    $('#bank_fields').html('');
                }
                $('#account_number').removeClass('d-none');
                $('#submit_section').removeClass('d-none');
            });
        });
    </script>
@endsection
