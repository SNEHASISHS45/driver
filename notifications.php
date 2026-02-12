<?php include 'includes/header.php'; ?>

<?php
$notifications = [
    [
        'type' => 'urgent_order',
        'title' => 'New Order Request',
        'body' => 'Order #FG-928 • 2.4km away • $14.50',
        'time' => '0m',
        'icon' => 'local_shipping',
        'color' => 'orange'
    ],
    [
        'type' => 'finance',
        'title' => 'Earnings Landed',
        'body' => 'Payment for #FG-882 settled to wallet.',
        'meta' => '+$24.00',
        'time' => '2h ago',
        'icon' => 'account_balance_wallet',
        'color' => 'green'
    ],
    [
        'type' => 'system',
        'title' => 'System Update v2.4',
        'body' => 'GPS accuracy improved by 15%.',
        'time' => 'Yesterday',
        'icon' => 'dns',
        'color' => 'blue'
    ],
    [
        'type' => 'achievement',
        'title' => 'Top Rated Badge',
        'body' => 'Maintained 4.9 rating for 30 days.',
        'time' => '3d ago',
        'icon' => 'military_tech',
        'color' => 'purple'
    ]
];
?>

<main class="relative min-h-screen pb-32 pt-20 px-6 bg-[#0f0f11] text-white overflow-hidden">
    
    <div class="fixed top-0 left-0 w-full h-96 bg-gradient-to-b from-[#FF6B00]/10 to-transparent pointer-events-none"></div>

    <div class="flex justify-between items-end mb-8 relative z-10">
        <div>
            <h1 class="text-3xl font-bold tracking-tight">Activity</h1>
            <p class="text-white/50 text-sm mt-1">You have 2 unread alerts</p>
        </div>
        <button class="w-10 h-10 rounded-full border border-white/10 bg-white/5 flex items-center justify-center hover:bg-white/10 transition-colors">
            <span class="material-icons-round text-white/70">done_all</span>
        </button>
    </div>

    <div class="space-y-8 relative z-10">
        
        <?php foreach ($notifications as $n): ?>
            <?php if ($n['type'] === 'urgent_order'): ?>
                <div class="animate-slide-up">
                    <p class="text-xs font-bold text-[#FF6B00] uppercase tracking-widest mb-3 pl-1">Priority</p>
                    
                    <div class="relative bg-gradient-to-br from-[#1c1c1e] to-[#121212] border border-[#FF6B00]/30 rounded-3xl p-5 shadow-[0_10px_40px_-10px_rgba(255,107,0,0.2)]">
                        <span class="absolute top-5 right-5 flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#FF6B00] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-[#FF6B00]"></span>
                        </span>

                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-[#FF6B00]/10 flex items-center justify-center border border-[#FF6B00]/20">
                                <span class="material-icons-round text-[#FF6B00]"><?= $n['icon'] ?></span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white"><?= $n['title'] ?></h3>
                                <p class="text-white/60 text-sm mt-0.5"><?= $n['body'] ?></p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mt-4 pt-4 border-t border-white/5">
                            <button class="py-3 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold hover:bg-white/10 transition-colors">Decline</button>
                            <button class="py-3 rounded-xl bg-[#FF6B00] text-white text-sm font-bold shadow-lg shadow-orange-500/20 active:scale-95 transition-all">Accept Order</button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <div>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-6 pl-1">Recent History</p>
            
            <div class="relative border-l-2 border-white/10 ml-3 space-y-8 pb-4">
                <?php foreach ($notifications as $key => $n): ?>
                    <?php if ($n['type'] !== 'urgent_order'): ?>
                        
                        <div class="relative pl-8 animate-slide-up" style="animation-delay: <?= $key * 0.1 ?>s">
                            <div class="absolute -left-[9px] top-0 bg-[#0f0f11] p-1">
                                <div class="w-2.5 h-2.5 rounded-full bg-<?= $n['color'] ?>-500 shadow-[0_0_10px_rgba(var(--color-<?= $n['color'] ?>),0.5)]"></div>
                            </div>

                            <div class="flex justify-between items-start group cursor-pointer">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="text-base font-medium text-gray-200 group-hover:text-white transition-colors"><?= $n['title'] ?></h4>
                                        <?php if(isset($n['meta'])): ?>
                                            <span class="bg-green-500/10 text-green-500 text-[10px] font-bold px-2 py-0.5 rounded border border-green-500/20"><?= $n['meta'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="text-sm text-gray-500 leading-relaxed max-w-[280px]"><?= $n['body'] ?></p>
                                </div>
                                <span class="text-xs text-gray-600 whitespace-nowrap"><?= $n['time'] ?></span>
                            </div>
                        </div>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>

<?php include 'includes/navbar.php'; ?>

<style>
    @keyframes slide-up {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-slide-up {
        animation: slide-up 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0; /* Start hidden for animation */
    }
</style>
</body>
</html>