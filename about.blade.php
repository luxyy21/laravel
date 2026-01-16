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
    <main class="grid-pattern pt-24">
        <section class="px-4 md:px-40 py-16 flex flex-col items-center">
            <div class="max-w-[960px] w-full">
                <div class="relative overflow-hidden rounded-xl bg-cover bg-center min-h-[500px] flex items-center justify-center p-8 text-center" 
                     style='background-image: linear-gradient(rgba(16, 19, 34, 0.8) 0%, rgba(16, 19, 34, 0.4) 100%), url("https://i.pinimg.com/1200x/38/71/46/3871464ef274bc4e4e8299cfbe7b5e32.jpg");'>
                    <div class="z-10 flex flex-col gap-6 max-w-2xl">
                        <span class="text-primary font-bold tracking-widest text-sm uppercase drop-shadow-[0_0_5px_rgba(13,51,242,0.8)]">Legacy & Future</span>
                        <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight uppercase">
                            Legacy 1984 / Next Era 2026
                        </h1>
                        <p class="text-white/80 text-lg md:text-xl font-light leading-relaxed">
                            We don’t just build technology — we create intelligent solutions that empower people and shape a smarter future.
                        </p>
                        <div class="pt-4">
                            <button class="bg-primary text-white px-8 py-4 rounded-lg font-bold text-lg hover:scale-105 transition-transform shadow-[0_0_20px_rgba(13,51,242,0.4)]">
                                Explore Smarter Technology
                            </button>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1/4 bg-gradient-to-t from-background-dark to-transparent"></div>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-40 py-12">
            <div class="max-w-[960px] mx-auto">
                <div class="glass-panel p-8 rounded-xl border-l-4 border-l-primary">
                    <h2 class="text-primary font-bold mb-4 flex items-center gap-2 uppercase tracking-widest">
                        <span class="material-symbols-outlined">terminal</span> Core Mission
                    </h2>
                    <h3 class="text-white text-3xl font-bold leading-tight mb-6 uppercase">
                        Redefining the Future of Computing
                    </h3>
                    <p class="text-[#9ca1ba] text-lg leading-relaxed font-mono">
                        > Since 1984, Lenovo has been driven by one purpose: to make technology smarter, more accessible, and more powerful for everyone. We design intelligent devices that help people think faster and create without limits.
                    </p>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-40 py-16">
            <div class="max-w-[960px] mx-auto">
                <h2 class="text-white text-3xl font-bold mb-12 px-4 border-b border-white/10 pb-4">The Roadmap to a Smarter Future</h2>
                <div class="grid grid-cols-[40px_1fr] gap-x-6 px-4">
                    <div class="flex flex-col items-center gap-1">
                        <div class="text-primary bg-primary/10 p-2 rounded-full border border-primary/30">
                            <span class="material-symbols-outlined">layers</span>
                        </div>
                        <div class="w-[2px] bg-gradient-to-b from-primary to-[#3b3f54] h-24 grow"></div>
                    </div>
                    <div class="flex flex-1 flex-col pb-12">
                        <p class="text-primary text-sm font-bold tracking-widest uppercase mb-1">1984 · THE BEGINNING</p>
                        <p class="text-white text-xl font-bold mb-2">Foundation of Innovation</p>
                        <p class="text-[#9ca1ba] text-base leading-relaxed">Lenovo was founded with a simple belief: technology should solve real human challenges.</p>
                    </div>

                    <div class="flex flex-col items-center gap-1">
                        <div class="text-primary bg-primary/10 p-2 rounded-full border border-primary/30">
                            <span class="material-symbols-outlined">blur_on</span>
                        </div>
                        <div class="w-[2px] bg-[#3b3f54] h-24 grow"></div>
                    </div>
                    <div class="flex flex-1 flex-col pb-12">
                        <p class="text-primary text-sm font-bold tracking-widest uppercase mb-1">2005 · GLOBAL EXPANSION</p>
                        <p class="text-white text-xl font-bold mb-2">Becoming a Global Leader</p>
                        <p class="text-[#9ca1ba] text-base leading-relaxed">Lenovo enters the global stage, delivering world-class PCs and enterprise solutions.</p>
                    </div>

                    <div class="flex flex-col items-center gap-1">
                        <div class="text-primary bg-primary p-2 rounded-full shadow-[0_0_20px_rgba(13,51,242,0.6)]">
                            <span class="material-symbols-outlined text-white">neurology</span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col">
                        <p class="text-primary text-sm font-bold tracking-widest uppercase mb-1">2026 · AI-DRIVEN ERA</p>
                        <p class="text-white text-xl font-bold mb-2">Smarter Technology for All</p>
                        <p class="text-[#9ca1ba] text-base leading-relaxed">AI, edge computing, and smart infrastructure power the next generation of neural computing.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-40 py-20">
            <div class="max-w-[960px] mx-auto text-center">
                <h2 class="text-white text-3xl font-bold mb-12">Lenovo Leadership Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="glass-panel p-4 rounded-xl group transition-all hover:bg-white/5">
                        <div class="aspect-square bg-cover bg-center rounded-lg mb-4 grayscale group-hover:grayscale-0 transition-all duration-500 border border-white/5" 
                             style='background-image: url("https://cdn1.i-scmp.com/sites/default/files/styles/768x768/public/2015/06/29/chuanzhi-lui.jpg");'></div>
                        <h4 class="text-white font-bold text-lg">Liu Chuanzi</h4>
                        <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Founder</p>
                        <div class="h-1 w-0 group-hover:w-full bg-primary transition-all duration-500"></div>
                    </div>
                    <div class="glass-panel p-4 rounded-xl group transition-all hover:bg-white/5">
                        <div class="aspect-square bg-cover bg-center rounded-lg mb-4 grayscale group-hover:grayscale-0 transition-all duration-500 border border-white/5" 
                             style='background-image: url("https://tse1.mm.bing.net/th/id/OIP.kpROk1wd0ocnivXy_xLlrAHaJ4");'></div>
                        <h4 class="text-white font-bold text-lg">Yang Yuanqing</h4>
                        <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">CEO</p>
                        <div class="h-1 w-0 group-hover:w-full bg-primary transition-all duration-500"></div>
                    </div>
                    <div class="glass-panel p-4 rounded-xl group transition-all hover:bg-white/5">
                        <div class="aspect-square bg-cover bg-center rounded-lg mb-4 grayscale group-hover:grayscale-0 transition-all duration-500 border border-white/5" 
                             style='background-image: url("https://th.bing.com/th/id/OIP.XL68znmF6OU4NLA3iU7YqQHaJG");'></div>
                        <h4 class="text-white font-bold text-lg">Gianfranco Lanci</h4>
                        <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">President</p>
                        <div class="h-1 w-0 group-hover:w-full bg-primary transition-all duration-500"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 md:px-40 py-24 text-center">
            <div class="max-w-[960px] mx-auto bg-primary/10 border border-primary/30 rounded-2xl p-12 relative overflow-hidden">
                <h2 class="text-3xl md:text-4xl font-black mb-6 uppercase">Ready for a Smarter Future?</h2>
                <p class="text-[#9ca1ba] text-lg mb-8 max-w-xl mx-auto">
                    Discover how Lenovo delivers intelligent technology designed to empower people and businesses worldwide.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-primary hover:brightness-125 px-10 py-4 rounded-lg text-white font-bold">Explore Solutions</button>
                    <button class="bg-transparent border border-white/20 hover:bg-white/5 px-10 py-4 rounded-lg text-white font-bold">Contact Us</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-background-dark py-12 px-6 border-t border-white/10">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="space-y-4">
                    <span class="font-bold text-white tracking-widest text-xl">LENOVO</span>
                    <p class="text-white/30 text-xs max-w-xs leading-relaxed">Smarter technology for all. Innovating to empower the next generation.</p>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-10">
                    <div class="flex flex-col gap-2">
                        <span class="text-white text-sm font-bold mb-2">Product</span>
                        <a href="#" class="text-white/40 text-xs hover:text-white">Legion Series</a>
                        <a href="#" class="text-white/40 text-xs hover:text-white">ThinkPad</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-white text-sm font-bold mb-2">Company</span>
                        <a href="#" class="text-white/40 text-xs hover:text-white">Our Vision</a>
                        <a href="#" class="text-white/40 text-xs hover:text-white">Careers</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-white text-sm font-bold mb-2">Support</span>
                        <a href="#" class="text-white/40 text-xs hover:text-white">Help Center</a>
                        <a href="#" class="text-white/40 text-xs hover:text-white">Contact</a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-white/5">
                <p class="text-white/20 text-[10px] tracking-widest uppercase text-center md:text-left">© 2026 Lenovo. All rights reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>