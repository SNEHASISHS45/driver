<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-12 text-center">
        <h1 class="text-3xl font-bold text-white mb-2">Cash Flow</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[0.2em]">On-Hand Collections</p>
    </div>

    <!-- Minimal Cash Card -->
    <div class="mb-10">
        <div class="minimal-card p-10 rounded-[3rem] border border-white/5 flex flex-col items-center">
            <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-3">Total Collected</p>
            <h2 class="text-5xl font-bold text-white mb-4 tracking-tight">$42.00</h2>
            <div class="flex items-center gap-2 mb-8">
                <div class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></div>
                <span class="text-[9px] font-bold text-gray-500 uppercase tracking-widest">Limit: $100.00</span>
            </div>
            <button class="w-full primary-gradient py-4 rounded-2xl text-[10px] font-bold text-white uppercase tracking-widest shadow-xl active:scale-95 transition-all">Settlement</button>
        </div>
    </div>

    <!-- Collection List (Minimalist) -->
    <div class="space-y-3">
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-5 ml-2">Recent Collections</p>
        
        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 flex justify-between items-center group active:scale-[0.98] transition-all">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-500 group-hover:text-primary transition-colors">
                    <span class="material-icons-round text-lg text-primary">payments</span>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-white/90">#FG-9281</h4>
                    <p class="soft-text text-[9px] font-bold uppercase">Today, 12:30 PM</p>
                </div>
            </div>
            <p class="text-sm font-bold text-white">$12.50</p>
        </div>

        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 flex justify-between items-center group active:scale-[0.98] transition-all">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-500 group-hover:text-primary transition-colors">
                    <span class="material-icons-round text-lg text-primary">payments</span>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-white/90">#FG-9102</h4>
                    <p class="soft-text text-[9px] font-bold uppercase">Yesterday, 4:15 PM</p>
                </div>
            </div>
            <p class="text-sm font-bold text-white">$29.50</p>
        </div>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
