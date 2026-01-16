<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Home - Futuristic Laptops</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0d33f2",
                        "accent-cyan": "#00f2ff",
                        "accent-magenta": "#ff00e5",
                        "background-light": "#f5f6f8",
                        "background-dark": "#05060f",
                        "surface-dark": "#111422",
                        "border-dark": "rgba(255, 255, 255, 0.1)",
                        "card-dark": "rgba(0, 0, 0, 0.03)"
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .neon-glow-primary {
            box-shadow: 0 0 15px rgba(13, 51, 242, 0.4);
        }
        .nav-item-glow:hover {
            text-shadow: 0 0 8px rgba(0, 242, 255, 0.8);
        }
        .nav-glass {
            background: rgba(5, 6, 15, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 242, 255, 0.2);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5), inset 0 0 10px rgba(0, 242, 255, 0.05);
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">

    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-2 pl-4 pr-6 border-r border-white/10">
                <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                    <span class="material-symbols-outlined text-[22px]">newspaper</span>
                </div>
                <h2 class="text-white text-base font-black tracking-[0.2em]">LENOVO</h2>
            </div>

            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Home</a>
                <a href="{{ route('product') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Products</a>
                <a href="{{ route('news') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">News</a>
                <a href="{{ route('programs') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Programs</a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">About Us</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Contact Us</a>
            </nav>

            <div class="flex items-center gap-2">
                <div class="hidden lg:flex items-center bg-white/5 rounded-full pl-4 pr-2 py-1">
                    <span class="material-symbols-outlined text-white/40 text-sm">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-white text-[12px] placeholder:text-white/30 w-24" placeholder="Search..."/>
                </div>
                <button class="hover:text-primary transition-colors relative flex items-center">
                    <span class="material-symbols-outlined text-xl">shopping_cart</span>
                    <span class="absolute -top-1 -right-1 size-2 bg-primary rounded-full shadow-[0_0_8px_#00f2ff]"></span>
                </button>
                <div class="bg-cover bg-center rounded-full size-10 border border-primary/50 ml-1" style='background-image: url("https://i.pinimg.com/1200x/b1/79/3a/b1793ad7bd2612b192909c8c817c0de7.jpg");'></div>
            </div>
        </header>
    </div>

    <div class="relative flex flex-col w-full overflow-x-hidden pt-24 px-4 lg:px-19 pb-20 max-w-[1440px] mx-auto">
        <main class="flex-1 flex flex-col items-center pt-24">
            
            <section class="w-full max-w-[1280px] px-6 py-8">
                <div class="@container">
                    <div class="relative group overflow-hidden rounded-xl border border-white/5 shadow-2xl">
                        <div class="flex min-h-[520px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 items-start justify-end px-6 pb-12 @[480px]:px-12 transition-transform duration-700 group-hover:scale-105" style='background-image: linear-gradient(to top, rgba(10, 12, 22, 1) 0%, rgba(10, 12, 22, 0.4) 50%, rgba(0, 0, 0, 0.1) 100%), url("https://4kwallpapers.com/images/wallpapers/intel-processor-2880x1800-9784.jpg");'>
                            <div class="flex flex-col gap-4 text-left max-w-3xl">
                                <div class="flex gap-2">
                                    <span class="bg-primary px-3 py-1 rounded text-[10px] font-bold tracking-[0.2em] uppercase shadow-[0_0_10px_rgba(13,51,242,0.5)]">President of Lenovo’s Intelligent Devices Group</span>
                                    <span class="bg-white/10 px-3 py-1 rounded text-[10px] font-bold tracking-[0.2em] uppercase text-white/60">17 NOV 2025</span>
                                </div>
                                <h1 class="text-white text-4xl font-black leading-[1.1] tracking-tighter @[480px]:text-6xl">One AI, many devices</h1>
                                <p class="text-white/70 text-base font-normal leading-relaxed @[480px]:text-lg">
                                    Luca Rossi on AI as a quiet, constant companion across your digital environment: always-on, always-adaptive, always there when you need it most
                                </p>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-sm font-bold tracking-[0.05em] hover:shadow-[0_0_20px_rgba(13,51,242,0.5)] transition-all">
                                    READ FULL REPORT
                                </button>
                                <button class="flex size-12 cursor-pointer items-center justify-center rounded-lg bg-white/10 text-white hover:bg-white/20 transition-all">
                                    <span class="material-symbols-outlined">bookmark</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="w-full max-w-[1280px] px-6">
                <div class="flex gap-3 py-4 overflow-x-auto no-scrollbar border-b border-border-dark">
                    <div class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary/20 border border-primary/40 px-5 cursor-pointer">
                        <p class="text-primary text-xs font-bold tracking-widest">NEWS</p>
                    </div>
                    <div class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-card-dark border border-border-dark px-5 cursor-pointer hover:border-primary/50 transition-colors">
                        <p class="text-white/60 text-xs font-bold tracking-widest">Lenovo Technology Insights</p>
                    </div>
                    <div class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-card-dark border border-border-dark px-5 cursor-pointer hover:border-primary/50 transition-colors">
                        <p class="text-white/60 text-xs font-bold tracking-widest">Inside Lenovo Innovation</p>
                    </div>
                    <div class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-card-dark border border-border-dark px-5 cursor-pointer hover:border-primary/50 transition-colors">
                        <p class="text-white/60 text-xs font-bold tracking-widest">Next-Gen Lenovo</p>
                    </div>
                </div>
            </div>

            <section class="w-full max-w-[1280px] px-2 py-12">
                <div class="flex justify-between items-center mb-8 px-2">
                    <h2 class="text-white text-2xl font-bold tracking-tight">Recent Dispatches</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group flex flex-col bg-card-dark/50 rounded-xl overflow-hidden border border-border-dark hover:border-primary/50 transition-all duration-300">
                        <a href="{{ route('newshow') }}" class="aspect-video w-full overflow-hidden block relative">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style='background-image: url("https://beebom.com/wp-content/uploads/2025/02/NVIDIA-5090-Bricked.jpg");'></div>
                        </a>
                        <div class="p-6 flex flex-col gap-3">
                            <div class="flex justify-between items-center text-[10px] font-bold tracking-widest text-primary">
                                <span>THERMAL SYSTEMS</span>
                                <span class="text-white/40">24.05.2025</span>
                            </div>
                            <a href="{{ route('newshow') }}">
                                <h3 class="text-lg font-bold leading-tight group-hover:text-primary transition-colors">THERMAL / COOLING</h3>
                            </a>
                            <p class="text-white/60 text-sm leading-relaxed line-clamp-2">Lenovo’s intelligent thermal system delivers consistent performance by efficiently managing heat...</p>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="size-6 rounded-full bg-primary/20 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[14px]">bolt</span>
                                    </div>
                                    <span class="text-[11px] text-white/70 font-medium">4 min read</span>
                                </div>
                                <a href="{{ route('newshow') }}">
                                    <span class="material-symbols-outlined text-primary group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group flex flex-col bg-card-dark/50 rounded-xl overflow-hidden border border-border-dark hover:border-primary/50 transition-all duration-300">
                        <div class="aspect-video w-full bg-cover bg-center overflow-hidden transition-transform duration-500 group-hover:scale-110" style='background-image: url("https://res.cloudinary.com/hynqxvid6/image/upload/q_auto,f_auto/v1714528106/media/AI-image1.jpg");'></div>
                        <div class="p-6 flex flex-col gap-3">
                            <div class="flex justify-between items-center text-[10px] font-bold tracking-widest text-primary">
                                <span>OPTICS</span>
                                <span class="text-white/40">22.05.2025</span>
                            </div>
                            <h3 class="text-lg font-bold leading-tight group-hover:text-primary transition-colors">AI / DISPLAY</h3>
                            <p class="text-white/60 text-sm leading-relaxed line-clamp-2">AI-powered optimization dynamically adjusts system performance to deliver smoother gameplay...</p>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group flex flex-col bg-card-dark/50 rounded-xl overflow-hidden border border-border-dark hover:border-primary/50 transition-all duration-300">
                        <div class="aspect-video w-full bg-cover bg-center overflow-hidden transition-transform duration-500 group-hover:scale-110" style='background-image: url("https://equilibrium.co.uk/wp-content/uploads/2021/04/in-a-nustell-AI_hero-e1631544056429.jpg");'></div>
                        <div class="p-6 flex flex-col gap-3">
                            <div class="flex justify-between items-center text-[10px] font-bold tracking-widest text-primary">
                                <span>PROCESSING</span>
                                <span class="text-white/40">21.05.2025</span>
                            </div>
                            <h3 class="text-lg font-bold leading-tight group-hover:text-primary transition-colors">PROCESSOR / SYSTEM</h3>
                            <p class="text-white/60 text-sm leading-relaxed line-clamp-2">Equipped with powerful processors, Lenovo laptops deliver high-speed performance...</p>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16 flex flex-col items-center gap-4">
                    <button class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 border border-primary text-primary text-sm font-bold tracking-[0.2em] hover:bg-primary hover:text-white hover:shadow-[0_0_15px_rgba(13,51,242,0.4)] transition-all uppercase">
                        LOAD MORE
                    </button>
                    <p class="text-white/30 text-[10px] tracking-widest uppercase">Showing 3 of 10 dispatches</p>
                </div>
            </section>
        </main>
    </div>

    <footer class="bg-surface-dark py-12 px-6 mt-20 border-t border-border-dark">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-10">
            <div class="space-y-4">
                <div class="flex items-center gap-2 text-primary">
                    <span class="font-bold text-white tracking-widest text-xl">LENOVO</span>
                </div>
                <p class="text-white/30 text-xs max-w-xs">Smarter technology for all. Innovating to empower people, businesses, and gamers worldwide.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-10">
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Product</span>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">LOQ Series</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Legion Series</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">ThinkPad</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Company</span>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Our Vision</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Newsroom</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Careers</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Support</span>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Help Center</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Repair Bot</a>
                    <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Contact</a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/20 text-[10px] tracking-widest uppercase">© 2026 Lenovo. All rights reserved</p>
        </div>
    </footer>
</body>
</html>