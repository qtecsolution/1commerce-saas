@php
    $title = 'Support Tickets';
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
                        <a href="{{ route('tickets.create') }}" class="btn btn-primary" data-toggle="modal"
                            data-target="#createModal">Create Ticket</a>

                        {{-- create ticket modal start --}}
                        <div class="modal fade bd-example-modal-lg" id="createModal" tabindex="-1"
                            aria-labelledby="createModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Create Ticket</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <form action="{{ route('tickets.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Ticket Subject<span
                                                                class="text-danger"><sup>*</sup></span> :</label>
                                                        <input type="text" name="ticket_subject" id=""
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Note<span
                                                                class="text-danger"><sup>*</sup></span> :</label>
                                                        <textarea name="ticket_note" id="" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Image:</label>
                                                        <input type="file" name="image" id=""
                                                            class="form-control" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- create ticket modal start --}}

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
                                <th>Ticket</th>
                                <th>Subject</th>
                                <th>Note</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $key => $item)
                                @php
                                    $image = empty($item->image) ? asset('assets/images/others/error.png') : asset('storage/' . $item->image);
                                @endphp
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->ticket_number }}</td>
                                    <td>{{ $item->ticket_subject }}</td>
                                    <td>{{ !empty($item->ticket_note) ? $item->ticket_note : '--' }}</td>
                                    <td>
                                        <img class="img-fluid rounded" src="{{ $image }}" style="max-width: 60px"
                                            alt="">
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge badge-pill badge-warning text-dark">Pending</span>
                                        @elseif($item->status == 2)
                                            <span class="badge badge-pill badge-primary">Conversation</span>
                                        @elseif($item->status == 3)
                                            <span class="badge badge-pill badge-primary">Closed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('customer_inspect_ticket', $item->id) }}"
                                                class="btn btn-sm btn-info text-light">
                                                Inspect
                                            </a>
                                            @if ($item->status == 1)
                                                <a class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#editModal_{{ $item->id }}">Edit</a>

                                                {{-- update ticket modal start --}}
                                                <div class="modal fade bd-example-modal-lg"
                                                    id="editModal_{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="editModalLabel_{{ $item->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Update Ticket</h4>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <i class="anticon anticon-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form action="{{ route('tickets.update', $item->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for=""
                                                                                    class="form-label">Ticket Subject<span
                                                                                        class="text-danger"><sup>*</sup></span>
                                                                                    :</label>
                                                                                <input type="text" name="ticket_subject"
                                                                                    value="{{ $item->ticket_subject }}"
                                                                                    id="" class="form-control"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for=""
                                                                                    class="form-label">Note<span
                                                                                        class="text-danger"><sup>*</sup></span>
                                                                                    :</label>
                                                                                <textarea name="ticket_note" id="" class="form-control">{{ $item->ticket_note }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for=""
                                                                                    class="form-label">Image:</label>
                                                                                <img src="{{ $image }}"
                                                                                    alt=""
                                                                                    class="img-fluid mb-2 rounded">
                                                                                <input type="file" name="image"
                                                                                    id="" class="form-control"
                                                                                    accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 text-right">
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-primary">Update</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- update ticket modal start --}}
                                                <a href="#" class="btn btn-sm btn-danger"
                                                    onclick="document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</a>

                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('tickets.destroy', $item->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            @endif
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
