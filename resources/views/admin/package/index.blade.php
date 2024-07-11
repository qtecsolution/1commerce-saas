@php
    $title = 'Packages';
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
                        <a href="{{ route('packages.create') }}" class="btn btn-primary">Create Package</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>&#2547; {{ number_format($item->price, 2) }}</td>
                                    <td>
                                        {{ $item->duration }} Days
                                        <span class="badge bg-info text-white">
                                            {{ floor($item->duration / 30) . ' Month, ' . $item->duration % 30 . ' days' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary text-light">
                                            {{ $item->status == 1 ? 'Active' : 'In-active' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="" class="btn btn-sm btn-info">Inspect</a> --}}
                                            <a href="{{ route('packages.edit', $item->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger"
                                                onclick="document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</a>

                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ route('packages.destroy', $item->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
