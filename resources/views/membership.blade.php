
@extends('layouts.layout')
@section('content')
      <!-- Hero Section -->
      <section class="px-8 py-24 border-b border-black text-center">
        <div class="max-w-4xl mx-auto">
          <h1 class="text-4xl font-extrabold mb-6">Entrepreneur Membership</h1>
          <p class="text-xl mb-8 font-light italic leading-relaxed">
            Designed for barbers who want to go beyond the chair and build a
            business. Learn how to launch, brand, and scale your own barbershop
            with monthly mentorship and a library of business-focused modules.
          </p>
          <a
            href="#join"
            class="border border-black bg-black text-white px-6 py-3 text-sm font-medium hover:bg-gray-900"
          >
            Join Membership
          </a>
        </div>
      </section>

      <!-- Membership Benefits -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-5xl mx-auto">
          <h2 class="text-3xl font-extrabold mb-12 text-center">
            What You Get as a Member
          </h2>

          <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="border border-black p-6">
              <h3 class="text-xl font-bold mb-4">Business Mentorship</h3>
              <p class="text-sm mb-4">
                Monthly one-on-one sessions with successful barbershop owners who
                provide personalized guidance for your business journey.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm">
                <li>Shop setup & location selection</li>
                <li>Financial planning & budgeting</li>
                <li>Business registration & licensing</li>
                <li>Equipment sourcing & inventory</li>
              </ul>
            </div>

            <div class="border border-black p-6">
              <h3 class="text-xl font-bold mb-4">Marketing & Branding</h3>
              <p class="text-sm mb-4">
                Learn to build a brand that attracts your ideal clients and keeps
                them coming back. Develop your unique identity in a crowded market.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm">
                <li>Brand identity development</li>
                <li>Social media strategy</li>
                <li>Local marketing tactics</li>
                <li>Client referral systems</li>
              </ul>
            </div>

            <div class="border border-black p-6">
              <h3 class="text-xl font-bold mb-4">Team Building</h3>
              <p class="text-sm mb-4">
                Transition from solo barber to business owner with leadership skills
                that help you build and manage a talented team.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm">
                <li>Hiring & onboarding processes</li>
                <li>Compensation structures</li>
                <li>Creating a positive shop culture</li>
                <li>Conflict resolution techniques</li>
              </ul>
            </div>

            <div class="border border-black p-6">
              <h3 class="text-xl font-bold mb-4">Growth Strategies</h3>
              <p class="text-sm mb-4">
                Scale your business beyond a single chair with proven strategies
                for expansion and increased profitability.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm">
                <li>Client retention systems</li>
                <li>Service menu development</li>
                <li>Retail product integration</li>
                <li>Multiple location planning</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Membership Pricing -->
      <section id="join" class="px-8 py-16 border-b border-black">
        <div class="max-w-5xl mx-auto">
          <h2 class="text-3xl font-extrabold mb-12 text-center">
            Choose Your Plan
          </h2>

          <div class="grid md:grid-cols-2 gap-8">
            <div class="border border-black p-8 flex flex-col">
              <h3 class="text-2xl font-bold mb-2">Monthly Membership</h3>
              <p class="text-4xl font-black mb-4">$49<span class="text-lg">/month</span></p>
              <p class="text-sm mb-6">
                Perfect for those who want flexibility and can commit month-to-month.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm mb-6">
                <li>Access to all business modules</li>
                <li>Monthly group mentorship sessions</li>
                <li>Private community forum</li>
                <li>Resource library & templates</li>
                <li>Cancel anytime</li>
              </ul>
              <a
                href="/student/signup?plan=monthly"
                class="mt-auto border border-black bg-black text-white px-4 py-2 text-sm text-center hover:bg-gray-900"
              >
                Join Monthly
              </a>
            </div>

            <div class="border border-black p-8 flex flex-col bg-gray-50 relative">
              <div class="absolute -top-3 left-6">
                <span
                  class="bg-black text-white px-3 py-1 text-xs font-semibold uppercase"
                >
                  Best Value
                </span>
              </div>
              <h3 class="text-2xl font-bold mb-2">Annual Membership</h3>
              <p class="text-4xl font-black mb-4">$470<span class="text-lg">/year</span></p>
              <p class="text-sm mb-6">
                Save 20% with annual billing and get two additional months free.
              </p>
              <ul class="list-disc ml-6 space-y-2 text-sm mb-6">
                <li>Everything in Monthly plan</li>
                <li>Two 1-on-1 mentorship sessions</li>
                <li>Exclusive annual workshop access</li>
                <li>Priority support</li>
                <li>Save $118 per year</li>
              </ul>
              <a
                href="/student/signup?plan=annual"
                class="mt-auto border border-black bg-black text-white px-4 py-2 text-sm text-center hover:bg-gray-900"
              >
                Join Annual
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-5xl mx-auto">
          <h2 class="text-3xl font-extrabold mb-12 text-center">
            Success Stories
          </h2>

          <div class="grid md:grid-cols-3 gap-8">
            <div class="border border-black p-6">
              <p class="text-sm italic mb-4">
                "The Entrepreneur Membership gave me the confidence to open my own shop.
                The mentorship was invaluable and helped me avoid costly mistakes."
              </p>
              <p class="text-sm font-bold">Marcus T.</p>
              <p class="text-xs text-gray-600">Owner, The Gentleman's Cut</p>
            </div>

            <div class="border border-black p-6">
              <p class="text-sm italic mb-4">
                "I went from renting a chair to owning a three-chair barbershop in
                less than two years. The business modules covered everything I needed."
              </p>
              <p class="text-sm font-bold">Jamal R.</p>
              <p class="text-xs text-gray-600">Owner, Legacy Barbers</p>
            </div>

            <div class="border border-black p-6">
              <p class="text-sm italic mb-4">
                "The marketing strategies I learned helped me triple my client base
                in just six months. This membership pays for itself many times over."
              </p>
              <p class="text-sm font-bold">Sofia K.</p>
              <p class="text-xs text-gray-600">Owner, Modern Cuts Studio</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="px-8 py-16 border-b border-black">
        <div class="max-w-3xl mx-auto">
          <h2 class="text-3xl font-extrabold mb-12 text-center">
            Frequently Asked Questions
          </h2>

          <div class="space-y-6">
            <div>
              <h3 class="text-lg font-bold mb-2">Can I cancel my membership anytime?</h3>
              <p class="text-sm">
                Yes, you can cancel your monthly membership at any time with no cancellation fees.
                For annual memberships, you can cancel but will not receive a refund for the remaining months.
              </p>
            </div>

            <div>
              <h3 class="text-lg font-bold mb-2">Is the membership suitable for beginners?</h3>
              <p class="text-sm">
                The Entrepreneur Membership is designed for barbers who already have technical skills
                but want to learn the business side. If you're new to barbering, we recommend starting
                with our Foundation course first.
              </p>
            </div>

            <div>
              <h3 class="text-lg font-bold mb-2">How much time should I dedicate to the membership?</h3>
              <p class="text-sm">
                Most members spend 3-5 hours per month on the materials and sessions. The program is
                designed to fit around your existing schedule, with most content available on-demand.
              </p>
            </div>

            <div>
              <h3 class="text-lg font-bold mb-2">Do I get access to all courses with the membership?</h3>
              <p class="text-sm">
                The Entrepreneur Membership focuses specifically on business education. You'll need to
                enroll in our technical courses separately if you want to improve your cutting skills.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Footer -->
      <section class="px-8 py-16 bg-black text-white text-center">
        <h2 class="text-3xl font-extrabold mb-6 uppercase">
          Ready to Build Your Business?
        </h2>
        <p class="mb-8 max-w-xl mx-auto text-lg font-light leading-relaxed">
          Join hundreds of barbers who have transformed their careers with the
          Entrepreneur Membership. Start building your future today.
        </p>
        <div class="flex justify-center gap-4">
          <a
            href="/student/signup?plan=annual"
            class="border border-white bg-white text-black px-6 py-3 text-sm font-medium hover:bg-gray-200"
          >
            Join Annual Plan
          </a>
          <a
            href="/student/signup?plan=monthly"
            class="border border-white px-6 py-3 text-sm font-medium hover:bg-gray-800"
          >
            Join Monthly Plan
          </a>
        </div>
      </section>
      @endsection
   