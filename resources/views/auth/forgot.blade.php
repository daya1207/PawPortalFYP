@extends('layouts.app')

@section('title', 'Forgot Your Password?')

@section('content')
<section class="forgot-password-page">
    <h1>Forgotten your password??</h1>
    <p>To reset your password, please enter your email below. Password reset instructions will be sent to the email address associated with your account.</p>

    <!-- The actual form -->
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="input-group">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" required>
        </div>

        <button type="submit">Send Me Instructions</button>
    </form>

    <div class="extra-links">
        <p>1. <a href="{{ route('login') }}">Know your password? Log in</a></p>
        <p>2. Didn’t receive confirmation instructions?</p>
        <p>3. Didn’t receive unlock instructions?</p>
    </div>
</section>
@endsection

