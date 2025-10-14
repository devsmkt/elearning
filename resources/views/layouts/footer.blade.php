 <!-- Footer -->
    <footer class="border-t border-black px-8 py-12 font-serif text-black">
      <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
        <div class="flex flex-col mr-8">
          <a href="/">
             <img
                src="{{ asset('images/academy-logo.svg') }}"
                alt="Artisan Barber Academy Logo"
                class="h-10 w-auto"
            />
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
