<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo — Zephytor</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        :root {
            --primary: #5c67f2;
            --bg: #ffffff;
            --text-h: #111111;
            --text-b: #666666;
            --border: rgba(0, 0, 0, 0.1);
            --shadow: 0 40px 100px rgba(0, 0, 0, 0.05);
            --font-h: 'Inter Tight', sans-serif;
            --font-b: 'Inter', sans-serif;
        }

        body { background: var(--bg); color: var(--text-b); font-family: var(--font-b); transition: background 0.5s ease; }
        .demo-bar { position: sticky; top: 0; background: var(--bg); backdrop-filter: blur(20px); border-bottom: 1px solid var(--border); padding: 12px 24px; display: flex; justify-content: space-between; align-items: center; z-index: 1000; }
        .demo-brand { font-family: var(--font-h); font-weight: 800; color: var(--text-h); }
        .demo-badge { font-size: 0.7rem; background: var(--primary); color: #fff; padding: 2px 8px; border-radius: 4px; margin-left:10px;}
        .demo-close { color: var(--text-h); text-decoration: none; font-weight: 700; font-size: 0.9rem; }
        .demo-content { min-height: 100vh; position: relative; }
        
        /* Slug specific styles will be here */
    </style>
</head>
<body>
    <div class="demo-bar">
        <div class="demo-brand">Zephytor <span class="demo-badge">PREVIEW</span></div>
        <a href="/#hasil-kerja" class="demo-close">✕ Tutup</a>
    </div>

    <div class="demo-content">
        <?php if($slug == 'umkm'): ?>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,900;1,900&family=Outfit:wght@300;400;600;800&display=swap');

                .burger-demo {
                    --accent: #ff4d00;
                    --dark-bg: #0a0a0a;
                    --card-bg: #121212;
                    --text-main: #ffffff;
                    --text-off: #a0a0a0;
                    font-family: 'Outfit', sans-serif;
                    background: var(--dark-bg);
                    color: var(--text-main);
                    overflow-x: hidden;
                    min-height: 100vh;
                }

                .reveal-up { transform: translateY(30px); opacity: 0; transition: all 1s cubic-bezier(0.16, 1, 0.3, 1); }
                .reveal-up.active { transform: translateY(0); opacity: 1; }

                /* Sections */
                .burger-hero {
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    position: relative;
                    padding: 100px 24px;
                    background: radial-gradient(circle at center, #1a1a1a 0%, #000 100%);
                }
                .hero-tag {
                    color: var(--accent);
                    font-weight: 800;
                    letter-spacing: 4px;
                    text-transform: uppercase;
                    font-size: 0.8rem;
                    margin-bottom: 24px;
                    display: block;
                }
                .hero-h1 {
                    font-family: 'Playfair Display', serif;
                    font-size: clamp(3.5rem, 12vw, 8rem);
                    font-weight: 900;
                    line-height: 0.85;
                    margin-bottom: 32px;
                    letter-spacing: -2px;
                }
                .hero-p {
                    font-size: 1.25rem;
                    color: var(--text-off);
                    max-width: 600px;
                    margin: 0 auto 60px;
                    font-weight: 300;
                    line-height: 1.6;
                }
                .hero-cta-group { display: flex; gap: 16px; justify-content: center; align-items: center; flex-wrap: wrap; }
                
                .btn-premium {
                    padding: 20px 48px;
                    background: var(--accent);
                    color: #fff;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 800;
                    letter-spacing: 2px;
                    border-radius: 4px;
                    transition: all 0.4s ease;
                    border: 1px solid var(--accent);
                }
                .btn-premium:hover { background: transparent; color: var(--accent); }
                
                .btn-ghost {
                    padding: 20px 48px;
                    background: transparent;
                    color: #fff;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 800;
                    letter-spacing: 2px;
                    border-radius: 4px;
                    transition: all 0.4s ease;
                    border: 1px solid rgba(255,255,255,0.2);
                }
                .btn-ghost:hover { background: #fff; color: #000; }

                .hero-image-v2 {
                    margin-top: 80px;
                    width: 100%;
                    max-width: 1000px;
                    position: relative;
                    filter: drop-shadow(0 40px 100px rgba(255, 77, 0, 0.2));
                }

                .features-section { padding: 120px 24px; text-align: center; }
                .feat-label { display: block; font-size: 3rem; margin-bottom: 16px; }
                .feat-card {
                    background: var(--card-bg);
                    padding: 60px 40px;
                    border: 1px solid rgba(255,255,255,0.05);
                    transition: all 0.5s ease;
                }
                .feat-card:hover { border-color: var(--accent); transform: translateY(-10px); }
                .feat-card h3 { font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 16px; }
                .feat-card p { color: var(--text-off); line-height: 1.6; }

                .split-row { display: grid; grid-template-columns: 1fr 1fr; min-height: 600px; align-items: center; }
                .split-content { padding: 80px; }
                .split-image { width: 100%; height: 100%; object-fit: cover; }
                
                .stat-num { font-family: 'Playfair Display', serif; font-size: 4rem; color: var(--accent); font-weight: 900; display: block; }
                .stat-text { text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; color: #666; font-weight: 800; }

                .menu-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; margin-top: 60px; }
                .menu-item { text-align: left; padding: 24px; border-bottom: 1px solid rgba(255,255,255,0.1); }
                .menu-flex { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 12px; }
                .menu-name { font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: 700; }
                .menu-price { color: var(--accent); font-weight: 800; }

                .final-cta { padding: 120px 24px; background: #000; text-align: center; border-top: 1px solid rgba(255,255,255,0.1); }

                @media (max-width: 992px) {
                    .split-row { grid-template-columns: 1fr; }
                    .split-content { padding: 40px 24px; order: 1; }
                    .split-image { order: 2; height: 400px; }
                    .hero-h1 { font-size: 4rem; }
                }
            </style>

            <div class="burger-demo">
                <section class="burger-hero">
                    <span class="hero-tag reveal-up active">Established 2024</span>
                    <h1 class="hero-h1 reveal-up active">The Art of<br>The Burger</h1>
                    <p class="hero-p reveal-up active">Kami tidak hanya menyajikan burger. Kami menciptakan simfoni rasa antara daging wagyu pilihan dan Brioche bun buatan tangan.</p>
                    <div class="hero-cta-group reveal-up active">
                        <a href="#" class="btn-premium">Order Now</a>
                        <a href="#" class="btn-ghost">View Menu</a>
                    </div>
                    <div class="hero-image-v2 reveal-up active">
                        <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?q=80&w=1200" alt="Special Burger" style="width: 100%; border-radius: 12px;">
                    </div>
                </section>

                <section class="features-section">
                    <div class="container">
                        <div class="grid" style="gap: 40px;">
                            <div class="feat-card reveal-up active">
                                <span class="feat-label">🥩</span>
                                <h3>Wagyu A5</h3>
                                <p>Setiap patty terbuat dari potongan Wagyu Grade A5 yang meleleh di mulut pada gigitan pertama.</p>
                            </div>
                            <div class="feat-card reveal-up active">
                                <span class="feat-label">🥖</span>
                                <h3>Brioche Artisanal</h3>
                                <p>Roti kami dipanggang setiap pagi dengan mentega premium untuk tekstur yang sempurna.</p>
                            </div>
                            <div class="feat-card reveal-up active">
                                <span class="feat-label">🧀</span>
                                <h3>Keju Pilihan</h3>
                                <p>Kombinasi 3 jenis keju artisanal yang dilelehkan dengan teknik khusus.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="split-row">
                    <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?q=80&w=1200" alt="Kitchen" class="split-image">
                    <div class="split-content">
                        <h2 style="font-family: 'Playfair Display', serif; font-size: 3.5rem; margin-bottom: 24px;">Rahasia Ada di<br>Setiap Detail</h2>
                        <p style="color: var(--text-off); font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px;">Dari temperatur panggangan hingga keasaman acar buatan sendiri, setiap aspek dipertimbangkan secara mendalam oleh Chef kami.</p>
                        <div style="display: flex; gap: 40px;">
                            <div><span class="stat-num">48h</span><span class="stat-text">Marinated</span></div>
                            <div><span class="stat-num">100%</span><span class="stat-text">Artisanal</span></div>
                        </div>
                    </div>
                </section>

                <section class="final-cta">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 5rem; line-height: 1; margin-bottom: 40px;">Siap Untuk<br>Pengalaman Berbeda?</h2>
                    <a href="#" class="btn-premium">Order Sekarang — Delivery 24/7</a>
                    <p style="margin-top: 32px; color: #444; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px;">Jakarta • Bali • Surabaya</p>
                </section>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const reveals = document.querySelectorAll('.reveal-up');
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('active');
                            }
                        });
                    }, { threshold: 0.1 });
                    reveals.forEach(el => observer.observe(el));
                });
            </script>

        <?php elseif($slug == 'generator'): ?>
            <div style="padding: 100px 24px; text-align: center;">
                <h1 style="font-family: var(--font-h); font-size: 3rem; color: var(--text-h); margin-bottom: 24px;">Generator Landing Page</h1>
                <p style="max-width: 600px; margin: 0 auto; line-height: 1.6;">Layanan otomatis untuk membuat landing page dari deskripsi singkat bisnis Anda.</p>
                <div style="margin-top: 60px; padding: 40px; border: 1px solid var(--border); border-radius: 20px;">
                    <p style="font-style: italic; color: var(--text-muted);">[ Demo Preview Section ]</p>
                </div>
            </div>

        <?php elseif($slug == 'company'): ?>
            <div style="padding: 100px 24px; max-width: 1000px; margin: 0 auto;">
                <h1 style="font-family: var(--font-h); font-size: 3.5rem; color: var(--text-h); margin-bottom: 24px;">InnoSolutions Corp</h1>
                <p style="font-size: 1.25rem; margin-bottom: 40px;">Solusi Infrastruktur & Transformasi Digital Enterprise.</p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                    <div style="background: rgba(0,0,0,0.03); padding: 32px; border-radius: 20px;">
                        <h3>Visi</h3>
                        <p>Menjadi partner teknologi terdepan.</p>
                    </div>
                    <div style="background: rgba(0,0,0,0.03); padding: 32px; border-radius: 20px;">
                        <h3>Misi</h3>
                        <p>Memberikan efisiensi maksimal bagi bisnis.</p>
                    </div>
                </div>
            </div>

        <?php elseif($slug == 'katalog'): ?>
            <div style="padding: 60px 24px; max-width: 1200px; margin: 0 auto;">
                <h2 style="font-family: var(--font-h); font-size: 2.5rem; margin-bottom: 40px;">Katalog Produk Kuliner</h2>
                <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <?php for($i=1; $i<=4; $i++): ?>
                    <div style="border: 1px solid var(--border); border-radius: 16px; overflow: hidden;">
                        <div style="aspect-ratio: 16/10; background: #eee;"></div>
                        <div style="padding: 20px;">
                            <h4 style="margin: 0 0 10px;">Produk Unggulan {{ $i }}</h4>
                            <p style="font-size: 0.9rem; color: #888;">Deskripsi singkat produk yang menggiurkan.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                                <span style="font-weight: 800; color: var(--primary);">Rp 45.000</span>
                                <button style="background: var(--text-h); color: var(--bg); border: none; padding: 8px 16px; border-radius: 8px; font-weight: 700; cursor: pointer;">Pesan</button>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
