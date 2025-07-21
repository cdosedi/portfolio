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
            {{-- Timeline line --}}
            <div
                class="absolute left-1/2 transform -translate-x-0.5 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 opacity-30 rounded-full md:block hidden">
            </div>

            {{-- Experience Cards --}}
            <div class="space-y-16">
                {{-- Freelance Software Developer --}}
                <div class="experience-card opacity-0" data-direction="left" data-delay="0">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-left md:text-right">
                            <div
                                class="glass rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                                <div class="flex items-center md:justify-end mb-4">
                                    <span
                                        class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2019 - Present
                                    </span>
                                </div>
                                <h3 class="text-2xl font-montserrat font-bold text-white mb-2">
                                    Freelance Software Developer
                                </h3>
                                <p class="text-blue-400 font-medium mb-4">Independent Projects | Commission-Based</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Develop Point of Sale (POS)
                                            systems for
                                            retail businesses</span>
                                        <span
                                            class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
                                    </li>
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Create custom applications
                                            tailored to
                                            client needs</span>
                                        <span
                                            class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
                                    </li>
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Maintain long-term client
                                            relationships and
                                            system updates</span>
                                        <span
                                            class="w-2 h-2 bg-pink-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
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
                                class="glass rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="bg-gradient-to-r from-purple-400 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2025
                                    </span>
                                </div>
                                <h3 class="text-2xl font-montserrat font-bold text-white mb-2">
                                    Software Developer
                                </h3>
                                <p class="text-purple-400 font-medium mb-4">Digital Business Training Center | OJT</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-purple-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Led development team in creating multiple management systems
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-pink-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Project Leader for Barangay Booking System
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Developed Clinic and Fitness Center Management Systems
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
                                class="glass rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                                <div class="flex items-center md:justify-end mb-4">
                                    <span
                                        class="bg-gradient-to-r from-blue-400 to-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2025
                                    </span>
                                </div>
                                <h3 class="text-2xl font-montserrat font-bold text-white mb-2">
                                    IT Support Specialist
                                </h3>
                                <p class="text-cyan-400 font-medium mb-4">Filamer Christian University | OJT</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Technical support for
                                            students and
                                            staff</span>
                                        <span
                                            class="w-2 h-2 bg-cyan-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
                                    </li>
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Hardware troubleshooting
                                            and repair</span>
                                        <span
                                            class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
                                    </li>
                                    <li class="flex items-start md:justify-end">
                                        <span class="text-left md:text-right flex-1 md:mr-3">Network infrastructure
                                            maintenance</span>
                                        <span
                                            class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0 ml-3 md:ml-0"></span>
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
                                class="glass rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="bg-gradient-to-r from-orange-400 to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                        2021 - 2022
                                    </span>
                                </div>
                                <h3 class="text-2xl font-montserrat font-bold text-white mb-2">
                                    Youth Chairman
                                </h3>
                                <p class="text-yellow-400 font-medium mb-4">Capiz, Philippines</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-yellow-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Demonstrated leadership in planning church initiatives
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-orange-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Organized community engagement programs
                                    </li>
                                    <li class="flex items-start">
                                        <span class="w-2 h-2 bg-red-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                        Developed communication and leadership skills
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

{{-- Custom CSS for Experience Animations --}}
<style>
    /* Experience card animations */
    @keyframes slideInFromLeft {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInFromRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slideInFromLeft {
        animation: slideInFromLeft 0.8s ease-out forwards;
    }

    .animate-slideInFromRight {
        animation: slideInFromRight 0.8s ease-out forwards;
    }

    /* Mobile responsive adjustments */
    @media (max-width: 767px) {
        .experience-card .glass {
            margin-bottom: 2rem;
        }

        .experience-card>div {
            flex-direction: column;
        }

        .experience-card [data-direction="left"] .md\:w-1\/2,
        .experience-card [data-direction="right"] .md\:w-1\/2 {
            width: 100%;
            padding: 0;
            text-align: left;
        }

        @keyframes slideInFromUpMobile {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideInFromLeft,
        .animate-slideInFromRight {
            animation: slideInFromUpMobile 0.8s ease-out forwards;
        }
    }
</style>

{{-- Experience Animation JavaScript --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const experienceCards = document.querySelectorAll('.experience-card');
        const experienceSection = document.getElementById('experience');
        let hasAnimated = false;
        let animationTimeouts = [];

        function clearAnimationTimeouts() {
            animationTimeouts.forEach(timeout => clearTimeout(timeout));
            animationTimeouts = [];
        }

        function resetCards() {
            experienceCards.forEach(card => {
                card.classList.remove('animate-slideInFromLeft', 'animate-slideInFromRight');
                card.style.opacity = '0';
            });
            hasAnimated = false;
        }

        function animateCards() {
            if (hasAnimated) return;

            experienceCards.forEach((card, index) => {
                const direction = card.dataset.direction;
                const delay = parseInt(card.dataset.delay) || 0;

                const timeout = setTimeout(() => {
                    card.style.opacity = '1';
                    if (window.innerWidth < 768) {
                        card.classList.add(
                            'animate-slideInFromLeft'
                        ); // Always slide in from the same direction on mobile
                    } else {
                        if (direction === 'left') {
                            card.classList.add('animate-slideInFromLeft');
                        } else {
                            card.classList.add('animate-slideInFromRight');
                        }
                    }
                }, delay);

                animationTimeouts.push(timeout);
            });

            hasAnimated = true;
        }

        // Intersection Observer for triggering animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Reset and animate when entering the section
                    if (hasAnimated) {
                        clearAnimationTimeouts();
                        resetCards();
                        // Small delay to ensure reset is complete before animating
                        setTimeout(animateCards, 100);
                    } else {
                        animateCards();
                    }
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '-50px'
        });

        if (experienceSection) {
            observer.observe(experienceSection);
        }

        // Reset animation when scrolling away
        let lastScrollY = window.scrollY;
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            if (!experienceSection) return;
            const sectionTop = experienceSection.offsetTop - window.innerHeight;
            const sectionBottom = experienceSection.offsetTop + experienceSection.offsetHeight;

            // If scrolled completely past the section, reset for next time
            if (currentScrollY < sectionTop || currentScrollY > sectionBottom + window.innerHeight) {
                if (hasAnimated) {
                    setTimeout(() => {
                        if (currentScrollY < sectionTop || currentScrollY > sectionBottom +
                            window.innerHeight) {
                            resetCards();
                        }
                    }, 500);
                }
            }

            lastScrollY = currentScrollY;
        });
    });
</script>
