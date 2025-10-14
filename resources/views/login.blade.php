@extends('layouts.layout')
@section('content')
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

   @endsection