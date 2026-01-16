<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Home - Futuristic Laptops</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: { "primary": "#0d33f2", "accent-cyan": "#00f2ff", "accent-magenta": "#ff00e5", "background-light": "#f5f6f8", "background-dark": "#05060f" },
                    fontFamily: { "display": ["Space Grotesk", "sans-serif"] }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .nav-item-glow:hover { text-shadow: 0 0 8px rgba(0, 242, 255, 0.8); }
        .nav-glass { background: rgba(5, 6, 15, 0.7); backdrop-filter: blur(20px); border: 1px solid rgba(0, 242, 255, 0.2); box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white selection:bg-primary selection:text-white overflow-x-hidden">
    <div class="fixed top-6 left-0 w-full z-50 flex justify-center px-4">
        <header class="nav-glass rounded-full flex items-center justify-between px-2 py-2 max-w-6xl w-full">
            <div class="flex items-center gap-3 pl-4 pr-6 border-r border-white/10 shrink-0">
                <div class="size-9 bg-primary/10 rounded-full text-primary flex items-center justify-center transition-transform hover:scale-110">
                    <span class="material-symbols-outlined text-[22px]">newspaper</span>
                </div>
                <div class="flex flex-col justify-center"><h2 class="text-white text-sm md:text-base font-black tracking-[0.2em] leading-none">LENOVO</h2></div>
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
    <main class="flex-1 flex flex-col items-center">
        <section class="w-full relative h-[70vh] min-h-[500px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style='background-image: url("https://beebom.com/wp-content/uploads/2025/02/NVIDIA-5090-Bricked.jpg");'>
                <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/40 to-transparent"></div>
            </div>
            <div class="relative h-full max-w-[1280px] mx-auto px-6 flex flex-col justify-end pb-16">
                <div class="max-w-3xl space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="bg-primary/20 text-primary border border-primary/40 px-3 py-1 rounded text-[10px] font-bold tracking-[0.2em] uppercase">Thermal Systems</span>
                        <span class="text-white/40 text-[10px] font-bold tracking-[0.2em] uppercase">Published: May 24, 2025</span>
                    </div>
                    <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tighter uppercase">THERMAL/COOLING</h1>
                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-3">
                        </div>
                        <p>by <span class="text-accent-cyan font-bold">Lenovo Engineering Team</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full max-w-[1280px] px-6 py-16 grid grid-cols-1 lg:grid-cols-12 gap-12">
            <article id="pdf-content" class="col-span-1 lg:col-span-8 article-content bg-background-dark">
                <p class="text-xl font-light text-white/90 leading-relaxed italic border-l-2 border-accent-cyan pl-6 py-2 mb-10">Lenovo Introduces Next-Generation Thermal Cooling for High-Performance Laptops</p>
                <p class="text-white/70 mb-6">For years, the primary limitation of mobile computing has not been raw processing power, but heat. As CPUs and GPUs continue to scale in performance, thermal management has become the defining challenge in laptop design.</p>
                
                <p class="text-white/70 mb-6">Lenovo’s engineering division has unveiled a next-generation thermal cooling architecture designed to redefine sustained performance in thin and light laptops.</p>
                <div class="my-8 p-8 bg-white/5 border border-primary/20 flex flex-col md:flex-row gap-8 items-center rounded-xl">
                    <div class="flex-1 space-y-4">
                        <h4 class="text-accent-cyan font-bold tracking-widest text-sm uppercase">Performance Metrics</h4>
                        <ul class="space-y-2 text-sm text-white/60">
                            <li class="flex justify-between border-b border-white/5 pb-2"><span>Thermal Conductivity</span> <span class="text-white font-mono">5300 W/mK</span></li>
                            <li class="flex justify-between border-b border-white/5 pb-2"><span>Cooling Module</span> <span class="text-white font-mono">0.45 mm</span></li>
                            <li class="flex justify-between border-b border-white/5 pb-2"><span>Throttle Delay</span> <span class="text-white font-mono">+420%</span></li>
                        </ul>
                    </div>
                    <div class="size-32 flex items-center justify-center rounded-full border-4 border-accent-cyan/20 border-t-accent-cyan shadow-[0_0_20px_rgba(0,242,255,0.2)]">
                        <div class="text-center"><span class="text-2xl font-black block text-accent-cyan">98%</span><span class="text-[8px] uppercase tracking-tighter text-white/40">Efficiency</span></div>
                    </div>
                </div>
                <p class="text-white/70">Lenovo’s latest thermal solution addresses this challenge by combining ultra-thin module design with high-efficiency heat transfer materials, enabling peak performance for longer periods.</p>
                <div class="mt-16 pt-8 border-t border-white/10 flex flex-wrap gap-3">
                    <span class="px-3 py-1 bg-white/5 rounded text-[10px] text-white/50 border border-white/10">#GRAPHENE</span><span class="px-3 py-1 bg-white/5 rounded text-[10px] text-white/50 border border-white/10">#HARDWARE_2025</span>
                </div>
            </article>
            <aside class="col-span-1 lg:col-span-4 space-y-12">
                <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                    <h4 class="text-xs font-bold tracking-widest text-white uppercase mb-4">Protocol Update</h4>
                    <p class="text-xs text-white/50 leading-loose">This dispatch has been verified by the Central Core Authority. All technical specs are pending final lab certification.</p>
                    <button onclick="generatePDF()" class="w-full mt-6 py-3 border border-primary/40 text-primary text-[10px] font-bold tracking-widest uppercase hover:bg-primary hover:text-white transition-all">Download PDF Log</button>
                </div>
                <div class="space-y-6">
                    <h4 class="text-xs font-bold tracking-widest text-white uppercase border-l-2 border-primary pl-4">Trending Logs</h4>
                    <div class="space-y-4">
                        <a class="group block" href="#"><p class="text-[10px] text-primary font-bold mb-1 uppercase">Optics</p><h5 class="text-sm font-medium group-hover:text-accent-cyan transition-colors">Retina-X: Holographic Projection</h5></a>
                        <a class="group block" href="#"><p class="text-[10px] text-primary font-bold mb-1 uppercase">Processing</p><h5 class="text-sm font-medium group-hover:text-accent-cyan transition-colors">Solid-State Logic: Zero Latency</h5></a>
                    </div>
                </div>
            </aside>
        </section>
    </main>
    <footer class="bg-background-dark py-12 px-6 mt-20 border-t border-white/10">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-10">
            <div class="space-y-4">
                <div class="flex items-center gap-2 text-primary"><span class="font-bold text-white tracking-widest text-xl">LENOVO</span></div>
                <p class="text-white/30 text-xs max-w-xs">Smarter technology for all. Innovating to empower people, businesses, and gamers worldwide.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-10">
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Product</span>
                    <a class="text-white/40 text-xs hover:text-white" href="#">LOQ Series</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Legion Series</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">ThinkPad</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Company</span>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Our Vision</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Newsroom</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Careers</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="text-white text-sm font-bold">Support</span>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Help Center</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Repair Bot</a>
                    <a class="text-white/40 text-xs hover:text-white" href="#">Contact</a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/20 text-[10px] tracking-widest uppercase">© 2026 Lenovo. All rights reserved</p>
        </div>
    </footer>
    <script>
        async function generatePDF() {
            const { jsPDF } = window.jspdf;
            const element = document.getElementById('pdf-content');
            const btn = event.target;
            btn.innerText = "PREPARING...";
            try {
                const canvas = await html2canvas(element, { backgroundColor: "#05060f", scale: 2, useCORS: true });
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (canvas.height * pdfWidth) / canvas.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('Lenovo-Thermal-Tech-Log.pdf');
            } catch (err) { console.error(err); }
            finally { btn.innerText = "DOWNLOAD PDF LOG"; }
        }
    </script>
</body>
</html>