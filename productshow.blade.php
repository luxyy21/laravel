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
                        "primary": "#00f2ff",
                        "background-dark": "#05070a",
                        "surface-dark": "#0d1117",
                        "border-dark": "#1f2937",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer components {
            .nav-glass {
                background: rgba(5, 6, 15, 0.7);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(0, 242, 255, 0.2);
            }
            .spec-card {
                @apply bg-surface-dark border border-border-dark p-4 rounded-xl hover:border-primary/50 transition-all;
            }
            .hero-glow {
                background: radial-gradient(circle at center, rgba(0, 242, 255, 0.15) 0%, transparent 70%);
            }
            .nav-item-glow:hover {
                text-shadow: 0 0 8px rgba(0, 242, 255, 0.8);
            }
        }
    </style>
</head>

<body class="bg-background-dark font-display text-white selection:bg-primary selection:text-white overflow-x-hidden">
    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-3 pl-4 pr-6 border-r border-white/10 shrink-0">
                <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                    <span class="material-symbols-outlined text-[22px]">shopping_cart</span>
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="text-white text-sm md:text-base font-black tracking-[0.2em] leading-none">LENOVO</h2>
                </div>
            </div>
            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Home</a>
                <a href="{{ route('product') }}" class="px-4 py-2 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Products</a>
                <a href="{{ route('news') }}" class="px-4 py-3 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">News</a>
                <a href="{{ route('programs') }}" class="px-4 py-2 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider text-primary">Programs</a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">About</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 text-white/70 hover:text-primary text-[13px] font-bold transition-all nav-item-glow uppercase tracking-wider">Contact</a>
            </nav>
            <div class="flex items-center gap-4 pr-4">
                <div class="hidden lg:flex items-center bg-white/5 rounded-full pl-4 pr-2 py-1.5 border border-white/10">
                    <span class="material-symbols-outlined text-white/40 text-sm">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-white text-[12px] placeholder:text-white/30 w-24" placeholder="Search..." />
                </div>
                <button class="hover:text-primary transition-colors relative flex items-center">
                    <span class="material-symbols-outlined text-xl">shopping_cart</span>
                    <span class="absolute -top-1 -right-1 size-2 bg-primary rounded-full shadow-[0_0_8px_#00f2ff]"></span>
                </button>
                <div class="bg-cover bg-center rounded-full size-9 border border-primary/50" style='background-image: url("https://i.pinimg.com/1200x/b1/79/3a/b1793ad7bd2612b192909c8c817c0de7.jpg");'></div>
            </div>
        </header>
    </div>

    <main class="pt-40 pb-20 px-4 lg:px-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div class="absolute -inset-20 hero-glow opacity-50 group-hover:opacity-100 transition-opacity duration-700"></div>
                <img alt="Nebula X-1 3D Render" class="w-full h-auto object-contain drop-shadow-[0_20px_50px_rgba(0,242,255,0.15)] transform -translate-x-16" src="https://cdn.mcc-jo.com/media/m1OeUGFYQmViL0oeMGQCToswRlk5o2vnnxtp4swv.webp" />
            </div>
            <div class="flex flex-col">
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="h-[1px] w-12 bg-primary"></span>
                        <span class="text-primary text-xs font-bold tracking-[0.3em] uppercase">New Arrival 2026</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-black tracking-tighter uppercase italic mb-6">Lenovo LOQ <span class="text-primary">16IRH8</span></h1>
                    <p class="text-slate-400 text-lg leading-relaxed max-w-xl">
                        Experience the peak of modern engineering. Built for uncompromising performance, combining raw power with intelligent efficiency.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-10">
                    <div class="spec-card">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="material-symbols-outlined text-primary text-sm">memory</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Processor</span>
                        </div>
                        <p class="text-sm font-bold">Intel® Core™ i7-13700H</p>
                    </div>
                    <div class="spec-card">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="material-symbols-outlined text-primary text-sm">monitor</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Display</span>
                        </div>
                        <p class="text-sm font-bold">2.5K High-Res Panel</p>
                    </div>
                    <div class="spec-card">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="material-symbols-outlined text-primary text-sm">database</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Memory</span>
                        </div>
                        <p class="text-sm font-bold">32GB DDR5 RAM</p>
                    </div>
                    <div class="spec-card">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="material-symbols-outlined text-primary text-sm">bolt</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Battery</span>
                        </div>
                        <p class="text-sm font-bold">80Wh Rapid Charge</p>
                    </div>
                </div>
                <div class="bg-surface-dark border border-border-dark p-8 rounded-2xl shadow-2xl">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <span class="text-xs text-slate-500 uppercase font-bold tracking-widest">Market Value</span>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span class="text-4xl font-black italic text-white">$770.74</span>
                                <span class="text-slate-500 line-through text-sm">$1,200</span>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-[10px] font-bold uppercase">In Stock</span>
                    </div>
                    <button onclick="openModal()" class="w-full py-5 bg-primary text-background-dark font-black uppercase tracking-[0.2em] rounded-xl hover:shadow-[0_0_40px_rgba(0,242,255,0.4)] hover:-translate-y-1 transition-all duration-300">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <section class="mt-40 pt-20 border-t border-white/5">
            <h2 class="text-3xl font-black uppercase italic mb-16 text-center tracking-widest">Engineered for the Unthinkable</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div class="size-20 mx-auto mb-6 bg-surface-dark border border-border-dark rounded-3xl flex items-center justify-center group-hover:border-primary/50 group-hover:shadow-[0_0_30px_rgba(0,242,255,0.1)] transition-all duration-500">
                        <span class="material-symbols-outlined text-4xl text-primary">visibility</span>
                    </div>
                    <h3 class="text-lg font-bold uppercase mb-3">Holographic Projection</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Transform your workspace beyond the screen with integrated photon emitters.</p>
                </div>
                <div class="text-center group">
                    <div class="size-20 mx-auto mb-6 bg-surface-dark border border-border-dark rounded-3xl flex items-center justify-center group-hover:border-primary/50 group-hover:shadow-[0_0_30px_rgba(0,242,255,0.1)] transition-all duration-500">
                        <span class="material-symbols-outlined text-4xl text-primary">fingerprint</span>
                    </div>
                    <h3 class="text-lg font-bold uppercase mb-3">DNA-Linked Security</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Biometric access encrypted to your unique genetic signature—unhackable.</p>
                </div>
                <div class="text-center group">
                    <div class="size-20 mx-auto mb-6 bg-surface-dark border border-border-dark rounded-3xl flex items-center justify-center group-hover:border-primary/50 group-hover:shadow-[0_0_30px_rgba(0,242,255,0.1)] transition-all duration-500">
                        <span class="material-symbols-outlined text-4xl text-primary">cyclone</span>
                    </div>
                    <h3 class="text-lg font-bold uppercase mb-3">Void Cooling</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Advanced thermal control uses vacuum chambers to dissipate heat in silence.</p>
                </div>
            </div>
        </section>
    </main>

    <div id="buyModal" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300">
        <div class="bg-surface-dark border border-primary/30 w-full max-w-md p-8 rounded-2xl shadow-[0_0_50px_rgba(0,242,255,0.15)] transform scale-95 transition-all duration-300">
            <div class="text-center">
                <div class="size-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                    <span class="material-symbols-outlined text-4xl">shopping_cart_checkout</span>
                </div>
                <h3 class="text-2xl font-black uppercase italic mb-2 tracking-widest">Add to Cart?</h3>
                <p class="text-slate-400 text-sm mb-6">Proceed to purchase the <span class="text-white font-bold">Lenovo LOQ 16IRH8</span>. You will be redirected to the secure payment gateway.</p>
                <div class="flex flex-col gap-3">
                    <button onclick="confirmOrder()" class="w-full py-4 bg-primary text-background-dark font-black uppercase tracking-widest rounded-xl hover:shadow-[0_0_20px_rgba(0,242,255,0.4)] transition-all">
                        Yes, Checkout
                    </button>
                    <button onclick="closeModal()" class="w-full py-4 bg-transparent text-slate-500 font-bold uppercase tracking-widest rounded-xl hover:text-white transition-all">
                        Maybe Later
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-surface-dark py-16 px-6 mt-20 border-t border-white/5">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-1 space-y-4">
                <h2 class="font-black text-white tracking-widest text-2xl italic">LENOVO</h2>
                <p class="text-white/30 text-xs leading-relaxed">Smarter technology for all.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 col-span-1 md:col-span-3 gap-8 text-white/40 text-xs">
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold uppercase tracking-widest mb-2">Product</span>
                    <a href="#" class="hover:text-primary transition-colors">LOQ Series</a>
                    <a href="#" class="hover:text-primary transition-colors">ThinkPad</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold uppercase tracking-widest mb-2">Company</span>
                    <a href="#" class="hover:text-primary transition-colors">Our Vision</a>
                    <a href="#" class="hover:text-primary transition-colors">Careers</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold uppercase tracking-widest mb-2">Support</span>
                    <a href="#" class="hover:text-primary transition-colors">Help Center</a>
                    <a href="#" class="hover:text-primary transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const modal = document.getElementById('buyModal');
        const modalContent = modal.querySelector('div');

        function openModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            document.body.style.overflow = 'auto';
        }

        function confirmOrder() {
            alert('Redirecting to Payment Gateway...');
            closeModal();
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    </script>
</body>

</html>