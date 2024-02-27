@extends('layouts.app')

@section('content')
<h2>Feedback Form</h2>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('feedback.send') }}" method="POST">
    @csrf    
    <div>
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4"></textarea>
    </div>
    <p>Let us know what you think of our website.</p>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
@endsection

