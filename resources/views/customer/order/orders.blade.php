@php
    $title = 'All Orders';
    if (isset($_GET['status'])) {
        $title = orderStatusText($_GET['status']) . ' Orders';
    }
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex overflow-auto">
                    <a href="{{ route('orders') }}"
                        class="btn btn-sm btn-{{ request()->get('status') ? 'primary' : 'dark' }} mx-1">
                        All Order
                    </a>
                    @foreach (orderStatusList() as $key => $value)
                        <a href="{{ route('orders', ['status' => $key + 1]) }}"
                            class="btn btn-sm btn-{{ request()->get('status') == $key + 1 ? 'dark' : 'primary' }} mx-1">
                            {{ $value['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header py-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="mb-0">{{ $title }}</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date/Time</th>
                                <th>Customer Name/Phone</th>
                                <th>Shipping Address</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Total Amount</th>
                                <th>Order Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $key => $order)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{ date('d F, Y', strtotime($order->created_at)) }}
                                        <br>
                                        {{ date('h:i A', strtotime($order->updated_at)) }}
                                    </td>
                                    <td>
                                        <strong>{{ $order->customer_name }}</strong>
                                        <br>
                                        {{ $order->customer_phone }}
                                    </td>
                                    <td>{{ $order->customer_address }}</td>
                                    <td>{{ number_format($order->product_price, 2) }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ number_format($order->discount_amount, 2) }}</td>
                                    <td>{{ number_format($order->total_amount, 2) }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button"
                                                class="btn btn-{{ orderStatusColor($order->status) }} dropdown-toggle"
                                                data-toggle="dropdown" data-display="static" aria-expanded="false">
                                                {{ orderStatusText($order->status) }}
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                                @foreach (orderStatusList() as $key => $value)
                                                    <a href="{{ route('order.update.status', [$order->id, $key + 1]) }}"
                                                        class="dropdown-item">
                                                        {{ $value['label'] }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-sm btn-dark"
                                            title="Order Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">
                                        No Orders Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $orders->appends(['status' => request()->get('status')])->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $(document).ready(function() {
            // init data table
            $('#table').DataTable();
        });
    </script>
@endsection
