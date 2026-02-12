<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <div class="mb-10 text-center">
        <h1 class="text-3xl font-bold text-white mb-2">Settings</h1>
        <p class="soft-text text-[10px] font-bold uppercase tracking-[0.2em]">App & Account Control</p>
    </div>

    <!-- Minimal Settings Sections -->
    <div class="space-y-6">
        <section>
            <p class="soft-text text-[8px] font-bold uppercase tracking-[0.2em] mb-4 ml-4">System Preferences</p>
            <div class="minimal-card rounded-[1.5rem] border border-white/5 overflow-hidden">
                <div class="p-6 flex items-center justify-between border-b border-white/5">
                    <div class="flex items-center gap-4">
                        <span class="material-icons-round text-gray-600">notifications_none</span>
                        <span class="text-sm font-medium text-white/90">Push Notifications</span>
                    </div>
                    <div class="w-10 h-5 bg-primary/20 rounded-full relative p-0.5 cursor-pointer border border-primary/20">
                        <div class="w-4 h-4 bg-primary rounded-full absolute right-0.5"></div>
                    </div>
                </div>
                <div class="p-6 flex items-center justify-between border-b border-white/5">
                    <div class="flex items-center gap-4">
                        <span class="material-icons-round text-gray-600">vibration</span>
                        <span class="text-sm font-medium text-white/90">Haptic Feedback</span>
                    </div>
                    <div class="w-10 h-5 bg-primary/20 rounded-full relative p-0.5 cursor-pointer border border-primary/20">
                        <div class="w-4 h-4 bg-primary rounded-full absolute right-0.5"></div>
                    </div>
                </div>
                <div class="p-6 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="material-icons-round text-gray-600">dark_mode</span>
                        <span class="text-sm font-medium text-white/90">Night Operations</span>
                    </div>
                    <div class="w-10 h-5 bg-white/5 rounded-full relative p-0.5 cursor-pointer border border-white/5">
                        <div class="w-4 h-4 bg-gray-700 rounded-full absolute left-0.5"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <p class="soft-text text-[8px] font-bold uppercase tracking-[0.2em] mb-4 ml-4">Security & Access</p>
            <div class="minimal-card rounded-[1.5rem] border border-white/5 overflow-hidden">
                <div class="p-6 flex items-center justify-between border-b border-white/5 cursor-pointer">
                    <span class="text-sm font-medium text-white/80">Update Password</span>
                    <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
                </div>
                <div class="p-6 flex items-center justify-between cursor-pointer">
                    <span class="text-sm font-medium text-white/80">Manage Devices</span>
                    <span class="material-icons-round text-gray-700 text-sm">chevron_right</span>
                </div>
            </div>
        </section>

        <!-- Session Termination -->
        <div onclick="window.location.href='auth/login.php'" class="bg-red-500/5 border border-red-500/10 p-5 rounded-[1.5rem] flex items-center justify-center mt-12 active:scale-[0.98] transition-all cursor-pointer">
            <span class="text-[9px] font-bold text-red-500 uppercase tracking-[0.2em]">Deactivate Account</span>
        </div>
    </div>
</main>

    <p class="text-center text-[9px] text-gray-700 font-bold uppercase tracking-[0.3em] mt-12 mb-8">RefreshGo Driver v2.4.0</p>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
