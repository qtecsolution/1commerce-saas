@php
    $title = 'Withdrawal Details';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                <h3 class="mb-0">{{ $title }}</h3>
                <p class="mb-0">
                    <a href="{{ route('withdrawal.index') }}" class="btn  btn-sm btn-primary">
                        Withdrawal List
                    </a>
                    @if ($withdraw->status == 0)
                        <a href="{{ route('withdrawal.approve_reject', $withdraw->id) }}" class="btn btn-sm btn-primary">
                            Approve/Reject
                        </a>
                    @endif
                </p>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <div class="card">
                    <div class="card-body p-3">
                        @include('admin.finance.withdraw.components.withdraw-body')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
@endsection
