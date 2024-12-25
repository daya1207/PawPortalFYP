@extends('layouts.app')

@section('title', 'Log In')

@section('content')
<section class="login-hero-section">
    <div class="login-header">
        <img src="{{ asset('images/cat-icon.png') }}" alt="Cat Icon" class="login-cat-icon" />
        <h1>Log In</h1>
        <p class="login-subtext">
            Welcome back to PawPortal Rescue! Log in to reunite with our compassionate community and
            continue your mission to make a difference. Manage your adoptions, report emergencies,
            track donations, and offer temporary homes. Let’s create more purr-fect moments together!
        </p>
    </div>
    <!-- The big green box with social buttons and form -->
    <div class="login-green-box">
        <div class="social-login">
            <button class="fb-login">Log In with Facebook</button>
            <button class="google-login">Log In with Google</button>
        </div>

        <form class="login-form">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Email" required />

            <label for="password">Password*</label>
            <input type="password" id="password" name="password" placeholder="8-characters" required />

            <div class="forgot-password-link">
                <a href="#">Forgot your password?</a>
            </div>

            <button type="submit" class="login-submit-btn">Log Me In!</button>
        </form>

        <p class="signup-redirect">
            Don’t have an account yet? <a href="#">Sign up here</a>
        </p>
    </div>

    <!-- The cat illustration on the right -->
    <div class="login-cat-illustration">
        <img src="{{ asset('images/login-cat-illustration.png') }}" alt="Login Cat" />
    </div>
</section>
@endsection
