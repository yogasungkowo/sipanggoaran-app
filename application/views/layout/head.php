<!DOCTYPE html>
<html lang="id">

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
    </style>
</head>

<body class="bg-slate-50 text-slate-800">