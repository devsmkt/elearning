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