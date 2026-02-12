/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.php", "./includes/**/*.php", "./auth/**/*.php", "./assets/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: '#f47b25',
                'background-dark': '#0a0a0a',
                'glass-white': 'rgba(255, 255, 255, 0.05)',
            },
            animation: {
                'slide-up': 'slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'fade-in': 'fadeIn 0.5s ease-out forwards',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'scan': 'scan 4s linear infinite',
            },
            keyframes: {
                slideUp: {
                    '0%': { transform: 'translateY(30px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
            },
            backdropBlur: {
                '3xl': '64px',
            },
        },
    },
    plugins: [],
}
