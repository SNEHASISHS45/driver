<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <?= UI::pageHeader('Vehicle', 'Management', true) ?>

    <!-- Minimal Vehicle Display -->
    <div class="mb-10">
        <?= UI::card('
            <span class="material-icons-round text-primary text-6xl mb-6 opacity-30 text-center w-full block">electric_scooter</span>
            <h2 class="text-xl font-bold text-white text-center">Refresh-X 200</h2>
            <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mt-1 text-center">Active Electric Unit</p>
        ', 'p-10 flex flex-col items-center') ?>
    </div>

    <!-- Details Grid (Minimalist) -->
    <div class="space-y-4">
        <?= UI::card('
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
        ', 'p-8') ?>

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

    <div class="mt-10">
        <?= UI::button('Upload Documents', 'primary') ?>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
