<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-24 px-8">
    <?= UI::pageHeader('Deliveries', '3 Assigned Today') ?>

    <!-- Minimal Tabs -->
    <div class="flex justify-center mb-10 overflow-x-auto scrollbar-hide">
        <div class="flex p-1 bg-white/5 rounded-2xl border border-white/5">
            <button onclick="window.location.href='orders.php'" class="px-6 py-2.5 bg-primary text-white rounded-xl text-[10px] font-bold uppercase tracking-widest shadow-lg">Active</button>
            <button class="px-6 py-2.5 text-gray-500 rounded-xl text-[10px] font-bold uppercase tracking-widest">Scheduled</button>
            <button onclick="window.location.href='history.php'" class="px-6 py-2.5 text-gray-500 rounded-xl text-[10px] font-bold uppercase tracking-widest">History</button>
        </div>
    </div>

    <!-- Active Orders List (Minimalist) -->
    <div class="space-y-4">
        <!-- Order Card 1 -->
        <?= UI::card('
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h3 class="text-lg font-bold text-white mb-1">#FG-9281</h3>
                    <p class="text-[10px] font-bold text-primary uppercase tracking-widest">In Progress</p>
                </div>
                <button class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center text-gray-500">
                    <span class="material-icons-round text-sm">more_horiz</span>
                </button>
            </div>

            <div class="space-y-6 mb-8">
                <div>
                    <p class="text-[9px] font-bold text-gray-600 uppercase tracking-widest mb-1">Pickup</p>
                    <p class="text-sm font-medium text-white/90">Downtown Mart Branch</p>
                </div>
                <div>
                    <p class="text-[9px] font-bold text-gray-600 uppercase tracking-widest mb-1">Drop-off</p>
                    <p class="text-sm font-medium text-white/90">Salesforce Tower, Suite 400</p>
                </div>
            </div>

            '.UI::button('Navigate', 'primary', "window.location.href='tracking.php'", 'flex items-center justify-center gap-2').'
        ') ?>

        <!-- Order Card 2 (Queued) -->
        <div onclick="window.location.href='tracking.php'" class="minimal-card p-6 rounded-[2rem] border border-white/5 animate-slide-up opacity-60" style="animation-delay: 0.1s;">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-600">
                        <span class="material-icons-round">local_grocery_store</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-white">#FG-9304</p>
                        <p class="text-[9px] font-bold text-gray-600 uppercase tracking-widest">Queued Request</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-white">$18.20</span>
            </div>
        </div>
    </div>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
