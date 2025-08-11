{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}"
                    class="text-2xl font-montserrat font-bold text-white hover:text-blue-400 transition-colors duration-300">
                    <span class="opacity-0 animate-fadeInLeft">CDM</span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    @php
                        $navItems = [
                            ['href' => '#hero', 'label' => 'Home'],
                            ['href' => '#about', 'label' => 'About'],
                            ['href' => '#skills', 'label' => 'Skills'],
                            ['href' => '#experience', 'label' => 'Experience'],
                            ['href' => '#projects', 'label' => 'Projects'],
                            ['href' => '#contact', 'label' => 'Contact'],
                        ];
                    @endphp

                    @foreach ($navItems as $index => $item)
                        <a href="{{ $item['href'] }}"
                            class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 relative group opacity-0 animate-slideDown"
                            style="animation-delay: {{ ($index + 2) * 100 }}ms;">
                            {{ $item['label'] }}
                            {{-- Hover underline --}}
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-300 group-hover:w-full opacity-70"></span>
                            {{-- Active section underline --}}
                            <span
                                class="nav-active-underline absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 transition-all duration-500 ease-out"></span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- CTA Button --}}
            <div class="hidden md:block">
                <a href="#contact"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-2 rounded-full text-sm font-medium transition-all duration-300 transform hover:scale-105 opacity-0 animate-fadeInRight delay-900">
                    Let's Talk
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button"
                    class="mobile-menu-button text-gray-300 hover:text-white focus:outline-none focus:text-white transition-colors duration-300 opacity-0 animate-fadeInRight delay-300"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 glass">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}"
                    class="mobile-nav-link text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-all duration-300 relative">
                    {{ $item['label'] }}
                    {{-- Active section indicator for mobile --}}
                    <span
                        class="mobile-nav-indicator absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-400 to-purple-400 transform scale-y-0 transition-transform duration-300 origin-center"></span>
                </a>
            @endforeach

            <div class="pt-4">
                <a href="#contact"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 text-white block px-3 py-2 rounded-md text-base font-medium text-center transition-all duration-300">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Navigation JavaScript --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('glass');
            } else {
                navbar.classList.remove('glass');
            }
        });

        // Mobile menu toggle
        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });

        // Enhanced Active navigation highlighting with underlines
        function setActiveNav() {
            const sections = document.querySelectorAll('section[id]');
            const scrollPos = window.scrollY + 100;

            // Reset all active states
            navLinks.forEach(link => {
                const underline = link.querySelector('.nav-active-underline');
                link.classList.remove('text-blue-400');
                if (underline) {
                    underline.style.width = '0';
                }
            });

            mobileNavLinks.forEach(link => {
                const indicator = link.querySelector('.mobile-nav-indicator');
                link.classList.remove('text-blue-400', 'bg-blue-900/20');
                if (indicator) {
                    indicator.classList.remove('scale-y-100');
                    indicator.classList.add('scale-y-0');
                }
            });

            // Find active section
            let activeSection = null;
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPos >= sectionTop - 50 && scrollPos < sectionTop + sectionHeight - 50) {
                    activeSection = sectionId;
                }
            });

            // Handle special case for top of page (hero section)
            if (scrollPos < 100) {
                activeSection = 'hero';
            }

            // Apply active states
            if (activeSection) {
                // Desktop nav
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === `#${activeSection}`) {
                        const underline = link.querySelector('.nav-active-underline');
                        link.classList.add('text-blue-400');
                        if (underline) {
                            underline.style.width = '100%';
                        }
                    }
                });

                // Mobile nav
                mobileNavLinks.forEach(link => {
                    if (link.getAttribute('href') === `#${activeSection}`) {
                        const indicator = link.querySelector('.mobile-nav-indicator');
                        link.classList.add('text-blue-400', 'bg-blue-900/20');
                        if (indicator) {
                            indicator.classList.remove('scale-y-0');
                            indicator.classList.add('scale-y-100');
                        }
                    }
                });
            }
        }

        // Throttled scroll handler for better performance
        let scrollTimer = null;
        window.addEventListener('scroll', function() {
            if (scrollTimer !== null) {
                clearTimeout(scrollTimer);
            }
            scrollTimer = setTimeout(setActiveNav, 10);
        });

        setActiveNav();

        // Close mobile menu when clicking on links
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navbar.contains(event.target);
            const isMenuVisible = !mobileMenu.classList.contains('hidden');

            if (!isClickInsideNav && isMenuVisible) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        });

        // Add smooth scroll behavior
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
