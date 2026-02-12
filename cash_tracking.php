<?php include 'includes/header.php'; ?>

<?php
$cash_data = [
    'on_hand' => 42.00,
    'limit' => 100.00,
    'currency' => '$',
    'status' => 'Good' // or 'Critical'
];

// Calculate percentage for the SVG Circle
// r=45, C = 2 * pi * 45 ≈ 283
$percentage = ($cash_data['on_hand'] / $cash_data['limit']);
$dash_array = 283;
$dash_offset = $dash_array - ($dash_array * $percentage);

$history = [
    ['id' => 'FG-9281', 'loc' => 'Downtown Apts', 'amount' => '12.50', 'time' => '12:30 PM', 'status' => 'Collected'],
    ['id' => 'FG-9102', 'loc' => 'Medical Center', 'amount' => '29.50', 'time' => 'Yesterday', 'status' => 'Collected'],
    ['id' => 'FG-8821', 'loc' => 'Tech Park', 'amount' => '-85.00', 'time' => 'Oct 10', 'status' => 'Deposited']
];
?>

<main class="relative min-h-screen pb-32 pt-16 px-6 bg-[#0f0f11] text-white overflow-hidden">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold">Wallet</h1>
            <p class="text-white/50 text-xs uppercase tracking-widest mt-1">Cash on Hand</p>
        </div>
        <button class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
            <span class="material-icons-round text-white/70">history</span>
        </button>
    </div>

    <div class="relative w-full flex flex-col items-center justify-center py-8 mb-8">
        
        <div class="relative w-64 h-64">
            <div class="absolute inset-0 bg-[#FF6B00] opacity-10 blur-3xl rounded-full animate-pulse"></div>

            <svg class="w-full h-full transform -rotate-90">
                <circle cx="128" cy="128" r="110" stroke="rgba(255,255,255,0.05)" stroke-width="12" fill="none" />
                <circle cx="128" cy="128" r="110" 
                    stroke="#FF6B00" 
                    stroke-width="12" 
                    fill="none" 
                    stroke-linecap="round"
                    stroke-dasharray="<?= $dash_array ?>" 
                    stroke-dashoffset="<?= $dash_offset ?>"
                    class="transition-all duration-1000 ease-out shadow-[0_0_20px_#FF6B00]"
                />
            </svg>

            <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
                <span class="text-gray-400 text-sm font-medium mb-1">Total Collected</span>
                <span class="text-5xl font-bold tracking-tighter text-white drop-shadow-md">
                    <?= $cash_data['currency'] . number_format($cash_data['on_hand'], 2) ?>
                </span>
                
                <div class="mt-4 px-3 py-1 bg-white/5 rounded-full border border-white/10 backdrop-blur-md flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.8)]"></div>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-gray-400">
                        Limit: <?= $cash_data['currency'] . $cash_data['limit'] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-10">
        <button class="group relative w-full overflow-hidden rounded-2xl bg-[#FF6B00] p-4 transition-all active:scale-[0.98]">
            <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
            <div class="relative flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="bg-black/20 p-2 rounded-lg">
                        <span class="material-icons-round text-white">qr_code_2</span>
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold text-white uppercase tracking-wider">Deposit Cash</p>
                        <p class="text-[10px] text-white/80">Generate barcode for hub</p>
                    </div>
                </div>
                <span class="material-icons-round text-white group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </div>
        </button>
    </div>

    <div>
        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4 pl-2">Recent Activity</h3>
        
        <div class="space-y-3">
            <?php foreach($history as $tx): ?>
                <?php 
                    $is_deposit = $tx['amount'][0] === '-';
                    $amount_color = $is_deposit ? 'text-white/50' : 'text-white';
                    $icon = $is_deposit ? 'account_balance' : 'payments';
                    $bg_icon = $is_deposit ? 'bg-white/5 text-gray-400' : 'bg-[#FF6B00]/10 text-[#FF6B00]';
                ?>
                <div class="flex items-center justify-between p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl <?= $bg_icon ?> flex items-center justify-center border border-white/5">
                            <span class="material-icons-round text-lg"><?= $icon ?></span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-200"><?= $tx['loc'] ?></p>
                            <p class="text-[10px] text-gray-500 font-mono mt-0.5"><?= $tx['id'] ?> • <?= $tx['time'] ?></p>
                        </div>
                    </div>
                    <span class="text-sm font-bold <?= $amount_color ?> font-mono"><?= $tx['amount'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>