@php
    $title = 'Customers';
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
                        <a href="{{ route('customers.create') }}" class="btn btn-primary" data-toggle="modal"
                            data-target="#createModal">Create Customer</a>

                        <!-- Create Customer Modal Start-->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Create Customer</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <form action="{{ route('customers.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="" class="form-label">Name<span
                                                        class="text-danger"><sup>*</sup></span> :</label>
                                                <input type="text" name="name" placeholder="name" id=""
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Phone<span
                                                        class="text-danger"><sup>*</sup></span> :</label>
                                                <input type="text" name="phone" placeholder="phone" id=""
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Email:</label>
                                                <input type="email" name="email" placeholder="email" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Address:</label>
                                                <textarea name="address" id="" class="form-control" placeholder="address"></textarea>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Create Customer Modal End-->
                    </div>
                </div>
            </div>
            <div class="card-body">

                {{-- alert --}}
                <x-alert />

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $key => $customer)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>
                                        <span class="badge bg-primary text-light">
                                            {{ $customer->status == 1 ? 'Active' : 'In-active' }}
                                       </span>
                                   </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary text-white" data-toggle="modal"
                                                data-target="#editModal_{{ $customer->id }}">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger"
                                                onclick="document.getElementById('delete-form-{{ $customer->id }}').submit();">Delete</a>

                                            <form id="delete-form-{{ $customer->id }}"
                                                action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <!-- Modal -->
                                            <div class="modal fade" id="editModal_{{ $customer->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel_{{ $customer->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Edit {{ $customer->title }} Category</h4>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="anticon anticon-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <form action="{{ route('customers.update', $customer->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Name<span
                                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                                    <input type="text" name="name" placeholder="name" id="" value="{{ $customer->name }}"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Phone<span
                                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                                    <input type="text" name="phone" placeholder="phone" id="" value="{{ $customer->phone }}"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Email:</label>
                                                                    <input type="email" name="email" placeholder="email" id="" value="{{ $customer->email }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Address:</label>
                                                                    <textarea name="address" id="" class="form-control" placeholder="address">{{ $customer->address }}</textarea>
                                                                </div>
                                                                <div class="text-right">
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
