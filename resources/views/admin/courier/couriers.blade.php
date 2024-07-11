@php
    $title = 'Couriers';
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
                        <a href="{{ route('couriers.create') }}" class="btn btn-primary" data-toggle="modal"
                            data-target="#createModal">Create Courier</a>

                        <!-- Modal Start-->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Create Courier</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <form action="{{ route('couriers.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="" class="form-label">Name<span
                                                        class="text-danger"><sup>*</sup></span> :</label>
                                                <input type="text" name="name" placeholder="courier name"
                                                    id="" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Logo:</label>
                                                <input type="file" name="logo" id="" class="form-control"
                                                    accept="image/*">
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end-->
                    </div>
                </div>
            </div>
            <div class="card-body">

                {{-- alert --}}
                <x-alert />

                <div class="table-responsive">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($couriers as $key => $item)
                                @php
                                    $logo = empty($item->logo) ? asset('assets/images/others/error.png') : asset('storage/' . $item->logo);
                                @endphp

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img class="img-fluid rounded" src="{{ $logo }}" style="max-width: 60px"
                                            alt="">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <span class="badge bg-primary text-light">
                                            {{ $item->status == 1 ? 'Active' : 'Block' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary text-white" data-toggle="modal"
                                                data-target="#editModal_{{ $item->id }}">Edit</a>
                                            @if ($item->status == 0)
                                                <a href="{{ route('courier_status', ['id' => $item->id, 'status' => 1]) }}"
                                                    class="btn btn-sm btn-warning text-dark">
                                                    Active
                                                </a>
                                            @else
                                                <a href="{{ route('courier_status', ['id' => $item->id, 'status' => 0]) }}"
                                                    class="btn btn-sm btn-warning text-dark">
                                                    Block
                                                </a>
                                            @endif
                                            <!-- Modal Start-->
                                            <div class="modal fade" id="editModal_{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel_{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Edit {{ $item->title }} Courier</h4>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <i class="anticon anticon-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <form action="{{ route('couriers.update', $item->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Logo:</label>
                                                                    <img src="{{ $logo }}" alt=""
                                                                        class="img-fluid mb-2 rounded">
                                                                    <input type="file" name="logo" id=""
                                                                        class="form-control" accept="image/*">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">name<span
                                                                            class="text-danger"><sup>*</sup></span>
                                                                        :</label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $item->name }}"
                                                                        placeholder="name" id=""
                                                                        class="form-control" required>
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
                                            <!-- Modal End-->
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

