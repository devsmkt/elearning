<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FaithLearn - Educational and faith-based media platform for spiritual growth and learning">
    <title>@yield('title', 'FaithLearn - Enlighten Your Mind, Nurture Your Faith')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    @stack('styles')

    <style>
        :root {
            --primary-color: #2c5282;
            --secondary-color: #d4af37;
            --accent-color: #e53e3e;
            --text-dark: #2d3748;
            --text-light: #718096;
            --bg-light: #f7fafc;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            scroll-behavior: smooth;
            padding-top: 76px; /* Height of fixed navbar */
        }

        h1, h2, h3, h4, h5, .display-5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        /* Modern Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover:after {
            width: 70%;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(44, 82, 130, 0.9), rgba(229, 62, 62, 0.8)),
                        url('https://picsum.photos/seed/faithlearn/1920/800.jpg') center/cover;
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: -76px; /* Offset the body padding */
            padding-top: 76px; /* Add back the space for navbar */
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 20s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Modern Buttons */
        .btn {
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-100%);
            transition: all 0.3s ease;
            z-index: -1;
        }

        .btn:hover:before {
            transform: translateX(0);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
        }

        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.7);
            color: white;
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: white;
        }

        /* Course Cards */
        .course-card {
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 2rem;
        }

        .progress {
            height: 8px;
            background-color: #e2e8f0;
            border-radius: 10px;
        }

        .progress-bar {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width 1s ease-in-out;
            border-radius: 10px;
        }

        /* Library Section */
        .library-item {
            transition: all 0.3s ease;
            cursor: pointer;
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            box-shadow: 5px 5px 15px #d1d5db, -5px -5px 15px #ffffff;
        }

        .library-item:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px #d1d5db, -5px -5px 15px #ffffff;
        }

        /* News Section */
        .news-card {
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .news-card img {
            transition: all 0.5s ease;
        }

        .news-card:hover img {
            transform: scale(1.1);
        }

        /* Donation CTA */
        .donation-cta {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        .donation-cta::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .donation-amount {
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        /* Floating Language Switcher */
        .language-switcher {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 5px;
            transition: all 0.3s ease;
        }

        .language-switcher:hover {
            transform: scale(1.05);
        }

        .language-btn {
            border: none;
            background: transparent;
            padding: 8px 12px;
            border-radius: 50%;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .language-btn.active {
            background: var(--primary-color);
            color: white;
        }

        /* Fade In Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1a202c, #2d3748);
            color: white;
            border-radius: 20px 20px 0 0;
            margin-top: 3rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer a:hover {
            color: white;
            transform: translateX(5px);
            display: inline-block;
        }

        footer h5 {
            color: white;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        footer h5:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }

        footer .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
        }

        footer .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        footer .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: var(--secondary-color);
            color: white;
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }

        /* Social Icons */
        footer .bi {
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        footer .bi:hover {
            color: var(--secondary-color);
            transform: translateY(-3px);
        }

        /* Accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                min-height: 80vh;
            }

            .language-switcher {
                bottom: 20px;
                right: 20px;
            }

            .course-card, .news-card {
                margin-bottom: 1.5rem;
            }
        }

        /* RTL Support */
        [dir="rtl"] .hero-section {
            background-position: right center;
        }

        [dir="rtl"] .language-switcher {
            right: auto;
            left: 30px;
        }

        [dir="rtl"] footer a:hover {
            transform: translateX(-5px);
        }

        [dir="rtl"] footer h5:after {
            left: auto;
            right: 0;
        }
    </style>
</head>
<body>
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="sr-only sr-only-focusable">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" aria-label="FaithLearn Home">
                <i class="bi bi-book-half me-2" style="font-size: 1.5rem;"></i>
                <span>FaithLearn</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">{{ __('Courses') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#library">{{ __('Library') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">{{ __('News') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#donate">{{ __('Donate') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">{{ __('Contact') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" role="banner" aria-labelledby="hero-title">
        <div class="floating-shapes">
            <div class="shape" style="top: 10%; left: 10%; width: 100px; height: 100px; background: white; border-radius: 50%;"></div>
            <div class="shape" style="top: 60%; right: 20%; width: 150px; height: 150px; background: white; border-radius: 30%;"></div>
            <div class="shape" style="bottom: 20%; left: 30%; width: 80px; height: 80px; background: white; border-radius: 20%;"></div>
        </div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center hero-content animate__animated animate__fadeInUp">
                    <h1 id="hero-title" class="hero-title text-white mb-4">
                        {{ __('Enlighten Your Mind, Nurture Your Faith') }}
                    </h1>
                    <p class="hero-subtitle text-white mb-5">
                        {{ __('Discover a world of spiritual knowledge and educational resources designed to deepen your understanding and strengthen your faith journey.') }}
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="#courses" class="btn btn-light btn-lg" role="button">
                            <i class="bi bi-play-circle me-2"></i>{{ __('Start Learning') }}
                        </a>
                        <a href="#donate" class="btn btn-outline-light btn-lg" role="button">
                            <i class="bi bi-heart me-2"></i>{{ __('Support Us') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Courses Section -->
        <section id="courses" class="py-5 bg-light" aria-labelledby="courses-title">
            <div class="container">
                <div class="text-center mb-5 fade-in">
                    <h2 id="courses-title" class="display-5 fw-bold mb-3">{{ __('Featured Courses') }}</h2>
                    <p class="lead text-muted">{{ __('Embark on a journey of spiritual and intellectual growth') }}</p>
                </div>

                <div class="row g-4">
                    @foreach([
                        [
                            'title' => 'Understanding Scripture',
                            'description' => 'Deep dive into the sacred texts with expert guidance',
                            'progress' => 65,
                            'lessons' => 24,
                            'icon' => 'bi-book'
                        ],
                        [
                            'title' => 'Prayer & Meditation',
                            'description' => 'Learn techniques for meaningful spiritual practice',
                            'progress' => 40,
                            'lessons' => 18,
                            'icon' => 'bi-heart'
                        ],
                        [
                            'title' => 'Faith in Modern Life',
                            'description' => 'Applying ancient wisdom to contemporary challenges',
                            'progress' => 80,
                            'lessons' => 32,
                            'icon' => 'bi-lightbulb'
                        ]
                    ] as $course)
                    <div class="col-md-6 col-lg-4 fade-in">
                        <div class="card course-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="{{ $course['icon'] }} text-primary me-3" style="font-size: 2rem;"></i>
                                    <h5 class="card-title mb-0">{{ __($course['title']) }}</h5>
                                </div>
                                <p class="card-text text-muted mb-4">{{ __($course['description']) }}</p>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <small class="text-muted">{{ __('Progress') }}</small>
                                        <small class="text-muted">{{ $course['progress'] }}%</small>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="{{ $course['progress'] }}"
                                         aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%;" data-progress="{{ $course['progress'] }}"></div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i>{{ $course['lessons'] }} {{ __('Lessons') }}
                                    </small>
                                    <button class="btn btn-sm btn-primary" aria-label="{{ __('Continue course') }}">
                                        {{ __('Continue') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Online Library Section -->
        <section id="library" class="py-5" aria-labelledby="library-title">
            <div class="container">
                <div class="text-center mb-5 fade-in">
                    <h2 id="library-title" class="display-5 fw-bold mb-3">{{ __('Online Library') }}</h2>
                    <p class="lead text-muted">{{ __('Access our extensive collection of spiritual resources') }}</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-8 mx-auto">
                        <div class="row g-3">
                            @foreach([
                                ['title' => 'Holy Books', 'icon' => 'bi-book-half', 'count' => 156],
                                ['title' => 'Audio Lectures', 'icon' => 'bi-mic', 'count' => 342],
                                ['title' => 'Video Series', 'icon' => 'bi-camera-video', 'count' => 89],
                                ['title' => 'Study Guides', 'icon' => 'bi-file-earmark-text', 'count' => 224]
                            ] as $item)
                            <div class="col-6 col-md-3 fade-in">
                                <div class="library-item p-4 text-center">
                                    <i class="{{ $item['icon'] }} text-primary mb-3" style="font-size: 2.5rem;"></i>
                                    <h6 class="fw-bold mb-1">{{ __($item['title']) }}</h6>
                                    <small class="text-muted">{{ $item['count'] }} {{ __('Items') }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="text-center mt-4 fade-in">
                            <button class="btn btn-outline-primary btn-lg" aria-label="{{ __('Browse full library') }}">
                                <i class="bi bi-search me-2"></i>{{ __('Browse Full Library') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section id="news" class="py-5 bg-light" aria-labelledby="news-title">
            <div class="container">
                <div class="text-center mb-5 fade-in">
                    <h2 id="news-title" class="display-5 fw-bold mb-3">{{ __('Latest News & Updates') }}</h2>
                    <p class="lead text-muted">{{ __('Stay informed about our community and events') }}</p>
                </div>

                <div class="row g-4" id="news-container">
                    <!-- News items will be loaded dynamically here -->
                    <div class="col-12 text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">{{ __('Loading...') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donation CTA Section -->
        <section id="donate" class="donation-cta py-5" aria-labelledby="donate-title">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center text-white fade-in">
                        <h2 id="donate-title" class="display-5 fw-bold mb-4">{{ __('Support Our Mission') }}</h2>
                        <p class="lead mb-5">
                            {{ __('Your generous contribution helps us continue providing quality spiritual education to communities worldwide.') }}
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-3">
                                <button class="btn btn-light w-100 donation-amount" data-amount="25">$25</button>
                            </div>
                            <div class="col-6 col-md-3">
                                <button class="btn btn-light w-100 donation-amount" data-amount="50">$50</button>
                            </div>
                            <div class="col-6 col-md-3">
                                <button class="btn btn-light w-100 donation-amount" data-amount="100">$100</button>
                            </div>
                            <div class="col-6 col-md-3">
                                <button class="btn btn-light w-100 donation-amount" data-amount="other">{{ __('Other') }}</button>
                            </div>
                        </div>

                        <button class="btn btn-warning btn-lg px-5" id="donate-now" aria-label="{{ __('Donate now') }}">
                            <i class="bi bi-heart-fill me-2"></i>{{ __('Donate Now') }}
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-5" role="contentinfo">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 fade-in">
                    <h5>{{ __('About FaithLearn') }}</h5>
                    <p class="text-white-50">
                        {{ __('We are dedicated to providing accessible spiritual education and resources to help individuals grow in their faith and understanding.') }}
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 fade-in">
                    <h5>{{ __('Quick Links') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('About Us') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Courses') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Library') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Events') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 fade-in">
                    <h5>{{ __('Support') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Help Center') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Contact Us') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Donate') }}</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ __('Volunteer') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 fade-in">
                    <h5>{{ __('Newsletter') }}</h5>
                    <p class="text-white-50 mb-3">{{ __('Subscribe to receive updates and spiritual insights') }}</p>
                    <form class="d-flex gap-2" role="form">
                        <input type="email" class="form-control" placeholder="{{ __('Your email') }}"
                               aria-label="{{ __('Email address') }}" required>
                        <button type="submit" class="btn btn-primary" aria-label="{{ __('Subscribe') }}">
                            <i class="bi bi-send"></i>
                        </button>
                    </form>
                </div>
            </div>

            <hr class="my-4 border-secondary">

            <div class="text-center text-white-50">
                <p class="mb-0">&copy; {{ date('Y') }} FaithLearn. {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>

    <!-- Floating Language Switcher -->
    <div class="language-switcher" role="group" aria-label="{{ __('Language switcher') }}">
        <button class="language-btn active" data-lang="en" aria-label="{{ __('English') }}" title="{{ __('English') }}">
            EN
        </button>
        <button class="language-btn" data-lang="es" aria-label="{{ __('Spanish') }}" title="{{ __('Spanish') }}">
            ES
        </button>
        <button class="language-btn" data-lang="fr" aria-label="{{ __('French') }}" title="{{ __('French') }}">
            FR
        </button>
        <button class="language-btn" data-lang="ar" aria-label="{{ __('Arabic') }}" title="{{ __('Arabic') }}">
            AR
        </button>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');

                    // Animate progress bars when visible
                    const progressBars = entry.target.querySelectorAll('.progress-bar');
                    progressBars.forEach(bar => {
                        const progress = bar.getAttribute('data-progress');
                        setTimeout(() => {
                            bar.style.width = progress + '%';
                        }, 200);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Load news dynamically
        async function loadNews() {
            try {
                // Simulating API call with mock data
                const mockNewsData = [
                    {
                        id: 1,
                        title: 'New Course Launch: Understanding Prophetic Traditions',
                        excerpt: 'Join us for an in-depth exploration of prophetic teachings and their relevance today.',
                        date: '2024-01-15',
                        image: 'https://picsum.photos/seed/news1/400/250.jpg'
                    },
                    {
                        id: 2,
                        title: 'Annual Spiritual Retreat Registration Open',
                        excerpt: 'Experience transformative learning and community at our upcoming retreat.',
                        date: '2024-01-10',
                        image: 'https://picsum.photos/seed/news2/400/250.jpg'
                    },
                    {
                        id: 3,
                        title: 'Community Service Initiative: Education for All',
                        excerpt: 'Learn about our latest initiative to bring spiritual education to underserved communities.',
                        date: '2024-01-05',
                        image: 'https://picsum.photos/seed/news3/400/250.jpg'
                    }
                ];

                // Simulate network delay
                await new Promise(resolve => setTimeout(resolve, 1000));

                const newsContainer = document.getElementById('news-container');
                newsContainer.innerHTML = '';

                mockNewsData.forEach((news, index) => {
                    const newsCard = `
                        <div class="col-md-6 col-lg-4 fade-in" style="animation-delay: ${index * 0.1}s">
                            <div class="card news-card h-100">
                                <div class="overflow-hidden">
                                    <img src="${news.image}" class="card-img-top" alt="${news.title}" loading="lazy">
                                </div>
                                <div class="card-body">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i>${new Date(news.date).toLocaleDateString()}
                                    </small>
                                    <h5 class="card-title mt-2">${news.title}</h5>
                                    <p class="card-text text-muted">${news.excerpt}</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        {{ __('Read More') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                    newsContainer.innerHTML += newsCard;
                });

                // Re-observe new elements
                document.querySelectorAll('#news-container .fade-in').forEach(el => {
                    observer.observe(el);
                });

            } catch (error) {
                console.error('Error loading news:', error);
                document.getElementById('news-container').innerHTML = `
                    <div class="col-12 text-center">
                        <p class="text-muted">{{ __('Unable to load news. Please try again later.') }}</p>
                    </div>
                `;
            }
        }

        // Load news when section is visible
        const newsSection = document.getElementById('news');
        const newsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.loaded) {
                    loadNews();
                    entry.target.dataset.loaded = 'true';
                }
            });
        }, { threshold: 0.1 });

        newsObserver.observe(newsSection);

        // Language switcher functionality
        document.querySelectorAll('.language-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const lang = this.getAttribute('data-lang');

                // Update active state
                document.querySelectorAll('.language-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // In a real application, this would make an API call to change the language
                console.log('Language changed to:', lang);

                // Show notification
                showNotification(`Language changed to ${lang.toUpperCase()}`);
            });
        });

        // Donation amount selection
        let selectedAmount = null;
        document.querySelectorAll('.donation-amount').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.donation-amount').forEach(b => {
                    b.classList.remove('btn-primary');
                    b.classList.add('btn-light');
                });

                this.classList.remove('btn-light');
                this.classList.add('btn-primary');

                selectedAmount = this.getAttribute('data-amount');
            });
        });

        // Donate button click
        document.getElementById('donate-now').addEventListener('click', function() {
            if (selectedAmount) {
                showNotification(`Thank you for your generous donation of $${selectedAmount}!`);
            } else {
                showNotification('Please select a donation amount.', 'warning');
            }
        });

        // Notification system
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} position-fixed top-0 start-50 translate-middle-x mt-3`;
            notification.style.zIndex = '9999';
            notification.setAttribute('role', 'alert');
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" aria-label="Close"></button>
            `;

            document.body.appendChild(notification);

            // Auto remove after 3 seconds
            setTimeout(() => {
                notification.remove();
            }, 3000);

            // Close button functionality
            notification.querySelector('.btn-close').addEventListener('click', () => {
                notification.remove();
            });
        }

        // Add hover effect to library items
        document.querySelectorAll('.library-item').forEach(item => {
            item.addEventListener('click', function() {
                showNotification('Opening library section...', 'info');
            });
        });

        // Newsletter form submission
        document.querySelector('footer form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            showNotification(`Thank you for subscribing with ${email}!`);
            this.reset();
        });
    </script>
</body>
</html>
