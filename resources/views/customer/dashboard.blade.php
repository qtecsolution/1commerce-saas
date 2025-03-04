@php
    $title = 'Dashboard';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="{{ asset('assets/images/waving-hand.png') }}" width="200" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="col-10">
                                <h3>Hey! {{ auth()->user()->name }}</h3>
                                <p>
                                    Welcome back. Today is {{ date('dS F, Y') }} <br>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @php
                            $subscription = auth()->user()->subscription_details;
                            $package = auth()->user()->subscription_details?->package_details;
                        @endphp
                        <p>
                            <strong>Current Plan:</strong> {{ $package->title }}
                        </p>
                        <p>
                            <strong>Renewal Date:</strong> {{ date('F d, Y', strtotime($subscription->ending_date)) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Page Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Order</th>
                            <th scope="col">Live</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userTemplates as $userTemplate)
                            <tr>
                                <td>{{ $userTemplate->company_name }}</td>
                                <td>{{ $userTemplate->product_name }}</td>
                                <td>
                                    {{ $userTemplate->product_currency . ' ' . number_format($userTemplate->product_price, 2) }}
                                </td>
                                <td>{{ count($userTemplate->orders) }}</td>
                                <td>
                                    <a href="{{ route('user_shop', $userTemplate->company_slug) }}" target="_blank">
                                        {{ route('user_shop', $userTemplate->company_slug) }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('templates.index') }}" class="btn btn-primary mb-3">
                    Create New Landing Page
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->customer_name }}</td>
                                <td>
                                    {{ $order->currency . ' ' . number_format($order->total_amount, 2) }}
                                </td>
                                <td>
                                    <span class="badge bg-{{ orderStatusColor($order->status) }}">
                                        {{ orderStatusText($order->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('order.show', $order->id) }}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('orders') }}" class="btn btn-link">
                    View All Orders
                </a>
            </div>
        </div>
    </div>
@endsection
