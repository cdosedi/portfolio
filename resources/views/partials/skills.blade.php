<section id="skills" class="relative min-h-screen py-20 bg-gray-900/50 overflow-hidden">
    <!-- Floating Background Shapes -->
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>
    <div class="floating-shape shape-4"></div>

    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-radial opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <header class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 font-montserrat">
                Skills & <span class="text-blue-400">Technologies</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A comprehensive toolkit for building modern web applications
            </p>
        </header>

        <!-- Skills Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Programming Languages -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">💻</span>
                    <h3>Programming Languages</h3>
                </div>
                <ul class="skill-list">
                    <li class="text-yellow-400">Python</li>
                    <li class="text-blue-500">PHP</li>
                    <li class="text-purple-500">C#</li>
                    <li class="text-yellow-300">JavaScript</li>
                </ul>
            </article>

            <!-- Web & Frameworks -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">🌐</span>
                    <h3>Web & Frameworks</h3>
                </div>
                <ul class="skill-list">
                    <li>Laravel</li>
                    <li>CodeIgniter 4</li>
                    <li>Tailwind CSS</li>
                    <li>Bootstrap</li>
                    <li>HTML5 / CSS3</li>
                </ul>
            </article>

            <!-- Databases & APIs -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">🗄️</span>
                    <h3>Databases & APIs</h3>
                </div>
                <ul class="skill-list">
                    <li class="text-orange-500">MySQL</li>
                    <li class="text-green-500">MongoDB</li>
                    <li>MS Access</li>
                    <li class="bg-gradient-to-r from-blue-500 via-red-500 to-yellow-500 bg-clip-text text-transparent">
                        Google APIs
                    </li>
                </ul>
            </article>

            <!-- Tools & DevOps -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">🛠️</span>
                    <h3>Tools & DevOps</h3>
                </div>
                <ul class="skill-list">
                    <li class="text-orange-600">Git / GitHub</li>
                    <li class="text-green-500">Microsoft Office</li>
                    <li>Wi-Fi & LAN Setup</li>
                    <li>Hardware Troubleshooting</li>
                </ul>
            </article>

            <!-- Development & Design -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">📐</span>
                    <h3>Development & Design</h3>
                </div>
                <ul class="skill-list">
                    <li>ER Diagrams</li>
                    <li>Use Case Diagrams</li>
                    <li>Data Flow Diagrams</li>
                    <li>Clean Code & SOLID</li>
                </ul>
            </article>

            <!-- Business Skills -->
            <article class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">📊</span>
                    <h3>Business Skills</h3>
                </div>
                <ul class="skill-list">
                    <li>Project Management</li>
                    <li>Marketing</li>
                    <li>Business Strategy</li>
                    <li>Market Research</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<style>
    /* Variables for consistent theming */
    :root {
        --primary-blue: #3b82f6;
        --primary-purple: #9333ea;
        --card-bg: rgba(31, 41, 55, 0.5);
        --card-border: rgba(75, 85, 99, 1);
        --card-hover-border: rgba(59, 130, 246, 0.5);
        --text-primary: #ffffff;
        --text-secondary: #d1d5db;
    }

    /* Floating Shapes */
    .floating-shape {
        position: absolute;
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
        will-change: transform;
    }

    .shape-1 {
        width: 8rem;
        height: 8rem;
        background: rgba(59, 130, 246, 0.1);
        top: 2.5rem;
        left: 2.5rem;
    }

    .shape-2 {
        width: 5rem;
        height: 5rem;
        background: rgba(147, 51, 234, 0.1);
        top: 8rem;
        right: 5rem;
        animation-delay: -2s;
    }

    .shape-3 {
        width: 4rem;
        height: 4rem;
        background: rgba(236, 72, 153, 0.1);
        bottom: 10rem;
        left: 25%;
        animation-delay: -4s;
    }

    .shape-4 {
        width: 6rem;
        height: 6rem;
        background: rgba(6, 182, 212, 0.1);
        bottom: 5rem;
        right: 33.333%;
        animation-delay: -6s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    /* Background Gradient */
    .bg-gradient-radial {
        background:
            radial-gradient(circle at 30% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 70% 80%, rgba(147, 51, 234, 0.15) 0%, transparent 50%);
        animation: gradientShift 15s ease infinite;
    }

    @keyframes gradientShift {

        0%,
        100% {
            transform: scale(1) rotate(0deg);
        }

        50% {
            transform: scale(1.1) rotate(2deg);
        }
    }

    /* Animation Classes - Initial States */
    header,
    .skill-card {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    /* Active Animation States */
    header.animate-active,
    .skill-card.animate-active {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Skill Card Styles */
    .skill-card {
        background: var(--card-bg);
        backdrop-filter: blur(10px);
        border: 1px solid var(--card-border);
        border-radius: 0.75rem;
        padding: 1.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .skill-card:hover {
        transform: translateY(-8px);
        border-color: var(--card-hover-border);
        box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
    }

    .skill-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .skill-icon {
        font-size: 1.5rem;
        margin-right: 0.75rem;
    }

    .skill-header h3 {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--text-primary);
        margin: 0;
    }

    .skill-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .skill-list li {
        color: var(--text-secondary);
        font-size: 0.95rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(75, 85, 99, 0.3);
        transition: color 0.2s ease;
    }

    .skill-list li:last-child {
        border-bottom: none;
    }

    .skill-card:hover .skill-list li {
        color: var(--text-primary);
    }

    /* Responsive Design */
    @media (max-width: 768px) {

        .shape-1,
        .shape-2,
        .shape-3,
        .shape-4 {
            opacity: 0.5;
        }

        .skill-card {
            padding: 1.25rem;
        }

        .skill-header h3 {
            font-size: 1.1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let animationTriggered = false;

        // Function to reset all animations
        function resetAnimations() {
            const header = document.querySelector('#skills header');
            const skillCards = document.querySelectorAll('.skill-card');

            // Reset header
            if (header) {
                header.classList.remove('animate-active');
                void header.offsetHeight;
            }

            // Reset skill cards
            skillCards.forEach(card => {
                card.classList.remove('animate-active');
                void card.offsetHeight;
            });

            animationTriggered = false;
        }

        // Function to trigger animations
        function triggerAnimations() {
            if (animationTriggered) return;
            animationTriggered = true;

            const header = document.querySelector('#skills header');
            const skillCards = document.querySelectorAll('.skill-card');

            // Trigger header animation immediately
            if (header) {
                requestAnimationFrame(() => {
                    header.classList.add('animate-active');
                });
            }

            // Trigger skill card animations with staggered delays
            skillCards.forEach((card, index) => {
                setTimeout(() => {
                    requestAnimationFrame(() => {
                        card.classList.add('animate-active');
                    });
                }, 300 + (index * 150));
            });
        }

        // Intersection Observer with retrigger logic
        const skillsSection = document.getElementById('skills');
        const observerOptions = {
            root: null,
            rootMargin: '-10px',
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        triggerAnimations();
                    }, 100);
                } else {
                    resetAnimations();
                }
            });
        }, observerOptions);

        if (skillsSection) {
            observer.observe(skillsSection);
        }
    });
</script>
