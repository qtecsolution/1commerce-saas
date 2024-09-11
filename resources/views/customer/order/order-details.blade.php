@php
    $title = 'Order Summires';
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
                                    <td>{{ $order->id }}</td>
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
                                        Delivery Address:
                                    </td>
                                    <td>{{ $order->customer_address }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        Product Name:
                                    </td>
                                    <td>{{ @$order->userTemplate->product_name }}</td>
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
                                                        class="dropdown-item {{ $order->status == $key + 1 ? 'bg-' . orderStatusColor($order->status) . ' text-white' : '' }}">
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
                                            Unit Price:
                                            {{ $order->currency }}
                                            {{ number_format($order->product_price, 2) }}
                                            <br>
                                            Quantity:
                                            {{ $order->quantity }}
                                            <br>
                                            Shipping:
                                            {{ $order->currency }}
                                            {{ number_format($order->shipping_cost, 2) }}
                                            <br>
                                            Discount:
                                            {{ $order->currency }}
                                            {{ number_format($order->discount_amount, 2) }}
                                            <br>
                                            Total Amount:
                                            {{ $order->currency }}
                                            {{ number_format($order->total_amount, 2) }}
                                        </p>
                                        @if ($order->dynamicFields->count() > 0)
                                            <strong class="text-primary">Additional Details:</strong>
                                            <br>
                                            <p>
                                                @foreach ($order->dynamicFields as $dynamicField)
                                                    <strong>{{ $dynamicField->title }}:</strong>
                                                    @if (is_array(json_decode($dynamicField->value, true)))
                                                        {{ implode(', ', json_decode($dynamicField->value, true)) }}<br>
                                                    @else
                                                        {{ $dynamicField->value }}<br>
                                                    @endif
                                                @endforeach
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <strong class="text-primary">Payment Details:</strong>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Date/Time</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Transaction ID</th>
                                    <th>Response Payload</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($order->payments as $key => $payment)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $payment->created_at->format('d F, Y | h:i A') }}</td>
                                        <td>{{ $payment->payment_method }}</td>
                                        <td>BDT {{ number_format($payment->amount, 2) }}</td>
                                        <td>
                                            {{ $payment->status == 1 ? 'Success' : ($payment->status == 2 ? 'Failed' : 'Canceled') }}
                                        </td>
                                        <td>{{ $payment->transaction_id }}</td>
                                        <td>
                                            @if ($payment->response_payload != null)
                                                {{-- <a href="javascript:void(0)" class="view-payload"
                                                    data-payload="{{ $payment->decrypted_payload }}">
                                                    View
                                                </a> --}}
                                                <a href="javascript:void(0)" class="view-payload" data-toggle="modal"
                                                    data-target="#payloadModal_{{ $payment->id }}">
                                                    View
                                                </a>

                                                <div class="modal fade" id="payloadModal_{{ $payment->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="payloadModalLabel_{{ $payment->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="payloadModalLabel_{{ $payment->id }}">Response
                                                                    Payload for Order#{{ $payment->order_id }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Table for displaying payment method and details -->
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <!-- Loop through and display details -->
                                                                        @php
                                                                            $details = json_decode($payment->response_payload);
                                                                        @endphp
                                                                        @if ($details)
                                                                            @foreach ($details as $key => $detail)
                                                                                <tr>
                                                                                    <td>{{ ucwords(str_replace('_', ' ', $key)) }}
                                                                                    </td>
                                                                                    <td>{{ $detail ?? 'N/A' }}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="payloadModal" tabindex="-1" role="dialog" aria-labelledby="payloadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payloadModalLabel">Response Payload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre id="payloadContent" style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; overflow-x: auto;"></pre>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
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
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     // Add event listener to all "View" links
        //     document.querySelectorAll('.view-payload').forEach(function(element) {
        //         element.addEventListener('click', function(event) {
        //             event.preventDefault();

        //             let payload = event.target.getAttribute('data-payload');

        //             // Parse and format the JSON payload (if it's valid JSON)
        //             try {
        //                 let jsonPayload = JSON.parse(payload);

        //                 payload = JSON.stringify(jsonPayload, null, 4);
        //             } catch (error) {
        //                 // If parsing fails, show the raw payload
        //             }

        //             // Set the content of the modal's body
        //             document.getElementById('payloadContent').textContent = payload;

        //             // Show the modal
        //             $('#payloadModal').modal('show');
        //         });
        //     });
        // });
    </script>
@endsection
