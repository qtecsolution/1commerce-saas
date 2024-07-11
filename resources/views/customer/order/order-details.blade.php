@php
    $title = 'Order Summires';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span>
                                                        Order Code:
                                                    </span>
                                                </td>
                                                <td>#POS{{ $orderDetails->id . $orderDetails->order_code }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Customer Name:
                                                </td>
                                                <td>{{ $orderDetails->customer_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Customer Username:
                                                </td>
                                                <td>{{ $orderDetails->customerDetails->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email:
                                                </td>
                                                <td>{{ $orderDetails->customer_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Delivery Address:
                                                </td>
                                                <td>{{ $orderDetails->customer_address }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- print invoice button --}}
                                    <a href="#" class="btn btn-success rounded" target="_blank"><i
                                            class="fas fa-print"></i>
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Order Date:
                                                </td>
                                                <td>{{ $orderDetails->created_at->format('d F, Y | h:i A') }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Order Status:
                                                </td>
                                                <td>
                                                    {{-- <span class="text-color-red form-control mb-3">
                                                        New Order
                                                    </span> --}}

                                                    <form id="status_form" action="#" method="post">
                                                        @csrf
                                                        <div>
                                                            <select class="custom-select" name="" required>
                                                                <option value="">Open This Select Menu</option>
                                                                <option value="1">Pending
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mt-2">
                                                            <button type="submit"
                                                                class="btn btn-sm btn-warning text-dark mb-1">
                                                                <i class="far fa-edit mr-1"></i>
                                                                <span>Update</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Total order amount:
                                                </td>
                                                <td> &#2547;
                                                    {{ number_format(($orderDetails->total_amount) - $orderDetails->discount_amount, 2) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Payment Status:
                                                </td>
                                                <td>
                                                    <span class="badge bg-info text-dark">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Delivery Note:
                                                </td>
                                                <td>
                                                    ---
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card mt-4">
                    <div class="card-header py-2">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="mb-0">Order Details</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0 table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="30%">Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails->orderProducts as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td style="min-width: 300px">
                                            @php
                                                $photo = empty($item->productDetails->photo) ? asset('assets/images/others/error.png') : asset('storage/' . $item->productDetails->photo);
                                            @endphp
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <img class="img-fluid rounded" src="{{ $photo }}"
                                                        style="max-width: 60px" alt="">
                                                </div>
                                                <div class="col">
                                                    {{ $item->productDetails->title }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>
                                            &#2547;
                                                {{ number_format(($item->unit_price), 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- payment History start --}}
                <div class="card mt-4">
                    <div class="card-header py-2">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="mb-0">Payment History</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Paid On</th>
                                        <th>Payer Name</th>
                                        <th>Phone Number</th>
                                        <th>Payment Gateway</th>
                                        <th>Payment Method</th>
                                        <th>Bank Name</th>
                                        <th>TxId/DC</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mt-4">
                    <div class="card-header py-2">
                        <h3 class="mb-0">Order Amount</h3>
                    </div>
                    <div class="card-body pb-0">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="w-50 fw-600">Subtotal</td>
                                    <td class="text-right">
                                        <span class="strong-600">
                                           &#2547;
                                           {{ number_format(($orderDetails->total_amount) , 2) }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Shipping</td>
                                    <td class="text-right">
                                        <span class="text-italic">&#2547;
                                            0
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Discount</td>
                                    <td class="text-right">
                                        <span class="text-italic">-&#2547;
                                           {{ number_format(($orderDetails->discount_amount) , 2) }} 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="border-top">
                                    <td class="w-50 fw-600">TOTAL</td>
                                    <td class="text-right">
                                        <strong>
                                            <span>&#2547;
                                                {{ number_format(($orderDetails->total_amount - $orderDetails->discount_amount) , 2) }} 
                                            </span>
                                        </strong>
                                    </td>
                                </tr>
                                <tr class=" text-danger">
                                    <td class="w-50 fw-600">DUE</td>
                                    <td class="text-right">
                                        <strong>
                                            <span>&#2547;
                                                0
                                            </span>
                                        </strong>
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
