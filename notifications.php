<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-10 flex justify-between items-end">
        <div class="flex-1 text-center">
            <h1 class="text-3xl font-bold text-white mb-2">Updates</h1>
            <p class="soft-text text-[10px] font-bold uppercase tracking-[0.2em]">Recents Alerts</p>
        </div>
        <button class="absolute top-18 right-8 text-[9px] font-bold text-primary uppercase tracking-widest px-3 py-1 bg-primary/5 rounded-lg">Clear</button>
    </div>

    <!-- Notification List (Minimalist) -->
    <div class="space-y-3">
        <!-- New Order Alert -->
        <div class="minimal-card p-5 rounded-[1.5rem] border border-primary/20 animate-slide-up relative">
            <div class="flex gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/5 flex items-center justify-center text-primary">
                    <span class="material-icons-round text-lg">local_shipping</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-sm font-bold text-white/90">New Order</h3>
                        <span class="soft-text text-[8px] font-bold uppercase">Now</span>
                    </div>
                    <p class="text-xs text-gray-500 leading-relaxed">Order #FG-928 is available near your current location.</p>
                </div>
            </div>
        </div>

        <!-- Payment -->
        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 animate-slide-up" style="animation-delay: 0.1s;">
            <div class="flex gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-green-500">
                    <span class="material-icons-round text-lg">account_balance_wallet</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-sm font-bold text-white/90">Earnings Confirmed</h3>
                        <span class="soft-text text-[8px] font-bold uppercase">2h ago</span>
                    </div>
                    <p class="text-xs text-gray-500 leading-relaxed">Payment for Order #FG-882 has been settled.</p>
                </div>
            </div>
        </div>

        <!-- System -->
        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 animate-slide-up" style="animation-delay: 0.2s;">
            <div class="flex gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-blue-500">
                    <span class="material-icons-round text-lg">info_outline</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-sm font-bold text-white/90">Update v2.4</h3>
                        <span class="soft-text text-[8px] font-bold uppercase">Yesterday</span>
                    </div>
                    <p class="text-xs text-gray-500 leading-relaxed">Improved tracking accuracy is now available.</p>
                </div>
            </div>
        </div>

        <!-- Performance -->
        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 animate-slide-up" style="animation-delay: 0.3s;">
            <div class="flex gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-orange-500">
                    <span class="material-icons-round text-lg">military_tech</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-sm font-bold text-white/90">Top Rated</h3>
                        <span class="soft-text text-[8px] font-bold uppercase">3d ago</span>
                    </div>
                    <p class="text-xs text-gray-500 leading-relaxed">You've maintained a 4.9+ rating for 30 days straight.</p>
                </div>
            </div>
        </div>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
