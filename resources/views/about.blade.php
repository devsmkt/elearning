@extends('layouts.layout')
@section('content')
    <main class="px-8 py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[radial-gradient(circle_at_center,black,transparent_70%)] pointer-events-none"></div>
    <header class="text-center mb-20 relative z-10">
        <h1 class="text-6xl font-bold mb-4 animate-fadeUp">About Barbering Academy</h1>
        <p class="text-lg italic text-gray-700 animate-fadeUp">Tradition meets modern craft.</p>
    </header>
    <div class="max-w-3xl mx-auto space-y-24 relative z-10">
        <section class=" animate-fadeUp">
            <h2 class="text-2xl font-bold mb-4">Our Story</h2>
            <p class="text-lg leading-relaxed mb-4">The Barbering Academy began as a small neighborhood shop with a big dream: to make the craft of barbering accessible to anyone with the passion to learn. Over the years, what started with a single chair and a handful of loyal clients has grown
                into a learning community that welcomes students from all walks of life. Our roots are in tradition, but our outlook is forward-looking — blending classic techniques with modern approaches that prepare students for real careers.</p>
        </section>
        <section class=" animate-fadeUp">
            <h2 class="text-2xl font-bold mb-4">Teaching Philosophy</h2>
            <p class="text-lg leading-relaxed mb-4">We believe barbering is more than a trade — it’s an art form, a service, and a calling. Our teaching philosophy centers around hands-on practice, mentorship, and discipline. Students aren’t just shown how to fade or line up hair; they are
                taught how to approach every cut with confidence, precision, and respect for the person in the chair. Our goal is to build not only technical skill but also professionalism, creativity, and pride in the work.</p>
        </section>
        <section class=" animate-fadeUp">
            <h2 class="text-2xl font-bold mb-4">Credentials &amp; Experience</h2>
            <p class="text-lg leading-relaxed mb-6">The Academy is led by licensed barbers and educators with decades of combined experience behind the chair and in the classroom. Our instructors have worked in high-end shops, owned their own businesses, and trained hundreds of apprentices.
                They bring expertise not only in cutting and grooming but also in client service, shop management, and entrepreneurship.</p>
            <ul class="list-disc ml-6 space-y-2 text-sm">
                <li>Licensed Master Barber with 15+ years experience</li>
                <li>Educator in state-certified barbering programs</li>
                <li>Owner/operator of successful barbershops</li>
                <li>Mentor to dozens of working professionals across the industry</li>
            </ul>
        </section>
    </div>
</main>
@endsection

  