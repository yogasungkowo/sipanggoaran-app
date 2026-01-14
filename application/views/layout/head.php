<!DOCTYPE html>
<html lang="id" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="SI-Panggoaran - Sistem Pelaporan Magang Orientasi dan Kunjungan Balai Besar POM di Medan">
    <title>SI-Panggoaran | BBPOM di Medan</title>

    <link rel="icon" type="image/png" href="<?= base_url('public/assets/favicon/favicon-96x96.png') ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('public/assets/favicon/favicon.svg') ?>" />
    <link rel="shortcut icon" href="<?= base_url('public/assets/favicon/favicon.ico') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('public/assets/favicon/apple-touch-icon.png') ?>" />
    <link rel="manifest" href="<?= base_url('public/assets/favicon/site.webmanifest') ?>" />

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/output.css') ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Section visibility */
        .section {
            display: none;
            opacity: 0;
        }

        .section.active {
            display: block;
            animation: fadeInUp 0.5s ease forwards;
        }

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

        /* Mobile: Add bottom padding for bottom nav */
        @media (max-width: 1023px) {
            .main-content {
                padding-bottom: 80px;
            }
        }

        /* Active nav link styling */
        .nav-link.active .bubble-icon {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Dark Mode Styles */
        html.dark body {
            background-color: #0f172a;
            color: #e2e8f0;
        }

        html.dark .bg-white {
            background-color: #1e293b !important;
        }

        html.dark .bg-slate-50 {
            background-color: #0f172a !important;
        }

        html.dark .text-slate-800 {
            color: #e2e8f0 !important;
        }

        html.dark .text-slate-600 {
            color: #94a3b8 !important;
        }

        html.dark .text-slate-700 {
            color: #cbd5e1 !important;
        }

        html.dark .border-slate-100,
        html.dark .border-slate-200 {
            border-color: #334155 !important;
        }

        html.dark .shadow-lg,
        html.dark .shadow-xl,
        html.dark .shadow-md {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5) !important;
        }

        html.dark .hover\:bg-slate-50:hover {
            background-color: #334155 !important;
        }

        html.dark .hover\:bg-blue-50:hover {
            background-color: #1e3a5f !important;
        }

        /* Dark mode toggle button animation */
        .theme-toggle {
            transition: transform 0.3s ease;
        }
        .theme-toggle:hover {
            transform: rotate(15deg) scale(1.1);
        }
    </style>

    <!-- Dark Mode Script (runs before body to prevent flash) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                document.documentElement.classList.remove('light');
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>

<body class="bg-slate-50 text-slate-800">