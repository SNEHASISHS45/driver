<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-12 text-center">
        <h1 class="text-3xl font-bold text-white mb-2">Earnings</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[0.2em]">Current Period: Oct 1 - Oct 7</p>
    </div>

    <!-- Minimal Balance Card -->
    <div class="mb-10">
        <div class="minimal-card p-10 rounded-[3rem] border border-white/5 flex flex-col items-center">
            <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-3">Available to Withdraw</p>
            <h2 class="text-5xl font-bold text-white mb-8 tracking-tight">$1,240.50</h2>
            <button class="w-full primary-gradient py-4 rounded-2xl text-[10px] font-bold text-white uppercase tracking-widest shadow-xl active:scale-95 transition-all">
                Transfer to Bank
            </button>
        </div>
    </div>

    <!-- Minimal Stats Row -->
    <div class="grid grid-cols-2 gap-4 mb-10">
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5">
            <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Total Jobs</p>
            <h3 class="text-2xl font-bold text-white uppercase tracking-tighter">128</h3>
        </div>
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5">
            <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Hours</p>
            <h3 class="text-2xl font-bold text-white uppercase tracking-tighter">42.5</h3>
        </div>
    </div>

    <!-- Refined Performance Chart -->
    <div class="mb-8 p-8 minimal-card rounded-[3rem] border border-white/5">
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-8 text-center">Weekly Performance</p>
        <div class="flex items-end justify-between h-32 gap-4">
            <?php 
            $days = [['M', 60], ['T', 40], ['W', 85, true], ['T', 50], ['F', 70]];
            foreach($days as $day): ?>
                <div class="flex-1 flex flex-col items-center gap-4 group">
                    <div class="w-2 bg-white/5 rounded-full h-24 relative overflow-hidden">
                        <div class="absolute bottom-0 w-full <?php echo isset($day[2]) ? 'bg-primary' : 'bg-white/10'; ?> rounded-full transition-all duration-700" style="height: <?php echo $day[1]; ?>%"></div>
                    </div>
                    <span class="text-[8px] font-bold <?php echo isset($day[2]) ? 'text-primary' : 'text-gray-600'; ?>"><?php echo $day[0]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
