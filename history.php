<?php include 'includes/header.php'; ?>

<?php
$stats = [
    'earnings_trend' => [40, 65, 45, 90, 75, 100, 85], // Simple dataset for graph
    'total_earned' => '842.50',
    'jobs_count' => 12,
    'online_hrs' => 34
];

$history_groups = [
    'Today' => [
        ['id' => 'FG-8271', 'time' => '14:30', 'amount' => '24.50', 'status' => 'completed', 'route' => 'Downtown -> Westside'],
        ['id' => 'FG-8212', 'time' => '12:15', 'amount' => '18.90', 'status' => 'completed', 'route' => 'Mall -> Suburbs'],
    ],
    'Yesterday' => [
        ['id' => 'FG-8199', 'time' => '18:45', 'amount' => '0.00', 'status' => 'cancelled', 'route' => 'Airport -> City'],
        ['id' => 'FG-8100', 'time' => '16:20', 'amount' => '42.00', 'status' => 'completed', 'route' => 'Long Haul -> North'],
    ]
];
?>

<main class="relative min-h-screen pb-32 pt-16 px-6 bg-[#0f0f11] text-white">
    
    <div class="mb-8">
        <div class="flex justify-between items-end mb-4">
            <div>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Weekly Earnings</p>
                <h1 class="text-4xl font-bold text-white mt-1">$<?= $stats['total_earned'] ?></h1>
            </div>
            <div class="text-right">
                <div class="bg-green-500/10 border border-green-500/20 text-green-500 px-3 py-1 rounded-lg text-xs font-bold flex items-center gap-1">
                    <span class="material-icons-round text-sm">trending_up</span> +12%
                </div>
            </div>
        </div>

        <div class="relative w-full h-48 bg-gradient-to-b from-[#1c1c1e] to-[#121212] rounded-3xl border border-white/10 shadow-2xl overflow-hidden p-0">
            <div class="absolute inset-0 flex flex-col justify-between p-6 opacity-10">
                <div class="border-b border-white w-full h-0"></div>
                <div class="border-b border-white w-full h-0"></div>
                <div class="border-b border-white w-full h-0"></div>
            </div>
            
            <svg class="absolute bottom-0 left-0 w-full h-[70%] z-10" preserveAspectRatio="none" viewBox="0 0 100 100">
                <defs>
                    <linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color:#FF6B00;stop-opacity:0.4" />
                        <stop offset="100%" style="stop-color:#FF6B00;stop-opacity:0" />
                    </linearGradient>
                </defs>
                <path d="M0,100 L0,60 Q15,40 25,55 T50,40 T75,20 T100,30 L100,100 Z" fill="url(#grad)" stroke="none" />
                <path d="M0,60 Q15,40 25,55 T50,40 T75,20 T100,30" fill="none" stroke="#FF6B00" stroke-width="2" vector-effect="non-scaling-stroke" />
            </svg>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-10">
        <div class="bg-white/5 border border-white/5 rounded-2xl p-4 flex items-center gap-4">
            <div class="relative w-12 h-12 flex items-center justify-center">
                <svg class="w-full h-full transform -rotate-90">
                    <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="4" fill="transparent" class="text-gray-700" />
                    <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="4" fill="transparent" stroke-dasharray="126" stroke-dashoffset="5" class="text-[#FF6B00]" />
                </svg>
                <span class="absolute text-[10px] font-bold">4.9</span>
            </div>
            <div>
                <p class="text-[10px] text-gray-500 uppercase font-bold">Rating</p>
                <p class="text-sm font-bold text-white">Excellent</p>
            </div>
        </div>

        <div class="bg-white/5 border border-white/5 rounded-2xl p-4 flex items-center gap-4">
            <div class="relative w-12 h-12 flex items-center justify-center">
                <svg class="w-full h-full transform -rotate-90">
                    <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="4" fill="transparent" class="text-gray-700" />
                    <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="4" fill="transparent" stroke-dasharray="126" stroke-dashoffset="10" class="text-green-500" />
                </svg>
                <span class="absolute text-[10px] font-bold">94%</span>
            </div>
            <div>
                <p class="text-[10px] text-gray-500 uppercase font-bold">Success</p>
                <p class="text-sm font-bold text-white">Top Tier</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold">History</h2>
        <div class="flex bg-black/40 rounded-lg p-1 border border-white/5">
            <button class="px-4 py-1.5 bg-white/10 rounded-md text-xs font-bold text-white shadow-sm">All</button>
            <button class="px-4 py-1.5 text-xs font-bold text-gray-500 hover:text-white transition-colors">Issues</button>
        </div>
    </div>

    <div class="relative space-y-8 pl-4">
        <div class="absolute left-[19px] top-2 bottom-0 w-0.5 bg-gradient-to-b from-white/10 to-transparent"></div>

        <?php foreach ($history_groups as $day => $jobs): ?>
            <div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-2.5 h-2.5 rounded-full bg-white shadow-[0_0_10px_white]"></div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest"><?= $day ?></span>
                </div>

                <div class="space-y-3 pl-6">
                    <?php foreach ($jobs as $job): ?>
                        <?php 
                            $is_cancelled = $job['status'] === 'cancelled'; 
                            $card_bg = $is_cancelled ? 'bg-red-500/5 border-red-500/10' : 'bg-white/5 border-white/5 hover:bg-white/10';
                            $text_color = $is_cancelled ? 'text-gray-500' : 'text-white';
                            $price_color = $is_cancelled ? 'text-red-500 line-through' : 'text-white';
                        ?>
                        
                        <div class="group relative <?= $card_bg ?> border rounded-2xl p-4 transition-all duration-300 active:scale-95">
                            <div class="flex justify-between items-start">
                                
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-[10px] font-mono text-gray-500 bg-black/30 px-1.5 py-0.5 rounded">#<?= $job['id'] ?></span>
                                        <span class="text-xs font-bold text-gray-400"><?= $job['time'] ?></span>
                                    </div>
                                    
                                    <div class="flex flex-col gap-1 <?= $is_cancelled ? 'opacity-50' : '' ?>">
                                        <div class="flex items-center gap-2">
                                            <div class="w-1.5 h-1.5 rounded-full border border-gray-500"></div>
                                            <span class="text-sm font-medium <?= $text_color ?> truncate w-32">Pickup Point</span>
                                        </div>
                                        <div class="h-3 ml-[2.5px] border-l border-dashed border-gray-600"></div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-1.5 h-1.5 rounded-full bg-[#FF6B00]"></div>
                                            <span class="text-sm font-medium <?= $text_color ?> truncate w-32">Destination</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right flex flex-col items-end gap-1">
                                    <span class="text-lg font-bold <?= $price_color ?>">$<?= $job['amount'] ?></span>
                                    <?php if ($is_cancelled): ?>
                                        <span class="text-[10px] font-bold text-red-500 uppercase bg-red-500/10 px-2 py-1 rounded">Cancelled</span>
                                    <?php else: ?>
                                        <span class="material-icons-round text-green-500 text-lg opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>