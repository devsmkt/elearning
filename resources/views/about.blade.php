<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Artisan Barber Academy</title>
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
        <a href="/student/login" class="text-sm font-medium hover:underline">
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

    <main className="px-8 py-16 font-serif text-black">
      <h1 className="text-4xl font-bold mb-12">About Barbering Academy</h1>

      {/* Story */}
      <section className="mb-16 max-w-3xl">
        <h2 className="text-2xl font-bold mb-4">Our Story</h2>
        <p className="text-lg leading-relaxed mb-4">
          The Barbering Academy began as a small neighborhood shop with a big
          dream: to make the craft of barbering accessible to anyone with the
          passion to learn. Over the years, what started with a single chair and
          a handful of loyal clients has grown into a learning community that
          welcomes students from all walks of life. Our roots are in tradition,
          but our outlook is forward-looking — blending classic techniques with
          modern approaches that prepare students for real careers.
        </p>
      </section>

      {/* Teaching Philosophy */}
      <section className="mb-16 max-w-3xl">
        <h2 className="text-2xl font-bold mb-4">Teaching Philosophy</h2>
        <p className="text-lg leading-relaxed mb-4">
          We believe barbering is more than a trade — it's an art form, a
          service, and a calling. Our teaching philosophy centers around hands-on
          practice, mentorship, and discipline. Students aren't just shown how
          to fade or line up hair; they are taught how to approach every cut with
          confidence, precision, and respect for the person in the chair. Our
          goal is to build not only technical skill but also professionalism,
          creativity, and pride in the work.
        </p>
      </section>

      {/* Credentials */}
      <section className="mb-16 max-w-3xl">
        <h2 className="text-2xl font-bold mb-4">Credentials & Experience</h2>
        <p className="text-lg leading-relaxed mb-6">
          The Academy is led by licensed barbers and educators with decades of
          combined experience behind the chair and in the classroom. Our
          instructors have worked in high-end shops, owned their own businesses,
          and trained hundreds of apprentices. They bring expertise not only in
          cutting and grooming but also in client service, shop management, and
          entrepreneurship.
        </p>

        <ul className="list-disc ml-6 space-y-2 text-sm">
          <li>Licensed Master Barber with 15+ years experience</li>
          <li>Educator in state-certified barbering programs</li>
          <li>Owner/operator of successful barbershops</li>
          <li>Mentor to dozens of working professionals across the industry</li>
        </ul>
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
