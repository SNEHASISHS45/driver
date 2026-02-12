<?php include 'includes/header.php'; ?>

<style>
    .tracking-map {
        position: fixed;
        inset: 0;
        background-color: #0a0a0a;
        background-image: 
            linear-gradient(rgba(20, 15, 12, 0.9), rgba(20, 15, 12, 0.7)),
            url(https://lh3.googleusercontent.com/aida-public/AB6AXuDwr2D4TbUR47B2TnBnsp5nisa-avse3Jg_wbgxKazbgtAKm_NBOmjyDx_sLHg-D77pH859qL-FEFcLuW3Quu-JmsHRRerNh6R_i0pzImktcmRnoHQisfr-_yuvsMIXKkBPqc605wsQaqoDIngXT5QzAN9nCfeOM9txzSTsRGOqt-KVGVJaHTTPO-0S3-4ZAQsiHPukwO7a164M4GHSToteLLGAuQ41ulj3nDhvsS4SJevwCAxhNiJql6aUkW5PouI4AIgv7dVt4w);
        background-size: cover;
        z-index: 0;
    }
    .route-line {
        position: absolute;
        height: 60%;
        width: 3px;
        background: linear-gradient(to bottom, transparent, #f47b25 20%, #f47b25 80%, transparent);
        left: 50%;
        top: 20%;
        z-index: 1;
        opacity: 0.5;
    }
</style>

<div class="tracking-map">
    <div class="route-line"></div>
    
    <!-- Origin Pin -->
    <div class="absolute top-[20%] left-[48%] z-10">
        <div class="w-8 h-8 glass-dark rounded-full flex items-center justify-center border-2 border-primary animate-float">
            <span class="material-icons-round text-primary text-sm">storefront</span>
        </div>
    </div>

    <!-- User Pin -->
    <div class="absolute bottom-[25%] left-[48%] z-10">
        <div class="w-8 h-8 glass-dark rounded-full flex items-center justify-center border-2 border-white animate-float" style="animation-delay: 1s;">
            <span class="material-icons-round text-white text-sm">person_pin</span>
        </div>
    </div>

    <!-- Current Driver Marker -->
    <div class="absolute top-[40%] left-[50%] transform -translate-x-1/2 z-20">
        <div class="relative w-12 h-12">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary/40 opacity-75"></span>
            <div class="relative bg-primary w-full h-full rounded-2xl flex items-center justify-center shadow-2xl rotate-45 transform">
                <span class="material-icons-round text-white text-2xl -rotate-45">navigation</span>
            </div>
        </div>
    </div>
</div>

<header class="fixed top-0 left-0 w-full z-30 pt-12 px-6">
    <div class="flex justify-between items-center">
        <button onclick="history.back()" class="w-12 h-12 glass-dark rounded-2xl flex items-center justify-center text-white border border-white/10 shadow-2xl">
            <span class="material-icons-round">chevron_left</span>
        </button>
        <div class="glass-dark px-6 py-2 rounded-2xl border border-white/10 shadow-2xl">
            <span class="text-xs font-bold text-primary uppercase tracking-widest">En Route • 6 mins left</span>
        </div>
    </div>
</header>

<div class="fixed bottom-0 left-0 w-full z-40 p-6 pb-12">
    <div class="glass-dark border border-white/10 rounded-[2.5rem] p-8 shadow-[0_25px_60px_rgba(0,0,0,0.7)] backdrop-blur-3xl animate-slide-up">
        <div class="flex items-center gap-5 mb-8">
            <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-primary shadow-lg">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150" alt="Customer">
            </div>
            <div class="flex-1">
                <h2 class="text-xl font-bold text-white">Sarah Jenkins</h2>
                <div class="flex items-center gap-4 mt-1">
                    <span class="flex items-center gap-1 text-[10px] font-bold text-gray-500 uppercase tracking-widest"><span class="material-icons-round text-sm">stars</span> 4.9 Rating</span>
                    <span class="flex items-center gap-1 text-[10px] font-bold text-gray-500 uppercase tracking-widest"><span class="material-icons-round text-sm">shopping_basket</span> 12 Items</span>
                </div>
            </div>
            <button class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary border border-primary/20 shadow-xl active:scale-90 transition-all">
                <span class="material-icons-round text-2xl">phone</span>
            </button>
        </div>

        <div class="flex items-center gap-4 p-5 bg-white/5 rounded-2xl border border-white/5 mb-8">
            <span class="material-icons-round text-gray-500">location_on</span>
            <div class="flex-1">
                <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Delivery Address</p>
                <p class="text-sm font-bold text-white">South Entrance, Salesforce Tower</p>
            </div>
        </div>

        <button id="arrived-btn" class="w-full primary-gradient py-5 rounded-[1.25rem] text-sm font-bold text-white uppercase tracking-[0.2em] shadow-[0_15px_30px_rgba(244,123,37,0.3)] flex items-center justify-center gap-3 active:scale-95 transition-all">
            <span>I have Arrived</span>
            <span class="material-icons-round text-xl">check_circle</span>
        </button>
    </div>
</div>

<script src="/assets/js/audio_manager.js"></script>
<script>
    document.getElementById('arrived-btn').onclick = function() {
        window.audioManager.notify('success');
        this.innerHTML = '<span>Scan Parcel</span> <span class="material-icons-round text-xl">qr_code_scanner</span>';
        this.classList.remove('primary-gradient');
        this.classList.add('bg-green-500');
        
        setTimeout(() => {
            alert('Arrived at location! Please contact the customer and scan the parcel QR.');
        }, 100);
    }
</script>

</body>
</html>
