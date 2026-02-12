<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <?= UI::pageHeader('Cash Flow', 'On-Hand Collections') ?>

    <!-- Minimal Cash Card -->
    <div class="mb-10">
        <?= UI::card('
            <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-3 text-center">Total Collected</p>
            <h2 class="text-5xl font-bold text-white mb-4 tracking-tight text-center">$42.00</h2>
            <div class="flex items-center justify-center gap-2 mb-8">
                <div class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></div>
                <span class="text-[9px] font-bold text-gray-500 uppercase tracking-widest">Limit: $100.00</span>
            </div>
            '.UI::button('Settlement', 'primary').'
        ', 'p-10') ?>
    </div>

    <!-- Collection List (Minimalist) -->
    <div class="space-y-3">
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-5 ml-2">Recent Collections</p>
        <?= UI::listItem('#FG-9281', 'Today, 12:30 PM', '$12.50', 'payments', 'primary') ?>
        <?= UI::listItem('#FG-9102', 'Yesterday, 4:15 PM', '$29.50', 'payments', 'primary', 0.1) ?>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
