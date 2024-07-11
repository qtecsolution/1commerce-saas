@php
    $title = 'Ticket';
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
                                    <h3 class="mb-0">{{ $title }} #{{ $item->ticket_number }}</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <tbody>
                                            @php
                                                $image = empty($item->image) ? asset('assets/images/others/error.png') : asset('storage/' . $item->image);
                                            @endphp
                                            <tr>
                                                <td>
                                                    <span>
                                                        Name:
                                                    </span>
                                                </td>
                                                <td>{{ $item->usertDetails->name }}</td>
                                                <td>
                                                    Phone:
                                                </td>
                                                <td>{{ $item->usertDetails->phone }}</td>
                                                <td>
                                                    Email:
                                                </td>
                                                <td>{{ $item->usertDetails->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Subject:
                                                </td>
                                                <td>{{ $item->ticket_subject }}</td>
                                                <td>
                                                    Note:
                                                </td>
                                                <td>{{ $item->ticket_note }}</td>
                                                <td>
                                                    Image:
                                                </td>
                                                <td>
                                                    <img class="img-fluid rounded" src="{{ $image }}"
                                                        style="max-width: 60px" alt="">
                                                </td>
                                            <tr>
                                                <td>
                                                    status:
                                                </td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <span
                                                            class="badge badge-pill badge-warning text-dark">Pending</span>
                                                    @elseif($item->status == 2)
                                                        <span class="badge badge-pill badge-primary">Conversation</span>
                                                    @elseif($item->status == 3)
                                                        <span class="badge badge-pill badge-primary">Closed</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- print support ticket button --}}
                                    {{-- <a href="#" class="btn btn-success rounded" target="_blank"><i
                                            class="fas fa-print"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($item->messages as $message)
            <x-ticket-replies :message="$message" />
        @endforeach

        @if ($item->status == 2)
            <div class="col-lg-12">
                <div class="card mt-4">
                    <div class="card-header py-2">
                        <h3 class="mb-0">Reply Ticket</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer_reply_support_ticket') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="ticket_id" value="{{ $item->id }}">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Message:</label>
                                    <textarea rows="6" class="form-control" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Attachments:</label>
                                    <input type="file" name="image" name="attachment" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary">Reply</button>
                            </div>
                            <form>
                    </div>
                </div>
            </div>
        @elseif ($item->status == 1)
            <p class="text-warning">* waiting for reponse</p>
        @endif
    </div>
@endsection
