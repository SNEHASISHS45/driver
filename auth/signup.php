<?php include '../includes/header.php'; ?>

<main class="relative min-h-screen flex flex-col items-center justify-center px-6 pt-12 pb-24 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute top-[20%] right-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[100px] rounded-full animate-pulse"></div>
    
    <!-- Content -->
    <div class="w-full max-w-sm z-10 animate-slide-up">
        <div class="flex items-center gap-4 mb-8">
            <button onclick="window.location.href='login.php'" class="w-10 h-10 glass-dark rounded-xl flex items-center justify-center text-white border border-white/10">
                <span class="material-icons-round">chevron_left</span>
            </button>
            <h1 class="text-2xl font-bold text-white">Join RefreshGo</h1>
        </div>

        <div class="glass-dark p-8 rounded-[2.5rem] shadow-2xl space-y-5 border border-white/10">
            <div class="space-y-4">
                <div class="flex gap-4">
                    <div class="flex-1">
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2 ml-1">First Name</label>
                        <input type="text" class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 px-4 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/50 transition-all" placeholder="John">
                    </div>
                    <div class="flex-1">
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2 ml-1">Last Name</label>
                        <input type="text" class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 px-4 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/50 transition-all" placeholder="Doe">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2 ml-1">Phone Number</label>
                    <div class="relative group">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 material-icons-round text-gray-500 group-focus-within:text-primary transition-colors">phone</span>
                        <input type="tel" class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/50 transition-all" placeholder="+1 (555) 000-0000">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2 ml-1">Vehicle Type</label>
                    <div class="relative group">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 material-icons-round text-gray-500 group-focus-within:text-primary transition-colors">directions_bike</span>
                        <select class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white focus:outline-none focus:border-primary/50 transition-all appearance-none cursor-pointer">
                            <option class="bg-surface-dark">Bicycle</option>
                            <option class="bg-surface-dark">Motorcycle</option>
                            <option class="bg-surface-dark">Car</option>
                            <option class="bg-surface-dark">Van</option>
                        </select>
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 material-icons-round text-gray-500 pointer-events-none">expand_more</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2 ml-1">Password</label>
                    <div class="relative group">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 material-icons-round text-gray-500 group-focus-within:text-primary transition-colors">lock</span>
                        <input type="password" class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-gray-600 focus:outline-none focus:border-primary/50 transition-all" placeholder="Create Password">
                    </div>
                </div>
            </div>

            <div class="flex items-start gap-3 px-1">
                <input type="checkbox" class="mt-1 w-4 h-4 rounded border-white/20 bg-white/5 text-primary focus:ring-primary/50">
                <label class="text-[11px] text-gray-400 leading-relaxed">I agree to the <a href="#" class="text-primary font-bold">Terms of Service</a> and <a href="#" class="text-primary font-bold">Privacy Policy</a>.</label>
            </div>

            <button onclick="window.location.href='login.php'" class="w-full primary-gradient text-white font-bold py-4 rounded-2xl shadow-[0_10px_20px_rgba(244,123,37,0.3)] active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                <span>Register as Driver</span>
                <span class="material-icons-round text-xl">how_to_reg</span>
            </button>
        </div>

        <p class="mt-8 text-center text-gray-500 text-sm">
            Already have an account? <a href="login.php" class="text-primary font-bold">Log In</a>
        </p>
    </div>
</main>

</body>
</html>
