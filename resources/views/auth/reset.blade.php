@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<section class="reset-password-page">
    <h1>Reset Your Password</h1>

    <!-- If there's a token in the URL, we pass it in a hidden field -->
    <form action="{{ route('password.update') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email (should match what's in the password_resets table) -->
        <div class="input-group">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" value="{{ $email ?? old('email') }}" required>
        </div>

        <!-- New Password -->
        <div class="input-group">
            <label for="password">New Password*</label>
            <input type="password" name="password" id="password" required>
        </div>

        <!-- Confirm New Password -->
        <div class="input-group">
            <label for="password_confirmation">Confirm Password*</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Reset Password</button>
    </form>
</section>
@endsection
