@php
    $title = 'My Templates';
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
                    @forelse ($templates as $userTemplate)
                        <div class="col-md-4">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <img src="{{ asset($userTemplate->template->assets_path . '/images/preview.png') }}"
                                        alt="" class="img-fluid">

                                    <div class="card-data py-3 px-3">
                                        <h4>{{ $userTemplate->template->name }}</h4>
                                        <div class="btn-group">
                                            <a href="{{ route('live_preview', $userTemplate->company_slug) }}"
                                                class="btn btn-info btn-sm" target="_blank">
                                                Live
                                            </a>
                                            <a href="{{ route('templates.edit', $userTemplate['id']) }}"
                                                class="btn btn-primary btn-sm">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info text-center" style="font-weight: bold">No template found.</div>
                        </div>
                    @endforelse
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
