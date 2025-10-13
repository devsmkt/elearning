<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artisan Barber Academy</title>
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
          <!-- Placeholder logo -->
         <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/academy-logo.svg') }}"
                alt="Artisan Barber Academy Logo"
                class="h-10 w-auto"
            />
            </a>
        </a>
      </div>

      <div class="hidden md:flex space-x-8 text-sm uppercase">
        <a href="/about" class="hover:underline">About</a>
        <a href="/courses" class="hover:underline">Courses</a>
        <a href="/membership" class="hover:underline">Membership</a>
      </div>

      <div class="flex items-center gap-4">
        <a href="/login" class="text-sm font-medium hover:underline">
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

    <main>
      <!-- Hero Section -->
      <section class="relative px-8 py-24 border-b border-black text-center">
        <div class="max-w-4xl mx-auto">
          <h1 class="text-xl mb-8 font-light italic leading-relaxed">
            Learn the craft, grow your business, and join a community of barbers
            building the future of the trade. From fundamentals to advanced
            mastery, we teach barbering as an art, a skill, and a career.
          </h1>
          <p class="text-3xl font-extrabold mb-12 tracking-tight">
            Barbering as an art, a skill, and a career. Hell yeah.
          </p>
          <a
            href="/courses"
            class="border border-black bg-black text-white px-6 py-3 text-sm font-medium hover:bg-gray-900"
          >
            Explore Courses
          </a>
        </div>
      </section>

      <!-- Entrepreneur Membership -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-5xl mx-auto">
          <h2 class="text-3xl font-extrabold mb-6">
            Entrepreneur Membership
          </h2>
          <p class="text-lg mb-8 max-w-2xl font-light leading-relaxed">
            Designed for barbers who want to go beyond the chair and build a
            business. Learn how to launch, brand, and scale your own barbershop
            with monthly mentorship and a library of business-focused modules.
          </p>
          <div class="border border-black p-6">
            <p class="text-2xl font-black mb-2">$49/month or $470/year</p>
            <ul class="list-disc ml-6 space-y-2 text-sm mb-6 font-medium">
              <li>Shop setup & finances</li>
              <li>Branding & marketing strategies</li>
              <li>Team building & leadership</li>
              <li>Client retention & growth</li>
            </ul>
            <a
              href="/membership"
              class="border border-black bg-black text-white px-4 py-2 text-sm hover:bg-gray-900"
            >
              Join Membership
            </a>
          </div>
        </div>
      </section>

      <!-- Barber Courses -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="text-3xl font-bold mb-4">The Artisan Progression</h2>
          <p class="text-lg font-light">
            A three-part journey designed to transform beginners into confident
            professionals. Each stage builds on the last — from mastering the
            fundamentals to defining your signature style behind the chair.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 text-left">
          <div class="border border-black p-6 flex flex-col">
            <h3 class="text-xl font-bold mb-2">Foundation</h3>
            <p class="text-sm mb-4 italic">
              Learn the craft. Build your confidence.
            </p>
            <p class="text-sm mb-6">
              Get grounded in the essentials of barbering — from tool handling
              and cutting techniques to understanding face shapes, fades, and
              client service.
            </p>
            <a
              href="/courses/foundation"
              class="mt-auto border border-black px-4 py-2 text-sm hover:bg-gray-100"
            >
              Explore Foundation
            </a>
          </div>

          <div class="border border-black p-6 flex flex-col bg-gray-50 relative">
            <div class="absolute -top-3 left-6">
              <span
                class="bg-black text-white px-3 py-1 text-xs font-semibold uppercase"
              >
                Most Popular
              </span>
            </div>
            <h3 class="text-xl font-bold mb-2">Refinement</h3>
            <p class="text-sm mb-4 italic">
              Sharpen your eye. Strengthen your flow.
            </p>
            <p class="text-sm mb-6">
              Take your skills to the next level with advanced techniques,
              styling precision, and workflow discipline.
            </p>
            <a
              href="/courses/refinement"
              class="mt-auto border border-black bg-black text-white px-4 py-2 text-sm hover:bg-gray-900"
            >
              Explore Refinement
            </a>
          </div>

          <div class="border border-black p-6 flex flex-col">
            <h3 class="text-xl font-bold mb-2">Mastery</h3>
            <p class="text-sm mb-4 italic">
              Define your style. Lead with excellence.
            </p>
            <p class="text-sm mb-6">
              Develop your personal artistry and professional identity. Learn
              the nuances that separate good barbers from great ones.
            </p>
            <a
              href="/courses/mastery"
              class="mt-auto border border-black px-4 py-2 text-sm hover:bg-gray-100"
            >
              Explore Mastery
            </a>
          </div>
        </div>
      </section>

      <!-- What’s Included -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-5xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-8">What’s Included</h2>
          <div class="grid md:grid-cols-4 gap-8 text-sm">
            <div>
              <p class="font-medium">Access to a supportive learning community</p>
              <p class="text-xs italic text-gray-600">Connect, share, grow</p>
            </div>
            <div>
              <p class="font-medium">Step-by-step video lessons & resources</p>
              <p class="text-xs italic text-gray-600">Learn at your own pace</p>
            </div>
            <div>
              <p class="font-medium">Personalized feedback & mentorship</p>
              <p class="text-xs italic text-gray-600">Direct guidance</p>
            </div>
            <div>
              <p class="font-medium">Certificates upon completion</p>
              <p class="text-xs italic text-gray-600">Showcase your skills</p>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Footer -->
      <section class="px-8 py-16 bg-black text-white text-center">
        <h2 class="text-3xl font-extrabold mb-6 uppercase">
          Join the Academy Today
        </h2>
        <p class="mb-8 max-w-xl mx-auto text-lg font-light leading-relaxed">
          Whether you’re just starting out, ready to refine your craft, or
          building a barbershop business, Artisan Barber Academy has a course
          for you.
        </p>
        <div class="flex justify-center gap-4">
          <a
            href="/membership"
            class="border border-white bg-white text-black px-6 py-3 text-sm font-medium hover:bg-gray-200"
          >
            Join Membership
          </a>
          <a
            href="/courses"
            class="border border-white px-6 py-3 text-sm font-medium hover:bg-gray-800"
          >
            View Courses
          </a>
        </div>
      </section>
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
