<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar">
        <div class="nav-left">
            <span class="logo">📚 Book Shop</span>

            <a href="{{ route('products.index') }}">Store</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile.edit') }}">Profile</a>

        </div>

        <div class="nav-right">

            @auth
            <span class="nav-username">
                {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout-btn">Logout</button>
            </form>
            @endauth

            @guest
            <a class="login-btn" href="{{ route('login') }}">Login</a>
            <a class="register-btn" href="{{ route('register') }}">Register</a>
            @endguest

        </div>
    </nav>
    <div class="main-content">
        @yield('content')
    </div>
</body>

</html>