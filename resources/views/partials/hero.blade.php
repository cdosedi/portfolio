{{-- resources/views/partials/hero.blade.php --}}

{{-- START: New Preloader HTML --}}

<div id="hero-preloader" class="fixed inset-0 z-50 flex items-center justify-center overflow-hidden bg-gray-900">
    <div class="preloader-gate-container">
        @for ($i = 0; $i < 10; $i++)
            <div class="preloader-gate-bar"></div>
        @endfor
    </div>
    <div id="preloader-text"
        class="absolute text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-extrabold">
        <span class="font-montserrat tracking-wider">CDM</span>
    </div>
</div>

{{-- END: New Preloader HTML --}}



<section id="hero" class="hero-section min-h-screen flex items-center justify-center relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute inset-0 -z-10">
        {{-- Animated geometric shapes --}}
        <div
            class="absolute top-20 left-10 w-20 h-20 border-2 border-blue-500/30 rounded-lg rotate-45 animate-spin-slow">
        </div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-purple-500/20 rounded-full animate-pulse-smooth"></div>
        <div
            class="absolute bottom-32 left-20 w-24 h-24 border-2 border-pink-500/30 rounded-full animate-bounce-smooth">
        </div>
        <div class="absolute bottom-20 right-32 w-12 h-12 bg-blue-500/20 transform rotate-45 animate-pulse-smooth">
        </div>

        {{-- Floating particles --}}
        @for ($i = 0; $i < 15; $i++)
            <div class="particle absolute w-2 h-2 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-60"
                style="left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%; animation-delay: {{ $i * 0.3 }}s;">
            </div>
        @endfor
    </div>

    {{-- Main Content Container --}}
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 flex flex-col min-h-screen justify-center">
        <div class="space-y-8 flex-grow flex flex-col justify-center pt-16 md:pt-20">

            {{-- Main heading --}}
            <div class="space-y-4">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-montserrat font-light text-white leading-tight">
                    <span class="hero-text-element block text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl mb-2"
                        data-animation="fadeInLeft" data-delay="200">Hello I'm</span>
                    <span
                        class="hero-text-element block font-bold bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent"
                        data-animation="fadeInRight" data-delay="400">Christian David</span>
                    <span
                        class="hero-text-element block font-bold bg-gradient-to-r from-pink-500 via-purple-500 to-blue-400 bg-clip-text text-transparent"
                        data-animation="fadeInLeft" data-delay="600">Moreno</span>
                </h1>
            </div>

            {{-- Subtitle --}}
            <div class="max-w-3xl mx-auto">
                <p class="hero-text-element text-xl md:text-2xl text-gray-300 font-light leading-relaxed"
                    data-animation="fadeInUp" data-delay="800">
                    Passionate Developer crafting innovative web experiences with passion for
                    <span class="text-blue-400 font-medium">clean code</span> and
                    <span class="text-purple-400 font-medium">elegant design</span>
                </p>
            </div>

            {{-- Specialties --}}
            <div class="flex flex-wrap justify-center gap-4">
                @php
                    $specialties = [
                        'Laravel',
                        'Python',
                        'Vue.js',
                        'React',
                        'Node.js',
                        'PHP',
                        'JavaScript',
                        'Tailwind CSS',
                    ];
                @endphp

                @foreach ($specialties as $index => $specialty)
                    <span
                        class="hero-specialty-element px-4 py-2 bg-gray-800/50 border border-gray-700 rounded-full text-sm text-gray-300 hover:text-white hover:border-blue-500 transition-all duration-500 transform hover:scale-105"
                        data-delay="{{ 1000 + $index * 80 }}">{{ $specialty }}</span>
                @endforeach
            </div>

            {{-- CTA Buttons --}}
            <div class="hero-text-element flex flex-col sm:flex-row gap-4 justify-center items-center pt-8 pb-12 md:pb-16 lg:pb-20"
                data-animation="fadeInUp" data-delay="1600">
                <a href="#projects"
                    class="group bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-full text-lg font-medium transition-all duration-500 transform hover:scale-105 flex items-center shadow-lg hover:shadow-xl">
                    <span>Explore My Work</span>
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>

                <a href="#contact"
                    class="group border-2 border-gray-600 hover:border-white text-gray-300 hover:text-white px-8 py-4 rounded-full text-lg font-medium transition-all duration-500 transform hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <span>Let's Talk</span>
                </a>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="hero-text-element flex-shrink-0 pb-10 md:pb-12 lg:pb-16" data-animation="fadeInUp"
            data-delay="1800">
            <div class="flex flex-col items-center text-gray-400 animate-bounce-smooth cursor-pointer transition-colors duration-500 hover:text-white"
                onclick="scrollToNextSection()">
                <span class="text-sm mb-2 font-light">Scroll to explore</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Floating code snippets --}}
    <div class="absolute top-1/4 left-10 opacity-20 hidden lg:block">
        <div
            class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-lg p-4 text-xs text-green-400 font-mono transform rotate-6 animate-float transition-all duration-700 hover:opacity-40">
            <div>&lt;?php</div>
            <div class="text-blue-400">echo</div>
            <div class="text-yellow-400">'Hello World!';</div>
            <div>?&gt;</div>
        </div>
    </div>

    <div class="absolute top-1/3 right-16 opacity-20 hidden lg:block">
        <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-lg p-4 text-xs text-purple-400 font-mono transform -rotate-3 animate-float transition-all duration-700 hover:opacity-40"
            style="animation-delay: 2s;">
            <div class="text-blue-400">const</div>
            <div class="text-white">magic = () =&gt; {</div>
            <div class="ml-4 text-green-400">return 'awesome';</div>
            <div>}</div>
        </div>
    </div>
</section>

{{-- Custom CSS for hero animations --}}
<style>
    /* ================================================== */
    /* START: New Preloader CSS */
    /* ================================================== */

    #hero-preloader {
        background: radial-gradient(circle, #1a1a2e 0%, #11111b 100%);
        transition: opacity 1.8s cubic-bezier(0.76, 0, 0.24, 1), visibility 1.8s cubic-bezier(0.76, 0, 0.24, 1);
    }

    #hero-preloader.fade-out {
        opacity: 0;
        visibility: hidden;
    }

    /* When fading out, slide the bars up */
    #hero-preloader.fade-out .preloader-gate-bar {
        transform: translateY(-100%);
        transition: transform 1.8s cubic-bezier(0.76, 0, 0.24, 1);
    }

    /* Fade out the text slightly before the bars move */
    #hero-preloader.fade-out #preloader-text {
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        transition-delay: 0s;
    }

    #preloader-text {
        opacity: 0;
        transform: scale(0.95);
        animation: preloader-text-fade-in 2s cubic-bezier(0.76, 0, 0.24, 1) 0.5s forwards;
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .preloader-gate-container {
        display: flex;
        width: 100%;
        height: 100%;
    }

    .preloader-gate-bar {
        width: 10vw;
        height: 100%;
        background: linear-gradient(160deg, #4a00e0, #8e2de2);
        box-shadow: 0 0 25px rgba(142, 45, 226, 0.3);
        transform-origin: center;
        transform: scaleY(0);
        /* Decreased transition duration for individual bar animation to make it faster */
        transition: transform 0.8s cubic-bezier(0.76, 0, 0.24, 1);
        /* Decreased animation duration for a faster pulse */
        animation: preloader-bar-anim 2s cubic-bezier(0.76, 0, 0.24, 1) infinite alternate;
    }

    /* Stagger animation and transition delays for a faster, more noticeable ripple */
    @for ($i = 0; $i < 10; $i++)
        .preloader-gate-bar:nth-child({{ $i + 1 }}) {
            animation-delay: {{ $i * 0.1 }}s;
            /* Faster stagger */
            transition-delay: {{ ($i < 5 ? $i : 9 - $i) * 0.08 }}s;
            /* Faster centered exit */
        }
    @endfor

    @keyframes preloader-bar-anim {
        0% {
            transform: scaleY(0.05);
            background: linear-gradient(160deg, #4a00e0, #8e2de2);
        }

        100% {
            transform: scaleY(1);
            background: linear-gradient(160deg, #1e90ff, #ff1493);
        }
    }

    @keyframes preloader-text-fade-in {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* END: New Preloader CSS */

    /* Hero section states */
    .hero-section {
        opacity: 0;
        transition: opacity 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .hero-section.loaded {
        opacity: 1;
    }

    /* Animation elements initial state */
    .hero-text-element,
    .hero-specialty-element {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94),
            transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Animation variants */
    .hero-text-element.fade-in-left {
        transform: translateX(-40px);
    }

    .hero-text-element.fade-in-right {
        transform: translateX(40px);
    }

    /* Active animation states */
    .hero-text-element.animated,
    .hero-specialty-element.animated {
        opacity: 1;
        transform: translate(0, 0);
    }

    /* Custom animations */
    @keyframes spin-slow {
        from {
            transform: rotate(45deg);
        }

        to {
            transform: rotate(405deg);
        }
    }

    @keyframes bounce-smooth {

        0%,
        20%,
        53%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-12px);
        }

        70% {
            transform: translateY(-6px);
        }
    }

    @keyframes pulse-smooth {

        0%,
        100% {
            opacity: 0.2;
            transform: scale(1);
        }

        50% {
            opacity: 0.4;
            transform: scale(1.05);
        }
    }

    @keyframes float {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-12px) rotate(1.5deg);
        }

        66% {
            transform: translateY(-6px) rotate(-1.5deg);
        }

        100% {
            transform: translateY(0px) rotate(0deg);
        }
    }

    @keyframes particle-float {

        0%,
        100% {
            transform: translateY(0) scale(1);
            opacity: 0.6;
        }

        50% {
            transform: translateY(-25px) scale(1.3);
            opacity: 1;
        }
    }

    /* Animation classes */
    .animate-spin-slow {
        animation: spin-slow 10s linear infinite;
    }

    .animate-bounce-smooth {
        animation: bounce-smooth 2.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;
    }

    .animate-pulse-smooth {
        animation: pulse-smooth 3s cubic-bezier(0.4, 0.6, 1) infinite;
    }

    .animate-float {
        animation: float 8s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;
    }

    .particle {
        animation: particle-float 5s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;
    }

    /* Gradient text enhancement */
    @supports (background-clip: text) {
        .bg-clip-text {
            -webkit-background-clip: text;
            background-clip: text;
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
    }

    /* Prevent layout shifts */
    #hero h1,
    #hero .space-y-8>* {
        transform: translateZ(0);
        backface-visibility: hidden;
        perspective: 1000px;
    }

    #hero .max-w-3xl {
        min-height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Enhanced hover effects */
    .hero-specialty-element:hover {
        background-color: rgba(59, 130, 246, 0.1);
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
    }

    /* Smooth transitions for all interactive elements */
    a,
    button,
    .cursor-pointer {
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
</style>

{{-- Hero JavaScript --}}
<script>
    class HeroController {
        constructor() {
            this.isLoaded = false;
            this.hasAnimatedOnce = false;
            this.isCurrentlyVisible = true; // visible at start
            this.animationTimeouts = [];

            this.heroSection = document.getElementById('hero');
            this.preloader = document.getElementById('hero-preloader');
            this.animatedElements = document.querySelectorAll('.hero-text-element, .hero-specialty-element');

            this.init();
        }

        init() {
            if (!this.heroSection || !this.preloader) {
                console.error('Hero: Required elements not found');
                return;
            }

            const onPageLoad = () => this.handleLoading();

            if (document.readyState === 'complete') {
                onPageLoad();
            } else {
                window.addEventListener('load', onPageLoad, {
                    once: true
                });
                // Fallback in case the load event is missed or for very fast loads
                setTimeout(() => this.handleLoading(), 5000); // Increased fallback time
            }
        }

        handleLoading() {
            if (this.isLoaded) return; // Prevent double execution

            const minLoadTime = 3800; // Increased minimum load time for a more relaxed transition
            const startTime = Date.now();

            const finishLoading = () => {
                const elapsedTime = Date.now() - startTime;
                const remainingTime = Math.max(0, minLoadTime - elapsedTime);

                setTimeout(() => {
                    if (this.preloader) {
                        this.preloader.classList.add('fade-out');
                        // Listen for the transition on the preloader itself to hide it
                        this.preloader.addEventListener('transitionend', (e) => {
                            if (e.target === this.preloader) {
                                this.preloader.style.display = 'none';
                            }
                        }, {
                            once: true
                        }); // Ensure event listener is removed after first use
                    }

                    this.heroSection.classList.add('loaded');
                    this.isLoaded = true;

                    this.triggerAnimations();

                    setTimeout(() => {
                        this.hasAnimatedOnce = true;
                        this.setupIntersectionObserver();
                    }, 2000); // Increased delay before setting up observer/allowing re-animation

                }, remainingTime);
            };

            finishLoading();
        }

        setupIntersectionObserver() {
            if (!this.heroSection) return;

            const observer = new IntersectionObserver((entries) => {
                const entry = entries[0];
                const isVisible = entry.isIntersecting && entry.intersectionRatio > 0.1;

                // Only act if visibility state *changes* and initial animation has run
                if (isVisible !== this.isCurrentlyVisible && this.hasAnimatedOnce) {
                    if (isVisible) {
                        // Became visible: trigger the animations
                        this.triggerAnimations();
                    } else {
                        // Became hidden: reset for next time
                        this.resetAnimations();
                    }
                    this.isCurrentlyVisible = isVisible;
                }
            }, {
                threshold: 0.1
            });

            observer.observe(this.heroSection);
        }

        triggerAnimations() {
            this.clearAnimationTimeouts();
            // Speed up subsequent animations after the initial one
            const speedMultiplier = this.hasAnimatedOnce ? 0.35 :
                1; // Slightly slower speed multiplier for re-animation

            this.animatedElements.forEach((element) => {
                const delay = parseInt(element.dataset.delay) || 0;
                const animation = element.dataset.animation || 'fadeInUp';

                const timeoutId = setTimeout(() => {
                    if (animation === 'fadeInLeft') {
                        element.classList.add('fade-in-left');
                    } else if (animation === 'fadeInRight') {
                        element.classList.add('fade-in-right');
                    }

                    requestAnimationFrame(() => {
                        element.classList.add('animated');
                    });

                }, delay * speedMultiplier);

                this.animationTimeouts.push(timeoutId);
            });
        }

        resetAnimations() {
            this.clearAnimationTimeouts();
            // Immediately remove animation classes from all elements.
            this.animatedElements.forEach(element => {
                element.classList.remove('animated', 'fade-in-left', 'fade-in-right');
            });
        }

        clearAnimationTimeouts() {
            this.animationTimeouts.forEach(timeoutId => clearTimeout(timeoutId));
            this.animationTimeouts = [];
        }
    }

    // Utility function
    function scrollToNextSection() {
        const sections = ['#about', '#projects', 'main', '[id]:not(#hero)'];
        for (const selector of sections) {
            const target = document.querySelector(selector);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                break;
            }
        }
    }

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        const heroController = new HeroController();
        const particles = document.querySelectorAll('.particle');

        if (particles.length > 0) {
            window.addEventListener('scroll', () => {
                window.requestAnimationFrame(() => {
                    if (!heroController.isLoaded) return;
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.3;
                    particles.forEach((p, i) => {
                        const speed = (i + 1) * 0.05;
                        p.style.transform = `translate3d(0, ${rate * speed}px, 0)`;
                    });
                });
            }, {
                passive: true
            });
        }
    });
</script>
