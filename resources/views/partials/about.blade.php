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
                        Throughout my academic journey, I led multiple system development projects—including
                        a Learning Management System and various booking and management platforms—showcasing
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
                    {{-- Fixed container with proper image fitting --}}
                    <div class="w-full h-full bg-gray-900 rounded-2xl overflow-hidden relative">
                        {{-- Image Container with proper positioning --}}
                        <div class="absolute inset-0 image-container">
                            <img src="{{ asset('images/myprofile3.png') }}" alt="Christian David D. Moreno - Profile"
                                class="profile-image profile-image-1 w-full h-full object-cover rounded-2xl opacity-100 transition-opacity duration-2000 ease-in-out"
                                style="object-position: center top;">
                            <img src="{{ asset('images/grad.jpeg') }}" alt="Christian David D. Moreno - Graduation"
                                class="profile-image profile-image-2 w-full h-full object-cover rounded-2xl opacity-0 transition-opacity duration-2000 ease-in-out absolute inset-0"
                                style="object-position: center center;">
                        </div>

                        {{-- Overlay with gradient --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent rounded-2xl">
                        </div>

                        {{-- Text Overlay --}}
                        <div class="absolute bottom-8 left-8 right-8 text-center">
                            <h3 class="text-xl font-semibold text-white mb-2">Christian David D. Moreno</h3>
                            <p class="text-gray-300">IT Professional & Developer</p>
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
        /* Ensure no gaps */
        width: 100%;
        height: 100%;
    }

    .profile-image {
        /* Ensure images fill the container completely */
        object-fit: cover;
        /* Remove any potential margin/padding */
        margin: 0;
        padding: 0;
        /* Ensure pixel-perfect fitting */
        display: block;
    }

    .profile-image-1 {
        object-position: center top;
    }

    .profile-image-2 {
        object-position: center center;
    }

    .image-container img {
        /* Force exact dimensions */
        width: 100% !important;
        height: 100% !important;
        /* Ensure no gaps */
        vertical-align: top;
        /* Remove any browser default spacing */
        border: none;
        outline: none;
    }

    /* Smoother animation for image switching */
    @keyframes imageSwitch {

        0%,
        40% {
            opacity: 1;
        }

        45%,
        55% {
            opacity: 0;
        }

        60%,
        100% {
            opacity: 0;
        }
    }

    @keyframes imageSwitchSecond {

        0%,
        40% {
            opacity: 0;
        }

        45%,
        95% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    .image-container .profile-image-1 {
        animation: imageSwitch 10s infinite ease-in-out;
    }

    .image-container .profile-image-2 {
        animation: imageSwitchSecond 10s infinite ease-in-out;
    }

    /* Debug helper - remove after fixing */
    .debug-container {
        border: 2px solid red !important;
    }

    .debug-image {
        border: 2px solid blue !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth image switching with longer intervals
        const images = document.querySelectorAll('.profile-image');
        let currentIndex = 0;

        function switchImages() {
            // Fade out current image
            images[currentIndex].style.opacity = '0';

            // Switch to next image
            currentIndex = (currentIndex + 1) % images.length;

            // Fade in next image with delay for smoother transition
            setTimeout(() => {
                images[currentIndex].style.opacity = '1';
            }, 1000); // 1 second delay for smoother crossfade
        }

        // Switch images every 8 seconds for more comfortable viewing
        setInterval(switchImages, 8000);

        // Debug function - call this in console to see gaps
        window.debugImageContainer = function() {
            const container = document.querySelector('.image-container');
            const images = document.querySelectorAll('.profile-image');

            console.log('Container dimensions:', {
                width: container.offsetWidth,
                height: container.offsetHeight
            });

            images.forEach((img, index) => {
                console.log(`Image ${index + 1} dimensions:`, {
                    naturalWidth: img.naturalWidth,
                    naturalHeight: img.naturalHeight,
                    displayWidth: img.offsetWidth,
                    displayHeight: img.offsetHeight,
                    aspectRatio: img.naturalWidth / img.naturalHeight
                });
            });
        };
    });
</script>
