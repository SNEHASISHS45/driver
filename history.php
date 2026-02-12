<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <?= UI::pageHeader('History', '1,240 Lifetime Jobs') ?>

    <!-- Minimal Stats Summary -->
    <div class="grid grid-cols-2 gap-4 mb-12">
        <?= UI::card(UI::stat('Average Rating', '4.98 ★', null, 'primary'), 'p-2') ?>
        <?= UI::card(UI::stat('Success Rate', '99.4%', null, 'white'), 'p-2') ?>
    </div>

    <!-- Minimal Filters -->
    <div class="flex justify-center mb-10 overflow-x-auto scrollbar-hide">
        <div class="flex p-1 bg-white/5 rounded-2xl border border-white/5">
            <button class="px-6 py-2.5 bg-primary text-white rounded-xl text-[9px] font-bold uppercase tracking-widest shadow-lg">Month</button>
            <button class="px-6 py-2.5 text-gray-600 rounded-xl text-[9px] font-bold uppercase tracking-widest">Week</button>
            <button class="px-6 py-2.5 text-gray-600 rounded-xl text-[9px] font-bold uppercase tracking-widest">Day</button>
        </div>
    </div>

    <!-- History List (Minimalist) -->
    <div class="space-y-3">
        <?php 
        $history = [
            ['FG-8271', 'Oct 12', '$24.50', 'Completed', 'green-600', 'check_circle'],
            ['FG-8212', 'Oct 12', '$18.90', 'Completed', 'green-600', 'check_circle'],
            ['FG-8199', 'Oct 11', '$12.00', 'Cancelled', 'red-500', 'cancel', 0.5]
        ];
        foreach($history as $index => $item) {
            echo UI::listItem(
                '#' . $item[0], 
                $item[1] . ' • ' . $item[3], 
                $item[2], 
                $item[5], 
                $item[4], 
                $index * 0.1
            );
        }
        ?>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
