@extends('layouts.email')
@section('content')
<p>{{ $name }} has sent feedback about your website. Below are the comments left by
<p>{{ $comment }}</p>
@endsection

@extends('layouts.app')

@section('content')
    <div class="alert alert-success">
        <p>Your feedback was submitted successfully!</p>
        <p>Thank you for your feedback. We will review it and get back to you soon.</p>
    </div>
@endsection