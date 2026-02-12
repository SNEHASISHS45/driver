<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Driver Dashboard Premium</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class', // Enable manual dark mode toggling
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        gray: {
                            850: '#1f2937',
                            900: '#111827',
                            950: '#0B0E11', // Deep dark background
                        }
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <style>
        /* Base Styles */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        /* Hide Scrollbar but allow scrolling */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* --- Swipe Button Styles --- */
        .swipe-container {
            position: relative;
            width: 100%;
            height: 64px; /* h-16 */
            border-radius: 9999px;
            overflow: hidden;
            user-select: none;
            cursor: pointer;
            transition: background-color 0.4s ease;
        }
        
        /* The Knob */
        .swipe-knob {
            position: absolute;
            top: 4px;
            left: 4px;
            height: 56px; /* h-14 */
            width: 56px;  /* w-14 */
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 20;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); /* Bouncy effect */
        }

        /* Text Labels inside button */
        .swipe-text {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: opacity 0.3s ease;
            pointer-events: none; /* Let clicks pass through */
        }

        /* Animation Keyframes */
        @keyframes slide-up-fade {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-enter {
            animation: slide-up-fade 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-950 transition-colors duration-500 min-h-screen flex flex-col relative pb-24">

    <header class="sticky top-0 z-40 bg-gray-50/80 dark:bg-gray-950/80 backdrop-blur-xl border-b border-transparent dark:border-white/5 transition-colors duration-500">
        <div class="px-6 pt-5 pb-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full bg-gray-200 dark:bg-white/10 overflow-hidden border-2 border-white dark:border-white/20">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <div id="header-status-dot" class="absolute bottom-0 right-0 w-3 h-3 bg-gray-400 border-2 border-white dark:border-gray-900 rounded-full transition-colors duration-300"></div>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider leading-none mb-1">Welcome back</p>
                    <h2 class="text-sm font-extrabold text-gray-900 dark:text-white leading-none">Partner Alex</h2>
                </div>
            </div>

            <button onclick="toggleTheme()" class="w-10 h-10 rounded-full bg-white dark:bg-white/10 border border-gray-100 dark:border-white/5 flex items-center justify-center text-gray-600 dark:text-white shadow-sm active:scale-90 transition-transform">
                <span class="material-icons-round text-xl dark:hidden">dark_mode</span>
                <span class="material-icons-round text-xl hidden dark:block">light_mode</span>
            </button>
        </div>
    </header>

    <main class="flex-1 w-full max-w-md mx-auto w-full animate-enter">
        
        <div class="px-6 mb-6 mt-2">
            <div class="relative w-full bg-gradient-to-br from-gray-900 to-gray-800 dark:from-emerald-900 dark:to-black rounded-[2rem] p-6 text-white overflow-hidden shadow-2xl shadow-emerald-900/20 group hover:scale-[1.02] transition-transform duration-300">
                
                <div class="absolute top-[-50px] right-[-50px] w-48 h-48 bg-emerald-500/20 blur-[60px] rounded-full pointer-events-none"></div>
                
                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-1">
                        <div>
                            <span class="inline-flex items-center gap-1 bg-white/10 backdrop-blur-md border border-white/10 px-2 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider text-emerald-300 mb-2">
                                <span class="material-icons-round text-[12px]">trending_up</span> +12% vs yesterday
                            </span>
                            <p class="text-gray-400 text-xs font-medium">Today's Earnings</p>
                        </div>
                        <div class="h-8 flex items-end gap-1 opacity-80">
                            <div class="w-1.5 bg-emerald-500/50 rounded-t-sm h-[40%]"></div>
                            <div class="w-1.5 bg-emerald-500/50 rounded-t-sm h-[60%]"></div>
                            <div class="w-1.5 bg-emerald-500 rounded-t-sm h-[80%]"></div>
                            <div class="w-1.5 bg-white rounded-t-sm h-[100%]"></div>
                        </div>
                    </div>
                    
                    <h1 class="text-4xl font-black tracking-tight mb-6">$157<span class="text-2xl text-emerald-400">.34</span></h1>

                    <div class="flex gap-3">
                        <div class="bg-white/5 rounded-xl p-3 flex-1 backdrop-blur-sm border border-white/5 flex flex-col justify-between">
                            <span class="material-icons-round text-gray-400 text-sm mb-1">local_shipping</span>
                            <div>
                                <p class="text-lg font-bold leading-none">12</p>
                                <p class="text-[10px] text-gray-400">Trips</p>
                            </div>
                        </div>
                        <div class="bg-white/5 rounded-xl p-3 flex-1 backdrop-blur-sm border border-white/5 flex flex-col justify-between">
                            <span class="material-icons-round text-gray-400 text-sm mb-1">schedule</span>
                            <div>
                                <p class="text-lg font-bold leading-none">4h 20m</p>
                                <p class="text-[10px] text-gray-400">Online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 mb-8">
            <div class="relative">
                <div id="swipe-trigger" class="swipe-container bg-gray-200 dark:bg-white/10" onclick="toggleStatus()">
                    
                    <div id="swipe-knob" class="swipe-knob">
                        <span id="knob-icon" class="material-icons-round text-2xl text-emerald-600 transition-all duration-300">power_settings_new</span>
                    </div>

                    <div id="swipe-text-offline" class="swipe-text text-gray-500 dark:text-gray-400 z-10">Swipe to Go Online</div>
                    <div id="swipe-text-online" class="swipe-text text-white z-10 opacity-0">You are Online</div>
                </div>

                <p id="status-hint" class="text-center text-xs text-gray-400 mt-3 font-medium transition-all">You are currently offline.</p>
            </div>

            <div id="live-activity" class="hidden transform transition-all duration-500 opacity-0 scale-95 origin-top mt-4">
                <div class="bg-white dark:bg-[#18181b] border border-gray-100 dark:border-white/5 rounded-[1.5rem] p-1 shadow-lg shadow-gray-200/50 dark:shadow-none">
                    <div class="bg-emerald-50/50 dark:bg-emerald-900/10 rounded-[1.2rem] p-5 border border-emerald-100 dark:border-emerald-500/20 relative overflow-hidden">
                        <span class="absolute top-4 right-4 flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>

                        <h3 class="font-bold text-gray-900 dark:text-white text-lg">Looking for orders...</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 mb-4">You are in a high demand zone.</p>
                        
                        <div class="flex gap-3">
                            <button class="flex-1 py-3 bg-white dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-xl text-xs font-bold text-gray-700 dark:text-white shadow-sm hover:bg-gray-50 dark:hover:bg-white/10 transition-colors">
                                View Map
                            </button>
                            <button class="flex-1 py-3 bg-emerald-500 rounded-xl text-xs font-bold text-white shadow-lg shadow-emerald-500/20 active:scale-95 transition-transform">
                                Surge: +$2.00
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#121214] rounded-t-[2.5rem] p-6 shadow-[0_-10px_40px_-15px_rgba(0,0,0,0.05)] dark:shadow-black/50 min-h-[300px]">
            <div class="flex justify-between items-end mb-6">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Recent Activity</h3>
                <a href="#" class="text-xs font-bold text-emerald-500 hover:text-emerald-400">See All</a>
            </div>

            <div class="space-y-4">
                <div class="flex items-center gap-4 group cursor-pointer active:scale-95 transition-transform duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-gray-50 dark:bg-white/5 border border-gray-100 dark:border-white/5 flex items-center justify-center group-hover:bg-emerald-50 dark:group-hover:bg-emerald-900/20 transition-colors">
                        <span class="material-icons-round text-emerald-500">local_mall</span>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Grocery Batch</h4>
                        <p class="text-[10px] font-semibold text-gray-400">2:30 PM • 4.2 mi</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900 dark:text-white">$14.50</p>
                        <span class="text-[9px] font-bold text-emerald-500 bg-emerald-100 dark:bg-emerald-900/30 px-1.5 py-0.5 rounded text-xs">+ Tip</span>
                    </div>
                </div>

                <div class="flex items-center gap-4 group cursor-pointer active:scale-95 transition-transform duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-gray-50 dark:bg-white/5 border border-gray-100 dark:border-white/5 flex items-center justify-center group-hover:bg-emerald-50 dark:group-hover:bg-emerald-900/20 transition-colors">
                        <span class="material-icons-round text-orange-400">restaurant</span>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Burger King</h4>
                        <p class="text-[10px] font-semibold text-gray-400">1:15 PM • 1.8 mi</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900 dark:text-white">$8.20</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 group cursor-pointer active:scale-95 transition-transform duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-gray-50 dark:bg-white/5 border border-gray-100 dark:border-white/5 flex items-center justify-center group-hover:bg-emerald-50 dark:group-hover:bg-emerald-900/20 transition-colors">
                        <span class="material-icons-round text-purple-400">local_shipping</span>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Package Delivery</h4>
                        <p class="text-[10px] font-semibold text-gray-400">12:40 PM • 6.5 mi</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900 dark:text-white">$22.00</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="order-alert" class="fixed bottom-24 inset-x-4 transform translate-y-40 opacity-0 transition-all duration-500 z-50">
        <div class="bg-gray-900 dark:bg-white text-white dark:text-black p-4 rounded-[1.5rem] shadow-2xl flex items-center gap-4 border border-white/10 dark:border-gray-200">
            <div class="w-12 h-12 bg-white/20 dark:bg-black/10 rounded-full flex items-center justify-center shrink-0">
                <span class="material-icons-round text-xl animate-bounce">notifications_active</span>
            </div>
            <div class="flex-1">
                <h4 class="font-bold text-sm">New Order Nearby!</h4>
                <p class="text-xs opacity-80">$12.00 • 2.5 miles</p>
            </div>
            <button onclick="window.location.href='orders.php'" class="bg-emerald-500 hover:bg-emerald-400 text-white px-5 py-3 rounded-xl text-xs font-bold shadow-lg shadow-emerald-500/30 transition-all active:scale-95">
                Accept
            </button>
        </div>
    </div>

    <?php include 'includes/navbar.php'; ?>

    <script>
        let isOnline = false;
        
        // Element Selection
        const swipeContainer = document.getElementById('swipe-trigger');
        const swipeKnob = document.getElementById('swipe-knob');
        const knobIcon = document.getElementById('knob-icon');
        const textOffline = document.getElementById('swipe-text-offline');
        const textOnline = document.getElementById('swipe-text-online');
        const statusHint = document.getElementById('status-hint');
        const liveActivity = document.getElementById('live-activity');
        const orderAlert = document.getElementById('order-alert');
        const headerDot = document.getElementById('header-status-dot');

        function toggleStatus() {
            isOnline = !isOnline;
            const containerWidth = swipeContainer.offsetWidth;
            const knobWidth = swipeKnob.offsetWidth;
            const maxTranslate = containerWidth - knobWidth - 8; // 8px buffer for padding

            if (isOnline) {
                // --- ONLINE STATE ---
                
                // 1. Move Button
                swipeContainer.classList.remove('bg-gray-200', 'dark:bg-white/10');
                swipeContainer.classList.add('bg-emerald-500');
                
                swipeKnob.style.transform = `translateX(${maxTranslate}px)`;
                
                // 2. Change Icon
                knobIcon.innerText = "check";
                knobIcon.style.transform = "rotate(360deg)";
                
                // 3. Text & Hint
                textOffline.classList.add('opacity-0');
                textOnline.classList.remove('opacity-0');
                
                statusHint.innerText = "You're online. Finding orders...";
                statusHint.classList.add('text-emerald-500');
                
                // 4. Header Dot
                headerDot.classList.remove('bg-gray-400');
                headerDot.classList.add('bg-emerald-500', 'shadow-[0_0_10px_rgba(16,185,129,0.5)]');

                // 5. Show Live Activity
                liveActivity.classList.remove('hidden');
                // Small delay to allow display:block to apply before opacity transition
                setTimeout(() => {
                    liveActivity.classList.remove('opacity-0', 'scale-95');
                    liveActivity.classList.add('opacity-100', 'scale-100');
                }, 10);

                // 6. Simulate Order (Demo Purpose)
                setTimeout(showOrderAlert, 3500);

            } else {
                // --- OFFLINE STATE ---
                
                // 1. Reset Button
                swipeContainer.classList.add('bg-gray-200', 'dark:bg-white/10');
                swipeContainer.classList.remove('bg-emerald-500');
                
                swipeKnob.style.transform = `translateX(0px)`;
                
                // 2. Reset Icon
                knobIcon.innerText = "power_settings_new";
                knobIcon.style.transform = "rotate(0deg)";
                
                // 3. Reset Text
                textOffline.classList.remove('opacity-0');
                textOnline.classList.add('opacity-0');
                
                statusHint.innerText = "You are currently offline.";
                statusHint.classList.remove('text-emerald-500');

                // 4. Reset Header Dot
                headerDot.classList.add('bg-gray-400');
                headerDot.classList.remove('bg-emerald-500', 'shadow-[0_0_10px_rgba(16,185,129,0.5)]');

                // 5. Hide Live Activity
                liveActivity.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    liveActivity.classList.add('hidden');
                }, 500); // Wait for transition to finish
                
                hideOrderAlert();
            }
        }

        // Notification Logic
        function showOrderAlert() {
            if(!isOnline) return;
            // Play sound effect here if needed
            orderAlert.classList.remove('translate-y-40', 'opacity-0');
        }

        function hideOrderAlert() {
            orderAlert.classList.add('translate-y-40', 'opacity-0');
        }
        
        // Theme Toggle Logic
        function toggleTheme() {
            const html = document.documentElement;
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                html.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }

        // Check for saved theme preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        }
    </script>
</body>
</html>