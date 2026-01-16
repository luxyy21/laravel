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
        .neon-border-cyan {
            border-bottom: 2px solid #00f2ff;
            box-shadow: 0 4px 10px -2px rgba(0, 242, 255, 0.3);
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
        .glow-input:focus {
            box-shadow: 0 0 15px rgba(13, 51, 242, 0.2);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">
    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-3 pl-4 pr-6 border-r border-white/10 shrink-0">
            <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                <span class="material-symbols-outlined text-[22px]">contact_mail</span>
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

    <main class="max-w-[1280px] mx-auto px-6 pt-32 pb-12">
        <section class="mb-16">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="flex-1 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-widest uppercase">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        System Online
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black leading-[1.1] tracking-tighter">
                        Contact <span class="text-primary italic">Lenovo</span>
                    </h1>
                    <p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl leading-relaxed">
                        Our global network of Lenovo experts is ready to assist you with products, services, and business solutions — wherever you are.
                    </p>
                    <div class="flex gap-4">
                        <button class="bg-primary text-white px-8 py-4 rounded-lg font-bold flex items-center gap-3 group transition-transform hover:scale-105">
                            VIEW GLOBAL OFFICES
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">south</span>
                        </button>
                        <button class="border border-slate-300 dark:border-primary/30 px-8 py-4 rounded-lg font-bold hover:bg-slate-50 dark:hover:bg-primary/10 transition-colors">
                            CONTACT SUPPORT
                        </button>
                    </div>
                </div>

                <div class="flex-1 w-full relative">
                    <div class="aspect-square rounded-3xl overflow-hidden bg-slate-900/50 backdrop-blur-sm relative border border-white/10">
                        <div class="absolute inset-0 bg-[url('https://a1.eestatic.com/cronicaglobal/2015/02/16/business/business_11509798_2538139_1706x960.jpg')] bg-cover bg-center opacity-80"></div>
                        <div class="absolute top-8 left-8 p-4 border-l-2 border-primary bg-black/40 backdrop-blur-md">
                            <div class="text-[10px] text-primary font-bold uppercase tracking-widest mb-1">Location</div>
                            <div class="text-lg font-mono">Tokyo, Japan</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid lg:grid-cols-3 gap-12 mt-20">
            <div class="lg:col-span-2 space-y-8">
                <div class="border-b border-slate-200 dark:border-primary/20 pb-4">
                    <h2 class="text-3xl font-bold flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">terminal</span>
                        Send us a Transmission
                    </h2>
                </div>

                <form class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold uppercase tracking-wider text-slate-500">Full Name</label>
                        <input class="w-full h-14 bg-slate-100 dark:bg-surface-dark border-slate-300 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-0 transition-all text-white px-4" placeholder="Identity code" type="text" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold uppercase tracking-wider text-slate-500">Cyber-Mail</label>
                        <input class="w-full h-14 bg-slate-100 dark:bg-surface-dark border-slate-300 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-0 transition-all text-white px-4" placeholder="user@future.com" type="email" />
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm font-semibold uppercase tracking-wider text-slate-500">Device Selection</label>
                        <select class="w-full h-14 bg-slate-100 dark:bg-surface-dark border-slate-300 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-0 transition-all text-white px-4">
                            <option>NeuralBook Pro 2024</option>
                            <option>Vortex 17 Gaming Cell</option>
                            <option>Ghost Node Ultra-Light</option>
                            <option>Other / Accessory</option>
                        </select>
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm font-semibold uppercase tracking-wider text-slate-500">Your Message</label>
                        <textarea class="w-full bg-slate-100 dark:bg-surface-dark border-slate-300 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-0 transition-all text-white p-4 resize-none" placeholder="Initialize data stream..." rows="6"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button class="w-full md:w-auto bg-primary text-white font-bold py-4 px-12 rounded-lg hover:shadow-[0_0_20px_rgba(13,51,242,0.5)] transition-all uppercase tracking-widest" type="submit">
                            SEND
                        </button>
                    </div>
                </form>
            </div>

            <div class="space-y-12">
                <div class="space-y-6">
                    <h3 class="text-xl font-bold uppercase tracking-wide border-l-4 border-primary pl-4">Direct Access</h3>
                    <div class="space-y-4">
                        <div class="p-5 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary">headset_mic</span>
                            <div>
                                <div class="font-bold">Technical Support</div>
                                <div class="text-sm text-slate-500">Available 24/7 Global Support</div>
                                <div class="text-primary mt-1 font-mono">+1 (800) 426-7378</div>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary">domain</span>
                            <div>
                                <div class="font-bold">Global Headquarters</div>
                                <div class="text-sm text-slate-500">Lenovo Group Limited</div>
                                <div class="text-primary mt-1 font-mono">Beijing, China</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl font-bold uppercase tracking-wide border-l-4 border-primary pl-4">Join the Network</h3>
                    <div class="flex gap-4">
                        <a class="size-12 flex items-center justify-center rounded-lg border border-slate-200/30 hover:border-primary transition-all"
                        href="https://www.instagram.com/lenovoid/" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"alt="Instagram" class="w-6 h-6 object-contain invert"/></a>
                        
                        <a class="size-12 flex items-center justify-center rounded-lg border border-slate-200/30 hover:border-primary transition-all"
                        href="https://www.youtube.com/@lenovoid" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6 object-contain invert"/></a>
                        <a class="size-12 flex items-center justify-center rounded-lg border border-slate-200/30 hover:border-primary transition-all"
                        href="https://www.lenovo.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/545/545705.png"alt="Website"class="w-6 h-6 object-contain invert"/></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-24 pt-16 border-t border-slate-200 dark:border-primary/20">
            <h3 class="text-2xl font-bold mb-8 text-center uppercase tracking-[0.2em]">Support Resources</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a class="group p-8 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 hover:border-primary transition-all" href="#">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl">download</span>
                    <h4 class="font-bold group-hover:text-primary transition-colors">Driver & BIOS Updates</h4>
                    <p class="text-sm text-slate-500 mt-2">Latest drivers, BIOS, and firmware for Lenovo devices</p>
                </a>
                <a class="group p-8 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 hover:border-primary transition-all" href="#">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl">verified_user</span>
                    <h4 class="font-bold group-hover:text-primary transition-colors">Warranty & Service Status</h4>
                    <p class="text-sm text-slate-500 mt-2">Check your device warranty and service eligibility</p>
                </a>
                <a class="group p-8 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 hover:border-primary transition-all" href="#">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl">forum</span>
                    <h4 class="font-bold group-hover:text-primary transition-colors">Lenovo Support Community</h4>
                    <p class="text-sm text-slate-500 mt-2">Connect with Lenovo experts and fellow users</p>
                </a>
                <a class="group p-8 rounded-xl bg-slate-100 dark:bg-surface-dark border border-slate-200 dark:border-primary/10 hover:border-primary transition-all" href="#">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl">menu_book</span>
                    <h4 class="font-bold group-hover:text-primary transition-colors">Product Manuals</h4>
                    <p class="text-sm text-slate-500 mt-2">Access official Lenovo user guides and documentation</p>
                </a>
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