<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Beta Tester Program - Lenovo Future Labs</title>
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
                    fontFamily: { "display": ["Space Grotesk", "sans-serif"] },
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
        .hero-mask { mask-image: linear-gradient(to bottom, black 50%, transparent 100%); }
        .neon-text-blue { text-shadow: 0 0 10px rgba(13, 51, 242, 0.8); }
        .border-glow { border: 1px solid rgba(0, 242, 255, 0.3); box-shadow: inset 0 0 15px rgba(0, 242, 255, 0.1); }
    </style>
</head>

<body class="bg-background-dark font-display text-white selection:bg-primary overflow-x-hidden">

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

    <main class="relative">
        <section class="relative h-[70vh] flex items-end pb-20 px-6">
            <div class="absolute inset-0 z-0">
                <img src="https://i.pinimg.com/736x/dd/9d/ac/dd9dacf7b4541a45d814672304f87d0c.jpg" class="w-full h-full object-cover opacity-40 hero-mask">
                <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent"></div>
            </div>
            
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <a href="{{ route('programs') }}" class="inline-flex items-center gap-2 text-primary hover:text-white transition-colors mb-6 text-xs font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sm">arrow_back</span> Back to Directory
                </a>
                <div class="flex items-center gap-3 px-3 py-1 rounded-full border border-primary/30 bg-primary/10 mb-6 w-fit">
                    <span class="size-1.5 bg-primary rounded-full animate-ping"></span>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-primary">Live Phase: Testing Stage</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter mb-4 neon-text-blue">Beta <span class="text-white/20">Tester</span></h1>
                <p class="text-slate-400 max-w-xl text-lg leading-relaxed">Shape the future of hardware. Access exclusive early-build prototypes and work directly with our engineering teams.</p>
            </div>
        </section>

        <section class="px-6 py-20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16">
                
                <div class="lg:col-span-7 space-y-12">
                    <div>
                        <h3 class="text-2xl font-bold mb-6 flex items-center gap-3 italic text-white">
                            <span class="w-8 h-[2px] bg-primary"></span> Program Overview
                        </h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            We are looking for 500 selected participants to join the Lenovo closed testing ecosystem. As a Beta Tester, you don't just try products; you become an integral part of our iterative development cycle, providing critical data to refine the next generation of performance computing.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 border border-white/5 rounded-xl bg-white/5">
                                <p class="text-[10px] text-primary font-bold uppercase mb-1">Duration</p>
                                <p class="text-sm font-bold">12 Months Cycle</p>
                            </div>
                            <div class="p-4 border border-white/5 rounded-xl bg-white/5">
                                <p class="text-[10px] text-primary font-bold uppercase mb-1">Access Level</p>
                                <p class="text-sm font-bold">Classified R&D</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-6 flex items-center gap-3 italic text-white">
                            <span class="w-8 h-[2px] bg-primary"></span> What You Get
                        </h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-bold">Next-Gen Hardware Grant</p>
                                    <p class="text-sm text-slate-500">Loan of "Legion Neo" series prototype laptop units during the testing phase.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-bold">Direct Engineer Access</p>
                                    <p class="text-sm text-slate-500">Weekly technical discussions via Discord with the core software development team.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-bold">Exclusive Swag & Badge</p>
                                    <p class="text-sm text-slate-500">Custom tester-only apparel and a verified digital contributor badge.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white/5 p-6 rounded-2xl border-glow text-xs text-slate-500 leading-relaxed space-y-4">
                        <h4 class="text-white font-bold uppercase tracking-widest mb-2 text-[10px]">Terms & Conditions</h4>
                        <p>1. Participants must sign a Non-Disclosure Agreement (NDA) before receiving physical units.</p>
                        <p>2. Unauthorized hardware teardowns are strictly prohibited without written consent.</p>
                        <p>3. Feedback must be submitted regularly through the internal Tester Hub portal.</p>
                        <p>4. Lenovo reserves the right to recall prototype units after the testing period ends.</p>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="sticky top-32 bg-card-dark border border-white/10 rounded-3xl p-8 shadow-2xl overflow-hidden relative">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/20 blur-[60px] -mr-16 -mt-16"></div>
                        
                        <div class="mb-8">
                            <h4 class="text-xl font-black uppercase mb-1">Apply Now</h4>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Limited slots available for Batch 2026</p>
                        </div>

                        <form class="space-y-5">
                            <div>
                                <label class="text-[10px] font-bold uppercase text-slate-400 mb-2 block ml-1">Full Legal Name</label>
                                <input type="text" placeholder="Enter your name" class="w-full bg-background-dark border border-white/10 rounded-xl px-5 py-3.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-white">
                            </div>
                            <div>
                                <label class="text-[10px] font-bold uppercase text-slate-400 mb-2 block ml-1">Professional Email</label>
                                <input type="email" placeholder="example@tech.com" class="w-full bg-background-dark border border-white/10 rounded-xl px-5 py-3.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-white">
                            </div>
                            <div>
                                <label class="text-[10px] font-bold uppercase text-slate-400 mb-2 block ml-1">Why do you want to join?</label>
                                <textarea rows="3" placeholder="Tell us about your tech background..." class="w-full bg-background-dark border border-white/10 rounded-xl px-5 py-3.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-white"></textarea>
                            </div>
                            <button class="w-full bg-primary py-4 rounded-xl font-bold uppercase text-xs tracking-[2px] shadow-[0_0_20px_rgba(13,51,242,0.3)] hover:scale-[1.02] transition-transform">
                                Submit Application
                            </button>
                        </form>
                    </div>
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