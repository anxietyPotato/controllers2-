<!-- resources/views/about.blade.php -->
@extends('layout')

@section('pageTitle', 'About')

@section('pagecontent')
    <div class="mb-3">
        <p>Hello, my full name is {{ $ime }} {{ $prezime }}</p>
        <p>This is the about page.</p>
    </div>
@endsection
