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
                                <p class="card-text">1,234</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Active Templates</h5>
                                <p class="card-text">56</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Subscriptions</h5>
                                <p class="card-text">789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Active Support Tickets</h5>
                                <p class="card-text">8</p>
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
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subscription</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Premium</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-success">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>Standard</td>
                            <td><span class="badge bg-danger">Inactive</span></td>
                            <td>
                                <button class="btn btn-sm btn-success">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Support Tickets Section -->
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Open Support Tickets
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ticket ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Issue</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#T001</td>
                            <td>John Doe</td>
                            <td>Payment Issue</td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">View</button>
                                <button class="btn btn-sm btn-success">Resolve</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#T002</td>
                            <td>Jane Smith</td>
                            <td>Login Issue</td>
                            <td><span class="badge bg-danger">Open</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">View</button>
                                <button class="btn btn-sm btn-success">Resolve</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
