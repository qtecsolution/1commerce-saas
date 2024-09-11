@php
    $title = 'My Wallet';
@endphp
@extends('layouts.app')

@section('page_css')
    <style>
        td {
            padding: 8px !important;
        }
    </style>
@endsection

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                <h3 class="mb-0">{{ $title }}</h3>
                <p class="mb-0">
                    <a href="{{ route('wallet.withdraw.history') }}" class="btn  btn-sm btn-danger">
                        Back
                    </a>
                </p>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <div class="card">
                    <div class="card-body p-3">
                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Date</h5>
                            </div>
                            <div class="col-md-7">
                                <h5>: {{ date('d F, Y - h:i A', strtotime($withdraw->created_at)) }}</h5>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Amount</h5>
                            </div>
                            <div class="col-md-7">
                                <h5>: {{ number_format($withdraw->amount, 2) }}</h5>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Charge</h5>
                            </div>
                            <div class="col-md-7">
                                <h5>: {{ number_format($withdraw->charge, 2) }}</h5>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Payable</h5>
                            </div>
                            <div class="col-md-7">
                                <h5>: {{ number_format($withdraw->payable, 2) }}</h5>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Payment Method:</h5>
                            </div>
                            <div class="col-md-12">
                                <!-- Table for displaying payment method and details -->
                                <table class="table table-bordered">
                                    {{-- <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        <!-- Loop through and display details -->
                                        @php
                                            $details = json_decode($withdraw->details);
                                        @endphp
                                        @if ($details)
                                            @foreach ($details as $key => $detail)
                                                <tr>
                                                    <td>{{ ucwords(str_replace('_', ' ', $key)) }}</td>
                                                    <td>{{ $detail ?? 'N/A' }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">Status</h5>
                            </div>
                            <div class="col-md-7">
                                <h5>:
                                    {{ $withdraw->status == 1 ? 'Approved' : ($withdraw->status == 2 ? 'Rejected' : 'Pending') }}
                                </h5>
                            </div>
                        </div>

                        @if ($withdraw->status != 0)
                            <div class="row justify-content-between">
                                <div class="col-md-5">
                                    <h5 class="font-weight-bold">Confirmed On</h5>
                                </div>
                                <div class="col-md-7">
                                    <h5>:
                                        {{ date('d F, Y - h:i A', strtotime($withdraw->updated_at)) }}
                                    </h5>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-md-5">
                                    <h5 class="font-weight-bold">Confirmation Notes</h5>
                                </div>
                                <div class="col-md-7">
                                    <h5>:
                                        {{ $withdraw->payment_reference }}
                                    </h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
@endsection
