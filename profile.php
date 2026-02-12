<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <!-- Clean Header -->
    <div class="flex flex-col items-center mb-12">
        <div class="relative mb-6">
            <div class="w-24 h-24 rounded-[2rem] overflow-hidden premium-shadow border border-white/10">
                <img class="w-full h-full object-cover opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8W3iKNx3-UE1vvEajatD79FdBBFxEg4mHXOGwjsVjxTocBu-7ZyuvmflZ1VntNxDdprGmbq5zGGSrsuWaazZKFRbIKHFmwi40JvE2hail7M0GYX28-A75Z8wYwgGaMZ2p5TQDfmJ5-_bQ-N3VYaFKzJgyy5wbMqlMGr36WSaNsG_dicbHpScEoPraJagQn3HEix81YW9nYZ2tz2PxGwSI6HTFMo3-54eSS8cD6K5UWhzgH2ZsebpnIQN6I9GMIJqLn_zFZA2i1Q" alt="Driver">
            </div>
            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-background-dark rounded-full"></div>
        </div>
        <h1 class="text-2xl font-bold text-white mb-1">Alex Rodriguez</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[.2em]">Diamond Partner • 4.98 ★</p>
    </div>

    <!-- Minimal Stats -->
    <div class="grid grid-cols-3 gap-4 mb-12">
        <?= UI::card(UI::stat('Delivery', '2.4k', null, 'white'), 'p-0') ?>
        <?= UI::card(UI::stat('Exp.', '2y', null, 'white'), 'p-0') ?>
        <?= UI::card(UI::stat('Rate', '99%', null, 'white'), 'p-0') ?>
    </div>

    <!-- Menu Options (Minimalist) -->
    <div class="space-y-3">
        <?= UI::listItem('Identity & Safety', 'Verify your credentials', null, 'person', 'gray-500') ?>
        <div onclick="window.location.href='vehicle_details.php'">
            <?= UI::listItem('Vehicle Management', 'Manage your transport', null, 'electric_scooter', 'gray-500') ?>
        </div>
        <div onclick="window.location.href='settings.php'">
            <?= UI::listItem('App Preferences', 'Personalize your app', null, 'tune', 'gray-500') ?>
        </div>
        <div onclick="window.location.href='support.php'">
            <?= UI::listItem('Support Center', 'Get help from our team', null, 'help_outline', 'gray-500') ?>
        </div>
        <div onclick="window.location.href='cash_tracking.php'">
            <?= UI::listItem('Earnings & Cash', 'Track your payouts', null, 'account_balance_wallet', 'gray-500') ?>
        </div>

        <div class="mt-8">
            <?= UI::button('Terminate Session', 'danger', "window.location.href='auth/login.php'") ?>
        </div>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
