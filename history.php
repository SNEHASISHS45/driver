<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-12 text-center">
        <h1 class="text-3xl font-bold text-white mb-2">History</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[0.2em]">1,240 Lifetime Jobs</p>
    </div>

    <!-- Minimal Stats Summary -->
    <div class="grid grid-cols-2 gap-4 mb-12">
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5">
            <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Average Rating</p>
            <h3 class="text-2xl font-bold text-primary tracking-tighter">4.98 ★</h3>
        </div>
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5">
            <p class="soft-text text-[8px] font-bold uppercase tracking-widest mb-1">Success Rate</p>
            <h3 class="text-2xl font-bold text-white tracking-tighter">99.4%</h3>
        </div>
    </div>

    <!-- Minimal Filters -->
    <div class="flex justify-center mb-10 overflow-x-auto scrollbar-hide">
        <div class="flex p-1 bg-white/5 rounded-2xl border border-white/5">
            <button class="px-6 py-2.5 bg-primary text-white rounded-xl text-[9px] font-bold uppercase tracking-widest shadow-lg">Month</button>
            <button class="px-6 py-2.5 text-gray-600 rounded-xl text-[9px] font-bold uppercase tracking-widest">Week</button>
            <button class="px-6 py-2.5 text-gray-600 rounded-xl text-[9px] font-bold uppercase tracking-widest">Day</button>
        </div>
    </div>

    <!-- History List (Minimalist) -->
    <div class="space-y-3">
        <?php 
        $history = [
            ['FG-8271', 'Oct 12', '$24.50', 'Completed', 'bg-green-500'],
            ['FG-8212', 'Oct 12', '$18.90', 'Completed', 'bg-green-500'],
            ['FG-8199', 'Oct 11', '$12.00', 'Cancelled', 'bg-red-500', 0.5]
        ];
        foreach($history as $item): ?>
            <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 group active:scale-[0.98] transition-all <?php echo isset($item[5]) ? 'opacity-50' : ''; ?>">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-600">
                            <span class="material-icons-round text-lg">receipt_long</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white/90">#<?php echo $item[0]; ?></h4>
                            <p class="soft-text text-[9px] font-bold uppercase"><?php echo $item[1]; ?></p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-white mb-1"><?php echo $item[2]; ?></p>
                        <div class="flex items-center gap-1.5 justify-end">
                            <div class="w-1.5 h-1.5 rounded-full <?php echo $item[4]; ?>"></div>
                            <span class="soft-text text-[8px] font-bold uppercase"><?php echo $item[3]; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
