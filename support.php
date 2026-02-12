<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen pb-32 pt-16 px-8">
    <?= UI::pageHeader('Support', 'Helper Center', true) ?>

    <!-- Minimal Support Options -->
    <div class="grid grid-cols-2 gap-4 mb-10">
        <?= UI::card('
            <span class="material-icons-round text-primary mb-3 text-center w-full block">chat_bubble_outline</span>
            <p class="text-[9px] font-bold text-white uppercase tracking-widest text-center">Live Agent</p>
        ', 'p-6 flex flex-col items-center') ?>
        <?= UI::card('
            <span class="material-icons-round text-primary mb-3 text-center w-full block">sos</span>
            <p class="text-[9px] font-bold text-white uppercase tracking-widest text-center">Emergency</p>
        ', 'p-6 flex flex-col items-center') ?>
    </div>

    <!-- FAQ (Minimalist) -->
    <div class="space-y-3">
        <p class="soft-text text-[9px] font-bold uppercase tracking-[0.2em] mb-4 ml-2">Common Questions</p>
        <?= UI::listItem('Withdrawal limits?', 'Learn about processing times', null, 'help_outline', 'gray-700') ?>
        <?= UI::listItem('Damaged package?', 'How to report issues', null, 'help_outline', 'gray-700', 0.1) ?>
        <?= UI::listItem('Navigation issues?', 'Troubleshooting GPS', null, 'help_outline', 'gray-700', 0.2) ?>
    </div>

    <!-- Feedback Button -->
    <div class="mt-10">
        <?= UI::button('Submit System Feedback', 'secondary') ?>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>
</body>
</html>
