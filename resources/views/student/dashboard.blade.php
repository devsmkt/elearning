@extends('layouts.layout')

@section('content')
<main class="px-8 py-16 font-serif text-black">
    <h1 class="text-6xl font-bold mb-12">Dashboard</h1>
    <section class="mb-16">
        <h2 class="text-xl mb-4 underline">Progress Tracking</h2>
        <div class="space-y-4">
            <div>
                <p class="text-sm font-medium mb-1">Beginner Barbering</p>
                <div class="w-full bg-gray-200 h-3">
                    <div class="bg-black h-3" style="width: 50%;"></div>
                </div>
                <p class="text-xs mt-1">6 of 12 lessons completed</p>
            </div>
            <div>
                <p class="text-sm font-medium mb-1">Advanced Barbering</p>
                <div class="w-full bg-gray-200 h-3">
                    <div class="bg-black h-3" style="width: 0%;"></div>
                </div>
                <p class="text-xs mt-1">0 of 18 lessons completed</p>
            </div>
        </div>
    </section>
    <section class="mb-16">
        <h2 class="text-xl mb-4 underline">Your Courses</h2>
        <div class="border border-black divide-y divide-black">
            <div class="p-4 flex justify-between items-center">
                <div>
                    <h3 class="font-bold">Beginner Barbering</h3>
                    <p class="text-sm">In Progress</p>
                </div><span class="text-xs uppercase">12 resources</span></div>
            <div class="p-4 flex justify-between items-center">
                <div>
                    <h3 class="font-bold">Advanced Barbering</h3>
                    <p class="text-sm">Not Started</p>
                </div><span class="text-xs uppercase">18 resources</span></div>
        </div>
    </section>
    <section class="mb-16">
        <section class="border border-black p-8 mb-12">
            <h2 class="text-xl mb-4 underline">Media Library</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="border border-black p-4 flex flex-col">
                    <div class="flex items-center justify-between mb-2"><span class="flex items-center gap-2 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-5 h-5" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> PDF</span>
                        <span
                            class="text-xs text-gray-600">12 MB</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">The Fundamentals of Barbering</h3>
                    <p class="text-sm text-gray-800 mb-2">A step-by-step visual guide to essential techniques.</p><button class="mt-auto border border-black px-3 py-1 text-xs uppercase tracking-wide hover:bg-gray-100">View</button></div>
                <div class="border border-black p-4 flex flex-col">
                    <div class="flex items-center justify-between mb-2"><span class="flex items-center gap-2 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book w-5 h-5" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"></path></svg> Article</span>
                        <span
                            class="text-xs text-gray-600">5 MB</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Understanding Client Psychology</h3>
                    <p class="text-sm text-gray-800 mb-2">Building trust and loyalty through communication.</p><button class="mt-auto border border-black px-3 py-1 text-xs uppercase tracking-wide hover:bg-gray-100">View</button></div>
                <div class="border border-black p-4 flex flex-col">
                    <div class="flex items-center justify-between mb-2"><span class="flex items-center gap-2 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video w-5 h-5" aria-hidden="true"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg> Video</span>
                        <span
                            class="text-xs text-gray-600">14:27</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">The Art of the Fade</h3>
                    <p class="text-sm text-gray-800 mb-2">Advanced fade theory and clipper control.</p><button class="mt-auto border border-black px-3 py-1 text-xs uppercase tracking-wide hover:bg-gray-100">View</button></div>
                <div class="border border-black p-4 flex flex-col">
                    <div class="flex items-center justify-between mb-2"><span class="flex items-center gap-2 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones w-5 h-5" aria-hidden="true"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg> Audio</span>
                        <span
                            class="text-xs text-gray-600">32:19</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Mentor Talk: Building Confidence Behind the Chair</h3>
                    <p class="text-sm text-gray-800 mb-2">An intimate conversation with industry leaders.</p><button class="mt-auto border border-black px-3 py-1 text-xs uppercase tracking-wide hover:bg-gray-100">View</button></div>
            </div>
        </section>
    </section>
    <section class="mb-16">
        <section class="border border-black p-8">
            <h2 class="text-xl mb-4 underline">Mentorship Program</h2>
            <p class="text-sm text-gray-800 mb-8 max-w-2xl">Gain direct access to experienced barbers and educators. Get feedback, schedule sessions, and build your professional network.</p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="border border-black p-4 flex flex-col"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 mb-2" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <h3
                        class="text-lg font-bold">Carlos R.</h3>
                        <p class="text-sm mb-1">Fade Techniques</p>
                        <p class="text-xs text-gray-600 mb-3">10 years in professional barbering</p>
                        <div class="flex gap-2 mt-auto"><button class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-3 h-3 inline mr-1" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> Message</button>
                            <button
                                class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days w-3 h-3 inline mr-1"
                                    aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>                                Schedule</button>
                        </div>
                </div>
                <div class="border border-black p-4 flex flex-col"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 mb-2" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <h3
                        class="text-lg font-bold">Michelle L.</h3>
                        <p class="text-sm mb-1">Branding &amp; Client Experience</p>
                        <p class="text-xs text-gray-600 mb-3">Former shop owner &amp; educator</p>
                        <div class="flex gap-2 mt-auto"><button class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-3 h-3 inline mr-1" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> Message</button>
                            <button
                                class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days w-3 h-3 inline mr-1"
                                    aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>                                Schedule</button>
                        </div>
                </div>
                <div class="border border-black p-4 flex flex-col"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 mb-2" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <h3
                        class="text-lg font-bold">Andre T.</h3>
                        <p class="text-sm mb-1">Men’s Grooming &amp; Styling</p>
                        <p class="text-xs text-gray-600 mb-3">Editorial stylist and instructor</p>
                        <div class="flex gap-2 mt-auto"><button class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-3 h-3 inline mr-1" aria-hidden="true"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path></svg> Message</button>
                            <button
                                class="border border-black px-3 py-1 text-xs uppercase hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days w-3 h-3 inline mr-1"
                                    aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>                                Schedule</button>
                        </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <h2 class="text-xl mb-4 underline">Certificates</h2>
        <div class="border border-black p-4 space-y-3">
            <div class="flex justify-between"><span>Beginner Barbering</span><span class="text-sm">Issued June 2025</span></div>
            <div class="text-sm text-gray-600">Complete more courses to unlock additional certificates.</div>
        </div>
    </section>
</main>
@endsection
 
