@php
    $title = 'Templates';
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
                        <a href="javascript:void(0)"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($templates as $key => $template)
                        {{-- @if ($key !== 4) --}}
                            <div class="col-md-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <img src="{{ asset($template->assets_path . '/images/preview.png') }}"
                                            alt="" class="img-fluid">

                                        <div class="card-data py-3 px-3">
                                            <h4>{{ $template->name }}</h4>

                                            <div class="btn-group">
                                                <a href="{{ route('web.template', $template->slug) }}"
                                                    class="btn btn-info btn-sm" target="_blank">Preview</a>
                                                <a href="{{ route('templates.select', $template->id) }}"
                                                    class="btn btn-primary btn-sm">Setup</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- @endif --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection