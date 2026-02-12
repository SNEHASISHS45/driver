<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-24 px-6 bg-[#F8F9FB] dark:bg-[#0A0A0A]">
    <div class="mb-8 px-2">
        <?= UI::pageHeader('Deliveries', '3 Assigned Today') ?>
    </div>

    <div class="flex justify-center mb-8">
        <div class="inline-flex p-1.5 bg-gray-200/50 dark:bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 shadow-inner">
            <button onclick="window.location.href='orders.php'" class="px-8 py-2 bg-white dark:bg-primary text-primary dark:text-white rounded-xl text-[11px] font-bold uppercase tracking-wider shadow-sm transition-all">Active</button>
            <button class="px-8 py-2 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 rounded-xl text-[11px] font-bold uppercase tracking-wider transition-all">Scheduled</button>
            <button onclick="window.location.href='history.php'" class="px-8 py-2 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 rounded-xl text-[11px] font-bold uppercase tracking-wider transition-all">History</button>
        </div>
    </div>

    <div class="space-y-6">
        
        <div class="group relative bg-white dark:bg-[#121212] rounded-[2.5rem] p-7 shadow-[0_20px_50px_rgba(0,0,0,0.05)] dark:shadow-[0_20px_50px_rgba(0,0,0,0.3)] border border-gray-100 dark:border-white/5 transition-transform hover:scale-[1.01]">
            <div class="flex justify-between items-start mb-8">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-primary rounded-full"></div> <div>
                        <h3 class="text-xl font-black text-gray-900 dark:text-white tracking-tight">#FG-9281</h3>
                        <div class="flex items-center gap-1.5">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                            </span>
                            <p class="text-[10px] font-bold text-primary uppercase tracking-widest">In Transit</p>
                        </div>
                    </div>
                </div>
                <button class="w-10 h-10 rounded-2xl bg-gray-50 dark:bg-white/5 flex items-center justify-center text-gray-400 hover:text-primary transition-colors">
                    <span class="material-icons-round">more_vert</span>
                </button>
            </div>

            <div class="relative pl-8 space-y-8 mb-8 before:content-[''] before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-gradient-to-b before:from-green-500 before:to-primary">
                <div class="relative">
                    <div class="absolute -left-[27px] top-1 w-4 h-4 rounded-full border-4 border-white dark:border-[#121212] bg-green-500"></div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-0.5">Pickup</p>
                    <p class="text-md font-bold text-gray-900 dark:text-white/90">Downtown Mart Branch</p>
                </div>
                <div class="relative">
                    <div class="absolute -left-[27px] top-1 w-4 h-4 rounded-full border-4 border-white dark:border-[#121212] bg-primary"></div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-0.5">Drop-off</p>
                    <p class="text-md font-bold text-gray-900 dark:text-white/90">Salesforce Tower, Suite 400</p>
                </div>
            </div>

            <?= UI::button('Open Navigation', 'primary', "window.location.href='tracking.php'", 'w-full py-4 rounded-2xl flex items-center justify-center gap-3 font-bold text-sm shadow-xl shadow-primary/20') ?>
        </div>

        <div onclick="window.location.href='tracking.php'" class="group bg-gray-100/50 dark:bg-white/5 backdrop-blur-sm p-5 rounded-[2rem] border border-dashed border-gray-300 dark:border-white/10 transition-all hover:bg-white dark:hover:bg-white/10 cursor-pointer">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white dark:bg-white/5 flex items-center justify-center text-gray-400 group-hover:text-primary transition-colors shadow-sm">
                        <span class="material-icons-round">local_shipping</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-900 dark:text-white">#FG-9304</p>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Next in Queue</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="block text-sm font-black text-gray-900 dark:text-white">$18.20</span>
                    <span class="text-[9px] text-gray-400 font-bold uppercase">Estimated</span>
                </div>
            </div>
        </div>
        
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
