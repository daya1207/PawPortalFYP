@extends('layouts.app')

@section('title', 'Hosting')

@section('content')
<section class="hosting-hero-section">
    <div class="hosting-hero-left">
        <h1>Pawsome Pals Needed !!</h1>
        <button class="hero-cta-btn">Foster Now</button>
        <p class="hero-subtext">
            Searching for a Fairy CatParent?
        </p>
        <!-- Big form container in light gray -->
        <div class="hosting-form-container">
            <form class="hosting-application-form">
                <div class="input-row">
                    <div>
                        <label>Name</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div>
                        <label>Number of cats</label>
                        <input type="number" min="1" placeholder="1-10">
                    </div>
                </div>
                <div class="input-row">
                    <div>
                        <label>Phone Number</label>
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <div>
                        <label>Age</label>
                        <input type="text" placeholder="Age">
                    </div>
                </div>
                <div class="input-row">
                    <div>
                        <label>Email</label>
                        <input type="email" placeholder="Email">
                    </div>
                    <div>
                        <label>Breed</label>
                        <input type="text" placeholder="Breed">
                    </div>
                </div>
                <label>Address</label>
                <input type="text" placeholder="Address">

                <label>Other additional information</label>
                <textarea rows="3" placeholder="Type here"></textarea>

                <label>Date of Temporary Hosting</label>
                <div class="date-range-row">
                    <input type="date" placeholder="00/00/0000">
                    <span>-</span>
                    <input type="date" placeholder="00/00/0000">
                </div>

                <label>Cat Image</label>
                <div class="cat-image-drop">
                    <p>Drop image here</p>
                    <!-- or a drag-n-drop area -->
                </div>

                <button type="submit" class="hosting-apply-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="hosting-hero-right">
        <!-- Cat Illustration -->
        <img src="{{ asset('images/hosting-cats.png') }}" alt="Hosting Cats" />
    </div>
</section>

<section class="foster-list-section">
    <h2>Foster a Cat & Be Their Fairy Catparent!</h2>
    <div class="cat-cards">
        <!-- Example card 1 -->
        <div class="cat-card">
            <img src="{{ asset('images/cat-sierra.png') }}" alt="Sierra">
            <div class="cat-info">
                <h3>Sierra <span class="badge female">Female</span></h3>
                <p>23 - 29 May 2024 | Ampang, Selangor</p>
                <p>5 years old | Domestic Shorthair</p>
            </div>
        </div>
        <!-- Example card 2, 3, etc. -->
    </div>
    <button class="load-more-btn">Load More</button>
</section>
@endsection
