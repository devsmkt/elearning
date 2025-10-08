<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'FaithLearn') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    /* Smooth fade-in */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease-out;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Course progress bar */
    .progress-bar {
      transition: width 1s ease-in-out;
    }

    /* Floating Language Button */
    #languageSelector {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background: #0d6efd;
      color: white;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">FaithLearn</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#library">Library</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
          <li class="nav-item"><a class="nav-link" href="#donate">Donate</a></li>
          <li class="nav-item"><a class="btn btn-outline-primary ms-3" href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="bg-light text-center text-dark py-5 fade-in">
    <div class="container">
      <h1 class="display-4 fw-bold">Empowering Faith Through Learning</h1>
      <p class="lead mb-4">Access courses, media, and spiritual resources from anywhere in the world.</p>
      <a href="#courses" class="btn btn-primary btn-lg">Start Learning</a>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="courses" class="py-5 fade-in">
    <div class="container">
      <h2 class="text-center mb-5">Your Learning Progress</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <h5 class="fw-bold">Bible Studies Course</h5>
              <div class="progress mb-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" id="courseProgress"></div>
              </div>
              <p id="progressText">Loading progress...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Library Section -->
  <section id="library" class="bg-light py-5 fade-in">
    <div class="container text-center">
      <h2 class="mb-5">Explore Our Digital Library</h2>
      <p class="lead">Access free books, articles, and multimedia resources curated for all ages.</p>
      <a href="#" class="btn btn-outline-primary">Browse Library</a>
    </div>
  </section>

  <!-- News Section -->
  <section id="news" class="py-5 fade-in">
    <div class="container">
      <h2 class="text-center mb-5">Latest News & Updates</h2>
      <div class="row" id="newsContainer">
        <p class="text-center">Loading news...</p>
      </div>
    </div>
  </section>

  <!-- Donation CTA -->
  <section id="donate" class="text-center py-5 bg-primary text-white fade-in">
    <div class="container">
      <h2 class="fw-bold mb-3">Support Our Mission</h2>
      <p class="mb-4">Your generous donations help us expand our educational programs and media outreach.</p>
      <a href="#" class="btn btn-light btn-lg">Donate Now</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4 text-center">
    <div class="container">
      <p class="mb-1">© {{ date('Y') }} FaithLearn. All rights reserved.</p>
      <p class="small">Built with ❤️ using Laravel & Bootstrap.</p>
    </div>
  </footer>

  <!-- Floating Language Switcher -->
  <div id="languageSelector" title="Switch Language">🌍</div>

  <!-- Scripts -->
  <script>
    // Smooth fade-in on scroll
    const fadeElements = document.querySelectorAll('.fade-in');
    window.addEventListener('scroll', () => {
      fadeElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) el.classList.add('visible');
      });
    });

    // Course Progress Simulation
    document.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {
        const progressBar = document.getElementById('courseProgress');
        const progressText = document.getElementById('progressText');
        let progress = 0;
        const interval = setInterval(() => {
          progress += 10;
          progressBar.style.width = progress + '%';
          progressText.innerText = progress + '% Complete';
          if (progress >= 100) clearInterval(interval);
        }, 300);
      }, 500);
    });

    // Dynamic News Loader (Example JSON)
    const newsData = [
      { title: "New Course: The Power of Faith", text: "Discover our latest spiritual education module.", image: "news1.jpg" },
      { title: "Youth Convention 2025", text: "Join thousands of young learners at our annual faith event.", image: "event1.jpg" }
    ];

    const newsContainer = document.getElementById('newsContainer');
    window.addEventListener('load', () => {
      newsContainer.innerHTML = "";
      newsData.forEach(news => {
        const card = document.createElement('div');
        card.classList.add('col-md-6', 'mb-4');
        card.innerHTML = `
          <div class="card shadow-sm h-100">
            <img src="${news.image}" class="card-img-top" alt="${news.title}">
            <div class="card-body">
              <h5 class="card-title">${news.title}</h5>
              <p class="card-text">${news.text}</p>
              <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>`;
        newsContainer.appendChild(card);
      });
    });

    // Language Switcher
    const languages = ["English", "Spanish", "French"];
    let langIndex = 0;
    document.getElementById('languageSelector').addEventListener('click', () => {
      langIndex = (langIndex + 1) % languages.length;
      alert("Language switched to: " + languages[langIndex]);
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>
</body>
</html>

