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
                        "border-dark": "rgba(255, 255, 255, 0.1)"
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
        .glow-border:hover {
            border-color: #0d33f2;
            box-shadow: 0 0 20px rgba(13, 51, 242, 0.2);
        }
        .neon-border-t {
            border-top: 1px solid rgba(0, 242, 255, 0.3);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">

    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-2 pl-4 pr-6 border-r border-white/10">
                <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                    <span class="material-symbols-outlined text-[22px]">shopping_cart</span>
                </div>
                <h2 class="text-white text-base font-black tracking-[0.2em]">LENOVO</h2>
            </div>

            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Home</a>
                <a href="{{ route('product') }}" class="px-4 py-2 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Products</a>
                <a href="{{ route('news') }}" class="px-4 py-3 text-white/70 hover:text-accent-cyan text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">News</a>
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

    <main class="relative flex flex-col w-full overflow-x-hidden pt-36 px-4 lg:px-20 pb-20 max-w-[1440px] mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div class="max-w-xl">
                <h1 class="text-5xl font-black tracking-tight mb-4 uppercase">LENOVO PRODUCT</h1>
                <p class="text-slate-400 text-lg">Step Into the Next Generation of Lenovo Performance</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-surface-dark border border-border-dark px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium hover:bg-border-dark transition-colors">
                    <span class="material-symbols-outlined text-sm">sort</span> Sort: Popularity
                </button>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-10">
            <aside class="w-full lg:w-64 shrink-0 space-y-8">
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-primary mb-4">Series Filters</h3>
                    <div class="space-y-2">
                        <button class="w-full flex items-center gap-3 p-3 rounded-lg bg-primary/10 border border-primary/20 text-white">
                            <span class="material-symbols-outlined text-primary">laptop</span>
                            <span class="text-sm font-medium">Model Series</span>
                        </button>
                        <button class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-surface-dark transition-colors group">
                            <span class="material-symbols-outlined text-slate-500 group-hover:text-white">videogame_asset</span>
                            <span class="text-sm font-medium text-slate-400 group-hover:text-white">Hardware Filters</span>
                        </button>
                        <button class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-surface-dark transition-colors group">
                            <span class="material-symbols-outlined text-slate-500 group-hover:text-white">monitor</span>
                            <span class="text-sm font-medium text-slate-400 group-hover:text-white">Display</span>
                        </button>
                        <button class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-surface-dark transition-colors group">
                            <span class="material-symbols-outlined text-slate-500 group-hover:text-white">memory</span>
                            <span class="text-sm font-medium text-slate-400 group-hover:text-white">Graphics Card</span>
                        </button>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-4">Hardware Specifications</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-xs text-slate-400 px-1">PROCESSOR</label>
                            <div class="flex gap-2 flex-wrap">
                                <button class="px-3 py-1.5 bg-surface-dark border border-border-dark rounded text-xs hover:border-primary transition-colors">i5</button>
                                <button class="px-3 py-1.5 bg-primary/20 border border-primary rounded text-xs">i7</button>
                                <button class="px-3 py-1.5 bg-surface-dark border border-border-dark rounded text-xs hover:border-primary transition-colors">Ryzen 7</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-xs text-slate-400 px-1">GRAPHICS CARD</label>
                            <label class="flex items-center gap-3 px-1 py-1 cursor-pointer">
                                <input checked class="rounded bg-surface-dark border-border-dark text-primary focus:ring-primary" type="checkbox"/>
                                <span class="text-sm">RTX 4050</span>
                            </label>
                            <label class="flex items-center gap-3 px-1 py-1 cursor-pointer">
                                <input class="rounded bg-surface-dark border-border-dark text-primary focus:ring-primary" type="checkbox"/>
                                <span class="text-sm">RTX 5020</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-border-dark">
                    <button class="w-full py-3 bg-primary text-white text-sm font-bold rounded-lg uppercase tracking-wider hover:brightness-110 transition-all shadow-[0_0_20px_rgba(13,51,242,0.3)]">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <div class="flex-1">
                <div class="flex flex-wrap gap-2 mb-8">
                    <div class="flex items-center gap-2 bg-surface-dark border border-border-dark pl-3 pr-1 py-1 rounded-full text-xs font-medium">
                        Processor <button class="material-symbols-outlined text-xs hover:text-primary transition-colors">close</button>
                    </div>
                    <div class="flex items-center gap-2 bg-surface-dark border border-border-dark pl-3 pr-1 py-1 rounded-full text-xs font-medium">
                        Graphics Card <button class="material-symbols-outlined text-xs hover:text-primary transition-colors">close</button>
                    </div>
                    <div class="flex items-center gap-2 bg-surface-dark border border-border-dark pl-3 pr-1 py-1 rounded-full text-xs font-medium">
                        Display <button class="material-symbols-outlined text-xs hover:text-primary transition-colors">close</button>
                    </div>
                    <button class="text-xs text-primary font-bold ml-2 underline underline-offset-4">Clear All</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    
                    <div class="group bg-surface-dark border border-border-dark rounded-xl overflow-hidden transition-all duration-300 glow-border">
                        <div class="aspect-[4/3] bg-gradient-to-br from-slate-900 to-black relative p-6 flex items-center justify-center">
                            <div class="relative h-[190px] w-full overflow-hidden rounded-xl">
                                <img src="https://p3-ofp.static.pub/fes/cms/2023/04/10/72dgym335g0gijg8xekh2a01ooirxo114768.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Lenovo LOQ Gaming Laptop" />
                            </div>
                            <div class="absolute top-4 right-4 bg-primary/20 border border-primary/40 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-primary uppercase tracking-widest">In Stock</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold tracking-tight">Lenovo LOQ 16IRH8</h3>
                                <span class="text-primary font-bold text-lg">$770.74</span>
                            </div>
                            <p class="text-slate-400 text-sm mb-6 line-clamp-2">Powered by NVIDIA® GeForce RTX™ 50 Series GPUs</p>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Processor</span>
                                        <span class="text-xs font-medium text-nowrap">i7-13700H</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">monitor</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Display</span>
                                        <span class="text-xs font-medium">2560 x 1600</span>
                                    </div>
                                </div>
                            </div>
                            <button
                            onclick="window.location='{{ route('productshow') }}'"
                            class="w-full py-3 border border-border-dark group-hover:border-primary group-hover:bg-primary/10 transition-all rounded-lg text-xs font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                            Buy
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                        </div>
                    </div>

                    <div class="group bg-surface-dark border border-border-dark rounded-xl overflow-hidden transition-all duration-300 glow-border">
                        <div class="aspect-[4/3] bg-gradient-to-br from-slate-900 to-black relative p-6 flex items-center justify-center">
                            <div class="relative h-[190px] w-full overflow-hidden rounded-xl">
                                <img src="https://p4-ofp.static.pub//fes/cms/2025/05/15/x67whpgt0qqtxl6g6ikals1voxu3uz734282.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Lenovo LOQ Gaming Laptop" />
                            </div>
                            <div class="absolute top-4 right-4 bg-amber-500/20 border border-amber-500/40 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-amber-500 uppercase tracking-widest">Pre-order: Mar</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold tracking-tight">Lenovo LOQ 17IRX10</h3>
                                <span class="text-primary font-bold text-lg">$2,280</span>
                            </div>
                            <p class="text-slate-400 text-sm mb-6 line-clamp-2">Powered by NVIDIA® GeForce RTX™ 50 Series GPUs</p>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Processor</span>
                                        <span class="text-xs font-medium text-nowrap">i7-14700HX</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">monitor</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Display</span>
                                        <span class="text-xs font-medium">1920 x 1080</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full py-3 border border-border-dark group-hover:border-primary group-hover:bg-primary/10 transition-all rounded-lg text-xs font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                                Buy <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>

                    <div class="group bg-surface-dark border border-border-dark rounded-xl overflow-hidden transition-all duration-300 glow-border">
                        <div class="aspect-[4/3] bg-gradient-to-br from-slate-900 to-black relative p-6 flex items-center justify-center">
                            <div class="relative h-[190px] w-full overflow-hidden rounded-xl">
                                <img src="https://p2-ofp.static.pub//fes/cms/2025/08/04/uwx4zfzp1rwbpg7zsw50zifgl0pyqg123362.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Lenovo LOQ Gaming Laptop" />
                            </div>
                            <div class="absolute top-4 right-4 bg-primary/20 border border-primary/40 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-primary uppercase tracking-widest">In Stock</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold tracking-tight">Lenovo LOQ 15IRX11</h3>
                                <span class="text-primary font-bold text-lg">$1,500</span>
                            </div>
                            <p class="text-slate-400 text-sm mb-6 line-clamp-2">Powered by NVIDIA® GeForce RTX™ 40 Series GPUs</p>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Processor</span>
                                        <span class="text-xs font-medium text-nowrap">i7-13650HX</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">monitor</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Display</span>
                                        <span class="text-xs font-medium">1920 x 1080</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full py-3 border border-border-dark group-hover:border-primary group-hover:bg-primary/10 transition-all rounded-lg text-xs font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                                Buy <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>

                    <div class="group bg-surface-dark border border-border-dark rounded-xl overflow-hidden transition-all duration-300 glow-border">
                        <div class="aspect-[4/3] bg-gradient-to-br from-slate-900 to-black relative p-6 flex items-center justify-center">
                            <div class="relative h-[190px] w-full overflow-hidden rounded-xl">
                                <img src="https://p3-ofp.static.pub/fes/cms/2023/04/25/48xriqwzwza36vepz4twdehu2fgzww721787.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Lenovo LOQ Gaming Laptop" />
                            </div>
                            <div class="absolute top-4 right-4 bg-emerald-500/20 border border-emerald-500/40 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-emerald-500 uppercase tracking-widest">Limited</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold tracking-tight">Lenovo LOQ 16APH8</h3>
                                <span class="text-primary font-bold text-lg">$1,900</span>
                            </div>
                            <p class="text-slate-400 text-sm mb-6 line-clamp-2">Powered by NVIDIA® GeForce RTX™ 50 Series GPUs</p>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Processor</span>
                                        <span class="text-xs font-medium text-nowrap">Ryzen™ 7 7840HS</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">monitor</span>
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase text-slate-500 font-bold">Display</span>
                                        <span class="text-xs font-medium">2560 x 1600</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full py-3 border border-border-dark group-hover:border-primary group-hover:bg-primary/10 transition-all rounded-lg text-xs font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                                Buy <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-16 flex items-center justify-center gap-2">
                    <button class="size-10 flex items-center justify-center rounded-lg border border-border-dark hover:border-primary text-slate-400 hover:text-white transition-all">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                    <button class="size-10 flex items-center justify-center rounded-lg border border-primary bg-primary/20 text-white font-bold">1</button>
                    <button class="size-10 flex items-center justify-center rounded-lg border border-border-dark hover:border-primary text-slate-400 hover:text-white transition-all">2</button>
                    <button class="size-10 flex items-center justify-center rounded-lg border border-border-dark hover:border-primary text-slate-400 hover:text-white transition-all">3</button>
                    <span class="px-2 text-slate-600">...</span>
                    <button class="size-10 flex items-center justify-center rounded-lg border border-border-dark hover:border-primary text-slate-400 hover:text-white transition-all">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-surface-dark py-12 px-6 mt-20 neon-border-t">
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