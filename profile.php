<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <!-- Clean Header -->
    <div class="flex flex-col items-center mb-12">
        <div class="relative mb-6">
            <div class="w-24 h-24 rounded-[2rem] overflow-hidden premium-shadow border border-white/10">
                <img class="w-full h-full object-cover opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8W3iKNx3-UE1vvEajatD79FdBBFxEg4mHXOGwjsVjxTocBu-7ZyuvmflZ1VntNxDdprGmbq5zGGSrsuWaazZKFRbIKHFmwi40JvE2hail7M0GYX28-A75Z8wYwgGaMZ2p5TQDfmJ5-_bQ-N3VYaFKzJgyy5wbMqlMGr36WSaNsG_dicbHpScEoPraJagQn3HEix81YW9nYZ2tz2PxGwSI6HTFMo3-54eSS8cD6K5UWhzgH2ZsebpnIQN6I9GMIJqLn_zFZA2i1Q" alt="Driver">
            </div>
            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-background-dark rounded-full"></div>
        </div>
        <h1 class="text-2xl font-bold text-white mb-1">Alex Rodriguez</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[.2em]">Diamond Partner • 4.98 ★</p>
    </div>

    <!-- Minimal Stats -->
    <div class="grid grid-cols-3 gap-4 mb-12">
        <div class="text-center p-4 rounded-3xl bg-white/5 border border-white/5">
            <p class="text-lg font-bold text-white">2.4k</p>
            <p class="text-[8px] font-bold text-gray-600 uppercase tracking-widest mt-1">Delivery</p>
        </div>
        <div class="text-center p-4 rounded-3xl bg-white/5 border border-white/5">
            <p class="text-lg font-bold text-white">2y</p>
            <p class="text-[8px] font-bold text-gray-600 uppercase tracking-widest mt-1">Exp.</p>
        </div>
        <div class="text-center p-4 rounded-3xl bg-white/5 border border-white/5">
            <p class="text-lg font-bold text-white">99%</p>
            <p class="text-[8px] font-bold text-gray-600 uppercase tracking-widest mt-1">Rate</p>
        </div>
    </div>

    <!-- Menu Options (Minimalist) -->
    <div class="space-y-3">
        <div onclick="window.location.href='profile.php'" class="minimal-card p-5 rounded-[1.5rem] flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-icons-round text-gray-500 group-hover:text-primary transition-colors">person</span>
                <span class="text-sm font-medium text-white/90">Identity & Safety</span>
            </div>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div onclick="window.location.href='vehicle_details.php'" class="minimal-card p-5 rounded-[1.5rem] flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-icons-round text-gray-500 group-hover:text-primary transition-colors">electric_scooter</span>
                <span class="text-sm font-medium text-white/90">Vehicle Management</span>
            </div>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div onclick="window.location.href='settings.php'" class="minimal-card p-5 rounded-[1.5rem] flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-icons-round text-gray-500 group-hover:text-primary transition-colors">tune</span>
                <span class="text-sm font-medium text-white/90">App Preferences</span>
            </div>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div onclick="window.location.href='support.php'" class="minimal-card p-5 rounded-[1.5rem] flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-icons-round text-gray-500 group-hover:text-primary transition-colors">help_outline</span>
                <span class="text-sm font-medium text-white/90">Support Center</span>
            </div>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div onclick="window.location.href='cash_tracking.php'" class="minimal-card p-5 rounded-[1.5rem] flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-icons-round text-gray-500 group-hover:text-primary transition-colors">account_balance_wallet</span>
                <span class="text-sm font-medium text-white/90">Earnings & Cash</span>
            </div>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div onclick="window.location.href='auth/login.php'" class="bg-red-500/5 border border-red-500/10 p-5 rounded-[1.5rem] flex items-center justify-center mt-6 active:scale-[0.98] transition-all cursor-pointer">
            <span class="text-xs font-bold text-red-500 uppercase tracking-widest">Terminate Session</span>
        </div>
    </div>
</main>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
