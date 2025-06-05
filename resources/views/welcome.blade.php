@extends("layout")
@section("pageTitle")
    glavna stranica
@endsection
@section("pagecontent")

@if($hour >= 0 && $hour <= 12)
    <p> good morning!</p>

@else
    <p> good evening!</p>
@endif

    <p> hour at this moment {{ $hour }}</p>
    <p>current time is : {{ $currentTime }} </p>
@endsection

<h2>Latest Products</h2>
<ul>
    @foreach($latestProducts as $product)
        <li>
            <strong>{{ $product->name }}</strong> - {{ $product->description }} - {{ $product->price }}
        </li>

    @endforeach
</ul>

