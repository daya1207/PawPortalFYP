@extends('layouts.app')

@section('title', 'Rescue')

@section('content')
<section class="rescue-hero-section">
    <div class="rescue-hero-text">
        <h1>Cat emergency? We’ll be the cat’s meow of rescue!</h1>
        <p>Here are some tips if you find a kitten!</p>
    </div>
    <div class="rescue-hero-illustration">
        <!-- Replace with your cat illustration -->
        <img src="{{ asset('images/rescue-cat-illustration.png') }}" alt="Rescue Cats" />
    </div>
</section>

<section class="tips-section">
    <div class="tip-bubbles">
        <!-- Example tips (1 to 5) -->
        <div class="tip-bubble">
            <h3>1.</h3>
            <p>Assess the situation: See if the mother cat is around...</p>
        </div>
        <div class="tip-bubble">
            <h3>2.</h3>
            <p>Provide shelter: If the kittens are alone, create a warm, safe place for them.</p>
        </div>
        <div class="tip-bubble">
            <h3>3.</h3>
            <p>Keep them warm: Kittens can't regulate their body temperature well.</p>
        </div>
        <div class="tip-bubble">
            <h3>4.</h3>
            <p>Food and water (if needed): Only provide food if the mother is nowhere to be found...</p>
        </div>
        <div class="tip-bubble">
            <h3>5.</h3>
            <p>Contact a rescue organization: Look online or call your local animal shelter...</p>
        </div>
    </div>
</section>

<section class="rescue-form-section">
    <div class="emergency-form-box">
        <h2>Emergency Report Form</h2>
        <form class="emergency-form">
            <label for="erName">Name</label>
            <input type="text" id="erName" placeholder="Name">

            <label for="erPhone">Phone Number</label>
            <input type="text" id="erPhone" placeholder="+60">

            <div class="date-time-row">
                <div>
                    <label for="erDate">Date</label>
                    <input type="date" id="erDate" placeholder="DD/MM/YY">
                </div>
                <div>
                    <label for="erTime">Time</label>
                    <input type="time" id="erTime" placeholder="15:00 PM">
                </div>
            </div>

            <label for="erDetails">Details of the report</label>
            <textarea id="erDetails" rows="4" placeholder="Message"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <div class="helpline-box">
        <h2>Our Helpline</h2>
        <p><strong>Tel :</strong> +60452615261</p>
        <p><strong>Email:</strong> info@pawportal.com</p>
        <p><strong>Address:</strong> PawPortal HQ, International Islamic University Malaysia, Jln Gombak,<br>
           53100 Kuala Lumpur, Selangor.</p>
    </div>
</section>
@endsection
