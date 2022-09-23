@extends('layout.app')

@section('content')
    <div class="controller">
        <div class="raw">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Home page</h1>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .page-title{
            padding-top: 10vh;
            font-size: 5rem;
            color: #4fbf4b;
        }
    </style>
@endpush
