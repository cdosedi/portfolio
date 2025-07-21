{{-- resources/views/layouts/head.blade.php --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- SEO Meta Tags --}}
<title>{{ $title ?? 'Christian David Moreno - Full Stack Developer Portfolio' }}</title>
<meta name="description"
    content="{{ $description ?? 'Experienced Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies. Explore my portfolio of innovative web applications and digital solutions.' }}">
<meta name="keywords"
    content="Full Stack Developer, Laravel, Vue.js, PHP, JavaScript, Web Development, Portfolio, Christian David Moreno">
<meta name="author" content="Christian David Moreno">

{{-- Open Graph / Facebook --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title ?? 'Christian David Moreno - Full Stack Developer' }}">
<meta
    property="og:description"content="{{ $description ?? 'Experienced Full Stack Developer portfolio showcasing innovative web solutions.' }}">


{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

{{-- Tailwind CSS --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- Custom CSS --}}
<style>
    .font-inter {
        font-family: 'Inter', sans-serif;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    /* Custom animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .animate-slideDown {
        animation: slideDown 0.6s ease-out forwards;
    }

    /* Animation delays */
    .delay-300 {
        animation-delay: 300ms;
    }

    .delay-600 {
        animation-delay: 600ms;
    }

    .delay-900 {
        animation-delay: 900ms;
    }

    .delay-1200 {
        animation-delay: 1200ms;
    }

    /* Glassmorphism effect */
    .glass {
        backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(17, 25, 40, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #1a1a1a;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #3b82f6, #8b5cf6);
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #2563eb, #7c3aed);
    }
</style>

{{-- Additional head content --}}
@stack('head')
