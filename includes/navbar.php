<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="fixed bottom-0 left-0 w-full z-50 bg-background-dark/95 backdrop-blur-3xl border-t border-white/[0.03]">
    <div class="max-w-screen-xl mx-auto px-10 h-16 flex justify-between items-center bg-transparent">
        <a href="index.php" class="relative group flex flex-col items-center justify-center transition-all px-4 h-full <?php echo $current_page == 'index.php' ? 'text-primary' : 'text-gray-500 hover:text-gray-400'; ?>">
            <span class="material-symbols-outlined text-2xl transition-all" style="font-variation-settings: 'wght' <?php echo $current_page == 'index.php' ? '300' : '200'; ?>, 'FILL' <?php echo $current_page == 'index.php' ? '1' : '0'; ?>;">grid_view</span>
            <?php if ($current_page == 'index.php'): ?>
                <span class="absolute bottom-1.5 w-1 h-1 bg-primary rounded-full"></span>
            <?php endif; ?>
        </a>

        <a href="orders.php" class="relative group flex flex-col items-center justify-center transition-all px-4 h-full <?php echo $current_page == 'orders.php' ? 'text-primary' : 'text-gray-500 hover:text-gray-400'; ?>">
            <span class="material-symbols-outlined text-2xl transition-all" style="font-variation-settings: 'wght' <?php echo $current_page == 'orders.php' ? '300' : '200'; ?>, 'FILL' <?php echo $current_page == 'orders.php' ? '1' : '0'; ?>;">local_shipping</span>
            <?php if ($current_page == 'orders.php'): ?>
                <span class="absolute bottom-1.5 w-1 h-1 bg-primary rounded-full"></span>
            <?php endif; ?>
        </a>

        <a href="earnings.php" class="relative group flex flex-col items-center justify-center transition-all px-4 h-full <?php echo $current_page == 'earnings.php' ? 'text-primary' : 'text-gray-500 hover:text-gray-400'; ?>">
            <span class="material-symbols-outlined text-2xl transition-all" style="font-variation-settings: 'wght' <?php echo $current_page == 'earnings.php' ? '300' : '200'; ?>, 'FILL' <?php echo $current_page == 'earnings.php' ? '1' : '0'; ?>;">account_balance_wallet</span>
            <?php if ($current_page == 'earnings.php'): ?>
                <span class="absolute bottom-1.5 w-1 h-1 bg-primary rounded-full"></span>
            <?php endif; ?>
        </a>

        <a href="profile.php" class="relative group flex flex-col items-center justify-center transition-all px-4 h-full <?php echo $current_page == 'profile.php' ? 'text-primary' : 'text-gray-500 hover:text-gray-400'; ?>">
            <span class="material-symbols-outlined text-2xl transition-all" style="font-variation-settings: 'wght' <?php echo $current_page == 'profile.php' ? '300' : '200'; ?>, 'FILL' <?php echo $current_page == 'profile.php' ? '1' : '0'; ?>;">person</span>
            <?php if ($current_page == 'profile.php'): ?>
                <span class="absolute bottom-1.5 w-1 h-1 bg-primary rounded-full"></span>
            <?php endif; ?>
        </a>
    </div>
</nav>
