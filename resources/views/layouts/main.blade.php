<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{ asset('assets/images/logo.svg') }}"
                                                                          alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Категории</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth()
                        {{-- user --}}
                        @can('personal-cabinet-link', auth()->user())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                        </li>
                        @endcan
                        {{-- admin  --}}
                        @can('admin-panel-link', auth()->user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.main.index') }}">Админ панель</a>
                            </li>
                        @endcan
                    @endauth

                    @guest()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Скоро приложение в</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success">
                    <img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios" class="mr-2">
                    App Store
                </button>
                <button class="btn btn-success">
                    <img src="{{ asset('assets/images/android@1x.svg') }}" alt="android" class="mr-2">
                    Google Play
                </button>
            </div>
            <p class="banner-text">Читайте любимый блог как на сайте так и в приложении на своих устройствах</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-4">
                <a href="{{ route('main.index') }}" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">company@name.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-4">
                <nav class="footer-nav">
                    <a href="{{ route('post.index') }}" class="nav-link">Блог</a>
                    <a href="{{ route('category.index') }}" class="nav-link">Категории</a>
                    <a href="#!" class="nav-link">Android-приложение</a>
                    <a href="#!" class="nav-link">iOS-приложение</a>
                </nav>
            </div>
            <div class="col-md-4">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="{{ route('register') }}" class="nav-link">Регистрация</a>
                    <a href="{{ route('contact.index') }}" class="nav-link">О нас</a>
                    <a href="{{ route('about.index') }}" class="nav-link">Контакты</a>
                </nav>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Edica. {{ \Carbon\Carbon::now()->year }} <a class="text-reset">bootstrap</a> . All rights  not protected)</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
