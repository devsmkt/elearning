<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | Artisan Barber Academy</title>
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap"
    rel="stylesheet"
  />
  <style>
    :root {
      --background: #fffff8;
      --foreground: #111;
      --font-serif: "Newsreader", serif;
    }
    body {
      background: var(--background);
      color: var(--foreground);
      font-family: var(--font-serif);
    }
  </style>
</head>

<body class="antialiased">
  <!-- Navigation -->
  <nav class="flex items-center justify-between border-b border-black px-8 py-4">
    <div>
      <a href="/">
        <svg width="100" height="40" viewBox="0 0 200 60" xmlns="http://www.w3.org/2000/svg">
          <rect width="200" height="60" fill="black" />
          <text
            x="100"
            y="35"
            fill="white"
            text-anchor="middle"
            font-family="sans-serif"
            font-size="18"
          >
            Artisan
          </text>
        </svg>
      </a>
    </div>

    <div class="hidden md:flex space-x-8 text-sm uppercase">
      <a href="/about" class="hover:underline">About</a>
      <a href="/courses" class="hover:underline">Courses</a>
      <a href="/membership" class="hover:underline">Membership</a>
    </div>

    <div class="flex items-center gap-4 text-sm">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="underline hover:text-gray-700">Logout</button>
      </form>
    </div>
  </nav>

  <!-- Dashboard -->
  <main class="max-w-6xl mx-auto px-8 py-16">
    <h1 class="text-3xl font-bold mb-2">Admin Dashboard</h1>
    <p class="text-sm mb-8">
      Manage users, courses, and contributions across the academy.
    </p>

    <!-- Tabs -->
    <div class="border-b border-black flex space-x-6 mb-10">
      <button class="border border-black border-b-0 bg-black text-white px-4 py-2 text-sm font-medium">
        Overview
      </button>
      <a href="#" class="px-4 py-2 text-sm font-medium hover:underline">Users</a>
      <a href="#" class="px-4 py-2 text-sm font-medium hover:underline">Courses</a>
      <a href="#" class="px-4 py-2 text-sm font-medium hover:underline">Donations</a>
    </div>

    <!-- Overview -->
    <section class="space-y-8">
      <h2 class="text-lg font-semibold flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 3v18h18" />
        </svg>
        Overview
      </h2>

      <div class="grid md:grid-cols-4 gap-6">
        <div class="border border-black p-6 text-center">
          <div class="text-3xl font-bold mb-2">328</div>
          <p class="text-sm">Active Users</p>
        </div>

        <div class="border border-black p-6 text-center">
          <div class="text-3xl font-bold mb-2">6</div>
          <p class="text-sm">Courses</p>
        </div>

        <div class="border border-black p-6 text-center">
          <div class="text-3xl font-bold mb-2">14</div>
          <p class="text-sm">Articles</p>
        </div>

        <div class="border border-black p-6 text-center">
          <div class="text-3xl font-bold mb-2">$8,430</div>
          <p class="text-sm">Donations</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-black px-8 py-12 font-serif text-black mt-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
      <div class="flex flex-col mr-8">
        <a href="/">
          <svg width="75" height="40" viewBox="0 0 200 60" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="60" fill="black" />
            <text
              x="100"
              y="35"
              fill="white"
              text-anchor="middle"
              font-family="sans-serif"
              font-size="16"
            >
              Artisan
            </text>
          </svg>
        </a>
        <p class="text-sm text-gray-600 mt-4">
          Elevating the craft of barbering with education, mentorship, and
          community. Learn at your own pace, anywhere.
        </p>
      </div>

      <div class="flex flex-col space-y-2 text-sm">
        <h3 class="italic font-semibold">Explore</h3>
        <a href="/courses" class="hover:underline">Courses</a>
        <a href="/about" class="hover:underline">About</a>
        <a href="/membership" class="hover:underline">Membership</a>
        <a href="/gifts" class="hover:underline">Gifts</a>
      </div>

      <div class="flex flex-col space-y-2 text-sm">
        <h3 class="italic font-semibold">Resources</h3>
        <a href="/privacy" class="hover:underline">Privacy</a>
        <a href="/terms" class="hover:underline">Terms</a>
        <a href="/support" class="hover:underline">Support</a>
        <a href="/social-impact" class="hover:underline">Social Impact</a>
      </div>

      <div class="flex flex-col items-start md:items-end space-y-4">
        <div class="flex gap-4">
          <a href="#" aria-label="Instagram" class="hover:text-gray-600">Instagram</a>
          <a href="#" aria-label="Facebook" class="hover:text-gray-600">Facebook</a>
          <a href="#" aria-label="Twitter" class="hover:text-gray-600">Twitter</a>
        </div>
        <p class="text-xs text-gray-500">
          © 2025 Artisan Barber Academy. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</body>
</html>
