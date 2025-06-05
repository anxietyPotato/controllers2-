@extends('layout')

@section('pageTitle', 'Prodavnica')

@section('pagecontent')

    @foreach($products as $product )
        @if($product == "iPhone 16" || $product == "iPhone 14")
        <p>{{$product}} Super Snizenje</p>
            @else
            <p>{{$product}}</p>

        @endif

    @endforeach


@endsection
