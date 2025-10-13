<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Login | Artisan Barber Academy</title>
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
          <svg
            width="100"
            height="40"
            viewBox="0 0 200 60"
            xmlns="http://www.w3.org/2000/svg"
          >
            <rect width="200" height="60" fill="black" />
            <text
              x="100"
              y="35"
              fill="white"
              text-anchor="middle"
              font-family="sans-serif"
              font-size="18"
            >
              Academy Logo
            </text>
          </svg>
        </a>
      </div>

      <div class="hidden md:flex space-x-8 text-sm uppercase">
        <a href="/about" class="hover:underline">About</a>
        <a href="/courses" class="hover:underline">Courses</a>
        <a href="/membership" class="hover:underline">Membership</a>
      </div>

      <div class="flex items-center gap-4">
        <a href="/student/login" class="text-sm font-medium underline">
          Log In
        </a>
        <a
          href="/student/signup"
          class="border border-black bg-black text-white px-4 py-2 text-sm font-medium hover:bg-gray-900"
        >
          Sign Up
        </a>
      </div>
    </nav>

    <!-- Login Section -->
    <main class="px-8 py-16 font-serif text-black max-w-md mx-auto">
      <h1 class="text-3xl font-bold mb-8">Student Login</h1>

      <form class="flex flex-col space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium">Email</label>
          <input
            id="email"
            type="email"
            class="mt-2 block w-full border border-black px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-black"
            placeholder="you@example.com"
          />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium">Password</label>
          <input
            id="password"
            type="password"
            class="mt-2 block w-full border border-black px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-black"
            placeholder="••••••••"
          />
        </div>

        <button
          type="submit"
          class="w-full py-3 border border-black bg-black text-white text-sm font-medium hover:bg-gray-900"
          onclick="event.preventDefault(); window.location.href='/student/dashboard';"
        >
          Log In
        </button>
      </form>
    </main>

    <!-- Footer -->
    <footer class="border-t border-black px-8 py-12 font-serif text-black">
      <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
        <div class="flex flex-col mr-8">
          <a href="/">
            <svg
              width="75"
              height="40"
              viewBox="0 0 200 60"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="200" height="60" fill="black" />
              <text
                x="100"
                y="35"
                fill="white"
                text-anchor="middle"
                font-family="sans-serif"
                font-size="16"
              >
                Academy Logo
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
            <a href="#" aria-label="Instagram" class="hover:text-gray-600">
              Instagram
            </a>
            <a href="#" aria-label="Facebook" class="hover:text-gray-600">
              Facebook
            </a>
            <a href="#" aria-label="Twitter" class="hover:text-gray-600">
              Twitter
            </a>
          </div>
          <p class="text-xs text-gray-500">
            © 2025 Artisan Barber Academy. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
