<?php include '../includes/header.php'; ?>

<main class="relative min-h-screen flex flex-col items-center justify-center px-8 pb-20 overflow-hidden">
    <!-- Clean Minimalist Header -->
    <div class="w-full max-w-sm z-10 animate-slide-up text-center mb-12">
        <div class="w-16 h-16 bg-primary rounded-[1.5rem] shadow-2xl mx-auto mb-8 flex items-center justify-center animate-float">
            <span class="material-icons-round text-white text-3xl">local_shipping</span>
        </div>
        <h1 class="text-3xl font-bold tracking-tight text-white mb-3">RefreshGo</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[.25em]">Driver Portal</p>
    </div>

    <!-- Minimal Form Card -->
    <div class="w-full max-w-sm z-10 space-y-8">
        <div class="space-y-6">
            <div class="space-y-2">
                <input type="text" class="w-full bg-white/5 border border-white/10 rounded-[1.5rem] py-5 px-6 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/40 transition-all font-medium" placeholder="ID / Email">
            </div>
            <div class="space-y-2">
                <input type="password" class="w-full bg-white/5 border border-white/10 rounded-[1.5rem] py-5 px-6 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/40 transition-all font-medium" placeholder="Password">
            </div>
        </div>

        <button onclick="window.location.href='../index.php'" class="w-full primary-gradient text-white font-bold py-5 rounded-[1.5rem] shadow-xl active:scale-[0.97] transition-all uppercase tracking-widest text-xs">
            Authenticate
        </button>

        <div class="flex flex-col items-center gap-4 pt-4">
            <a href="signup.php" class="text-[10px] font-bold text-primary uppercase tracking-widest">New Delivery Partner?</a>
            <a href="#" class="text-[9px] font-bold text-gray-600 uppercase tracking-widest">Reset Access</a>
        </div>
    </div>
</main>

</body>
</html>
