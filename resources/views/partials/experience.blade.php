{{-- resources/views/partials/experience.blade.php --}}
<section id="experience" class="py-20 bg-transparent relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-montserrat font-bold text-white mb-4 opacity-0 animate-fadeInUp">
                Professional <span
                    class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Experience</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto opacity-0 animate-fadeInUp delay-300">
                A journey through my professional development and key contributions in the tech industry
            </p>
        </div>

        {{-- Experience Timeline --}}
        <div class="relative">
            {{-- Timeline line - Only show on desktop --}}
            <div
                class="absolute left-1/2 transform -translate-x-0.5 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 opacity-30 rounded-full hidden md:block">
            </div>

            {{-- Experience Cards --}}
            <div class="space-y-8 md:space-y-16">
                {{-- Freelance Software Developer --}}
                <div class="experience-card opacity-0" data-direction="left" data-delay="0">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-left md:text-right">
                            <div
                                class="glass rounded-2xl p-6 md:p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105 mb-4 md:mb-0">
                                <div class="flex items-center justify-start md:justify-end mb-4">
                                    <span
                                        class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2019 - Present
                                    </span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-montserrat font-bold text-white mb-2">
                                    Freelance Software Developer
                                </h3>
                                <p class="text-blue-400 font-medium mb-4">Independent Projects | Commission-Based</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Develop Point of Sale (POS) systems for retail
                                            businesses</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Create custom applications tailored to client needs</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-pink-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Maintain long-term client relationships and system
                                            updates</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden md:block relative">
                            <div
                                class="w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full border-4 border-gray-950 z-10 relative">
                            </div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                </div>

                {{-- Software Developer OJT --}}
                <div class="experience-card opacity-0" data-direction="right" data-delay="300">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="hidden md:block relative">
                            <div
                                class="w-6 h-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full border-4 border-gray-950 z-10 relative">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div
                                class="glass rounded-2xl p-6 md:p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105 mb-4 md:mb-0">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="bg-gradient-to-r from-purple-400 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2025
                                    </span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-montserrat font-bold text-white mb-2">
                                    Software Developer
                                </h3>
                                <p class="text-purple-400 font-medium mb-4">Digital Business Training Center | OJT</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Led development team in creating multiple management
                                            systems</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-pink-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Project Leader for Barangay Booking System</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Developed Clinic and Fitness Center Management
                                            Systems</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- IT Support Specialist OJT --}}
                <div class="experience-card opacity-0" data-direction="left" data-delay="600">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-left md:text-right">
                            <div
                                class="glass rounded-2xl p-6 md:p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105 mb-4 md:mb-0">
                                <div class="flex items-center justify-start md:justify-end mb-4">
                                    <span
                                        class="bg-gradient-to-r from-blue-400 to-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2025
                                    </span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-montserrat font-bold text-white mb-2">
                                    IT Support Specialist
                                </h3>
                                <p class="text-cyan-400 font-medium mb-4">Filamer Christian University | OJT</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-cyan-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Technical support for students and staff</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Hardware troubleshooting and repair</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Network infrastructure maintenance</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden md:block relative">
                            <div
                                class="w-6 h-6 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full border-4 border-gray-950 z-10 relative">
                            </div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                </div>

                {{-- Youth Chairman --}}
                <div class="experience-card opacity-0" data-direction="right" data-delay="900">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="hidden md:block relative">
                            <div
                                class="w-6 h-6 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-full border-4 border-gray-950 z-10 relative">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div
                                class="glass rounded-2xl p-6 md:p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105 mb-4 md:mb-0">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="bg-gradient-to-r from-orange-400 to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2021 - 2022
                                    </span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-montserrat font-bold text-white mb-2">
                                    Youth Chairman
                                </h3>
                                <p class="text-yellow-400 font-medium mb-4">Capiz, Philippines</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-yellow-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Demonstrated leadership in planning church
                                            initiatives</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Organized community engagement programs</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-red-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        <span class="flex-1">Developed communication and leadership skills</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Enhanced CSS for cross-browser compatibility --}}
<style>
    /* Experience card animations with fallbacks */
    @keyframes slideInFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInFromRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInFromUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animation classes with browser prefixes */
    .animate-slideInFromLeft {
        animation: slideInFromLeft 0.8s ease-out forwards;
        -webkit-animation: slideInFromLeft 0.8s ease-out forwards;
        -moz-animation: slideInFromLeft 0.8s ease-out forwards;
        -o-animation: slideInFromLeft 0.8s ease-out forwards;
    }

    .animate-slideInFromRight {
        animation: slideInFromRight 0.8s ease-out forwards;
        -webkit-animation: slideInFromRight 0.8s ease-out forwards;
        -moz-animation: slideInFromRight 0.8s ease-out forwards;
        -o-animation: slideInFromRight 0.8s ease-out forwards;
    }

    .animate-slideInFromUp {
        animation: slideInFromUp 0.8s ease-out forwards;
        -webkit-animation: slideInFromUp 0.8s ease-out forwards;
        -moz-animation: slideInFromUp 0.8s ease-out forwards;
        -o-animation: slideInFromUp 0.8s ease-out forwards;
    }

    /* Enhanced glass effect with fallback */
    .glass {
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(17, 25, 40, 0.85);
        background: rgba(17, 25, 40, 0.85);
        /* Fallback for older browsers */
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    /* Mobile-first responsive adjustments */
    .experience-card {
        transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
    }

    /* Ensure minimum heights and proper spacing on mobile */
    @media screen and (max-width: 767px) {
        .experience-card {
            margin-bottom: 1rem;
        }

        .experience-card .glass {
            min-height: auto;
            padding: 1.5rem;
        }

        .experience-card h3 {
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .experience-card p,
        .experience-card li {
            font-size: 0.9rem;
            line-height: 1.5;
        }
    }

    /* Enhanced mobile detection and animation */
    @media screen and (max-width: 768px) {

        .animate-slideInFromLeft,
        .animate-slideInFromRight {
            animation: slideInFromUp 0.6s ease-out forwards !important;
            -webkit-animation: slideInFromUp 0.6s ease-out forwards !important;
        }
    }

    /* Reduced motion for accessibility */
    @media (prefers-reduced-motion: reduce) {

        .experience-card,
        .animate-slideInFromLeft,
        .animate-slideInFromRight,
        .animate-slideInFromUp {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }
    }
</style>

{{-- Enhanced JavaScript with better mobile support --}}
<script>
    (function() {
        'use strict';

        // Wait for DOM to be fully loaded
        function initializeExperience() {
            const experienceCards = document.querySelectorAll('.experience-card');
            const experienceSection = document.getElementById('experience');

            if (!experienceSection || experienceCards.length === 0) {
                console.warn('Experience section or cards not found');
                return;
            }

            let hasAnimated = false;
            let animationTimeouts = [];
            let isAnimating = false;

            // Mobile detection
            function isMobileDevice() {
                return window.innerWidth <= 768 ||
                    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            }

            // Clear all timeouts
            function clearAnimationTimeouts() {
                animationTimeouts.forEach(timeout => {
                    if (timeout) clearTimeout(timeout);
                });
                animationTimeouts = [];
            }

            // Reset cards to initial state
            function resetCards() {
                if (isAnimating) return;

                experienceCards.forEach(card => {
                    if (card) {
                        card.classList.remove('animate-slideInFromLeft', 'animate-slideInFromRight',
                            'animate-slideInFromUp');
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                    }
                });
                hasAnimated = false;
            }

            // Animate cards with enhanced mobile support
            function animateCards() {
                if (hasAnimated || isAnimating) return;

                isAnimating = true;
                const isMobile = isMobileDevice();

                experienceCards.forEach((card, index) => {
                    if (!card) return;

                    const direction = card.dataset.direction || 'left';
                    const delay = parseInt(card.dataset.delay) || (index * 200);

                    const timeout = setTimeout(() => {
                        try {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';

                            if (isMobile) {
                                // Use simpler animation for mobile
                                card.classList.add('animate-slideInFromUp');
                            } else {
                                // Use directional animations for desktop
                                if (direction === 'left') {
                                    card.classList.add('animate-slideInFromLeft');
                                } else {
                                    card.classList.add('animate-slideInFromRight');
                                }
                            }
                        } catch (error) {
                            console.warn('Animation error:', error);
                            // Fallback: just show the card
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }
                    }, Math.max(delay, 100));

                    if (timeout) {
                        animationTimeouts.push(timeout);
                    }
                });

                hasAnimated = true;

                // Reset animation flag after all animations complete
                setTimeout(() => {
                    isAnimating = false;
                }, 2000);
            }

            // Enhanced intersection observer with better mobile support
            const observerOptions = {
                threshold: isMobileDevice() ? [0, 0.1, 0.25] : [0, 0.2, 0.5],
                rootMargin: isMobileDevice() ? '-20px 0px -20px 0px' : '-50px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && entry.intersectionRatio > (isMobileDevice() ? 0.1 :
                            0.2)) {
                        // Trigger animation when section comes into view
                        if (hasAnimated) {
                            clearAnimationTimeouts();
                            resetCards();
                            setTimeout(animateCards, 150);
                        } else {
                            animateCards();
                        }
                    }
                });
            }, observerOptions);

            // Start observing
            observer.observe(experienceSection);

            // Enhanced scroll handler with throttling
            let scrollTimeout;
            let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;

            function handleScroll() {
                const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
                const sectionTop = experienceSection.offsetTop - window.innerHeight;
                const sectionBottom = experienceSection.offsetTop + experienceSection.offsetHeight;

                // Reset animation if scrolled completely past the section
                if (currentScrollY < sectionTop - 200 || currentScrollY > sectionBottom + 200) {
                    if (hasAnimated && !isAnimating) {
                        setTimeout(() => {
                            const newScrollY = window.pageYOffset || document.documentElement.scrollTop;
                            if (newScrollY < sectionTop - 200 || newScrollY > sectionBottom + 200) {
                                resetCards();
                            }
                        }, 500);
                    }
                }

                lastScrollY = currentScrollY;
            }

            // Throttled scroll handler
            window.addEventListener('scroll', function() {
                if (scrollTimeout) clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(handleScroll, 50);
            }, {
                passive: true
            });

            // Handle orientation change on mobile
            window.addEventListener('orientationchange', function() {
                setTimeout(() => {
                    if (hasAnimated) {
                        resetCards();
                        setTimeout(animateCards, 300);
                    }
                }, 100);
            });

            // Handle window resize
            let resizeTimeout;
            window.addEventListener('resize', function() {
                if (resizeTimeout) clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    if (hasAnimated) {
                        resetCards();
                        setTimeout(animateCards, 200);
                    }
                }, 300);
            });

            // Initial setup - show cards immediately if already in view
            setTimeout(() => {
                const rect = experienceSection.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    animateCards();
                }
            }, 100);

            // Cleanup function
            window.experienceCleanup = function() {
                clearAnimationTimeouts();
                if (observer) observer.disconnect();
                window.removeEventListener('scroll', handleScroll);
            };
        }

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeExperience);
        } else {
            // DOM is already ready
            setTimeout(initializeExperience, 100);
        }
    })();
</script>
