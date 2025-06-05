@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@extends('layout')

@section('pageTitle', 'Contact')

@section('pagecontent')
    <div class="mb-4">
        <a href="https://www.linkedin.com/in/aleksandra-zecevic-a558712aa/" class="btn btn-link">
            Link to my LinkedIn page
        </a>
    </div>

    <h2>Contact Us</h2>

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf <!-- CSRF protection -->

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Team Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send Message</button>
    </form>
@endsection
