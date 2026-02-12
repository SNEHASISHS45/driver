<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-6 bg-[#0f0f11] text-white">
    
    <div class="mb-8">
        <h1 class="text-2xl font-bold mb-6">Help Center</h1>
        
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <span class="material-icons-round text-gray-500 group-focus-within:text-[#FF6B00] transition-colors">search</span>
            </div>
            <input type="text" 
                class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-sm text-white focus:outline-none focus:border-[#FF6B00]/50 focus:bg-white/10 transition-all placeholder-gray-600"
                placeholder="Search issues (e.g., 'Payment')"
            >
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4 mb-10">
        
        <button class="col-span-2 relative overflow-hidden bg-gradient-to-br from-[#1c1c1e] to-[#121212] border border-white/10 rounded-2xl p-5 flex flex-col justify-between items-start text-left shadow-lg active:scale-[0.98] transition-transform">
            <div class="absolute top-0 right-0 p-3">
                <div class="flex items-center gap-1.5 bg-green-500/10 px-2 py-1 rounded text-[9px] font-bold text-green-500 border border-green-500/20">
                    <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                    Online
                </div>
            </div>
            <div class="bg-[#FF6B00]/10 p-2 rounded-lg mb-3">
                <span class="material-icons-round text-[#FF6B00]">support_agent</span>
            </div>
            <div>
                <p class="font-bold text-sm">Live Support</p>
                <p class="text-[10px] text-gray-500">Wait time: ~2 mins</p>
            </div>
        </button>

        <button class="col-span-1 relative bg-red-600/10 border border-red-500/30 rounded-2xl p-4 flex flex-col justify-center items-center gap-2 active:bg-red-600/20 transition-colors">
            <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center shadow-[0_0_15px_rgba(239,68,68,0.4)] animate-pulse">
                <span class="material-icons-round text-white">sos</span>
            </div>
            <p class="text-[10px] font-bold text-red-400 uppercase tracking-widest">SOS</p>
        </button>

    </div>

    <div class="mb-6">
        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-3 pl-1">Browse Topics</p>
        <div class="flex gap-3 overflow-x-auto pb-4 -mx-6 px-6 scrollbar-hide">
            <button class="flex-shrink-0 px-4 py-2 rounded-xl bg-[#FF6B00] text-white text-xs font-bold shadow-lg shadow-orange-500/20">All</button>
            <button class="flex-shrink-0 px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-gray-400 text-xs font-bold hover:bg-white/10">Earnings</button>
            <button class="flex-shrink-0 px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-gray-400 text-xs font-bold hover:bg-white/10">App Issues</button>
            <button class="flex-shrink-0 px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-gray-400 text-xs font-bold hover:bg-white/10">Safety</button>
        </div>
    </div>

    <div class="space-y-3">
        <?php
        $faqs = [
            ['q' => 'Where are my earnings?', 'a' => 'Earnings are processed every Tuesday. If you do not see them by Wednesday morning, please check your bank details.', 'icon' => 'payments'],
            ['q' => 'Package was damaged', 'a' => 'Please take a photo of the item immediately and report it via the specific Order Help page.', 'icon' => 'inventory_2'],
            ['q' => 'GPS is not updating', 'a' => 'Try toggling Airplane mode on and off. If that fails, clear the app cache in your phone settings.', 'icon' => 'gps_off']
        ];
        ?>

        <?php foreach($faqs as $faq): ?>
            <details class="group bg-[#1c1c1e] border border-white/5 rounded-2xl overflow-hidden transition-all duration-300 open:bg-white/5 open:border-white/10">
                <summary class="flex items-center justify-between p-4 cursor-pointer list-none select-none">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-round text-gray-500 text-sm group-open:text-[#FF6B00] transition-colors"><?= $faq['icon'] ?></span>
                        <span class="text-sm font-medium text-gray-200"><?= $faq['q'] ?></span>
                    </div>
                    <span class="material-icons-round text-gray-600 transform group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <div class="px-4 pb-4 pl-11">
                    <p class="text-xs text-gray-400 leading-relaxed border-l-2 border-[#FF6B00] pl-3">
                        <?= $faq['a'] ?>
                    </p>
                    <div class="mt-3 flex gap-2">
                        <button class="px-3 py-1 bg-white/5 rounded-lg text-[10px] text-gray-400 hover:text-white">Helpful</button>
                        <button class="px-3 py-1 bg-white/5 rounded-lg text-[10px] text-gray-400 hover:text-white">Not Helpful</button>
                    </div>
                </div>
            </details>
        <?php endforeach; ?>
    </div>

    <div class="mt-12 text-center">
        <p class="text-gray-500 text-xs mb-4">Still need help?</p>
        <button class="w-full py-4 border border-dashed border-white/20 rounded-2xl text-gray-400 text-sm font-medium hover:bg-white/5 hover:border-white/40 transition-all flex items-center justify-center gap-2">
            <span class="material-icons-round text-sm">bug_report</span>
            Report a Technical Bug
        </button>
    </div>

</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>