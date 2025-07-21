{{-- resources/views/layouts/base.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    @include('layouts.head')
</head>

<body class="bg-gray-950 text-gray-100 font-inter antialiased overflow-x-hidden">
    <div class="min-h-screen flex flex-col relative">
        {{-- Background Elements --}}
        <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-gray-950 to-black -z-10"></div>
        <div class="fixed inset-0 opacity-20 -z-10">
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse">
            </div>
            <div
                class="absolute top-0 right-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-1/3 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-4000">
            </div>
        </div>

        {{-- Navigation --}}
        @include('layouts.navigation')

        {{-- Main Content --}}
        <main class="flex-grow">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>

    {{-- Smooth scroll enhancement --}}
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation delay classes
        const style = document.createElement('style');
        style.textContent = `
            .animation-delay-2000 { animation-delay: 2s; }
            .animation-delay-4000 { animation-delay: 4s; }
        `;
        document.head.appendChild(style);
    </script>

    @stack('scripts')
</body>

</html>
