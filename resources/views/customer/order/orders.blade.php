@php
    $title = 'Orders';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
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
                <div class="d-flex overflow-auto pb-3" id="akash-btn-mbl-scroll">
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Pendding
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Confirm
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Cancelled
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Shipped
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Delivered
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Order Return
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mx-1">
                        Follow Up
                    </button>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Order#</th>
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
                            @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->id . $order->id }}</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown" data-display="static" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                                <a href="{{ route('order_details', 01) }}" class="dropdown-item"
                                                    type="button">Inspect</a>
                                                <a href="" class="dropdown-item" type="button">Print</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
