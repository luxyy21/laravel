<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Programs - Futuristic Laptops</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                        "card-dark": "#0a0b1a"
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
        .neon-border:hover {
            border-color: rgba(13, 51, 242, 0.5);
            box-shadow: 0 0 20px rgba(13, 51, 242, 0.2);
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">

    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-3 pl-4 pr-6 border-r border-white/10 shrink-0">
                <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                    <span class="material-symbols-outlined text-[22px]">apps</span>
                </div>
                <h2 class="text-white text-base font-black tracking-[0.2em]">LENOVO</h2>
            </div>

            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Home</a>
                <a href="{{ route('product') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Products</a>
                <a href="{{ route('news') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">News</a>
                <a href="{{ route('programs') }}" class="px-4 py-2 text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Programs</a>
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

    <main class="relative overflow-hidden">
        
        <section class="relative pt-40 pb-12 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="relative overflow-hidden rounded-2xl bg-slate-900 aspect-[21/9] flex items-center justify-center">
                    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-40 mix-blend-overlay" style="background-image: url('https://p1-ofp.static.pub//fes/cms/2025/05/21/r00oh3h34zekef3sl0mw3yqsjp1xtp229275.jpg');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/20 to-transparent z-10"></div>
                    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#0d33f2 1px, transparent 1px); background-size: 24px 24px;"></div>
                    
                    <div class="relative z-20 text-center max-w-2xl px-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-primary/20 text-primary text-[10px] font-bold tracking-widest uppercase mb-4 border border-primary/30">Open Recruitment</span>
                        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 tracking-tight uppercase">Programs</h1>
                        <p class="text-lg md:text-xl text-slate-300 mb-8 font-light">Join the ecosystem. Shape the next generation of neural-link hardware and software through our exclusive community initiatives.</p>
                        <a href="#all-programs" class="bg-primary text-white px-8 py-4 rounded-lg font-bold hover:scale-105 transition-transform inline-flex items-center gap-2 mx-auto shadow-[0_0_20px_rgba(13,51,242,0.4)]">
                            Explore Opportunities
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-6 mb-12" id="all-programs">
            <div class="max-w-7xl mx-auto border-b border-white/10">
                <div class="flex gap-10 overflow-x-auto no-scrollbar">
                    <a class="py-4 border-b-2 border-primary text-primary font-bold text-sm uppercase tracking-wider whitespace-nowrap" href="#">All Programs</a>
                    <a class="py-4 border-b-2 border-transparent text-slate-500 hover:text-white font-bold text-sm uppercase tracking-wider transition-colors whitespace-nowrap" href="#">Developers</a>
                    <a class="py-4 border-b-2 border-transparent text-slate-500 hover:text-white font-bold text-sm uppercase tracking-wider transition-colors whitespace-nowrap" href="#">Students</a>
                    <a class="py-4 border-b-2 border-transparent text-slate-500 hover:text-white font-bold text-sm uppercase tracking-wider transition-colors whitespace-nowrap" href="#">Early Access</a>
                </div>
            </div>
        </section>

        <section class="px-6 pb-20">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="group relative bg-card-dark border border-white/5 rounded-xl overflow-hidden neon-border transition-all flex flex-col">
                        <a href="{{ route('progamshow') }}" class="absolute inset-0 z-30" aria-label="Beta Tester Program Details"></a>
                        
                        <div class="h-56 w-full bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 to-accent-magenta/30 z-10 opacity-60"></div>
                            <div class="w-full h-full bg-center bg-cover scale-105 group-hover:scale-110 transition-transform duration-700" style="background-image: url('https://i.pinimg.com/736x/dd/9d/ac/dd9dacf7b4541a45d814672304f87d0c.jpg');"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-1 relative z-20">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-bold uppercase tracking-[2px] text-primary">Open Enrollment</span>
                                <span class="material-symbols-outlined text-primary/50">token</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Beta Tester Program</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-8">Get early access to cutting-edge hardware and firmware. Shape the future of portable computing through feedback cycles.</p>
                            <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                                <div class="text-white font-bold text-sm group-hover:text-primary transition-colors flex items-center gap-2">
                                    Join Now <span class="material-symbols-outlined text-sm">open_in_new</span>
                                </div>
                                <span class="text-[10px] text-slate-500 uppercase tracking-widest">v4.2.0</span>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-card-dark border border-white/5 rounded-xl overflow-hidden neon-border transition-all flex flex-col">
                        <div class="h-56 w-full bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-tr from-accent-cyan/30 to-primary/30 z-10 opacity-60"></div>
                            <div class="w-full h-full bg-center bg-cover scale-105 group-hover:scale-110 transition-transform duration-700" style="background-image: url('https://i.pinimg.com/736x/e3/70/5b/e3705b4255b7d26f778a0f34cdb296d3.jpg');"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-bold uppercase tracking-[2px] text-accent-cyan">SDK v2.0 Ready</span>
                                <span class="material-symbols-outlined text-accent-cyan/50">terminal</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-accent-cyan transition-colors">Developer SDK</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-8">Build natively for our neural-link architecture. Access documentation and specialized compiler tools.</p>
                            <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                                <button class="text-white font-bold text-sm hover:text-accent-cyan transition-colors flex items-center gap-2">
                                    View Docs <span class="material-symbols-outlined text-sm">code</span>
                                </button>
                                <span class="text-[10px] text-slate-500 uppercase tracking-widest">Active</span>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-card-dark border border-white/5 rounded-xl overflow-hidden neon-border transition-all flex flex-col">
                        <div class="h-56 w-full bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-tr from-blue-400/30 to-emerald-400/30 z-10 opacity-60"></div>
                            <div class="w-full h-full bg-center bg-cover scale-105 group-hover:scale-110 transition-transform duration-700" style="background-image: url('https://i.pinimg.com/1200x/76/4d/22/764d22db28f10521fc2b713e1b46d96e.jpg');"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-bold uppercase tracking-[2px] text-blue-400">Education Grant</span>
                                <span class="material-symbols-outlined text-blue-400/50">school</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Student Innovators</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-8">Empowering engineers with hardware grants, direct mentorship, and internships at our R&D center.</p>
                            <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                                <button class="text-white font-bold text-sm hover:text-blue-400 transition-colors flex items-center gap-2">
                                    Apply Now <span class="material-symbols-outlined text-sm">verified</span>
                                </button>
                                <span class="text-[10px] text-slate-500 uppercase tracking-widest">Grants Open</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="px-6 py-20 bg-primary/10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 uppercase tracking-tight">Have a custom proposal?</h2>
                <p class="text-lg text-slate-400 mb-10 max-w-2xl mx-auto leading-relaxed">We are always looking for visionary partners to push the boundaries of technology. Reach out to us.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-primary text-white font-bold py-4 px-10 rounded-lg hover:shadow-[0_0_25px_rgba(13,51,242,0.5)] transition-all uppercase tracking-widest text-sm text-center">Contact Partnerships</a>
                    <button class="w-full sm:w-auto bg-transparent border border-white/20 text-white font-bold py-4 px-10 rounded-lg hover:bg-white/5 transition-all uppercase tracking-widest text-sm">View FAQS</button>
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
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('product') }}">LOQ Series</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('product') }}">Legion Series</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('product') }}">ThinkPad</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="text-white text-sm font-bold">Company</span>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('about') }}">Our Vision</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('news') }}">Newsroom</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Careers</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="text-white text-sm font-bold">Support</span>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Help Center</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="#">Repair Bot</a>
                        <a class="text-white/40 text-xs hover:text-white transition-colors" href="{{ route('contact') }}">Contact</a>
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