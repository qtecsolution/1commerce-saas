@php
    $title = 'Dashboard';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-md-12">
        <!-- Overview Section -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Total Customers</h5>
                                <p class="card-text">{{ number_format($customers) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Active Templates</h5>
                                <p class="card-text">{{ number_format($active_templates) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Subscriptions</h5>
                                <p class="card-text">{{ number_format($subscriptions) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Active Support Tickets</h5>
                                <p class="card-text">{{ number_format($active_tickets) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Customers Section -->
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Recent Customers
                    <small class="text-muted">[Recent 5]</small>
                </div>
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
            </div>
        </div>

        <!-- Support Tickets Section -->
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Open Support Tickets
                    <small class="text-muted">[Recent 5]</small>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Ticket</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $key => $item)
                            @php
                                $image = empty($item->image)
                                    ? asset('assets/images/others/error.png')
                                    : asset('storage/' . $item->image);
                            @endphp
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->ticket_number }}</td>
                                <td>{{ $item->usertDetails->name }}</td>
                                <td>{{ $item->usertDetails->phone }}</td>
                                <td>{{ $item->ticket_subject }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('inspect_support_ticket', $item->id) }}"
                                            class="btn btn-sm btn-info text-light">Inspect</a>
                                        <a href="{{ route('delete_support_ticket', $item->id) }}"
                                            class="btn btn-sm btn-danger text-light"
                                            onclick="return confirm('Are you sure?')">
                                            Delete
                                        </a>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-primary dropdown-toggle" href="javascript:void(0)"
                                                role="button" data-toggle="dropdown" aria-expanded="false">
                                                @if ($item->status == 1)
                                                    Pending
                                                @elseif($item->status == 2)
                                                    Conversation
                                                @elseif($item->status == 3)
                                                    Closed
                                                @endif
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('support_ticket_status', ['id' => $item->id, 'status' => 1]) }}">Pending</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('support_ticket_status', ['id' => $item->id, 'status' => 2]) }}">Conversation</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('support_ticket_status', ['id' => $item->id, 'status' => 3]) }}">Closed</a>
                                            </div>
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
@endsection
