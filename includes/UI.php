<?php

/**
 * Neo-Glass UI Component Engine
 * A high-fidelity, dark-mode-first interface for the FreshGo Driver App.
 */
class UI {
    
    // Core styling constants to ensure consistency
    const GLASS_BASE = "bg-white dark:bg-zinc-900/60 backdrop-blur-xl border border-gray-200 dark:border-white/10";
    const SHADOW_GLOW = "shadow-[0_0_20px_rgba(0,0,0,0.05)] dark:shadow-[0_0_30px_rgba(255,255,255,0.02)]";

    /**
     * Render a "Bento-style" card container
     */
    public static function card($content, $extraClasses = '') {
        $base = self::GLASS_BASE;
        $glow = self::SHADOW_GLOW;
        
        return "
        <div class=\"$base $glow rounded-[2rem] p-6 relative overflow-hidden transition-all duration-300 hover:border-gray-300 dark:hover:border-white/20 $extraClasses\">
            <div class=\"absolute inset-0 opacity-[0.03] pointer-events-none bg-noise\"></div>
            <div class=\"relative z-10\">$content</div>
        </div>";
    }

    /**
     * Render a primary action button with 'Glow' effect
     */
    public static function button($text, $type = 'primary', $icon = null, $onClick = '') {
        $iconHtml = $icon ? "<span class=\"material-icons-round text-lg mr-2\">$icon</span>" : "";
        $clickAttr = $onClick ? "onclick=\"$onClick\"" : "";
        
        // Dynamic Styles
        $styles = [
            'primary' => 'bg-gray-900 dark:bg-white text-white dark:text-black hover:bg-gray-800 dark:hover:bg-gray-200 shadow-lg shadow-gray-900/20 dark:shadow-white/20',
            'secondary' => 'bg-gray-100 dark:bg-white/10 text-gray-900 dark:text-white border border-transparent dark:border-white/10 hover:bg-gray-200 dark:hover:bg-white/20',
            'danger' => 'bg-red-500/10 text-red-600 dark:text-red-400 border border-red-500/20 hover:bg-red-500/20',
            'ghost' => 'text-gray-500 hover:text-gray-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'
        ];

        $styleClass = $styles[$type] ?? $styles['primary'];

        return "
        <button $clickAttr class=\"relative w-full py-4 px-6 rounded-2xl font-bold text-sm tracking-wide uppercase flex items-center justify-center transition-all active:scale-[0.98] $styleClass\">
            $iconHtml
            <span>$text</span>
        </button>";
    }

    /**
     * Render a Data Metric (Dashboard Style)
     */
    public static function stat($label, $value, $trend = null, $trendType = 'up') {
        // Trend Logic
        $trendHtml = '';
        if ($trend) {
            $trendColor = $trendType === 'up' ? 'text-green-500' : 'text-red-500';
            $trendIcon = $trendType === 'up' ? 'trending_up' : 'trending_down';
            $trendBg = $trendType === 'up' ? 'bg-green-500/10' : 'bg-red-500/10';
            
            $trendHtml = "
            <div class=\"flex items-center gap-1 $trendColor $trendBg px-2 py-1 rounded-lg\">
                <span class=\"material-icons-round text-sm\">$trendIcon</span>
                <span class=\"text-[10px] font-bold\">$trend</span>
            </div>";
        }

        return "
        <div class=\"flex flex-col justify-between h-full\">
            <div class=\"flex justify-between items-start mb-2\">
                <p class=\"text-xs font-bold text-gray-400 uppercase tracking-widest\">$label</p>
                $trendHtml
            </div>
            <p class=\"text-3xl font-bold text-gray-900 dark:text-white tabular-nums tracking-tight\">$value</p>
        </div>";
    }

    /**
     * Render a Sticky Glass Header
     */
    public static function pageHeader($title, $subtitle, $showBack = false) {
        $backBtn = $showBack ? "
        <button onclick=\"history.back()\" class=\"w-10 h-10 rounded-full bg-gray-100 dark:bg-white/10 flex items-center justify-center text-gray-900 dark:text-white border border-transparent dark:border-white/5 active:scale-90 transition-all mr-4\">
            <span class=\"material-icons-round text-xl\">arrow_back</span>
        </button>" : "";

        return "
        <div class=\"fixed top-0 left-0 w-full z-50 transition-all duration-300 border-b border-gray-200/50 dark:border-white/5 bg-white/80 dark:bg-[#0f0f11]/80 backdrop-blur-md\">
            <div class=\"h-20 flex items-center px-6 justify-between\">
                <div class=\"flex items-center\">
                    $backBtn
                    <div>
                        <h1 class=\"text-lg font-bold text-gray-900 dark:text-white leading-none\">$title</h1>
                        <p class=\"text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1\">$subtitle</p>
                    </div>
                </div>
                <button class=\"w-10 h-10 rounded-full border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-colors\">
                    <span class=\"material-icons-round text-xl\">notifications_none</span>
                </button>
            </div>
        </div>";
    }

    /**
     * Render a Complex List Item (Orders/Transactions)
     */
    public static function listItem($title, $subtitle, $rightText = '', $icon = 'circle', $statusColor = 'blue', $delay = 0) {
        $animDelay = $delay ? "style=\"animation-delay: {$delay}s; animation-fill-mode: forwards;\"" : "";
        
        // Status Colors mapped to Tailwind
        $colors = [
            'blue' => ['bg' => 'bg-blue-500/10', 'text' => 'text-blue-500'],
            'green' => ['bg' => 'bg-green-500/10', 'text' => 'text-green-500'],
            'orange' => ['bg' => 'bg-orange-500/10', 'text' => 'text-orange-500'],
            'red' => ['bg' => 'bg-red-500/10', 'text' => 'text-red-500'],
            'gray' => ['bg' => 'bg-gray-500/10', 'text' => 'text-gray-400'],
        ];
        
        $c = $colors[$statusColor] ?? $colors['gray'];

        return "
        <div class=\"group relative p-4 rounded-2xl bg-gray-50 dark:bg-white/5 border border-transparent dark:border-white/5 hover:border-gray-300 dark:hover:border-white/20 transition-all active:scale-[0.99] cursor-pointer animate-fade-in-up\" $animDelay>
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-12 h-12 rounded-xl {$c['bg']} {$c['text']} flex items-center justify-center border border-white/5 shadow-sm\">
                        <span class=\"material-icons-round text-xl\">$icon</span>
                    </div>
                    
                    <div>
                        <h4 class=\"text-sm font-bold text-gray-900 dark:text-white\">$title</h4>
                        <p class=\"text-xs text-gray-500 font-medium mt-0.5\">$subtitle</p>
                    </div>
                </div>

                <div class=\"text-right\">
                    <p class=\"text-sm font-bold text-gray-900 dark:text-white tabular-nums\">$rightText</p>
                    <div class=\"flex justify-end\">
                        <span class=\"material-icons-round text-gray-300 dark:text-gray-600 text-lg transform group-hover:translate-x-1 transition-transform\">chevron_right</span>
                    </div>
                </div>
            </div>
        </div>";
    }
}
?>