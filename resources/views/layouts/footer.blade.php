<footer class="bg-gradient-to-br from-gray-950 to-gray-800 border-t border-gray-700 relative overflow-hidden font-sans">
    {{-- Background decoration with refined gradients --}}
    <div class="absolute inset-0 opacity-15">
        <div
            class="absolute -top-60 -right-60 w-[28rem] h-[28rem] bg-indigo-600 rounded-full mix-blend-multiply filter blur-2xl animate-blob">
        </div>
        <div
            class="absolute -bottom-60 -left-60 w-[28rem] h-[28rem] bg-pink-600 rounded-full mix-blend-multiply filter blur-2xl animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[28rem] h-[28rem] bg-purple-600 rounded-full mix-blend-multiply filter blur-2xl animate-blob animation-delay-4000">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 relative z-10">
        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                {{-- Brand Section --}}
                <div class="md:col-span-2">
                    <div class="flex items-center mb-5">
                        <h3 class="text-3xl font-poppins font-extrabold text-white tracking-wide">Christian David D.
                            Moreno</h3>
                    </div>
                    <p class="text-gray-300 mb-7 max-w-lg leading-relaxed text-base">
                        Recent IT graduate skilled in software and web development, system design, and IT support.
                        Specialized in building POS systems and web platforms using Laravel, Python, and Tailwind CSS.
                        Passionate about solving real-world problems through clean, efficient code.
                    </p>

                    {{-- Social Links --}}
                    <div class="flex space-x-4 mt-6">
                        @php
                            $socialLinks = [
                                [
                                    'href' => 'https://github.com/christiandavidmoreno',
                                    'icon' => 'github',
                                    'label' => 'GitHub',
                                ],
                                [
                                    'href' => 'https://www.linkedin.com/in/christian-david-moreno-02ab55265',
                                    'icon' => 'linkedin',
                                    'label' => 'LinkedIn',
                                ],
                                [
                                    'href' => 'mailto:cdocdmoreno@gmail.com',
                                    'icon' => 'email',
                                    'label' => 'Email',
                                ],
                            ];
                        @endphp

                        @foreach ($socialLinks as $social)
                            <a href="{{ $social['href'] }}"
                                target="{{ str_starts_with($social['href'], 'mailto:') ? '_self' : '_blank' }}"
                                rel="noopener noreferrer"
                                class="w-11 h-11 bg-gray-800 hover:bg-gradient-to-r hover:from-indigo-500 hover:to-pink-500 text-gray-400 hover:text-white rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg"
                                aria-label="{{ $social['label'] }}">
                                @if ($social['icon'] === 'github')
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.6.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.547-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604C6.095 15.713 3.293 14.684 3.293 9.087c0-1.311.469-2.381 1.236-3.221-.124-.303-.536-1.524.117-3.176 0 0 1.009-.322 3.301 1.23a11.55 11.55 0 0 1 6.002 0c2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.236 1.911 1.236 3.221 0 5.61-3.288 6.619-6.42 6.963.429.372.823 1.102.823 2.222v3.293c0 .319.193.694.801.576C20.565 21.8 24 17.302 24 12c0-6.627-5.373-12-12-12z" />
                                    </svg>
                                @elseif($social['icon'] === 'linkedin')
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433C4.193 7.433 3.274 6.507 3.274 5.369c0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.138-.925 2.064-2.064 2.064zm1.782 13.019H3.555V9h3.564v11.452z" />
                                    </svg>
                                @elseif($social['icon'] === 'email')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4
                        class="text-white font-poppins font-semibold mb-5 text-lg border-b-2 border-indigo-500 pb-2 inline-block">
                        Quick Links</h4>
                    <ul class="space-y-3">
                        @php
                            $quickLinks = [
                                ['href' => '#about', 'label' => 'About Me'],
                                ['href' => '#skills', 'label' => 'Skills'],
                                ['href' => '#projects', 'label' => 'Projects'],
                                ['href' => '#experience', 'label' => 'Experience'],
                            ];
                        @endphp

                        @foreach ($quickLinks as $link)
                            <li>
                                <a href="{{ $link['href'] }}"
                                    class="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group text-base">
                                    <span
                                        class="w-0 group-hover:w-3 h-0.5 bg-pink-500 transition-all duration-300 mr-0 group-hover:mr-2 rounded-full"></span>
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Contact Info --}}
                <div>
                    <h4
                        class="text-white font-poppins font-semibold mb-5 text-lg border-b-2 border-pink-500 pb-2 inline-block">
                        Get In Touch</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start text-gray-300 text-base">
                            <svg class="w-5 h-5 mr-3 text-indigo-400 flex-shrink-0 mt-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:cdocdmoreno@gmail.com"
                                class="hover:text-white transition-colors duration-300">
                                cdocdmoreno@gmail.com
                            </a>
                        </li>
                        <li class="flex items-start text-gray-300 text-base">
                            <svg class="w-5 h-5 mr-3 text-indigo-400 flex-shrink-0 mt-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Sta. Ana Binuntucan, Pontevedra, Capiz</span>
                        </li>
                        <li class="flex items-start text-gray-300 text-base">
                            <svg class="w-5 h-5 mr-3 text-indigo-400 flex-shrink-0 mt-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Open to freelance & full-time opportunities</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="border-t border-gray-700 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    <p>&copy; {{ date('Y') }} Christian David Moreno. All rights reserved.</p>
                </div>

                <div
                    class="flex flex-wrap justify-center md:justify-end items-center space-x-4 sm:space-x-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <span class="text-gray-600">•</span>
                    <a href="#" class="hover:text-white transition-colors duration-300">Terms of Service</a>
                    <span class="text-gray-600">•</span>
                    <div class="flex items-center mt-2 sm:mt-0">
                        <span class="mr-2">Built with</span>
                        <svg class="w-5 h-5 text-red-500 animate-pulse-slow" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 font-medium text-white">Laravel & Tailwind CSS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Back to top button --}}
    <button id="backToTop"
        class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-br from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white rounded-full shadow-xl transform translate-y-20 opacity-0 transition-all duration-500 z-50 flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-75"
        aria-label="Back to top">
        <svg class="w-7 h-7 transform group-hover:-translate-y-1 transition-transform duration-300" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</footer>

<style>
    @keyframes blob {
        0% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0, 0) scale(1);
        }
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .6;
        }
    }

    .animate-blob {
        animation: blob 7s infinite cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopButton = document.getElementById('backToTop');

        const toggleBackToTopButton = () => {
            if (window.scrollY > 400) { // Increased scroll threshold
                backToTopButton.classList.remove('translate-y-20', 'opacity-0');
                backToTopButton.classList.add('translate-y-0', 'opacity-100');
            } else {
                backToTopButton.classList.add('translate-y-20', 'opacity-0');
                backToTopButton.classList.remove('translate-y-0', 'opacity-100');
            }
        };

        window.addEventListener('scroll', toggleBackToTopButton);

        // Initial check in case the page loads scrolled down
        toggleBackToTopButton();

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>
