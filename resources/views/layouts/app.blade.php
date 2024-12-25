<!-- Example: In layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PawPortal - @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="site-header">
  <div class="header-inner">
    <!-- Left: Logo / Name -->
    <div class="header-logo">
      <!-- If you have a PawPortal text or an image logo, use one of these:
           1) Just text: -->
      <a href="{{ route('home') }}" class="brand-text">PawPortal</a>

      <!-- 2) Or an image:
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/pawportal-logo.png') }}" alt="PawPortal Logo">
      </a>
      -->
    </div>

    <!-- Middle: Nav links -->
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('adoption.index') }}">Adoption</a></li>
                <li><a href="{{ route('donation.index') }}">Donation</a></li>
                <li><a href="{{ route('hosting.index') }}">Hosting</a></li>
                <li><a href="{{ route('rescue.index') }}">Rescue</a></li>
            </ul>
        </nav>

    <!-- Right: Auth links (Log In / Sign Up) -->
    <div class="auth-links">
      <a href="{{ route('login') }}" class="login-link">Log In</a>
      <a href="{{ route('signup') }}" class="signup-link">Sign Up</a>
    </div>
  </div>
</header>

<main>
  @yield('content')
</main>

<!-- Footer here if desired -->
</body>
</html>
