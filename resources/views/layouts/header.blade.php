
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
          href="/register"
          class="border border-black bg-black text-white px-4 py-2 text-sm font-medium hover:bg-gray-900"
        >
          Sign Up
        </a>
      </div>
    </nav>