@extends('layout')

@section('pageTitle', 'Prodavnica')

@section('pagecontent')

    @foreach($product as $products )
       <div> <p> {{$products->name}}</p>
        <p>{{$products->description}}</p>
       </div>


    @endforeach


@endsection
