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
                                <th>Ticket</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Replied By</th>
                                <th>Replied On</th>
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
                                    <td>{{ $item->usertDetails->name }}</td>
                                    <td>{{ $item->usertDetails->phone }}</td>
                                    <td>{{ $item->ticket_subject }}</td>
                                    <td>
                                        @if (isset($item->support))
                                        {{ $item->support->name }}
                                        <br>
                                        {{ $item->support->email }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $item->replied_on }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('inspect_support_ticket', $item->id) }}"
                                                class="btn btn-sm btn-info text-light">Inspect</a>
                                            <a href="{{ route('delete_support_ticket', $item->id) }}"
                                                class="btn btn-sm btn-danger text-light">Delete</a>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-primary dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="badge badge-pill bg-white text-dark">
                                                        @if ($item->status == 1)
                                                            Pending
                                                        @elseif($item->status == 2)
                                                            Conversation
                                                        @elseif($item->status == 3)
                                                            Closed
                                                        @endif
                                                    </span>
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
