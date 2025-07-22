{{-- resources/views/layouts/head.blade.php --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- Enhanced SEO Meta Tags --}}
<title>{{ $title ?? 'Christian David Moreno - Full Stack Developer' }}</title>
<meta name="description"
    content="{{ $description ?? 'Experienced Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies. Explore my portfolio of innovative web applications and digital solutions.' }}">
<meta name="keywords"
    content="Full Stack Developer, Laravel, Vue.js, PHP, JavaScript, Web Development, Portfolio, Christian David Moreno, Web Applications, Digital Solutions">
<meta name="author" content="Christian David Moreno">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="RqrhwFxNlHXp3K_Yg_aL5EDSV2ib_KJeBEAIFYZ_MhI" />
<meta name="msvalidate.01" content="C5D56FC0721F1A3A6CFE42F606491C6D" />
<link rel="canonical" href="{{ url()->current() }}">


{{-- Open Graph / Facebook --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title ?? 'Christian David Moreno - Full Stack Developer' }}">
<meta property="og:description"
    content="{{ $description ?? 'Experienced Full Stack Developer portfolio showcasing innovative web solutions.' }}">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
<meta property="og:site_name" content="Christian David Moreno">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="{{ $title ?? 'Christian David Moreno - Full Stack Developer' }}">
<meta name="twitter:description"
    content="{{ $description ?? 'Experienced Full Stack Developer portfolio showcasing innovative web solutions.' }}">
<meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

{{-- Additional SEO Meta --}}
<meta name="geo.region" content="PH-LAP">
<meta name="geo.placename" content="Lapu-Lapu City">
<meta name="geo.position" content="10.3103;123.9494">
<meta name="ICBM" content="10.3103, 123.9494">

{{-- Fonts with fallbacks --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

{{-- Tailwind CSS --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- Enhanced Custom CSS with Cross-Browser Support --}}
<style>
    .font-inter {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .font-montserrat {
        font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    /* Cross-browser custom animations */
    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translateY(30px);
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translateY(30px);
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-webkit-keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translateX(-30px);
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translateX(-30px);
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @-webkit-keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @-webkit-keyframes slideDown {
        from {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        -webkit-animation: fadeInUp 0.8s ease-out forwards;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fadeInLeft {
        -webkit-animation: fadeInLeft 0.8s ease-out forwards;
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        -webkit-animation: fadeInRight 0.8s ease-out forwards;
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .animate-slideDown {
        -webkit-animation: slideDown 0.6s ease-out forwards;
        animation: slideDown 0.6s ease-out forwards;
    }

    /* Animation delays */
    .delay-300 {
        -webkit-animation-delay: 300ms;
        animation-delay: 300ms;
    }

    .delay-600 {
        -webkit-animation-delay: 600ms;
        animation-delay: 600ms;
    }

    .delay-900 {
        -webkit-animation-delay: 900ms;
        animation-delay: 900ms;
    }

    .delay-1200 {
        -webkit-animation-delay: 1200ms;
        animation-delay: 1200ms;
    }

    /* Enhanced Glassmorphism effect with fallbacks */
    .glass {
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(17, 25, 40, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    /* Fallback for browsers without backdrop-filter support */
    @supports not (backdrop-filter: blur()) {
        .glass {
            background-color: rgba(17, 25, 40, 0.8);
        }
    }

    /* Enhanced custom scrollbar with cross-browser support */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #1a1a1a;
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #3b82f6, #8b5cf6);
        border-radius: 3px;
        transition: background 0.3s ease;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #2563eb, #7c3aed);
    }

    /* Firefox scrollbar styling */
    * {
        scrollbar-width: thin;
        scrollbar-color: #3b82f6 #1a1a1a;
    }

    /* Additional smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Enhanced focus styles for accessibility - Remove default outline for mouse users */
    *:focus {
        outline: none;
    }

    /* Only show focus styles for keyboard navigation */
    *:focus-visible {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
        border-radius: 4px;
    }

    /* Specific styling for links and buttons */
    a:focus-visible,
    button:focus-visible {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
        border-radius: 4px;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    }

    /* Remove the default browser focus ring for mouse clicks */
    a:focus:not(:focus-visible),
    button:focus:not(:focus-visible),
    input:focus:not(:focus-visible),
    textarea:focus:not(:focus-visible) {
        outline: none;
        box-shadow: none;
    }

    /* Improved text rendering */
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
    }

    /* Utility classes for better performance */
    .will-change-transform {
        will-change: transform;
    }

    .will-change-opacity {
        will-change: opacity;
    }

    /* Dark mode optimizations */
    @media (prefers-color-scheme: dark) {
        ::-webkit-scrollbar-track {
            background: #0f0f0f;
        }
    }

    /* Reduced motion for accessibility */
    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>

{{-- Additional head content --}}
@stack('head')
