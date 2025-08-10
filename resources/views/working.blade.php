@extends('layouts.app')

@section('title_page', 'Working Page')

@section('content')
    <div class="d-flex align-items-center justify-content-center flex-column" style="min-height: calc(100vh - 65px);">
        <img class="px-3 mx-auto img-fluid opacity-25" src="{{ asset('images/contruction.svg') }}" alt="Working Pege"
        style="width: 25rem; height: auto;">
        <h1 class="text-fluid text-center text-secondary opacity-50">Page under construction</h1>
    </div>
@endsection