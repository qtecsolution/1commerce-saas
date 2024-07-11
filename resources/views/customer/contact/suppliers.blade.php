@php
    $title = 'Suppliers';
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
                        <button class="btn btn-primary" data-toggle="modal"
                            data-target="#createModal">Create Supplier</button>

                        <!-- Modal -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Create Supplier</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <form action="{{ route('suppliers.store') }}" method="post"
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
                                                <label for="" class="form-label">Company<span
                                                        class="text-danger"><sup>*</sup></span> :</label>
                                                <input type="text" name="company" placeholder="company" id=""
                                                    class="form-control" required>
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
                                <th>Company</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->company }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        <span class="badge bg-primary text-light">
                                            {{ $user->status == 1 ? 'Active' : 'Blocked' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary text-light" data-toggle="modal"
                                            data-target="#editModal_{{ $user->id }}">Edit</a>
                                            @if ($user->status == 0)
                                                <a href="{{ route('supplier_status', ['id' => $user->id, 'status' => 1]) }}"
                                                    class="btn btn-sm btn-warning text-dark">
                                                    Active
                                                </a>
                                            @else
                                                <a href="{{ route('supplier_status', ['id' => $user->id, 'status' => 0]) }}"
                                                    class="btn btn-sm btn-warning text-dark">
                                                    Block
                                                </a>
                                            @endif
                                             <!-- Update Supplier Modal Start-->
                                             <div class="modal fade" id="editModal_{{ $user->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel_{{ $user->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Edit Suppliers</h4>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="anticon anticon-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <form action="{{ route('suppliers.update', $user->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Name<span
                                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                                    <input type="text" name="name" placeholder="name" value="{{ $user->name }}" id=""
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Phone<span
                                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                                    <input type="text" name="phone" placeholder="phone" value="{{ $user->phone }}" id=""
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Email:</label>
                                                                    <input type="email" name="email" placeholder="email" value="{{ $user->email }}" id=""
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Company<span
                                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                                    <input type="text" name="company" placeholder="company" value="{{ $user->company }}"id=""
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Address:</label>
                                                                    <textarea name="address" id="" class="form-control" placeholder="address">{{ $user->address }}</textarea>
                                                                </div>
                                                                <div class="text-right">
                                                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Update Supplier Modal End-->
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
