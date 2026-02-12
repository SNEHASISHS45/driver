<?php include 'includes/header.php'; ?>

<style type="text/tailwindcss">
    .mission-metrics {
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 1rem;
    }
    .status-badge {
        @apply px-2.5 py-1 rounded-full bg-white/5 border border-white/10 flex items-center gap-1.5;
    }
    .hyper-glass {
        @apply bg-white/[0.03] backdrop-blur-[60px] border border-white/10 shadow-2xl;
        background-image: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, transparent 100%);
    }
    .neural-grid {
        background-image: 
            linear-gradient(rgba(244, 123, 37, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(244, 123, 37, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
    }
    .primary-gradient {
        @apply bg-gradient-to-br from-[#FF6B00] via-primary to-[#FF8A00];
    }
    .noise-overlay {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        @apply opacity-[0.03] pointer-events-none;
    }
</style>

<main class="relative h-screen flex flex-col overflow-y-auto bg-background-dark pt-24 pb-32">
    <!-- Immersive Background System -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 neural-grid opacity-20"></div>
        <div class="absolute inset-0 animate-scan bg-gradient-to-b from-transparent via-primary/5 to-transparent h-20 w-full z-10"></div>
        <div class="absolute inset-0 noise-overlay"></div>
        
        <!-- Dynamic Environmental Glows -->
        <div class="absolute top-1/3 left-1/4 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-0 w-[400px] h-[400px] bg-[#FF4D00]/10 rounded-full blur-[100px] animate-pulse-slow"></div>
    </div>

    <!-- Fixed Top Bar -->
    <header class="fixed top-0 left-0 w-full z-[60]">
        <div class="bg-background-dark/90 backdrop-blur-3xl border-b border-white/5 p-4 flex justify-between items-center shadow-lg">
            <div class="flex items-center gap-3">
                <div class="h-10 w-10 rounded-xl overflow-hidden border border-white/10">
                    <img alt="Driver" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8W3iKNx3-UE1vvEajatD79FdBBFxEg4mHXOGwjsVjxTocBu-7ZyuvmflZ1VntNxDdprGmbq5zGGSrsuWaazZKFRbIKHFmwi40JvE2hail7M0GYX28-A75Z8wYwgGaMZ2p5TQDfmJ5-_bQ-N3VYaFKzJgyy5wbMqlMGr36WSaNsG_dicbHpScEoPraJagQn3HEix81YW9nYZ2tz2PxGwSI6HTFMo3-54eSS8cD6K5UWhzgH2ZsebpnIQN6I9GMIJqLn_zFZA2i1Q"/>
                </div>
                <div>
                    <h4 class="text-[12px] font-bold text-white leading-tight">Alex Rodriguez</h4>
                    <div id="status-badge" class="status-badge mt-1">
                        <span id="status-dot" class="w-1.5 h-1.5 bg-gray-600 rounded-full"></span>
                        <span id="status-text" class="text-[8px] font-bold text-gray-400 uppercase tracking-widest">System Offline</span>
                    </div>
                </div>
            </div>
            <button onclick="window.location.href='notifications.php'" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center text-white relative active:scale-95 transition-all">
                <span class="material-icons-round text-lg">notifications_none</span>
                <span class="absolute top-2.5 right-2.5 w-2 h-2 bg-primary rounded-full border-2 border-[#1a1a1a]"></span>
            </button>
        </div>
    </header>

    <!-- Center Stage: Connection Status -->
    <div class="flex-1 flex flex-col items-center justify-center relative z-10 px-8">
        <div class="relative mb-8">
            <!-- Central Connection Ring -->
            <div class="w-48 h-28 rounded-full border-2 border-white/5 flex items-center justify-center">
                <div class="w-40 h-40 rounded-full border border-white/10 flex items-center justify-center">
                    <div class="w-32 h-32 rounded-full hyper-glass flex items-center justify-center">
                        <span id="central-icon" class="material-symbols-outlined text-5xl text-gray-600 animate-pulse">sensors_off</span>
                    </div>
                </div>
            </div>
            <!-- Rotating Orbits -->
            <div class="absolute inset-0 border border-primary/20 rounded-full animate-[spin_10s_linear_infinite] opacity-50"></div>
            <div class="absolute inset-4 border border-white/5 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>
        </div>
        
        <div class="text-center">
            <h2 id="main-headline" class="text-2xl font-bold text-white mb-2 tracking-tight">Awaiting Orders</h2>
            <p id="sub-headline" class="soft-text text-[10px] font-bold uppercase tracking-[0.3em]">Initialize shift to begin tracking</p>
        </div>
    </div>

    <!-- Bottom Command Center -->
    <div class="mt-auto relative z-30 flex flex-col gap-5 px-6 pb-32">
        <!-- Mission Metrics -->
        <div class="mission-metrics">
            <div class="hyper-glass rounded-[2rem] p-5 flex flex-col justify-between">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-10 h-5 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-icons-round text-primary text-xl">payments</span>
                    </div>
                    <span class="text-[10px] font-bold text-green-500 bg-green-500/10 px-2 py-1 rounded-lg">+$12.40 Today</span>
                </div>
                <div>
                    <h5 class="soft-text text-[9px] font-bold uppercase tracking-widest mb-1">Session Earnings</h5>
                    <p class="text-2xl font-bold text-white tracking-tighter">$124.50</p>
                </div>
            </div>
            <div class="hyper-glass rounded-[2rem] p-5 flex flex-col justify-between">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-10 h-5 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-icons-round text-primary text-xl">dataset</span>
                    </div>
                </div>
                <div>
                    <h5 class="soft-text text-[9px] font-bold uppercase tracking-widest mb-1">Total Tasks</h5>
                    <p class="text-2xl font-bold text-white tracking-tighter">08<span class="text-gray-600 text-lg">/12</span></p>
                </div>
            </div>
        </div>

        <!-- Shift Ignition -->
        <div class="hyper-glass rounded-[2.5rem] p-3">
            <div id="shift-slider" class="relative h-16 bg-black/40 rounded-full overflow-hidden p-1.5 border border-white/5">
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <p class="text-gray-500 font-bold tracking-[0.4em] text-[9px] uppercase">Shift Ignition</p>
                </div>
                <div id="slider-thumb" class="absolute left-1.5 top-1.5 bottom-1.5 w-24 primary-gradient rounded-full shadow-[0_0_20px_rgba(255,107,0,0.4)] flex items-center justify-center z-10 transition-transform duration-200 cursor-pointer">
                    <span id="slider-icon" class="material-symbols-outlined text-white text-3xl font-light">bolt</span>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>

<script src="/assets/js/audio_manager.js"></script>
<script>
    const slider = document.getElementById('shift-slider');
    const thumb = document.getElementById('slider-thumb');
    const icon = document.getElementById('slider-icon');
    const statusText = document.getElementById('status-text');
    const statusDot = document.getElementById('status-dot');
    const centralIcon = document.getElementById('central-icon');
    const mainHeadline = document.getElementById('main-headline');
    const subHeadline = document.getElementById('sub-headline');
    
    let isOnline = false;
    let isDragging = false;
    let startX = 0;
    
    const handleStart = (e) => {
        isDragging = true;
        startX = (e.touches ? e.touches[0].clientX : e.clientX);
        thumb.style.transition = 'none';
        thumb.classList.add('scale-95');
    };

    const handleMove = (e) => {
        if (!isDragging) return;
        const currentX = (e.touches ? e.touches[0].clientX : e.clientX);
        const deltaX = currentX - startX;
        const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
        const boundedDelta = Math.max(0, Math.min(deltaX, maxDelta));
        
        thumb.style.transform = `translateX(${boundedDelta}px)`;
        
        // Dynamic opacity based on progress
        const progress = boundedDelta / maxDelta;
        thumb.style.boxShadow = `0 0 ${20 + (progress * 30)}px rgba(255,107,0,${0.4 + (progress * 0.4)})`;
        
        if (deltaX > maxDelta * 0.95) {
            triggerOnline();
        }
    };

    const handleEnd = () => {
        if (!isDragging) return;
        isDragging = false;
        thumb.classList.remove('scale-95');
        thumb.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
        
        if (!isOnline) {
            thumb.style.transform = 'translateX(0px)';
            thumb.style.boxShadow = '0 0 20px rgba(255,107,0,0.4)';
        } else {
            const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
            thumb.style.transform = `translateX(${maxDelta}px)`;
        }
    };

    slider.addEventListener('touchstart', handleStart);
    slider.addEventListener('mousedown', handleStart);
    document.addEventListener('touchmove', handleMove);
    document.addEventListener('mousemove', handleMove);
    document.addEventListener('touchend', handleEnd);
    document.addEventListener('mouseup', handleEnd);

    function triggerOnline() {
        if (isOnline) return;
        isOnline = true;
        
        // Haptic & Sound Effects
        if (window.audioManager) window.audioManager.notify('shiftStart');
        
        const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
        thumb.style.transform = `translateX(${maxDelta}px)`;
        thumb.classList.remove('primary-gradient');
        thumb.classList.add('bg-green-500');
        thumb.style.boxShadow = '0 0 30px rgba(34,197,94,0.6)';
        icon.innerText = 'check';
        
        // Update UI States
        statusText.innerText = 'Active Service';
        statusText.classList.remove('text-gray-400');
        statusText.classList.add('text-green-400');
        statusDot.classList.remove('bg-gray-600');
        statusDot.classList.add('bg-green-500', 'shadow-[0_0_12px_rgba(34,197,94,0.6)]', 'animate-pulse');
        
        centralIcon.innerText = 'radar';
        centralIcon.classList.remove('text-gray-600');
        centralIcon.classList.add('text-primary');
        
        mainHeadline.innerText = 'System Live';
        subHeadline.innerText = 'Scanning for nearby delivery requests';
        subHeadline.classList.remove('soft-text');
        subHeadline.classList.add('text-primary/80');

        // Reset interaction
        isDragging = false;
        
        // Simulated New Order Notification after 3 seconds
        setTimeout(() => {
            showNewOrderNotification();
        }, 3000);
    }

    function showNewOrderNotification() {
        if (window.audioManager) window.audioManager.notify('newOrder', true, true);
        
        const notification = document.createElement('div');
        notification.id = 'new-order-popup';
        notification.className = 'fixed top-24 left-6 right-6 z-[100] hyper-glass border border-primary/30 p-6 rounded-[2.5rem] shadow-[0_30px_60px_rgba(0,0,0,0.8)] animate-slide-up';
        notification.innerHTML = `
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 primary-gradient rounded-2xl flex items-center justify-center shadow-lg">
                    <span class="material-icons-round text-white text-4xl">restaurant</span>
                </div>
                <div class="flex-1">
                    <p class="text-[10px] font-bold text-primary uppercase tracking-[0.2em] mb-1">Order Intercepted</p>
                    <h3 class="text-xl font-bold text-white tracking-tight">FreshGo Mart #928</h3>
                    <p class="text-[11px] text-gray-400 font-medium">1.2 miles • 15 min ETA</p>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button onclick="dismissNotification()" class="flex-1 bg-white/5 py-4 rounded-2xl text-[10px] font-bold text-gray-500 uppercase tracking-widest border border-white/5 active:scale-95 transition-all">Reject</button>
                <button onclick="acceptOrder()" class="flex-[2] primary-gradient py-4 rounded-2xl text-[10px] font-bold text-white uppercase tracking-widest shadow-lg active:scale-95 transition-all">Accept Mission</button>
            </div>
        `;
        document.body.appendChild(notification);
    }

    function dismissNotification() {
        if (window.audioManager) window.audioManager.stop('newOrder');
        document.getElementById('new-order-popup').classList.add('opacity-0', 'translate-y-10');
        setTimeout(() => document.getElementById('new-order-popup').remove(), 500);
    }

    function acceptOrder() {
        if (window.audioManager) window.audioManager.stop('newOrder');
        window.location.href='orders.php';
    }
</script>

</body>
</html>
