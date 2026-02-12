<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-12 flex items-center gap-4">
        <button onclick="history.back()" class="w-10 h-10 minimal-card rounded-xl flex items-center justify-center text-white border border-white/5">
            <span class="material-icons-round text-sm">chevron_left</span>
        </button>
        <div>
            <h1 class="text-2xl font-bold text-white">Vehicle</h1>
            <p class="soft-text text-[8px] font-bold uppercase tracking-[0.2em]">Management</p>
        </div>
    </div>

    <!-- Minimal Vehicle Display -->
    <div class="mb-10 p-10 minimal-card rounded-[3rem] border border-white/5 flex flex-col items-center">
        <span class="material-icons-round text-primary text-6xl mb-6 opacity-30">electric_scooter</span>
        <h2 class="text-xl font-bold text-white">Refresh-X 200</h2>
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mt-1">Active Electric Unit</p>
    </div>

    <!-- Details Grid (Minimalist) -->
    <div class="space-y-4">
        <div class="minimal-card p-8 rounded-[2rem] border border-white/5">
            <div class="grid grid-cols-2 gap-y-10">
                <div>
                    <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Make</p>
                    <p class="text-sm font-medium text-white/90">RefreshGo EV</p>
                </div>
                <div>
                    <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Color</p>
                    <p class="text-sm font-medium text-white/90">Slate Gray</p>
                </div>
                <div>
                    <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Identifier</p>
                    <p class="text-xs font-mono font-bold text-white tracking-widest">XYZ-8821</p>
                </div>
                <div>
                    <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Status</p>
                    <p class="text-sm font-medium text-primary">Self Owned</p>
                </div>
            </div>
        </div>

        <div class="minimal-card p-6 rounded-[1.8rem] border border-white/5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-lg bg-green-500/5 flex items-center justify-center text-green-500/50">
                    <span class="material-icons-round text-lg">verified</span>
                </div>
                <div>
                    <p class="text-xs font-medium text-white/80">Insurance Verified</p>
                    <p class="soft-text text-[8px] font-bold">Valid until Oct 2025</p>
                </div>
            </div>
        </div>
    </div>

    <button class="w-full mt-10 p-5 rounded-[1.8rem] primary-gradient text-[10px] font-bold text-white uppercase tracking-widest shadow-xl">
        Upload Documents
    </button>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
