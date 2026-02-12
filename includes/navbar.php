<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="fixed bottom-1 left-1/2 -translate-x-1/2 w-[90%] max-w-md z-50 transition-all duration-500">
    <div class="bg-white/80 dark:bg-[#161B22]/80 backdrop-blur-2xl border border-gray-100 dark:border-white/5 rounded-[2.5rem] shadow-premium-hover px-3 py-2.5 flex justify-around items-center">
        <!-- Home -->
        <a href="index.php" class="relative flex flex-col items-center py-2 px-5 transition-all duration-300">
            <div class="relative z-10 transition-transform duration-300 <?php echo $current_page == 'index.php' ? 'scale-110 -translate-y-0.5' : ''; ?>">
                <span class="material-icons-round text-2xl <?php echo $current_page == 'index.php' ? 'text-primary' : 'text-gray-400 dark:text-gray-600'; ?>">grid_view</span>
            </div>
            <?php if ($current_page == 'index.php'): ?>
                <div class="absolute inset-x-2 inset-y-1 bg-blue-50 dark:bg-primary/10 rounded-2xl z-0 transition-all duration-500"></div>
                <span class="text-[9px] font-extrabold text-primary uppercase tracking-widest mt-1 opacity-100 scale-100 transition-all">Home</span>
            <?php else: ?>
                <span class="text-[9px] font-extrabold text-gray-400 dark:text-gray-600 uppercase tracking-widest mt-1 opacity-0 scale-75 transition-all">Home</span>
            <?php endif; ?>
        </a>

        <!-- Orders -->
        <a href="orders.php" class="relative flex flex-col items-center py-2 px-5 transition-all duration-300">
            <div class="relative z-10 transition-transform duration-300 <?php echo $current_page == 'orders.php' ? 'scale-110 -translate-y-0.5' : ''; ?>">
                <span class="material-icons-round text-2xl <?php echo $current_page == 'orders.php' ? 'text-primary' : 'text-gray-400 dark:text-gray-600'; ?>">local_shipping</span>
            </div>
            <?php if ($current_page == 'orders.php'): ?>
                <div class="absolute inset-x-2 inset-y-1 bg-blue-50 dark:bg-primary/10 rounded-2xl z-0 transition-all duration-500"></div>
                <span class="text-[9px] font-extrabold text-primary uppercase tracking-widest mt-1 opacity-100 scale-100 transition-all">Orders</span>
            <?php else: ?>
                <span class="text-[9px] font-extrabold text-gray-400 dark:text-gray-600 uppercase tracking-widest mt-1 opacity-0 scale-75 transition-all">Orders</span>
            <?php endif; ?>
        </a>

        <!-- Wallet -->
        <a href="earnings.php" class="relative flex flex-col items-center py-2 px-5 transition-all duration-300">
            <div class="relative z-10 transition-transform duration-300 <?php echo $current_page == 'earnings.php' ? 'scale-110 -translate-y-0.5' : ''; ?>">
                <span class="material-icons-round text-2xl <?php echo $current_page == 'earnings.php' ? 'text-primary' : 'text-gray-400 dark:text-gray-600'; ?>">account_balance_wallet</span>
            </div>
            <?php if ($current_page == 'earnings.php'): ?>
                <div class="absolute inset-x-2 inset-y-1 bg-blue-50 dark:bg-primary/10 rounded-2xl z-0 transition-all duration-500"></div>
                <span class="text-[9px] font-extrabold text-primary uppercase tracking-widest mt-1 opacity-100 scale-100 transition-all">Wallet</span>
            <?php else: ?>
                <span class="text-[9px] font-extrabold text-gray-400 dark:text-gray-600 uppercase tracking-widest mt-1 opacity-0 scale-75 transition-all">Wallet</span>
            <?php endif; ?>
        </a>

        <!-- Profile -->
        <a href="profile.php" class="relative flex flex-col items-center py-2 px-5 transition-all duration-300">
            <div class="relative z-10 transition-transform duration-300 <?php echo $current_page == 'profile.php' ? 'scale-110 -translate-y-0.5' : ''; ?>">
                <span class="material-icons-round text-2xl <?php echo $current_page == 'profile.php' ? 'text-primary' : 'text-gray-400 dark:text-gray-600'; ?>">person</span>
            </div>
            <?php if ($current_page == 'profile.php'): ?>
                <div class="absolute inset-x-2 inset-y-1 bg-blue-50 dark:bg-primary/10 rounded-2xl z-0 transition-all duration-500"></div>
                <span class="text-[9px] font-extrabold text-primary uppercase tracking-widest mt-1 opacity-100 scale-100 transition-all">Profile</span>
            <?php else: ?>
                <span class="text-[9px] font-extrabold text-gray-400 dark:text-gray-600 uppercase tracking-widest mt-1 opacity-0 scale-75 transition-all">Profile</span>
            <?php endif; ?>
        </a>
    </div>
</nav>
