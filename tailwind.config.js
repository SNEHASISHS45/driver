/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
    // Ensure we scan all your dynamic PHP files
    content: [
        "./*.php",
        "./includes/**/*.php",
        "./auth/**/*.php",
        "./assets/**/*.js"
    ],
    darkMode: 'class', // Enables dark mode toggling manually
    theme: {
        extend: {
            // 1. Expanded Color Palette for "Dark Glass" UI
            colors: {
                brand: {
                    DEFAULT: '#FF6B00', // The FreshGo Orange
                    glow: '#ff8800',
                    dim: '#cc5500',
                },
                dark: {
                    bg: '#0f0f11',      // Deepest black/gray (OLED friendly)
                    surface: '#18181b', // Slightly lighter for cards
                    border: '#27272a',  // Subtle borders
                },
                glass: {
                    light: 'rgba(255, 255, 255, 0.05)',
                    medium: 'rgba(255, 255, 255, 0.1)',
                    heavy: 'rgba(255, 255, 255, 0.2)',
                    border: 'rgba(255, 255, 255, 0.1)',
                },
                status: {
                    success: '#22c55e',
                    error: '#ef4444',
                    warning: '#eab308',
                }
            },

            // 2. Typography - Added Mono for Stats/License Plates
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
                mono: ['JetBrains Mono', 'monospace'], // Perfect for tabular numbers
            },

            // 3. Custom Backgrounds (The Noise Texture)
            backgroundImage: {
                'noise': "url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E\")",
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'glass-gradient': 'linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.01) 100%)',
            },

            // 4. Neon Glow Shadows
            boxShadow: {
                'glow-brand': '0 0 20px -5px rgba(255, 107, 0, 0.5)',
                'glow-green': '0 0 20px -5px rgba(34, 197, 94, 0.5)',
                'glow-red': '0 0 20px -5px rgba(239, 68, 68, 0.5)',
                'glass': '0 8px 32px 0 rgba(0, 0, 0, 0.37)',
            },

            // 5. Physics-based Animations
            animation: {
                'slide-up': 'slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'fade-in': 'fadeIn 0.4s ease-out forwards',
                'float': 'float 6s ease-in-out infinite',
                'pulse-glow': 'pulseGlow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'dash': 'dash 30s linear infinite', // For map routes
            },
            keyframes: {
                slideUp: {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                pulseGlow: {
                    '0%, 100%': { opacity: '1', boxShadow: '0 0 20px -5px rgba(255, 107, 0, 0.5)' },
                    '50%': { opacity: '0.7', boxShadow: '0 0 10px -5px rgba(255, 107, 0, 0.2)' },
                },
                dash: {
                    'to': { strokeDashoffset: '-1000' }
                }
            },

            // 6. Mobile Spacing (iPhone Notch Support)
            spacing: {
                'safe-top': 'env(safe-area-inset-top)',
                'safe-bottom': 'env(safe-area-inset-bottom)',
                'safe-left': 'env(safe-area-inset-left)',
                'safe-right': 'env(safe-area-inset-right)',
            }
        },
    },
    plugins: [
        // Custom utility for removing scrollbars but keeping functionality
        plugin(function ({ addUtilities }) {
            addUtilities({
                '.scrollbar-hide': {
                    '-ms-overflow-style': 'none',  /* IE and Edge */
                    'scrollbar-width': 'none',  /* Firefox */
                    '&::-webkit-scrollbar': {
                        display: 'none'  /* Chrome, Safari and Opera */
                    }
                },
                '.text-glow': {
                    'text-shadow': '0 0 10px currentColor'
                }
            })
        })
    ],
}