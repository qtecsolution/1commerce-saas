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
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                @include('customer.finance.components.card')
                            </div>
                            <div class="col-md-8 text-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-primary m-2" data-toggle="modal"
                                    data-target="#oneWalletModal">
                                    <i class="fas fa-cog"></i>
                                    Configure
                                </button>

                                <a href="{{ route('wallet.withdraw') }}" class="btn btn-sm btn-primary m-2">
                                    <i class="fas fa-cash-register"></i>
                                    Withdraw Cash
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="oneWalletModal" tabindex="-1" aria-labelledby="oneWalletModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('create.one.wallet') }}" method="POST" class="modal-content">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="oneWalletModalLabel">
                                        1Wallet
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="security_code">
                                                Security Code
                                                <sup class="text-danger">*</sup>
                                            </label>
                                            <input type="number" class="form-control" name="security_code" min="0"
                                                placeholder="Enter Security Code" value="{{ @$userWallet->security_code }}"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">
                                                Status
                                                <sup class="text-danger">*</sup>
                                            </label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ @$userWallet->status == 1 ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="0" {{ @$userWallet->status == 0 ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('page_js')
@endsection
