@php
    $title = 'Order Summires';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex overflow-auto">
                    <a href="{{ route('orders') }}" class="btn btn-sm btn-primary mx-1">
                        All Order
                    </a>
                    @foreach (orderStatusList() as $key => $value)
                        <a href="{{ route('orders', ['status' => $key + 1]) }}" class="btn btn-sm btn-primary mx-1">
                            {{ $value['label'] }}
                        </a>
                    @endforeach
                    <button href="button" class="btn btn-sm btn-success rounded" onclick="printDiv()">
                        <i class="fas fa-print"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="card" id="printable">
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
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <span>
                                            Order#:
                                        </span>
                                    </td>
                                    <td>{{ $order->order_prefix . $order->id . $order->order_code }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Customer Name:
                                    </td>
                                    <td>{{ $order->customer_name }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone Number:
                                    </td>
                                    <td>{{ $order->customer_phone }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Email:
                                    </td>
                                    <td>{{ $order->customer_email }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Delivery Address:
                                    </td>
                                    <td>{{ $order->customer_address }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        Date/Time:
                                    </td>
                                    <td>{{ $order->created_at->format('d F, Y | h:i A') }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Order Status:
                                    </td>
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
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <strong class="text-primary">Order Details:</strong>
                                        <br>
                                        <p>
                                            Product Unit Price:
                                            &#2547;
                                            {{ number_format($order->price, 2) }}
                                            <br>
                                            Product Quantity:
                                            {{ $order->quantity }}
                                            <br>
                                            Product Discount:
                                            &#2547;
                                            {{ number_format($order->discount_amount, 2) }}
                                            <br>
                                            Product Total Amount:
                                            &#2547;
                                            {{ number_format($order->total_amount, 2) }}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        function printDiv() {
            var printContents = document.getElementById('printable').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
