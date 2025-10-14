@extends('layouts.layout')
@section('content')
<main class="px-8 py-16 font-serif text-black overflow-hidden">
    <section class="max-w-4xl mx-auto text-center mb-16  animate-fadeUp">
        <h1 class="text-6xl font-bold mb-4">The Artisan Progression</h1>
        <p class="text-lg mb-8 leading-relaxed">A three-part journey designed to transform beginners into confident professionals. Each stage builds on the last — from mastering the fundamentals to defining your signature style behind the chair. Whether you’re just starting out or ready to
            refine your artistry, there’s a course that meets you where you are.</p><a class="inline-block border border-black bg-black text-white px-6 py-3 text-sm font-medium hover:bg-gray-900 transition-transform duration-300 hover:scale-105" href="/membership">Join the Academy</a></section>
    <div
        class="grid md:grid-cols-3 gap-8 mb-16  animate-fadeUp">
        <div class="border border-black p-8 flex flex-col relative transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 ">
            <div class="flex items-center justify-between mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors w-6 h-6" aria-hidden="true"><circle cx="6" cy="6" r="3"></circle><path d="M8.12 8.12 12 12"></path><path d="M20 4 8.12 15.88"></path><circle cx="6" cy="18" r="3"></circle><path d="M14.8 14.8 20 20"></path></svg>
                <h2
                    class="text-2xl font-bold">Foundation</h2>
            </div>
            <p class="mb-4 text-sm">Learn the craft. Build your confidence. Get grounded in the essentials of barbering — from tool handling and cutting techniques to fades and client service.</p>
            <div class="text-3xl font-bold mb-2">$749</div>
            <p class="text-sm mb-6">8 weeks (self-paced)</p>
            <ul class="space-y-3 flex-1">
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Tool fundamentals &amp; safety</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Clipper basics &amp; classic fades</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Beard grooming essentials</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Client care &amp; hygiene</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Portfolio starter guidance</span>
                </li>
            </ul><a class="mt-8 py-3 border border-black text-sm font-medium text-center transition-colors duration-300 hover:bg-gray-100 text-black" href="/courses/foundation">Enroll in Foundation</a></div>
        <div class="border border-black p-8 flex flex-col relative transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 bg-gray-50">
            <div class="absolute -top-3 left-6"><span class="bg-black text-white px-3 py-1 text-xs font-semibold uppercase tracking-wide">Most Popular</span></div>
            <div class="flex items-center justify-between mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-6 h-6" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                <h2
                    class="text-2xl font-bold">Refinement</h2>
            </div>
            <p class="mb-4 text-sm">Sharpen your eye. Strengthen your flow. Take your skills to the next level with advanced techniques, styling precision, and workflow discipline.</p>
            <div class="text-3xl font-bold mb-2">$1249</div>
            <p class="text-sm mb-6">12 weeks (self-paced)</p>
            <ul class="space-y-3 flex-1">
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Skin fades &amp; precision blending</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Advanced scissor-over-comb</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Razor detailing &amp; line artistry</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Business &amp; branding essentials</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Mentorship &amp; peer support</span>
                </li>
            </ul><a class="mt-8 py-3 border border-black text-sm font-medium text-center transition-colors duration-300 bg-black text-white hover:bg-gray-900" href="/courses/refinement">Enroll in Refinement</a></div>
        <div class="border border-black p-8 flex flex-col relative transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 ">
            <div class="flex items-center justify-between mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-6 h-6" aria-hidden="true"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                <h2
                    class="text-2xl font-bold">Mastery</h2>
            </div>
            <p class="mb-4 text-sm">Define your style. Lead with excellence. Develop your personal artistry and professional identity. Learn the nuances that separate good barbers from great ones.</p>
            <div class="text-3xl font-bold mb-2">$899</div>
            <p class="text-sm mb-6">16 weeks (self-paced)</p>
            <ul class="space-y-3 flex-1">
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Signature detailing &amp; creative fades</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Brand storytelling &amp; client experience</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Mentorship &amp; apprenticeship transition</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Portfolio &amp; presentation mastery</span>
                </li>
                <li class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 mt-1 text-black" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                    <span
                        class="text-sm">Certification as an Artisan Master Barber</span>
                </li>
            </ul><a class="mt-8 py-3 border border-black text-sm font-medium text-center transition-colors duration-300 hover:bg-gray-100 text-black" href="/courses/mastery">Enroll in Mastery</a></div>
        </div>
        <section class="text-center bg-black text-white py-16 mb-16 ">
            <h2 class="text-3xl font-bold mb-4 animate-fadeUp">Start Your Journey Today</h2>
            <p class="max-w-2xl mx-auto mb-8 text-lg font-light leading-relaxed">Every great barber starts somewhere. Choose your path — whether you’re laying the foundation, refining your edge, or mastering your craft, Artisan Barber Academy will guide you every step of the way.</p><a class="inline-block border border-white bg-white text-black px-6 py-3 text-sm font-medium hover:bg-gray-200 transition-transform duration-300 hover:scale-105"
                href="/membership">Join the Academy</a></section>
        <section class="max-w-3xl mx-auto ">
            <h2 class="text-2xl font-bold mb-6 text-center">Frequently Asked Questions</h2>
            <div class="space-y-6 text-sm leading-relaxed">
                <div class="group transition-all duration-300">
                    <h3 class="font-bold text-lg mb-2 group-hover:text-gray-600 transition-colors">Do I need experience to start?</h3>
                    <p class="text-sm text-gray-800">The Foundation course is designed for complete newcomers. Refinement and Mastery are ideal for experienced barbers looking to advance and define their signature style.</p>
                </div>
                <div class="group transition-all duration-300">
                    <h3 class="font-bold text-lg mb-2 group-hover:text-gray-600 transition-colors">Will I receive a certification?</h3>
                    <p class="text-sm text-gray-800">Yes. All courses include an Artisan Certificate of Completion, demonstrating your mastery of professional skills and standards.</p>
                </div>
                <div class="group transition-all duration-300">
                    <h3 class="font-bold text-lg mb-2 group-hover:text-gray-600 transition-colors">What kind of support is included?</h3>
                    <p class="text-sm text-gray-800">Each course provides guided assignments, video tutorials, and feedback loops. Refinement and Mastery include mentorship sessions and community discussions.</p>
                </div>
                <div class="group transition-all duration-300">
                    <h3 class="font-bold text-lg mb-2 group-hover:text-gray-600 transition-colors">Can I move between levels?</h3>
                    <p class="text-sm text-gray-800">Absolutely. Start at your current level and progress at your own pace. You can upgrade anytime by paying only the difference between courses.</p>
                </div>
            </div>
        </section>
</main>
   @endsection