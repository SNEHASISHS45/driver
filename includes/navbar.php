<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="fixed bottom-0 left-0 w-full z-50 bg-background-dark/95 backdrop-blur-3xl border-t border-white/5 pb-10 pt-4 px-8">
    <div class="flex justify-between items-center max-w-md mx-auto">
        <a href="index.php" class="flex flex-col items-center gap-1.5 transition-all <?php echo $current_page == 'index.php' ? 'text-primary' : 'text-gray-600 hover:text-gray-400'; ?>">
            <span class="material-icons-round text-2xl">dashboard</span>
            <span class="text-[8px] font-bold uppercase tracking-[0.2em] <?php echo $current_page == 'index.php' ? 'opacity-100' : 'opacity-40'; ?>">Shift</span>
        </a>
        <a href="orders.php" class="flex flex-col items-center gap-1.5 transition-all <?php echo $current_page == 'orders.php' ? 'text-primary' : 'text-gray-600 hover:text-gray-400'; ?>">
            <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'wght' 300;">local_shipping</span>
            <span class="text-[8px] font-bold uppercase tracking-[0.2em] <?php echo $current_page == 'orders.php' ? 'opacity-100' : 'opacity-40'; ?>">Tasks</span>
        </a>
        <a href="earnings.php" class="flex flex-col items-center gap-1.5 transition-all <?php echo $current_page == 'earnings.php' ? 'text-primary' : 'text-gray-600 hover:text-gray-400'; ?>">
            <span class="material-icons-round text-2xl">account_balance_wallet</span>
            <span class="text-[8px] font-bold uppercase tracking-[0.2em] <?php echo $current_page == 'earnings.php' ? 'opacity-100' : 'opacity-40'; ?>">Wallet</span>
        </a>
        <a href="profile.php" class="flex flex-col items-center gap-1.5 transition-all <?php echo $current_page == 'profile.php' ? 'text-primary' : 'text-gray-600 hover:text-gray-400'; ?>">
            <span class="material-icons-round text-2xl">person</span>
            <span class="text-[8px] font-bold uppercase tracking-[0.2em] <?php echo $current_page == 'profile.php' ? 'opacity-100' : 'opacity-40'; ?>">Account</span>
        </a>
    </div>
</nav>
