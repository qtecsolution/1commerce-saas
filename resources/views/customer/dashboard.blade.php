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
                        <p>
                            <strong>Current Plan:</strong> Premium
                        </p>
                        <p>
                            <strong>Renewal Date:</strong> 25th Dec 2024
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
                        <tr>
                            <td>Landing Page 1</td>
                            <td>Product 1</td>
                            <td>$49.99</td>
                            <td>120</td>
                            <td>
                                <a href="#">
                                    http://example.com
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Landing Page 2</td>
                            <td>Product 2</td>
                            <td>$29.99</td>
                            <td>120</td>
                            <td>
                                <a href="#">
                                    http://example.com
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary mb-3">Create New Landing Page</button>
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
                        <tr>
                            <td>#12345</td>
                            <td>John Doe</td>
                            <td>$99.99</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#12346</td>
                            <td>Jane Smith</td>
                            <td>$49.99</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-link">View All Orders</a>
            </div>
        </div>
    </div>
@endsection
