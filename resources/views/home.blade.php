@extends('layouts.app')

@section('title', 'PawPortal')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1>"Whiskers of Wonder, Paws of Magic!"</h1>
        <p>
            Welcome to PawPortal, your go-to online platform for cat adoption and rescue services.
            Connect with potential adopters, make donations, report emergencies,
            and offer temporary hosting—all in one user-friendly interface.
            Join us in ensuring the welfare of cats and building a compassionate community dedicated to their care.
        </p>
        <button class="adopt-btn">Adopt Now</button>
    </div>
    <div class="hero-image">
        <!-- Replace with your cat illustration -->
        <img src="{{ asset('images/cat-hero-illustration.png') }}" alt="Hero Cats" />
    </div>
</section>

<!-- What is PawPortal Rescue ??? -->
<section class="intro-section">
    <h2>What is PawPortal Rescue ???</h2>
    <div class="intro-bubble">
        <p>
            PawPortal Rescue is an innovative online platform dedicated to connecting cats in need with loving homes
            and providing essential support services. It facilitates cat adoption, manages cat-related emergencies,
            oversees donations, and coordinates temporary hosting for cats. Through a user-friendly interface,
            PawPortal Rescue ensures a streamlined process for adopters, volunteers, and donors, while maintaining
            a high standard of care and transparency.
        </p>
        <button class="read-more-btn">Read More</button>
    </div>
</section>

<!-- Services -->
<section class="services-section">
    <h2>Services</h2>
    <p>Some services provided by our portal:</p>
    <div class="services-container">
        <!-- Service Card 1 -->
        <div class="service-card service1">
            <h3>Adoption</h3>
            <p>Learn more</p>
            <span class="arrow">➜</span>
            <!-- Replace with your cat illustration -->
            <img src="{{ asset('images/cat-adoption.png') }}" alt="Adoption Icon" />
        </div>
        <!-- Service Card 2 -->
        <div class="service-card service2">
            <h3>Donation</h3>
            <p>Learn more</p>
            <span class="arrow">➜</span>
            <img src="{{ asset('images/cat-donation.png') }}" alt="Donation Icon" />
        </div>
        <!-- Service Card 3 -->
        <div class="service-card service3">
            <h3>Emergency Reporting</h3>
            <p>Learn more</p>
            <span class="arrow">➜</span>
            <img src="{{ asset('images/cat-emergency.png') }}" alt="Emergency Icon" />
        </div>
        <!-- Service Card 4 -->
        <div class="service-card service4">
            <h3>Temporary Hosting</h3>
            <p>Learn more</p>
            <span class="arrow">➜</span>
            <img src="{{ asset('images/cat-hosting.png') }}" alt="Hosting Icon" />
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="team-section">
    <h2>Our Team</h2>
    <p>Presenting our members behind the scenes of PawPortal Rescue</p>
    <div class="team-cards">
        <!-- Team Card 1 -->
        <div class="team-card">
            <div class="profile-pic">
                <!-- Placeholder for the profile image (X) -->
                <img src="{{ asset('images/profile-default.png') }}" alt="Member 1">
            </div>
            <h3>John Smith</h3>
            <p>CEO and Founder</p>
            <p class="bio">10+ years of experience in digital marketing. Expertise in SEO, PPC, and content strategy.</p>
        </div>
        <!-- Team Card 2 -->
        <div class="team-card">
            <div class="profile-pic">
                <img src="{{ asset('images/profile-default.png') }}" alt="Member 2">
            </div>
            <h3>Jane Doe</h3>
            <p>Director of Operations</p>
            <p class="bio">7+ years of experience in project management and team leadership. Strong organizational and communication skills.</p>
        </div>
        <!-- Team Card 3 -->
        <div class="team-card">
            <div class="profile-pic">
                <img src="{{ asset('images/profile-default.png') }}" alt="Member 3">
            </div>
            <h3>Michael Brown</h3>
            <p>Senior SEO Specialist</p>
            <p class="bio">5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization.</p>
        </div>
    </div>
</section>

<!-- Review -->
<section class="review-section">
    <h2>Review</h2>
    <div class="review-box">
        <blockquote>
            “I recently used PawPortal Rescue to report a cat-related emergency, and the response was immediate and professional.
            The platform’s ability to connect users with local caregivers is impressive. Additionally, the donation
            management system is straightforward, making it easy to contribute to a great cause. PawPortal is a must-visit
            for all cat enthusiasts looking to make a difference.”
        </blockquote>
        <p class="review-author">John Smith<br>PawPortal user</p>
    </div>
</section>

<!-- Contact Us -->
<section class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-form-container">
        <div class="contact-options">
            <label><input type="radio" name="reason" checked> Say Hi</label>
            <label><input type="radio" name="reason"> Get a Quote</label>
        </div>
        <form class="contact-form">
            <label for="contactName">Name</label>
            <input type="text" id="contactName" name="contactName">

            <label for="contactEmail">Email*</label>
            <input type="email" id="contactEmail" name="contactEmail">

            <label for="contactMessage">Message*</label>
            <textarea id="contactMessage" name="contactMessage" rows="4"></textarea>

            <button type="submit" class="send-msg-btn">Send Message</button>
        </form>
        <!-- Cat illustration on the right -->
        <div class="contact-cat-illustration">
            <img src="{{ asset('images/contact-cat.png') }}" alt="Contact Cat" />
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <div class="footer-left">
        <h3>Contact us:</h3>
        <p>Email: info@pawportal.com</p>
        <p>Phone: 555-567-8901</p>
        <p>Address: 1234 Main St<br>Moonstone City, Selangor, Malaysia.</p>
    </div>
    <div class="footer-mid">
        <h4>PawPortal</h4>
        <ul class="footer-links">
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Use Cases</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
    <div class="footer-right">
        <label for="subscribe-email">Subscribe to update</label>
        <div class="subscribe-wrap">
            <input type="email" id="subscribe-email" placeholder="Email">
            <button class="subscribe-btn">Subscribe to update</button>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 PawPortal. All Rights Reserved.</p>
        <a href="#">Privacy Policy</a>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/icon-linkedin.png') }}" alt="LinkedIn"></a>
            <a href="#"><img src="{{ asset('images/icon-facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('images/icon-twitter.png') }}" alt="Twitter"></a>
        </div>
    </div>
</footer>
@endsection
