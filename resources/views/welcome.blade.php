<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephytor — Jasa Pembuatan Website Premium</title>
    <meta name="description"
        content="Bangun kehadiran digital profesional dalam 48 jam. Jasa pembuatan website Company Profile, Portofolio, dan Landing Page dengan desain eksklusif.">
    <link rel="stylesheet" href="/css/landing.css?v=2.1">
</head>

<body>

    <div class="floating-promo" data-i18n="floatingBubble">
        0% DOWN PAYMENT
    </div>
    <div class="navbar-top">
        <div class="container">
            <a href="#" class="nav-logo">
                <svg class="logo-svg" viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Overlapping Parallel Zs -->
                    <path d="M5 25H30L15 45H40" stroke="currentColor" stroke-width="6" stroke-linecap="butt"
                        stroke-linejoin="miter" />
                    <path d="M20 5H45L30 25H55" stroke="currentColor" stroke-width="6" stroke-linecap="butt"
                        stroke-linejoin="miter" />
                    <text x="65" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-size="28" font-weight="800"
                        fill="currentColor">Ephytor</text>
                </svg>
            </a>
            <div style="display: flex; align-items: center; gap: 16px;">
                <div class="lang-switcher">
                    <button class="lang-btn active" onclick="setLanguage('id')">ID</button>
                    <button class="lang-btn" onclick="setLanguage('en')">EN</button>
                </div>
                <button id="themeToggle" class="btn btn-outline btn-sm" style="padding: 10px; min-width: 44px;">
                    <svg id="moonIcon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                    </svg>
                    <svg id="sunIcon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"
                        style="display:none;">
                        <circle cx="12" cy="12" r="5" />
                        <path
                            d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42m12.72-12.72l1.42-1.42" />
                    </svg>
                </button>
                <a href="https://wa.me/6285892778882?text=Halo%20Zephytor%2C%20saya%20ingin%20konsultasi%20gratis"
                    class="btn btn-outline btn-sm" data-i18n="btnKonsultasi">Konsultasi Gratis</a>
            </div>
        </div>
    </div>

    <!-- FLOATING NAV -->
    <nav class="floating-nav" id="floatingNav">
        <a href="#hero" data-i18n="navHome">Home</a>
        <a href="#layanan" data-i18n="navLayanan">Layanan</a>
        <a href="#harga" data-i18n="navHarga">Harga</a>
        <a href="#portfolio" data-i18n="navProject">Project</a>
        <a href="https://wa.me/6285892778882" class="btn btn-primary btn-sm btn-mulai" data-i18n="btnMulai">Mulai
            Sekarang</a>
    </nav>

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="reveal">
                <div class="section-badge" data-i18n="heroBadge">✨ Tersedia Slot Maret 2026</div>
                <h1 data-i18n="heroTitle">Digitalisasi Bisnis Anda <span>Sesuai Hasil Akhir.</span></h1>
                <p data-i18n="heroDesc">Kami membangun infrastruktur digital profesional untuk merampingkan operasional
                    Anda. Tanpa modal
                    awal yang besar, dapatkan website premium yang meyakinkan klien.</p>
                <div class="hero-buttons">
                    <a href="https://wa.me/6285892778882" class="btn btn-primary btn-lg" data-i18n="heroBtn">Pesan
                        Website Sekarang</a>
                </div>
            </div>
            <div class="hero-visual reveal">
                <div class="hero-glass">
                    <div class="controls">
                        <div class="dot dot-r"></div>
                        <div class="dot dot-y"></div>
                        <div class="dot dot-g"></div>
                    </div>
                    <div class="code-line">
                        <span class="text-cyan">class</span>&nbsp;<span class="text-purple">Zephytor</span>&nbsp;{
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;<span class="text-cyan">public</span>&nbsp;function&nbsp;<span
                            class="text-purple">buildSuccess</span>()&nbsp;{
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;[
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-cyan">'design'</span>&nbsp;=>&nbsp;<span
                            class="text-purple">'Premium'</span>,
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-cyan">'speed'</span>&nbsp;=>&nbsp;<span
                            class="text-purple">'Ultra Fast'</span>,
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                            class="text-cyan">'conversion'</span>&nbsp;=>&nbsp;<span class="text-purple">'High'</span>
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;];
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;}
                    </div>
                    <div class="code-line">
                        }
                    </div>
                </div>
                <div class="card-stat">
                    <h2>0%</h2>
                    <p data-i18n="heroStat">Down Payment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="layananTitle">Solusi Bisnis Digital</h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="layananDesc">Kami bukan sekadar membuat website,
                    kami membangun identitas brand Anda di internet.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg></div>
                    <h3 data-i18n="srv1Title">Company Profile</h3>
                    <p data-i18n="srv1Desc">Website profesional untuk membangun kepercayaan klien dan investor dalam
                        waktu singkat.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg></div>
                    <h3 data-i18n="srv2Title">Landing Page</h3>
                    <p data-i18n="srv2Desc">Satu halaman dengan fokus konversi tinggi. Sangat cocok untuk iklan Google &
                        Meta Ads.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="15" x="2" y="3" rx="2" />
                            <path d="M7 21h10" />
                            <path d="M12 18v3" />
                        </svg></div>
                    <h3 data-i18n="srv3Title">Custom Web App</h3>
                    <p data-i18n="srv3Desc">Solusi fitur khusus dengan sistem manajemen mandiri (CMS) sesuai kebutuhan
                        spesifik bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HARGA -->
    <section id="harga" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="hargaTitle">Pilihan Paket Investasi</h2>
                <p data-i18n="hargaDesc">Sesuai dengan skala dan target gol bisnis Anda.</p>
            </div>
            <div class="pricing-grid">
                <!-- Paket 1 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg1Name">Landing Page</div>
                    <div class="price-val" data-i18n="pkg1Price">Rp 500rb</div>
                    <div class="price-desc" data-i18n="pkg1Desc">1 Halaman • Cocok untuk promosi singkat</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Feat1">1 Halaman Responsif (Mobile Friendly)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Feat2">Copywriting Persuasif Basic</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Feat3">Akses Dashboard Pengelolaan</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Feat4">Integrasi Link Sosmed & Galeri</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Feat5">Gratis Hosting & SSL 1 Tahun</span></li>
                        <li class="disabled"><svg width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg> <span data-i18n="pkg1Feat6">Custom Email Domain (.com)</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Landing+Page+500K" class="btn btn-outline"
                        data-i18n="btnPesan">Pesan Sekarang</a>
                </div>
                <!-- Paket 2 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg2Name">Paket Murah</div>
                    <div class="price-val"><span data-i18n="pkg2Price">Rp 750rb</span> <small data-i18n="pkg2Range">-
                            1Jt</small></div>
                    <div class="price-desc" data-i18n="pkg2Desc">3 Halaman • Untuk bisnis yang baru mulai</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg2Feat1">3 Halaman Struktur Lengkap</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg2Feat2">Copywriting Profesional</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg2Feat3">1 Email Bisnis (admin@domain)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg2Feat4">Optimasi SEO On-Page Basic</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg2Feat5">Integrasi Google Maps Bisnis</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Murah+Zephytor" class="btn btn-outline"
                        data-i18n="btnPesan">Pesan Sekarang</a>
                </div>
                <!-- Paket 3 -->
                <div class="price-card popular reveal">
                    <div class="popular-badge" data-i18n="pkgBest">TERLARIS</div>
                    <div class="plan-name" data-i18n="pkg3Name">Paket Untung</div>
                    <div class="price-val" data-i18n="pkg3Price">Rp 1.5jt</div>
                    <div class="price-desc" data-i18n="pkg3Desc">5 Halaman • Best value for scale-up</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Feat1">5 Halaman Premium (Home, About, etc)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Feat2">Premium Sales Driven Copywriting</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Feat3">3 Email Bisnis Terintegrasi</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Feat4">Full SEO Optimized (Ready to Rank)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Feat5">Video Tutorial Panduan Admin</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Untung+1.5Jt" class="btn btn-primary"
                        data-i18n="btnPesan">Pesan Sekarang</a>
                </div>
                <!-- Paket 4 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg4Name">Paket Pro Custom</div>
                    <div class="price-val" data-i18n="pkg4Price">Rp 3jt+</div>
                    <div class="price-desc" data-i18n="pkg4Desc">Unlimited Halaman • Full custom solution</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat1">Desain Eksklusif UI/UX Mandiri</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat2">Fitur Custom (CMS / Filter / Database)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat3">Integrasi API / Payment Gateway</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat4">Jaminan PageSpeed 90+ Score</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Pro+Custom" class="btn btn-outline"
                        data-i18n="btnHubungi">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title" data-i18n="portTitle">Karya yang Telah Kami Bangun</h2>
            </div>
            <div class="portfolio-grid">
                <!-- Daiji Design -->
                <a href="https://daijidesign.com" target="_blank" class="portfolio-card reveal">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2600&auto=format&fit=crop"
                            alt="Daiji Design">
                    </div>
                    <div class="portfolio-info">
                        <div>
                            <h4>Daiji Design</h4>
                            <p data-i18n="portCat1">Interior Architecture</p>
                        </div>
                        <span class="text-cyan" data-i18n="portVisit">Kunjungi Situs →</span>
                    </div>
                </a>
                <!-- Cuci Sepatu -->
                <a href="https://cucisepatu-gray.vercel.app/" target="_blank" class="portfolio-card reveal">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=2574&auto=format&fit=crop"
                            alt="Cuci Sepatu">
                    </div>
                    <div class="portfolio-info">
                        <div>
                            <h4>Cuci Sepatu Pro</h4>
                            <p data-i18n="portCat2">Cleaning Services</p>
                        </div>
                        <span class="text-cyan" data-i18n="portVisit">Kunjungi Situs →</span>
                    </div>
                </a>
                <!-- InDepth -->
                <a href="https://indepth.co.id" target="_blank" class="portfolio-card reveal">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop"
                            alt="InDepth">
                    </div>
                    <div class="portfolio-info">
                        <div>
                            <h4>InDepth</h4>
                            <p data-i18n="portCat3">Digital Agency Profile</p>
                        </div>
                        <span class="text-cyan" data-i18n="portVisit">indepth.co.id →</span>
                    </div>
                </a>
                <!-- Tirta Bhumi -->
                <a href="https://tirtabhumi.com" target="_blank" class="portfolio-card reveal">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2670&auto=format&fit=crop"
                            alt="Tirta Bhumi">
                    </div>
                    <div class="portfolio-info">
                        <div>
                            <h4>Tirta Bhumi</h4>
                            <p data-i18n="portCat4">Water Solution Company</p>
                        </div>
                        <span class="text-cyan" data-i18n="portVisit">tirtabhumi.com →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimoni" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="testTitle">Apa Kata Klien Kami</h2>
            </div>
            <div class="testimonials-wrapper reveal">
                <div class="testimonials-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test1Quote">"Website company profile kami jadi terlihat sangat
                            profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"
                        </blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Ahmad Ridwan</div>
                                <div class="role" data-i18n="test1Role">CEO, PT Maju Bersama</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test2Quote">"Landing page dari Zephytor meningkatkan konversi iklan kami
                            hingga 3x lipat. ROI yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sari Dewi</div>
                                <div class="role" data-i18n="test2Role">Marketing Manager</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test3Quote">"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya
                            clean dan modern. Highly recommended!"</blockquote>
                        <div class="author">
                            <div class="avatar">B</div>
                            <div class="author-info">
                                <div class="name">Budi Santoso</div>
                                <div class="role" data-i18n="test3Role">Owner, Photography</div>
                            </div>
                        </div>
                    </div>
                    <!-- Repetition for infinite scroll -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test1Quote">"Website company profile kami jadi terlihat sangat
                            profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"
                        </blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Ahmad Ridwan</div>
                                <div class="role" data-i18n="test1Role">CEO, PT Maju Bersama</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test2Quote">"Landing page dari Zephytor meningkatkan konversi iklan kami
                            hingga 3x lipat. ROI yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sari Dewi</div>
                                <div class="role" data-i18n="test2Role">Marketing Manager</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test3Quote">"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya
                            clean dan modern. Highly recommended!"</blockquote>
                        <div class="author">
                            <div class="avatar">B</div>
                            <div class="author-info">
                                <div class="name">Budi Santoso</div>
                                <div class="role" data-i18n="test3Role">Owner, Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="container">
        <div class="cta-box reveal">
            <div class="cta-content">
                <h2 data-i18n="ctaTitle">Siap Membangun Aset Digital?</h2>
                <p data-i18n="ctaDesc">Hubungi kami sekarang untuk mendapatkan website premium dengan penawaran terbaik.
                </p>
                <a href="https://wa.me/6285892778882" class="btn btn-white btn-lg" data-i18n="ctaBtn">Chat WhatsApp
                    Sekarang</a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#" class="nav-logo">
                        <svg class="logo-svg" viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 25H30L15 45H40" stroke="currentColor" stroke-width="6" stroke-linecap="butt"
                                stroke-linejoin="miter" />
                            <path d="M20 5H45L30 25H55" stroke="currentColor" stroke-width="6" stroke-linecap="butt"
                                stroke-linejoin="miter" />
                            <text x="65" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-size="28"
                                font-weight="800" fill="currentColor">Ephytor</text>
                        </svg>
                    </a>
                    <p style="margin-top: 24px;" data-i18n="footDesc">Transformasi digital bisnis Indonesia dengan
                        desain modern & performa tinggi.</p>
                </div>
                <div>
                    <h4 data-i18n="foot1Title">Layanan</h4>
                    <ul>
                        <li><a href="#layanan" data-i18n="srv1Title">Company Profile</a></li>
                        <li><a href="#layanan" data-i18n="srv2Title">Landing Page</a></li>
                        <li><a href="#layanan" data-i18n="srv3Title">Custom App</a></li>
                    </ul>
                </div>
                <div>
                    <h4 data-i18n="foot2Title">Dukungan</h4>
                    <ul>
                        <li><a href="https://wa.me/6285892778882" data-i18n="btnKonsultasi">Konsultasi Gratis</a></li>
                        <li><a href="mailto:hello@zephytor.com">hello@zephytor.com</a></li>
                    </ul>
                </div>
                <div>
                    <h4 data-i18n="foot3Title">Sosial Media</h4>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Translations
        const i18n = {
            id: {
                navHome: "Home",
                navLayanan: "Layanan",
                navHarga: "Harga",
                navProject: "Project",
                btnMulai: "Mulai Sekarang",
                btnKonsultasi: "Konsultasi Gratis",
                heroBadge: "✨ Tersedia Slot Maret 2026",
                heroTitle: "Digitalisasi Bisnis Anda <span>Sesuai Hasil Akhir.</span>",
                heroDesc: "Kami membangun infrastruktur digital profesional untuk merampingkan operasional Anda. Tanpa modal awal yang besar, dapatkan website premium yang meyakinkan klien.",
                heroBtn: "Pesan Website Sekarang",
                layananTitle: "Solusi Bisnis Digital",
                layananDesc: "Kami bukan sekadar membuat website, kami membangun identitas brand Anda di internet.",
                srv1Title: "Company Profile",
                srv1Desc: "Website profesional untuk membangun kepercayaan klien dan investor dalam waktu singkat.",
                srv2Title: "Landing Page",
                srv2Desc: "Satu halaman dengan fokus konversi tinggi. Sangat cocok untuk iklan Google & Meta Ads.",
                srv3Title: "Custom Web App",
                srv3Desc: "Solusi fitur khusus dengan sistem manajemen mandiri (CMS) sesuai kebutuhan spesifik bisnis Anda.",
                hargaTitle: "Pilihan Paket Investasi",
                hargaDesc: "Sesuai dengan skala dan target gol bisnis Anda.",
                pkg1Name: "Landing Page",
                pkg1Price: "Rp 500rb",
                pkg1Desc: "1 Halaman • Cocok untuk promosi singkat",
                pkg1Feat1: "1 Halaman Responsif (Mobile Friendly)",
                pkg1Feat2: "Copywriting Persuasif Basic",
                pkg1Feat3: "Akses Dashboard Pengelolaan",
                pkg1Feat4: "Integrasi Link Sosmed & Galeri",
                pkg1Feat5: "Gratis Hosting & SSL 1 Tahun",
                pkg1Feat6: "Custom Email Domain (.com)",
                pkg2Name: "Paket Murah",
                pkg2Price: "Rp 750rb",
                pkg2Range: "- 1Jt",
                pkg2Desc: "3 Halaman • Untuk bisnis yang baru mulai",
                pkg2Feat1: "3 Halaman Struktur Lengkap",
                pkg2Feat2: "Copywriting Profesional",
                pkg2Feat3: "1 Email Bisnis (admin@domain)",
                pkg2Feat4: "Optimasi SEO On-Page Basic",
                pkg2Feat5: "Integrasi Google Maps Bisnis",
                pkgBest: "TERLARIS",
                pkg3Name: "Paket Untung",
                pkg3Price: "Rp 1.5jt",
                pkg3Desc: "5 Halaman • Best value untuk scale-up",
                pkg3Feat1: "5 Halaman Premium (Home, About, etc)",
                pkg3Feat2: "Premium Sales Driven Copywriting",
                pkg3Feat3: "3 Email Bisnis Terintegrasi",
                pkg3Feat4: "Full SEO Optimized (Ready to Rank)",
                pkg3Feat5: "Video Tutorial Panduan Admin",
                pkg4Name: "Paket Pro Custom",
                pkg4Price: "Rp 3jt+",
                pkg4Desc: "Unlimited Halaman • Full custom solution",
                pkg4Feat1: "Desain Eksklusif UI/UX Mandiri",
                pkg4Feat2: "Fitur Custom (CMS / Filter / Database)",
                pkg4Feat3: "Integrasi API / Payment Gateway",
                pkg4Feat4: "Jaminan PageSpeed 90+ Score",
                btnPesan: "Pesan Sekarang",
                btnHubungi: "Hubungi Kami",
                floatingBubble: "0% UANG MUKA",
                heroStat: "Uang Muka",
                portTitle: "Karya yang Telah Kami Bangun",
                portCat1: "Arsitektur Interior",
                portCat2: "Layanan Kebersihan",
                portCat3: "Profil Digital Agency",
                portCat4: "Perusahaan Solusi Air",
                portVisit: "Lihat Situs →",
                testTitle: "Apa Kata Klien Kami",
                test1Quote: '"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"',
                test1Role: "CEO, PT Maju Bersama",
                test2Quote: '"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI yang luar biasa!"',
                test2Role: "Marketing Manager",
                test3Quote: '"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya clean dan modern. Highly recommended!"',
                test3Role: "Owner, Photography",
                ctaTitle: "Siap Membangun Aset Digital?",
                ctaDesc: "Hubungi kami sekarang untuk mendapatkan website premium dengan penawaran terbaik.",
                ctaBtn: "Chat WhatsApp Sekarang",
                footDesc: "Transformasi digital bisnis Indonesia dengan desain modern & performa tinggi.",
                foot1Title: "Layanan",
                foot2Title: "Dukungan",
                foot3Title: "Sosial Media"
            },
            en: {
                navHome: "Home",
                navLayanan: "Services",
                navHarga: "Pricing",
                navProject: "Projects",
                btnMulai: "Start Now",
                btnKonsultasi: "Free Consultation",
                heroBadge: "✨ March 2026 Slots Available",
                heroTitle: "Digitalize Your Business <span>Exactly as Promised.</span>",
                heroDesc: "We build professional digital infrastructure to streamline your operations. Get a premium website that convinces clients without high upfront costs.",
                heroBtn: "Order Website Now",
                layananTitle: "Digital Business Solutions",
                layananDesc: "We don't just build websites, we build your brand identity on the internet.",
                srv1Title: "Company Profile",
                srv1Desc: "Professional website to build client and investor trust in a short time.",
                srv2Title: "Landing Page",
                srv2Desc: "One page with high conversion focus. Perfect for Google & Meta Ads.",
                srv3Title: "Custom Web App",
                srv3Desc: "Tailored solutions with self-management system (CMS) for specific business needs.",
                hargaTitle: "Investment Package Options",
                hargaDesc: "According to your scale and business goals.",
                pkg1Name: "Landing Page",
                pkg1Price: "$35",
                pkg1Desc: "1 Page • Suitable for short promotions",
                pkg1Feat1: "1 Responsive Page (Mobile Friendly)",
                pkg1Feat2: "Basic Persuasive Copywriting",
                pkg1Feat3: "Admin Dashboard Access",
                pkg1Feat4: "Social Media & Gallery Integration",
                pkg1Feat5: "Free Hosting & SSL 1 Year",
                pkg1Feat6: "Custom Domain Email (.com)",
                pkg2Name: "Value Package",
                pkg2Price: "$50",
                pkg2Range: "- $70",
                pkg2Desc: "3 Pages • For businesses just starting out",
                pkg2Feat1: "3 Pages Complete Structure",
                pkg2Feat2: "Professional Copywriting",
                pkg2Feat3: "1 Business Email (admin@domain)",
                pkg2Feat4: "Basic On-Page SEO Optimization",
                pkg2Feat5: "Google Maps Business Integration",
                pkgBest: "BEST SELLER",
                pkg3Name: "Profit Package",
                pkg3Price: "$100",
                pkg3Desc: "5 Pages • Best value for scaling up",
                pkg3Feat1: "5 Premium Pages (Home, About, etc)",
                pkg3Feat2: "Premium Sales Driven Copywriting",
                pkg3Feat3: "3 Integrated Business Emails",
                pkg3Feat4: "Full SEO Optimized (Ready to Rank)",
                pkg3Feat5: "Admin Guide Video Tutorial",
                pkg4Name: "Pro Custom Package",
                pkg4Price: "$200+",
                pkg4Desc: "Unlimited Pages • Full custom solution",
                pkg4Feat1: "Exclusive UI/UX Independent Design",
                pkg4Feat2: "Custom Features (CMS / Filter / Database)",
                pkg4Feat3: "API / Payment Gateway Integration",
                pkg4Feat4: "PageSpeed 90+ Score Guaranteed",
                btnPesan: "Order Now",
                btnHubungi: "Contact Us",
                floatingBubble: "0% DOWN PAYMENT",
                heroStat: "Down Payment",
                portTitle: "Our Built Masterpieces",
                portCat1: "Interior Architecture",
                portCat2: "Cleaning Services",
                portCat3: "Digital Agency Profile",
                portCat4: "Water Solution Company",
                portVisit: "Visit Site →",
                testTitle: "What Our Clients Say",
                test1Quote: '"Our company profile website looks very professional now. New clients trust our business more. Thank you Zephytor!"',
                test1Role: "CEO, PT Maju Bersama",
                test2Quote: '"Landing page from Zephytor increased our ad conversion by 3x. Amazing ROI!"',
                test2Role: "Marketing Manager",
                test3Quote: '"Fast execution and results exceeded expectations. Clean and modern design. Highly recommended!"',
                test3Role: "Owner, Photography",
                ctaTitle: "Ready to Build Digital Assets?",
                ctaDesc: "Contact us now to get a premium website with the best offer.",
                ctaBtn: "Chat WhatsApp Now",
                footDesc: "Digital transformation for Indonesian businesses with modern design & high performance.",
                foot1Title: "Services",
                foot2Title: "Support",
                foot3Title: "Social Media"
            }
        };

        function setLanguage(lang) {
            localStorage.setItem('lang', lang);

            // Update buttons
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.classList.toggle('active', btn.innerText.toLowerCase() === lang);
            });

            // Update elements
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (i18n[lang][key]) {
                    el.innerHTML = i18n[lang][key];
                }
            });
        }

        // Load saved language
        const savedLang = localStorage.getItem('lang') || 'id';
        setLanguage(savedLang);

        // Theme Toggle Logic
        const body = document.body;
        const themeToggle = document.getElementById('themeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');

        function updateTheme(isDark) {
            if (isDark) {
                body.classList.add('dark-theme');
                sunIcon.style.display = 'block';
                moonIcon.style.display = 'none';
            } else {
                body.classList.remove('dark-theme');
                sunIcon.style.display = 'none';
                moonIcon.style.display = 'block';
            }
        }

        // Load saved theme
        const savedTheme = localStorage.getItem('theme');
        updateTheme(savedTheme === 'dark');

        themeToggle.addEventListener('click', () => {
            const isDark = !body.classList.contains('dark-theme');
            updateTheme(isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });

        // Reveal Observer
        const reveals = document.querySelectorAll('.reveal');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        reveals.forEach(r => obs.observe(r));

        // Floating Nav logic
        const floatingNav = document.getElementById('floatingNav');
        const navLinks = document.querySelectorAll('.floating-nav a:not(.btn-mulai)');
        const sections = document.querySelectorAll('section');

        window.addEventListener('scroll', () => {
            // Visibility
            if (window.scrollY > 400) floatingNav.classList.add('visible');
            else floatingNav.classList.remove('visible');

            // Scroll Spy
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("active");
                }
            });
        });

        // Smooth scroll & Click active
        navLinks.forEach(a => {
            a.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);

                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });

                    // Manual active class on click for immediate feedback
                    navLinks.forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                }
            });
    });
    </script>
</body>

</html>