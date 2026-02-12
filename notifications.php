<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <?= UI::pageHeader('Updates', 'Recent Alerts') ?>

    <div class="space-y-3">
        <?= UI::listItem('New Order', 'Order #FG-928 is available near your current location.', 'Now', 'local_shipping', 'primary') ?>
        <?= UI::listItem('Earnings Confirmed', 'Payment for Order #FG-882 has been settled.', '2h ago', 'account_balance_wallet', 'green-500', 0.1) ?>
        <?= UI::listItem('Update v2.4', 'Improved tracking accuracy is now available.', 'Yesterday', 'info_outline', 'blue-500', 0.2) ?>
        <?= UI::listItem('Top Rated', "You've maintained a 4.9+ rating for 30 days straight.", '3d ago', 'military_tech', 'orange-500', 0.3) ?>
    </div>
</main>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
