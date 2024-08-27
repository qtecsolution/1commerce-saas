@php
    $title = 'Withdrawal History';
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

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date/Time</th>
                                <th>Amount</th>
                                <th>Charge</th>
                                <th>Payable</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($withdraws as $key => $withdraw)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{ date('d F, Y', strtotime($withdraw->created_at)) }}
                                        <br>
                                        {{ date('h:i A', strtotime($withdraw->created_at)) }}
                                    </td>
                                    <td>{{ number_format($withdraw->amount, 2) }}</td>
                                    <td>{{ number_format($withdraw->charge, 2) }}</td>
                                    <td>{{ number_format($withdraw->payable, 2) }}</td>
                                    <td>{{ $withdraw->payment_method }}</td>
                                    <td>
                                        {{ $withdraw->status == 1 ? 'Approved' : ($withdraw->status == 2 ? 'Rejected' : 'Pending') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('wallet.withdraw.show', $withdraw->id) }}"
                                            class="btn btn-sm btn-primary" title="Withdrawal Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        No Record Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $withdraws->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
@endsection
