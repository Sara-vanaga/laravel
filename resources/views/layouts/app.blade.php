<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Sidebar -->
        @auth
        <div class="sidebar">
            <ul class="sidebar-nav">
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-home me-2"></i>
                        داشبورد
                    </a>
                </li>
                <li class="nav-item {{ Request::is('accounts*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-wallet me-2"></i>
                        حساب‌ها
                    </a>
                </li>
                <li class="nav-item {{ Request::is('transactions*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-exchange-alt me-2"></i>
                        تراکنش‌ها
                    </a>
                </li>
                <li class="nav-item {{ Request::is('reports*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-chart-bar me-2"></i>
                        گزارشات
                    </a>
                </li>
                <li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-cog me-2"></i>
                        تنظیمات
                    </a>
                </li>
            </ul>
        </div>
        @endauth

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @auth
                <button class="navbar-toggler sidebar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @endauth
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">صفحه اصلی</a>
                        </li>
                    </ul>

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">ورود</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-4 {{ Auth::check() ? 'main-content' : '' }}">
            @yield('content')
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggler = document.querySelector('.sidebar-toggler');
        if (sidebarToggler) {
            sidebarToggler.addEventListener('click', function() {
                document.querySelector('.sidebar').classList.toggle('active');
            });
        }
    });
    </script>
</body>
</html>