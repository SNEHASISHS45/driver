<?php

/**
 * Leaf UI Inspired Component Engine
 * A programmatic API for building the FreshGo Driver minimalist interface.
 */
class UI {
    /**
     * Render a premium glass card container
     */
    public static function card($content, $extraClasses = '') {
        return "
        <div class=\"minimal-card rounded-[2.5rem] p-5 shadow-2xl relative overflow-hidden group transition-all duration-500 hover:border-white/10 $extraClasses\">
            <div class=\"absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity\"></div>
            <div class=\"relative z-10\">$content</div>
        </div>";
    }

    /**
     * Render a primary action button
     */
    public static function button($text, $type = 'primary', $onClick = '', $extraClasses = '') {
        $baseClasses = "w-full py-4 rounded-2xl text-[10px] font-bold uppercase tracking-[0.2em] shadow-xl active:scale-95 transition-all text-center";
        $styles = [
            'primary' => 'primary-gradient text-white shadow-primary/20',
            'secondary' => 'bg-white/5 border border-white/5 text-gray-400 hover:text-white',
            'danger' => 'bg-red-500/10 border border-red-500/20 text-red-500 hover:bg-red-500/20'
        ];

        $class = $baseClasses . ' ' . ($styles[$type] ?? $styles['primary']) . ' ' . $extraClasses;
        $clickAttr = $onClick ? "onclick=\"$onClick\"" : "";

        return "<button class=\"$class\" $clickAttr>$text</button>";
    }

    /**
     * Render a profile/stat item
     */
    public static function stat($label, $value, $icon = null, $color = 'primary') {
        $iconHtml = $icon ? "<div class=\"w-10 h-10 rounded-2xl bg-$color/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform\"><span class=\"material-icons-round text-$color text-xl\">$icon</span></div>" : "";
        return "
        <div class=\"flex flex-col items-center text-center\">
            $iconHtml
            <p class=\"text-2xl font-bold text-white tracking-tight\">$value</p>
            <p class=\"soft-text text-[9px] font-bold uppercase tracking-[0.2em] mt-2\">$label</p>
        </div>";
    }

    /**
     * Render a standard page header
     */
    public static function pageHeader($title, $subtitle, $showBack = false) {
        $backBtn = $showBack ? "
        <button onclick=\"history.back()\" class=\"w-10 h-10 bg-white/5 rounded-2xl flex items-center justify-center text-white border border-white/5 mr-4 active:scale-90 transition-all\">
            <span class=\"material-icons-round text-sm\">chevron_left</span>
        </button>" : "";

        return "
        <div class=\"fixed top-0 left-0 w-full z-[60] bg-background-dark/95 backdrop-blur-3xl border-b border-white/5 shadow-lg\">
            <div class=\"h-20 flex items-center " . (!$showBack ? 'justify-center text-center' : 'px-6') . "\">
                $backBtn
                <div>
                    <h1 class=\"text-xl font-bold text-white mb-0.5 tracking-tight\">$title</h1>
                    <p class=\"soft-text text-[8px] font-bold uppercase tracking-[0.3em]\">$subtitle</p>
                </div>
            </div>
        </div>";
    }

    /**
     * Render a list item (for notifications, orders, etc.)
     */
    public static function listItem($title, $subtitle, $rightText = '', $icon = 'circle', $iconColor = 'primary', $delay = 0) {
        $animDelay = $delay ? "style=\"animation-delay: {$delay}s;\"" : "";
        return "
        <div class=\"minimal-card p-5 rounded-[2rem] border border-white/5 animate-slide-up flex justify-between items-center group active:scale-[0.98] transition-all\" $animDelay>
            <div class=\"flex items-center gap-4\">
                <div class=\"w-12 h-12 rounded-2xl bg-$iconColor/10 flex items-center justify-center text-$iconColor group-hover:rotate-12 transition-transform\">
                    <span class=\"material-icons-round text-xl\">$icon</span>
                </div>
                <div>
                    <h4 class=\"text-sm font-bold text-white/90\">$title</h4>
                    <p class=\"soft-text text-[9px] font-bold uppercase tracking-wider\">$subtitle</p>
                </div>
            </div>
            <p class=\"text-sm font-bold text-white\">$rightText</p>
        </div>";
    }

    /**
     * Helper for generic HTML tags
     */
    public static function el($tag, $content, $props = []) {
        $attributes = "";
        foreach ($props as $key => $value) {
            $attributes .= " $key=\"$value\"";
        }
        return "<$tag$attributes>$content</$tag>";
    }
}
