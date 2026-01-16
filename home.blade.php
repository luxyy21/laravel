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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">

    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
    <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
        
        <div class="flex items-center gap-3 pl-4 pr-6 border-r border-white/10 shrink-0">
            <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                <span class="material-symbols-outlined text-[22px]">home</span>
            </div>
            
            <div class="flex flex-col justify-center">
                <h2 class="text-white text-sm md:text-base font-black tracking-[0.2em] leading-none">LENOVO</h2>
            </div>
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
                    <input class="bg-transparent border-none focus:ring-0 text-white text-[12px] placeholder:text-white/30 w-24" placeholder="Search..." />
                </div>
                <button class="hover:text-primary transition-colors relative flex items-center">
                    <span class="material-symbols-outlined text-xl">shopping_cart</span>
                    <span class="absolute -top-1 -right-1 size-2 bg-primary rounded-full shadow-[0_0_8px_#00f2ff]"></span>
                </button>
                <div class="bg-cover bg-center rounded-full size-10 border border-primary/50 ml-1" style='background-image: url("https://i.pinimg.com/1200x/b1/79/3a/b1793ad7bd2612b192909c8c817c0de7.jpg");'></div>
            </div>
        </header>
    </div>

    <main class="pt-32 md:pt-40">
        
        <section class="px-4 md:px-10 lg:px-40 pb-20 overflow-hidden">
            <div class="relative min-h-[70vh] flex flex-col items-center justify-center text-center">
                <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-96 h-96 bg-primary/20 blur-[120px] rounded-full -z-10"></div>
                <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-96 h-96 bg-accent-magenta/10 blur-[120px] rounded-full -z-10"></div>
                
                <div class="max-w-4xl space-y-6 z-10">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-accent-cyan/30 bg-accent-cyan/10 text-accent-cyan text-[10px] font-bold uppercase tracking-widest mb-4">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-cyan opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent-cyan"></span>
                        </span>
                        New Release Laptop Gaming High Performance
                    </div>
                    
                    <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-black leading-none tracking-tighter">
                        Lenovo <br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent-cyan to-accent-magenta">Smarter Technology</span>
                    </h1>
                    
                    <p class="text-white/60 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed">
                        Experience cutting-edge innovation where performance meets intelligence. Lenovo delivers powerful technology designed to elevate productivity, creativity, and everyday life.
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-4 pt-6">
                        <button class="min-w-[160px] bg-primary text-white font-bold h-14 px-8 rounded-lg neon-glow-primary hover:scale-105 transition-transform flex items-center justify-center gap-2">
                            <span>Pre-order Now</span>
                            <span class="material-symbols-outlined">trending_flat</span>
                        </button>
                        <button class="min-w-[160px] glass text-white font-bold h-14 px-8 rounded-lg hover:bg-white/10 transition-colors">
                            Virtual Tour
                        </button>
                    </div>
                </div>

                <div class="mt-16 relative w-full max-w-5xl mx-auto">
                    <div class="aspect-[21/9] bg-gradient-to-t from-background-dark via-transparent to-transparent absolute bottom-0 left-0 w-full z-10"></div>
                    <img alt="Sleek holographic laptop design rendering" class="w-full h-auto rounded-t-3xl border-x border-t border-white/10 opacity-80" src="https://p1-ofp.static.pub//fes/cms/2025/05/21/r00oh3h34zekef3sl0mw3yqsjp1xtp229275.jpg" />
                    
                    <div class="absolute top-1/4 left-10 glass p-4 rounded-lg hidden lg:block animate-pulse">
                        <div class="text-[10px] text-accent-cyan font-mono uppercase tracking-widest mb-2">Core Status</div>
                        <div class="flex gap-1">
                            <div class="h-12 w-1 bg-accent-cyan/40"></div>
                            <div class="h-12 w-1 bg-accent-cyan"></div>
                            <div class="h-12 w-1 bg-accent-cyan/60"></div>
                            <div class="h-12 w-1 bg-accent-cyan/20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-10 lg:px-40 py-20 bg-black/40">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-6 mb-12">
                <div class="max-w-xl">
                    <h2 class="text-white text-3xl md:text-5xl font-bold tracking-tight mb-4">Lenovo LOQ 15AHP10</h2>
                    <p class="text-white/50 text-base">Built for players who demand power, speed, and reliability. Designed to dominate modern games and intensive workloads with next-generation performance and intelligent thermal control.</p>
                </div>
                <div class="flex gap-2">
                    <button class="p-3 glass rounded-full hover:border-primary transition-colors"><span class="material-symbols-outlined">chevron_left</span></button>
                    <button class="p-3 glass rounded-full hover:border-primary transition-colors"><span class="material-symbols-outlined">chevron_right</span></button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass p-8 rounded-xl group hover:border-primary/50 transition-all duration-500">
                    <div class="size-14 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:neon-glow-primary transition-all">
                        <span class="material-symbols-outlined text-3xl">memory</span>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">AMD Processor</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Unleash smooth multitasking and high FPS gameplay powered by AMD Ryzen™ processors.</p>
                    <div class="h-[1px] w-full bg-white/10 group-hover:bg-primary/30 transition-colors"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-[10px] text-white/30 uppercase tracking-widest">RTX-Ready Gaming</span>
                        <span class="material-symbols-outlined text-white/20 group-hover:text-primary">north_east</span>
                    </div>
                </div>

                <div class="glass p-8 rounded-xl group hover:border-accent-cyan/50 transition-all duration-500 border-accent-cyan/10">
                    <div class="size-14 rounded-lg bg-accent-cyan/10 flex items-center justify-center text-accent-cyan mb-6 group-hover:shadow-[0_0_15px_rgba(0,242,255,0.4)] transition-all">
                        <span class="material-symbols-outlined text-3xl">developer_board</span>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">NVIDIA GeForce RTX™</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Experience hyper-realistic graphics and AI-accelerated performance for the ultimate gaming experience.</p>
                    <div class="h-[1px] w-full bg-white/10 group-hover:bg-accent-cyan/30 transition-colors"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-[10px] text-white/30 uppercase tracking-widest">Sustained Performance</span>
                        <span class="material-symbols-outlined text-white/20 group-hover:text-accent-cyan">north_east</span>
                    </div>
                </div>

                <div class="glass p-8 rounded-xl group hover:border-accent-magenta/50 transition-all duration-500 border-accent-magenta/10">
                    <div class="size-14 rounded-lg bg-accent-magenta/10 flex items-center justify-center text-accent-magenta mb-6 group-hover:shadow-[0_0_15px_rgba(255,0,229,0.4)] transition-all">
                        <span class="material-symbols-outlined text-3xl">monitor</span>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Advanced Thermals</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Stay cool under pressure with an intelligent cooling system that ensures maximum performance.</p>
                    <div class="h-[1px] w-full bg-white/10 group-hover:bg-accent-magenta/30 transition-colors"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-[10px] text-white/30 uppercase tracking-widest">Intelligent Airflow</span>
                        <span class="material-symbols-outlined text-white/20 group-hover:text-accent-magenta">north_east</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-10 lg:px-40 py-20">
            <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-8 border-l-4 border-primary pl-4">Engineered for Excellence</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-6 aspect-video relative group overflow-hidden" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%), url("https://p2-ofp.static.pub//fes/cms/2025/05/21/yyzub2dy95sz7mg7qowzyjwacyxecr345506.jpg");'>
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <p class="text-white text-xl font-bold relative z-10">Nahimic Audio</p>
                    <p class="text-white/60 text-xs relative z-10">AI Powered 3D audio for immersive gaming sound.</p>
                </div>
                <div class="bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-6 aspect-video relative group overflow-hidden" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%), url("https://p3-ofp.static.pub//fes/cms/2025/05/21/knxt5rpwv9oszr6kxx3g5y0h58ove6450686.jpg");'>
                    <div class="absolute inset-0 bg-accent-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <p class="text-white text-xl font-bold relative z-10">RGB Keyboard</p>
                    <p class="text-white/60 text-xs relative z-10">24-Zone RGB with seamless lighting effects.</p>
                </div>
                <div class="bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-6 aspect-video relative group overflow-hidden" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%), url("https://p3-ofp.static.pub//fes/cms/2025/05/21/xekuuq7oyh006rmbwk5pha05xtkio7021032.jpg");'>
                    <div class="absolute inset-0 bg-accent-magenta/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <p class="text-white text-xl font-bold relative z-10">Rapid Charger Pro</p>
                    <p class="text-white/60 text-xs relative z-10">0 to 70% battery in less than 30 minutes.</p>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-10 lg:px-40 py-20">
            <div class="glass rounded-3xl p-8 md:p-16 flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-primary/30 blur-[100px] rounded-full"></div>
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-accent-magenta/20 blur-[100px] rounded-full"></div>
                <h2 class="text-3xl md:text-5xl font-bold mb-6 text-white">Stay Ahead with Lenovo</h2>
                <p class="text-white/50 max-w-lg mb-10">Join our community for exclusive updates on next-generation technology.</p>
                <div class="flex flex-col sm:flex-row w-full max-w-md gap-3">
                    <input class="bg-white/5 border border-white/10 rounded-lg px-6 py-4 flex-grow focus:border-primary focus:ring-0 text-white outline-none" placeholder="Enter your email address" type="email" />
                    <button class="bg-primary hover:bg-primary/80 text-white font-bold px-8 py-4 rounded-lg transition-all shadow-lg">Subscribe</button>
                </div>
            </div>
        </section>
    </main>

      <footer class="bg-surface-dark py-12 px-6 mt-20 border-t border-white/10">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-white tracking-widest text-xl">LENOVO</span>
                    </div>
                    <p class="text-white/30 text-xs max-w-xs leading-relaxed">
                        Smarter technology for all. Innovating to empower people, businesses, and gamers worldwide through reliable, intelligent, and future-ready devices.
                    </p>
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
            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-white/20 text-[10px] tracking-widest uppercase">© 2026 Lenovo. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>