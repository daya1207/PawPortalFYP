@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<section class="signup-hero-section">
    <div class="signup-header">
        <img src="{{ asset('images/cat-icon.png') }}" alt="Cat Icon" class="signup-cat-icon" />
        <h1>Sign Up</h1>
        <p class="signup-subtext">
            Welcome to PawPortal Rescue! Join our community of cat lovers and help us make a difference.
            Sign up today to start your journey towards adopting a furry friend, reporting emergencies,
            making donations, or providing temporary hosting for cats in need. Together, we can create
            a better world for our feline companions.
        </p>
    </div>

    <!-- The gray container for social sign up and form -->
    <div class="signup-container">
        <div class="social-signup">
            <button class="fb-signup">Sign Up with Facebook</button>
            <button class="google-signup">Sign Up with Google</button>
        </div>

        <form class="signup-form">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" placeholder="First Name" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" placeholder="Last Name" required>

            <label for="email">Email*</label>
            <input type="email" id="email" placeholder="Email" required>

            <label for="password">Password*</label>
            <input type="password" id="password" placeholder="8-characters" required>

            <label for="passwordConfirmation">Password Confirmation*</label>
            <input type="password" id="passwordConfirmation" placeholder="8-characters" required>

            <p class="terms-text">
                By signing up, I agree to the Terms of Use and PawPortal Rescue’s Privacy Policy.
            </p>

            <button type="submit" class="signup-submit-btn">Sign Me Up!</button>
        </form>

        <p class="login-redirect">
            Already have an account? <a href="#">Log in</a>
        </p>
    </div>
</section>
@endsection
