<?php
session_start();
include_once 'UI.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" name="viewport"/>
    <title>FreshGo Driver</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Tailwind CDN (Restored for Stability) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1A73E8",
                        "primary-dark": "#1557B0",
                        "background-light": "#F0F2F5",
                        "background-dark": "#0B0E11",
                        "surface-dark": "#161B22",
                        "success-premium": "#10B981",
                        "earnings-green": "#22C55E",
                        "rider-orange": "#F97316",
                    },
                    borderRadius: {
                        '3xl': '1.5rem',
                        '4xl': '2rem',
                        '5xl': '2.5rem',
                    },
                    boxShadow: {
                        'premium': '0 10px 30px -5px rgba(0, 0, 0, 0.04), 0 4px 12px -2px rgba(0, 0, 0, 0.02)',
                        'premium-hover': '0 20px 40px -8px rgba(0, 0, 0, 0.08), 0 8px 16px -4px rgba(0, 0, 0, 0.04)',
                        'primary-glow': '0 10px 20px -5px rgba(26, 115, 232, 0.3)',
                    }
                },
            },
        }
    </script>
    
    <!-- Theme Engine Script -->
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }
    </script>
    
    <!-- External Assets -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link href="/assets/css/src.css" rel="stylesheet"/>
    
    <style type="text/tailwindcss">
        body {
            @apply bg-[#F8F9FA] dark:bg-[#0B0E11] text-[#1F2937] dark:text-[#E5E7EB] transition-colors duration-500;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            -webkit-tap-highlight-color: transparent;
        }
        .premium-card {
            @apply bg-white dark:bg-[#161B22] border border-gray-100 dark:border-white/5 shadow-premium transition-all duration-300;
        }
        .glass-header {
            @apply bg-white/80 dark:bg-[#161B22]/80 backdrop-blur-xl border-b border-gray-100 dark:border-white/5;
        }
        .dashboard-header-gradient {
            @apply bg-gradient-to-br from-[#10B981] to-[#059669] text-white;
        }
        .status-card-premium {
            @apply bg-white dark:bg-[#161B22] border border-gray-100 dark:border-white/5 shadow-premium rounded-[2rem] p-5;
        }
        .order-card-premium {
            @apply bg-[#FEE2E2] dark:bg-[#451225] border border-red-100 dark:border-red-900/30 rounded-[2rem] p-5;
        }
        .premium-gradient {
            @apply bg-gradient-to-br from-[#1A73E8] to-[#1557B0] text-white shadow-primary-glow font-bold;
        }
    </style>
</head>
<body class="min-h-screen">
