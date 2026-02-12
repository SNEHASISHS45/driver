<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver UI Upgrade</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: '#FF6B00',
                        dark: '#0f0f11',
                        surface: '#18181b'
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Modern Map Pattern */
        .map-bg {
            background-color: #0f0f11;
            background-image: 
                radial-gradient(circle at 50% 50%, rgba(255, 107, 0, 0.05) 0%, transparent 50%),
                linear-gradient(#1f1f22 1px, transparent 1px),
                linear-gradient(90deg, #1f1f22 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
            perspective: 1000px;
        }

        /* The Route Line */
        .route-path {
            stroke-dasharray: 20;
            animation: dash 30s linear infinite;
        }
        @keyframes dash {
            to { stroke-dashoffset: -1000; }
        }

        /* Glassmorphism Refined */
        .glass-panel {
            background: rgba(24, 24, 27, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -10px 40px rgba(0,0,0,0.5);
        }

        /* Swipe Button Logic */
        .swipe-container {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 999px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        .swipe-text {
            background: linear-gradient(90deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,0.3) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 3s linear infinite;
        }

        @keyframes shine {
            to { background-position: 200% center; }
        }

        /* Map 3D Tilt Effect */
        .map-tilt {
            transform: rotateX(20deg) scale(1.1);
            transform-style: preserve-3d;
        }
    </style>
</head>
<body class="bg-dark text-white h-screen overflow-hidden flex flex-col font-sans">

    <div class="absolute inset-0 z-0 map-bg overflow-hidden flex items-center justify-center">
        <div class="w-full h-full relative map-tilt">
            <svg class="absolute top-0 left-0 w-full h-full opacity-60 pointer-events-none" style="z-index: 1;">
                <path d="M 180 100 Q 250 300 190 600" fill="transparent" stroke="#FF6B00" stroke-width="6" stroke-linecap="round" class="filter drop-shadow-[0_0_15px_rgba(255,107,0,0.6)]"/>
                <path d="M 180 100 Q 250 300 190 600" fill="transparent" stroke="white" stroke-width="2" stroke-dasharray="10,15" class="opacity-50 route-path"/>
            </svg>

            <div class="absolute top-[12%] left-[45%] flex flex-col items-center animate-float z-10">
                <div class="bg-surface border border-white/20 px-3 py-1 rounded-lg shadow-xl mb-2 backdrop-blur-md">
                    <span class="text-[10px] font-bold text-brand uppercase tracking-wider">Drop Off</span>
                </div>
                <div class="w-4 h-4 bg-brand rounded-full shadow-[0_0_20px_rgba(255,107,0,0.8)] border-2 border-white"></div>
                <div class="w-1 h-12 bg-gradient-to-b from-brand to-transparent opacity-50"></div>
            </div>

            <div class="absolute top-[50%] left-[48%] z-20 transition-all duration-1000 ease-linear">
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand/30 rounded-full animate-pulse-slow"></div>
                    <div class="w-12 h-12 bg-surface rounded-full border-4 border-white shadow-2xl flex items-center justify-center transform -rotate-12">
                        <span class="material-icons-round text-brand text-xl">navigation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="relative z-30 pt-14 px-6 flex justify-between items-start">
        <button onclick="window.location.href='orders.php'" class="w-10 h-10 bg-surface/80 backdrop-blur rounded-full flex items-center justify-center border border-white/10 shadow-lg active:scale-95 transition-transform">
            <span class="material-icons-round text-white/70">arrow_back</span>
        </button>
        
        <div class="flex flex-col items-end gap-2">
            <div class="bg-brand text-white px-4 py-2 rounded-xl shadow-lg shadow-brand/20 flex items-center gap-2">
                <span class="text-xs font-bold uppercase opacity-80">ETA</span>
                <span class="font-bold">14:20</span>
            </div>
            <div class="bg-surface/80 backdrop-blur px-3 py-1.5 rounded-lg border border-white/10">
                <span class="text-xs font-medium text-white/70">1.2 km left</span>
            </div>
        </div>
    </header>

    <div class="fixed bottom-0 left-0 w-full z-40">
        <div class="glass-panel rounded-t-[2.5rem] p-6 pb-10 transition-all duration-500 transform translate-y-0" id="mainPanel">
            
            <div class="w-full flex justify-center mb-6">
                <div class="w-12 h-1.5 bg-white/20 rounded-full"></div>
            </div>

            <div class="flex items-center gap-4 mb-8">
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white/10 shadow-lg">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150" alt="Customer" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 bg-green-500 w-5 h-5 rounded-full border-2 border-surface flex items-center justify-center">
                        <span class="material-icons-round text-[10px] text-black font-bold">star</span>
                    </div>
                </div>
                
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-white leading-tight">Sarah Jenkins</h2>
                    <p class="text-sm text-white/50 mt-1">Order #8823 • <span class="text-brand">Paid</span></p>
                </div>

                <div class="flex gap-2">
                    <button class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-white/10 active:scale-95 transition-all">
                        <span class="material-icons-round text-lg">chat_bubble</span>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center text-brand hover:bg-brand/20 active:scale-95 transition-all">
                        <span class="material-icons-round text-lg">phone</span>
                    </button>
                </div>
            </div>

            <div class="space-y-4 mb-8">
                <div class="flex gap-4">
                    <div class="flex flex-col items-center pt-1">
                        <div class="w-2 h-2 rounded-full bg-white/20"></div>
                        <div class="w-0.5 h-8 bg-white/10 my-1"></div>
                        <span class="material-icons-round text-brand text-lg">location_on</span>
                    </div>
                    <div class="flex-1 space-y-4">
                        <div class="opacity-50 text-sm">
                            <p>Pickup: Joe's Pizza</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-brand uppercase tracking-widest mb-1">Destination</p>
                            <p class="text-lg font-bold text-white">Salesforce Tower</p>
                            <p class="text-sm text-white/60">South Entrance, Lobby 2</p>
                        </div>
                        
                        <div class="inline-flex items-center gap-2 bg-yellow-500/10 border border-yellow-500/20 rounded-lg px-3 py-2 text-yellow-500 text-xs">
                            <span class="material-icons-round text-sm">sticky_note_2</span>
                            <span>"Call upon arrival, door code 1234"</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full h-16 swipe-container flex items-center p-1 cursor-pointer select-none" id="swipeArea">
                <div class="absolute inset-0 flex items-center justify-center z-0">
                    <span class="text-sm font-bold uppercase tracking-[0.2em] swipe-text">Slide to Arrive</span>
                    <span class="material-icons-round text-white/20 ml-2 animate-pulse">chevron_right</span>
                    <span class="material-icons-round text-white/20 animate-pulse delay-75">chevron_right</span>
                </div>
                
                <div id="swipeButton" class="relative z-10 h-14 w-14 bg-brand rounded-full shadow-[0_0_20px_rgba(255,107,0,0.4)] flex items-center justify-center text-white transition-all duration-75 touch-none">
                    <span class="material-icons-round text-2xl" id="swipeIcon">arrow_forward</span>
                </div>
                
                <div id="successOverlay" class="absolute inset-0 bg-green-500 rounded-full opacity-0 flex items-center justify-center transition-opacity duration-300 pointer-events-none z-20">
                    <div class="flex items-center gap-2 text-white font-bold uppercase tracking-widest">
                        <span>Arrived</span>
                        <span class="material-icons-round">check</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const swipeArea = document.getElementById('swipeArea');
        const swipeBtn = document.getElementById('swipeButton');
        const swipeIcon = document.getElementById('swipeIcon');
        const successOverlay = document.getElementById('successOverlay');
        
        let isDragging = false;
        let startX = 0;
        let currentX = 0;
        let completed = false;

        // Mouse/Touch Events
        swipeBtn.addEventListener('mousedown', startDrag);
        swipeBtn.addEventListener('touchstart', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('touchmove', drag);
        document.addEventListener('mouseup', endDrag);
        document.addEventListener('touchend', endDrag);

        function startDrag(e) {
            if(completed) return;
            isDragging = true;
            startX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
            swipeBtn.style.transition = 'none';
        }

        function drag(e) {
            if (!isDragging || completed) return;
            e.preventDefault(); // Prevent scrolling on mobile
            
            const clientX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
            const deltaX = clientX - startX;
            const maxDrag = swipeArea.offsetWidth - swipeBtn.offsetWidth - 8; // 8px padding buffer

            // Constrain drag
            currentX = Math.max(0, Math.min(deltaX, maxDrag));
            swipeBtn.style.transform = `translateX(${currentX}px)`;
            
            // Visual feedback
            const progress = currentX / maxDrag;
            swipeArea.style.background = `rgba(255, 107, 0, ${progress * 0.2})`;
        }

        function endDrag() {
            if (!isDragging || completed) return;
            isDragging = false;
            
            const maxDrag = swipeArea.offsetWidth - swipeBtn.offsetWidth - 8;
            const threshold = maxDrag * 0.9; // 90% threshold

            if (currentX >= threshold) {
                // Success
                completed = true;
                swipeBtn.style.transform = `translateX(${maxDrag}px)`;
                finishInteraction();
            } else {
                // Reset
                swipeBtn.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                swipeBtn.style.transform = 'translateX(0px)';
                swipeArea.style.background = 'rgba(255, 255, 255, 0.05)';
            }
        }

        function finishInteraction() {
            // Morph to success state
            successOverlay.style.opacity = '1';
            
            // Haptic feedback (if supported on mobile)
            if (navigator.vibrate) navigator.vibrate(50);

            setTimeout(() => {
                alert("Driver Status: ARRIVED. Loading scan interface...");
            }, 500);
        }
    </script>
</body>
</html>