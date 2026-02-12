<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-12 flex items-center gap-4">
        <button onclick="history.back()" class="w-10 h-10 minimal-card rounded-xl flex items-center justify-center text-white border border-white/5">
            <span class="material-icons-round text-sm">chevron_left</span>
        </button>
        <div>
            <h1 class="text-2xl font-bold text-white">Support</h1>
            <p class="soft-text text-[8px] font-bold uppercase tracking-[0.2em]">Helper Center</p>
        </div>
    </div>

    <!-- Minimal Support Options -->
    <div class="grid grid-cols-2 gap-4 mb-10">
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5 flex flex-col items-center text-center">
            <span class="material-icons-round text-primary mb-3">chat_bubble_outline</span>
            <p class="text-[9px] font-bold text-white uppercase tracking-widest">Live Agent</p>
        </div>
        <div class="minimal-card p-6 rounded-[2rem] border border-white/5 flex flex-col items-center text-center">
            <span class="material-icons-round text-primary mb-3">sos</span>
            <p class="text-[9px] font-bold text-white uppercase tracking-widest">Emergency</p>
        </div>
    </div>

    <!-- FAQ (Minimalist) -->
    <div class="space-y-3">
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-4 ml-2">Common Questions</p>
        
        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 flex items-center justify-between active:bg-white/5">
            <span class="text-sm font-medium text-white/80">Withdrawal limits?</span>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 flex items-center justify-between active:bg-white/5">
            <span class="text-sm font-medium text-white/80">Damaged package?</span>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>

        <div class="minimal-card p-5 rounded-[1.5rem] border border-white/5 flex items-center justify-between active:bg-white/5">
            <span class="text-sm font-medium text-white/80">Navigation issues?</span>
            <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
        </div>
    </div>

    <!-- Feedback Button -->
    <button class="w-full mt-10 p-5 rounded-[1.8rem] bg-white/5 border border-white/5 flex items-center justify-center gap-3">
        <span class="text-[9px] font-bold text-gray-500 uppercase tracking-[0.2em]">Submit System Feedback</span>
    </button>
</main>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
