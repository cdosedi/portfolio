{{-- About Section --}}
<section id="about" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h2 class="text-4xl md:text-5xl font-montserrat font-bold text-white">
                        About <span class="text-blue-400">Me</span>
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500"></div>
                </div>

                <div class="space-y-6 text-gray-300 leading-relaxed">
                    <p class="text-lg">
                        I'm Christian David D. Moreno, an IT professional with a strong foundation in
                        <strong class="text-blue-400">software and web development</strong>,
                        <strong class="text-purple-400">system design</strong>, and
                        <strong class="text-green-400">IT support</strong>. I specialize in crafting practical,
                        user-focused solutions using tools like Python, PHP, Laravel, and modern database systems.
                    </p>

                    <p>
                        Throughout my academic journey, I led multiple system development projects including
                        a Learning Management System and various booking and management platforms showcasing
                        both my technical expertise and leadership skills. I've also gained valuable experience
                        through internships and freelance work, where I provided full-stack development and
                        IT support for real-world clients.
                    </p>

                    <p>
                        In addition to programming, I have hands-on knowledge in network administration,
                        hardware troubleshooting, and UI design using Tailwind CSS and Bootstrap. I follow
                        clean code principles and value scalable, maintainable development.
                    </p>

                    <p>
                        Whether it's building systems from scratch, improving digital workflows, or supporting
                        IT infrastructure, I bring dedication, adaptability, and a collaborative spirit to every
                        project. I'm currently open to opportunities in software development, web development,
                        or IT support.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-blue-600/20 text-blue-400 rounded-full text-sm border border-blue-600/30">
                        Full-Stack Developer
                    </span>
                    <span
                        class="px-4 py-2 bg-purple-600/20 text-purple-400 rounded-full text-sm border border-purple-600/30">
                        System Designer
                    </span>
                    <span
                        class="px-4 py-2 bg-green-600/20 text-green-400 rounded-full text-sm border border-green-600/30">
                        IT Support Specialist
                    </span>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-blue-600 to-purple-600 rounded-2xl p-1">
                    <div class="w-full h-full bg-gray-900 rounded-2xl overflow-hidden relative">
                        <div class="absolute inset-0 image-container">
                            {{-- Slideshow of images --}}
                            <img src="{{ asset('images/profile1.jpg') }}" alt="Christian David D. Moreno - Photoshoot"
                                class="profile-image w-full h-full object-cover rounded-2xl transition-opacity duration-1000 ease-in-out absolute inset-0 opacity-100"
                                style="object-position: center center;">

                            <img src="{{ asset('images/myprofile3.png') }}" alt="Christian David D. Moreno - Profile"
                                class="profile-image w-full h-full object-cover rounded-2xl transition-opacity duration-1000 ease-in-out absolute inset-0 opacity-0"
                                style="object-position: center top;">

                            <img src="{{ asset('images/grad.jpeg') }}" alt="Christian David D. Moreno - Graduation"
                                class="profile-image w-full h-full object-cover rounded-2xl transition-opacity duration-1000 ease-in-out absolute inset-0 opacity-0"
                                style="object-position: center center;">
                        </div>

                        {{-- Overlay with gradient --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent rounded-2xl">
                        </div>
                    </div>
                </div>

                {{-- Floating stats --}}
                <div class="absolute -top-4 -right-4 bg-gray-800 border border-gray-700 rounded-lg p-4 text-center">
                    <div class="text-2xl font-bold text-blue-400">LMS</div>
                    <div class="text-xs text-gray-400">Project Leader</div>
                </div>

                <div class="absolute -bottom-4 -left-4 bg-gray-800 border border-gray-700 rounded-lg p-4 text-center">
                    <div class="text-2xl font-bold text-purple-400">Multi</div>
                    <div class="text-xs text-gray-400">Platform Systems</div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .profile-image {

        object-fit: cover;
        margin: 0;
        padding: 0;
        display: block;
    }

    .image-container img {
        width: 100% !important;
        height: 100% !important;
        vertical-align: top;
        border: none;
        outline: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('.profile-image');
        let currentIndex = 0;
        const intervalTime = 3000;
        let slideshowInterval;

        function switchImages() {
            images[currentIndex].classList.remove('opacity-100');
            images[currentIndex].classList.add('opacity-0');

            currentIndex = (currentIndex + 1) % images.length;

            images[currentIndex].classList.remove('opacity-0');
            images[currentIndex].classList.add('opacity-100');
        }

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {

                    if (!slideshowInterval) {
                        slideshowInterval = setInterval(switchImages, intervalTime);
                    }
                } else {
                    clearInterval(slideshowInterval);
                    slideshowInterval = null;
                }
            });
        }, {
            threshold: 0.5
        });

        const aboutSection = document.getElementById('about');
        if (aboutSection) {
            observer.observe(aboutSection);
        }
    });
</script>
