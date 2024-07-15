@php
    $title = 'Orders';
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
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($templates as $template)
                        <div class="col-md-4">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <img src="{{ asset($template['assets'] . '/images/preview.png') }}" alt="" class="img-fluid">

                                    <div class="card-data py-3 px-3">
                                        <h4>{{ $template['name'] }}</h4>
                                        <a href="{{ route('templates.select', $template['slug']) }}" class="btn btn-primary">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $(document).ready(function() {
            // code
        });
    </script>
@endsection
