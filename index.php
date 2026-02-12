<?php include 'includes/header.php'; ?>

<style>
    .map-bg {
        background-color: #140f0c;
        background-image: linear-gradient(rgba(20, 15, 12, 0.9), rgba(20, 15, 12, 0.7)), url(https://lh3.googleusercontent.com/aida-public/AB6AXuDwr2D4TbUR47B2TnBnsp5nisa-avse3Jg_wbgxKazbgtAKm_NBOmjyDx_sLHg-D77pH859qL-FEFcLuW3Quu-JmsHRRerNh6R_i0pzImktcmRnoHQisfr-_yuvsMIXKkBPqc605wsQaqoDIngXT5QzAN9nCfeOM9txzSTsRGOqt-KVGVJaHTTPO-0S3-4ZAQsiHPukwO7a164M4GHSToteLLGAuQ41ulj3nDhvsS4SJevwCAxhNiJql6aUkW5PouI4AIgv7dVt4w);
        background-size: cover;
        background-position: center;
    }
    .simulated-map {
        position: absolute;
        inset: 0;
        background-color: #0a0a0a;
        overflow: hidden;
        z-index: 0;
    }
    .map-street {
        position: absolute;
        background: #1a1a1a;
        border-radius: 4px;
    }
    .map-highlight {
        position: absolute;
        background: rgba(244, 123, 37, 0.1);
        border-radius: 50%;
        filter: blur(40px);
    }
    .slider-thumb {
        transition: transform 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

<div class="simulated-map">
    <!-- Clean Minimal Map -->
    <div class="map-street w-full h-[1px] top-1/4 bg-white/5"></div>
    <div class="map-street w-full h-[1px] top-2/4 bg-white/5"></div>
    <div class="map-street w-[1px] h-full left-1/3 bg-white/5"></div>
    <div class="map-street w-[1px] h-full right-1/3 bg-white/5"></div>
    
    <!-- Current Location Marker (Minimal) -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center">
        <div class="relative flex items-center justify-center w-12 h-12">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary/20 opacity-50"></span>
            <div class="relative flex items-center justify-center w-4 h-4 bg-primary rounded-full border border-white/20 shadow-2xl"></div>
        </div>
    </div>
</div>

<header class="absolute top-0 left-0 w-full z-20 pt-16 px-8 flex justify-between items-center bg-gradient-to-b from-background-dark/80 to-transparent">
    <div class="flex items-center gap-3">
        <div class="h-10 w-10 rounded-2xl overflow-hidden border border-white/10 premium-shadow">
            <img alt="Driver" class="w-full h-full object-cover opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8W3iKNx3-UE1vvEajatD79FdBBFxEg4mHXOGwjsVjxTocBu-7ZyuvmflZ1VntNxDdprGmbq5zGGSrsuWaazZKFRbIKHFmwi40JvE2hail7M0GYX28-A75Z8wYwgGaMZ2p5TQDfmJ5-_bQ-N3VYaFKzJgyy5wbMqlMGr36WSaNsG_dicbHpScEoPraJagQn3HEix81YW9nYZ2tz2PxGwSI6HTFMo3-54eSS8cD6K5UWhzgH2ZsebpnIQN6I9GMIJqLn_zFZA2i1Q"/>
        </div>
        <div class="flex flex-col">
            <span id="status-text" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest flex items-center gap-2">
                <span id="status-dot" class="w-1.5 h-1.5 bg-gray-600 rounded-full"></span>
                Offline
            </span>
        </div>
    </div>
    <button onclick="window.location.href='notifications.php'" class="w-10 h-10 minimal-card rounded-2xl flex items-center justify-center text-white relative">
        <span class="material-icons-round text-xl">notifications</span>
        <span class="absolute top-2.5 right-2.5 w-1.5 h-1.5 bg-primary rounded-full"></span>
    </button>
</header>

<!-- Map Controls (Minimalist) -->
<div class="absolute right-8 top-1/2 transform -translate-y-1/2 z-20 flex flex-col gap-3">
    <button class="w-10 h-10 minimal-card text-gray-400 rounded-xl flex items-center justify-center">
        <span class="material-icons-round text-lg">near_me</span>
    </button>
    <button class="w-10 h-10 minimal-card text-gray-400 rounded-xl flex items-center justify-center">
        <span class="material-symbols-outlined text-lg">layers</span>
    </button>
</div>

<!-- Bottom Area (Minimalist) -->
<div class="absolute bottom-0 left-0 w-full z-30 flex flex-col justify-end">
    <!-- Stats Row (Understated) -->
    <div class="px-8 flex gap-3 mb-6">
        <div class="flex-1 glass-dark p-6 rounded-[2rem] border border-white/5">
            <p class="text-[9px] font-bold text-gray-500 uppercase tracking-widest mb-1">Today's Earnings</p>
            <h3 class="text-2xl font-bold text-white leading-none">$124.50</h3>
        </div>
        <div class="flex-1 glass-dark p-6 rounded-[2rem] border border-white/5">
            <p class="text-[9px] font-bold text-gray-500 uppercase tracking-widest mb-1">Orders</p>
            <h3 class="text-2xl font-bold text-white leading-none">08 <span class="text-xs text-gray-600 font-medium">/ 12</span></h3>
        </div>
    </div>

    <!-- Dash Center (Clean) -->
    <div class="bg-background-dark/95 backdrop-blur-3xl border-t border-white/5 rounded-t-[3rem] px-8 pt-10 pb-32 animate-slide-up">
        <div class="w-10 h-1 bg-white/10 rounded-full mx-auto mb-10"></div>
        
        <div class="mb-10 text-center">
            <h2 class="text-2xl font-bold text-white mb-2">Ready to Start?</h2>
            <p class="soft-text text-xs uppercase tracking-widest font-bold">Downtown Zone • +$2.50 Surge</p>
        </div>

        <!-- Minimal Slider -->
        <div id="shift-slider" class="relative h-16 bg-white/5 rounded-[2rem] border border-white/5 overflow-hidden select-none cursor-pointer p-1">
            <div class="absolute inset-0 flex items-center justify-center z-0">
                <p class="text-gray-600 font-bold tracking-widest text-[10px] uppercase">Slide to Shift</p>
            </div>
            <div id="slider-thumb" class="absolute left-1 top-1 bottom-1 w-20 primary-gradient rounded-[1.75rem] shadow-xl flex items-center justify-center z-10 slider-thumb">
                <span id="slider-icon" class="material-icons-round text-white text-2xl">arrow_forward</span>
            </div>
        </div>
    </div>
</div>

        <div class="mt-8 flex justify-center">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-primary/5 rounded-2xl border border-primary/10">
                <span class="flex h-2 w-2 rounded-full bg-primary"></span>
                <span class="text-primary text-[11px] font-bold uppercase tracking-wider">Earn $15 Bonus after 2 orders</span>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/navbar.php'; ?>

<script src="/assets/js/audio_manager.js"></script>
<script>
    const slider = document.getElementById('shift-slider');
    const thumb = document.getElementById('slider-thumb');
    const icon = document.getElementById('slider-icon');
    const statusText = document.getElementById('status-text');
    const statusDot = document.getElementById('status-dot');
    
    let isOnline = false;
    let isDragging = false;
    let startX = 0;
    
    slider.addEventListener('touchstart', e => {
        isDragging = true;
        startX = e.touches[0].clientX;
        thumb.style.transition = 'none';
    });

    document.addEventListener('touchmove', e => {
        if (!isDragging) return;
        const deltaX = e.touches[0].clientX - startX;
        const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
        const boundedDelta = Math.max(0, Math.min(deltaX, maxDelta));
        thumb.style.transform = `translateX(${boundedDelta}px)`;
        
        if (deltaX > maxDelta * 0.8) {
            triggerOnline();
        }
    });

    document.addEventListener('touchend', () => {
        if (!isDragging) return;
        isDragging = false;
        thumb.style.transition = 'all 0.5s cubic-bezier(0.16, 1, 0.3, 1)';
        if (!isOnline) {
            thumb.style.transform = 'translateX(0px)';
        } else {
            const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
            thumb.style.transform = `translateX(${maxDelta}px)`;
        }
    });

    function triggerOnline() {
        if (isOnline) return;
        isOnline = true;
        
        // Haptic & Sound
        window.audioManager.notify('shiftStart');
        
        const maxDelta = slider.offsetWidth - thumb.offsetWidth - 12;
        thumb.style.transform = `translateX(${maxDelta}px)`;
        thumb.classList.remove('primary-gradient');
        thumb.classList.add('bg-green-500');
        icon.innerText = 'check_circle';
        
        statusText.innerText = 'Online & Active';
        statusText.classList.remove('text-gray-400');
        statusText.classList.add('text-green-400');
        statusDot.classList.remove('bg-gray-600');
        statusDot.classList.add('bg-green-500', 'shadow-[0_0_12px_rgba(34,197,94,0.6)]', 'animate-pulse');
        
        // Simulated New Order Notification after 3 seconds
        setTimeout(() => {
            showNewOrderNotification();
        }, 3000);
    }

    function showNewOrderNotification() {
        window.audioManager.notify('newOrder', true, true);
        
        const notification = document.createElement('div');
        notification.id = 'new-order-popup';
        notification.className = 'fixed top-24 left-4 right-4 z-[100] glass-dark border border-primary/30 p-5 rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.5)] animate-slide-up';
        notification.innerHTML = `
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center shadow-lg">
                    <span class="material-icons-round text-white text-3xl">restaurant</span>
                </div>
                <div class="flex-1">
                    <p class="text-[10px] font-bold text-primary uppercase tracking-widest mb-1">Incoming Delivery Request</p>
                    <h3 class="text-lg font-bold text-white">FreshGo Mart #928</h3>
                    <p class="text-xs text-gray-400 font-medium">1.2 miles away • 15 min del.</p>
                </div>
            </div>
            <div class="flex gap-3 mt-5">
                <button onclick="dismissNotification()" class="flex-1 bg-white/5 py-3 rounded-xl text-xs font-bold text-gray-400 uppercase tracking-widest">Reject</button>
                <button onclick="acceptOrder()" class="flex-[2] primary-gradient py-3 rounded-xl text-xs font-bold text-white uppercase tracking-widest shadow-lg">Accept Offering</button>
            </div>
        `;
        document.body.appendChild(notification);
    }

    function dismissNotification() {
        window.audioManager.stop('newOrder');
        document.getElementById('new-order-popup').remove();
    }

    function acceptOrder() {
        window.audioManager.stop('newOrder');
        window.location.href='orders.php';
    }
</script>

</body>
</html>
