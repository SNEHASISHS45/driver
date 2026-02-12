<?php include 'includes/header.php'; ?>

<?php
$vehicle = [
    'name' => 'Refresh-X 200',
    'type' => 'Electric Scooter',
    'plate' => 'XYZ-8821',
    'battery' => 74,
    'range' => '42 km',
    'status' => 'Connected',
    'last_sync' => 'Just now',
    'documents' => [
        ['name' => 'Insurance', 'status' => 'valid', 'expiry' => 'Oct 2025'],
        ['name' => 'Registration', 'status' => 'valid', 'expiry' => 'Dec 2026'],
        ['name' => 'Pollution Cert', 'status' => 'expiring', 'expiry' => '3 Days']
    ]
];
?>

<main class="relative min-h-screen pb-32 pt-16 px-6 bg-[#0f0f11] text-white overflow-hidden">

    <div class="absolute inset-0 z-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;">
    </div>

    <div class="relative z-10 mb-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">My Vehicle</h1>
            <div class="flex items-center gap-2 px-3 py-1 bg-green-500/10 border border-green-500/20 rounded-full">
                <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                <span class="text-[10px] font-bold text-green-500 uppercase tracking-widest">Online</span>
            </div>
        </div>

        <div class="relative bg-gradient-to-br from-[#1c1c1e] to-[#121212] border border-white/10 rounded-3xl p-6 shadow-2xl overflow-hidden">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#FF6B00] blur-[80px] opacity-20"></div>

            <div class="flex justify-between items-start relative z-10">
                <div>
                    <h2 class="text-xl font-bold italic"><?= $vehicle['name'] ?></h2>
                    <p class="text-xs text-gray-500 uppercase tracking-widest mt-1">Slate Gray • Owned</p>
                </div>
                <span class="material-icons-round text-white/20 text-3xl">electric_moped</span>
            </div>

            <div class="w-full h-32 my-4 flex items-center justify-center relative">
                <div class="absolute bottom-2 w-32 h-2 bg-black blur-md rounded-[100%]"></div>
                <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?auto=format&fit=crop&q=80&w=400" 
                     alt="Scooter" 
                     class="h-full object-contain filter drop-shadow-2xl grayscale contrast-125 hover:grayscale-0 transition-all duration-500"
                >
            </div>

            <div class="grid grid-cols-2 gap-4 mt-2">
                <div class="bg-black/30 rounded-xl p-3 border border-white/5">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-icons-round text-green-500 text-sm">battery_charging_full</span>
                        <span class="text-[10px] text-gray-400 uppercase">Charge</span>
                    </div>
                    <div class="flex items-end gap-1">
                        <span class="text-xl font-bold text-white"><?= $vehicle['battery'] ?>%</span>
                    </div>
                    <div class="w-full h-1 bg-gray-700 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-green-500 w-[74%] shadow-[0_0_10px_rgba(34,197,94,0.5)]"></div>
                    </div>
                </div>

                <div class="bg-black/30 rounded-xl p-3 border border-white/5">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-icons-round text-[#FF6B00] text-sm">near_me</span>
                        <span class="text-[10px] text-gray-400 uppercase">Est. Range</span>
                    </div>
                    <span class="text-xl font-bold text-white"><?= $vehicle['range'] ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8 flex justify-center">
        <div class="relative bg-white text-black px-8 py-3 rounded-lg border-4 border-gray-800 shadow-xl flex items-center gap-4">
            <div class="flex flex-col items-center border-r-2 border-black/10 pr-3">
                <div class="w-4 h-4 rounded-full bg-blue-600 flex items-center justify-center mb-1">
                    <span class="text-[6px] font-bold text-white">IND</span>
                </div>
                <span class="text-[8px] font-bold rotate-90 mt-1">HSRP</span>
            </div>
            <span class="text-3xl font-mono font-bold tracking-widest text-gray-900"><?= $vehicle['plate'] ?></span>
            
            <div class="absolute top-2 left-2 w-2 h-2 rounded-full bg-gray-300 border border-gray-400 shadow-inner"></div>
            <div class="absolute top-2 right-2 w-2 h-2 rounded-full bg-gray-300 border border-gray-400 shadow-inner"></div>
        </div>
    </div>

    <div class="mb-10">
        <div class="flex justify-between items-center mb-4 px-1">
            <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Document Wallet</p>
            <button class="text-[10px] text-[#FF6B00] font-bold uppercase tracking-widest">Upload New</button>
        </div>

        <div class="space-y-3">
            <?php foreach($vehicle['documents'] as $doc): ?>
                <?php 
                    $is_critical = $doc['status'] === 'expiring';
                    $icon_color = $is_critical ? 'text-red-500' : 'text-green-500';
                    $bg_color = $is_critical ? 'bg-red-500/10 border-red-500/20' : 'bg-white/5 border-white/5';
                ?>
                <div class="flex items-center justify-between p-4 rounded-2xl border <?= $bg_color ?> transition-all active:scale-[0.98]">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-black/40 flex items-center justify-center border border-white/5">
                            <span class="material-icons-round text-white/50">description</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-200"><?= $doc['name'] ?></p>
                            <p class="text-[10px] text-gray-500 mt-0.5">Expires: <?= $doc['expiry'] ?></p>
                        </div>
                    </div>
                    
                    <?php if($is_critical): ?>
                        <div class="flex items-center gap-1 px-2 py-1 bg-red-500 rounded text-[10px] font-bold text-white shadow-lg shadow-red-500/20">
                            <span>Renew</span>
                            <span class="material-icons-round text-[10px]">warning</span>
                        </div>
                    <?php else: ?>
                        <span class="material-icons-round text-green-500 text-xl">check_circle</span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <button class="py-4 rounded-2xl bg-white/5 border border-white/10 text-white text-xs font-bold hover:bg-white/10 flex items-center justify-center gap-2">
            <span class="material-icons-round text-sm">build</span>
            Maintenance Log
        </button>
        <button class="py-4 rounded-2xl bg-white/5 border border-white/10 text-white text-xs font-bold hover:bg-white/10 flex items-center justify-center gap-2">
            <span class="material-icons-round text-sm">swap_horiz</span>
            Switch Vehicle
        </button>
    </div>

</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>