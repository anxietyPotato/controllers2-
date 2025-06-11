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



<h2>Latest Products</h2>
<ul>
    @foreach($latestProducts as $product)
        <li>
            <strong>{{ $product->name }}</strong> - {{ $product->description }} - {{ $product->price }}
        </li>

    @endforeach
</ul>
<form method="POST" action="/send-contact" class="p-4 rounded shadow-lg bg-light">

    @if($errors->any())
        <p>mistake : {{$errors-> first() }}</p>
    @endif
    {{csrf_field()}}

    <h2 class="text-center text-primary mb-4">Contact Us</h2>

    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email Address</label>
        <input type="email" name="email" id="email" class="form-control rounded-3" placeholder="Enter your email" required>
    </div>

    <div class="mb-3">
        <label for="subject" class="form-label fw-bold">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control rounded-3" placeholder="Enter subject" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label fw-bold">Your Message</label>
        <textarea name="message" id="message" rows="4" class="form-control rounded-3" placeholder="Write your message" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100 rounded-pill">Send Message</button>
</form>
@endsection

