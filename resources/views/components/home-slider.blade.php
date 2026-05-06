<div id="rotator" class="relative w-full bg-gray-200 overflow-hidden min-h-[480px]" style="aspect-ratio: 1920/480;">
    <!-- Slides -->
    <div class="slideshowImageWrapper active visible absolute w-full h-full" style="z-index: 110;">
        <img src="/img/home/rcia1920.jpg" alt="Slide 1" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 text-white text-center p-8">
            <h1 class="text-4xl md:text-5xl font-cinzel mb-4">R.C.I.A</h1>
            <h2 class="text-xl md:text-2xl font-cinzel font-light mb-6">Meets on Thursdays</h2>
            <a href="/rcia" class="border-white border-2 bg-transparent hover:bg-white hover:text-black px-24 py-5 text-lg transition">Learn More</a>
        </div>
    </div>

    <div class="slideshowImageWrapper absolute w-full h-full" style="z-index: 105;">
        <img src="/img/home/YouthGroup.jpg" alt="Slide 2" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 text-white text-center p-8">
            <h1 class="text-4xl md:text-5xl font-cinzel mb-4">Youth Programs</h1>
            <h2 class="text-xl md:text-2xl font-cinzel font-light mb-6">For Grades 5 to 12</h2>
            <a href="/youth" class="border-white border-2 bg-transparent hover:bg-white hover:text-black px-24 py-5 text-lg transition">Get Involved</a>
        </div>
    </div>

    <div class="slideshowImageWrapper absolute w-full h-full" style="z-index: 105;">
        <img src="/img/home/ThatManIsYou3.jpg" alt="Slide 3" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 text-white text-center p-8">
            <h1 class="text-4xl md:text-5xl font-cinzel mb-4">That Man Is You!</h1>
            <h2 class="text-xl md:text-2xl font-cinzel font-light mb-6">Saturday mornings</h2>
            <a href="/men" class="border-white border-2 bg-transparent hover:bg-white hover:text-black px-24 py-5 text-lg transition">Explore</a>
        </div>
    </div>

    <div class="slideshowImageWrapper absolute w-full h-full" style="z-index: 105;">
        <img src="/img/home/Donate1.jpg" alt="Slide 3" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 text-white text-center p-8">
            <h1 class="text-4xl md:text-5xl font-cinzel mb-4">Parish Finances</h1>
            <h2 class="text-xl md:text-2xl font-cinzel font-light mb-6">Please continue to support your parish</h2>
            <a href="/men" class="border-white border-2 bg-transparent hover:bg-white hover:text-black px-24 py-5 text-lg transition">Explore</a>
        </div>
    </div>

    <div class="slideshowImageWrapper absolute w-full h-full" style="z-index: 105;">
        <img src="/img/home/GetInvolved.jpg" alt="Slide 3" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 text-white text-center p-8">
            <h1 class="text-4xl md:text-5xl font-cinzel mb-4">Share your light</h1>
            <h2 class="text-xl md:text-2xl font-cinzel font-light mb-6">Your parish needs you!</h2>
            <a href="/men" class="border-white border-2 bg-transparent hover:bg-white hover:text-black px-24 py-5 text-lg transition">Explore</a>
        </div>
    </div>
    <!-- Navigation Controls -->
    <button id="backBtn" class="absolute left-4 top-1/2 -translate-y-1/2 z-[110] bg-black/50 hover:bg-black/70 text-white p-3 rounded transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button id="fwdBtn" class="absolute right-4 top-1/2 -translate-y-1/2 z-[110] bg-black/50 hover:bg-black/70 text-white p-3 rounded transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Shortcuts/Indicators -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-[110] flex gap-2">
        <button id="rotatorShortcut0" class="shortcutCurrent w-3 h-3 bg-white rounded-full transition opacity-100"></button>
        <button id="rotatorShortcut1" class="w-3 h-3 bg-white/50 rounded-full transition hover:bg-white/75"></button>
        <button id="rotatorShortcut2" class="w-3 h-3 bg-white/50 rounded-full transition hover:bg-white/75"></button>
        <button id="rotatorShortcut3" class="w-3 h-3 bg-white/50 rounded-full transition hover:bg-white/75"></button>
        <button id="rotatorShortcut4" class="w-3 h-3 bg-white/50 rounded-full transition hover:bg-white/75"></button>
    </div>
</div>

<style>
.slideshowImageWrapper {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slideshowImageWrapper.visible {
    opacity: 1;
}

.shortcutCurrent {
    opacity: 1 !important;
    background-color: white !important;
}
</style>
