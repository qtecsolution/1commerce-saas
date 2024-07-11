@php
    $title = 'Templates';
@endphp
@extends('layouts.app')

@section('page_content')
    {{-- alert --}}
    <x-alert />

    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS01</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/1.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 1) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_1">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS02</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/2.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 2) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_2">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS03</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/3.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 3) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_3">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS04</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/4.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 4) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_4">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS05</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/5.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 5) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_5">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Template #MS06</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/images/landing_page/6.png') }}" alt="" class="img-fluid rounded">
                <div class="mt-2 text-center">
                    <a href="{{ route('show_template', 6) }}" target="_blank" class="btn btn-primary">Live Preview</a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importModal_6">Import
                        Template</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        // init select2
        $('.select2').select2();
    </script>
@endsection
