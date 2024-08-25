@php
    $title = 'Transaction History';
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
                                <th>Purpose</th>
                                <th>Ref</th>
                                <th>Credit</th>
                                <th>Debit</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $key => $transaction)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{ date('d F, Y', strtotime($transaction->created_at)) }}
                                        <br>
                                        {{ date('h:i A', strtotime($transaction->created_at)) }}
                                    </td>
                                    <td>{{ @$transaction->purpose }}</td>
                                    <td>
                                        @if ($transaction->payment)
                                            <a href="{{ route('order.show', $transaction->payment->order_id) }}"
                                                title="Order Details" target="_blank">
                                                order#{{ $transaction->payment->order_id }}
                                            </a>
                                        @else
                                            {{ $transaction->reference_id }}
                                        @endif
                                    </td>
                                    <td>{{ $transaction->credit > 0 ? number_format($transaction->credit, 2) : null }}</td>
                                    <td>{{ number_format($transaction->debit, 2) }}</td>
                                    <td>{{ number_format($transaction->balance, 2) }}</td>
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
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
@endsection
