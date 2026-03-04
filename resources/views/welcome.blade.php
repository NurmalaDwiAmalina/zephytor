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

    <!-- TOP NAVBAR -->
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
                    <p>Uang Muka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title">Solusi Bisnis Digital</h2>
                <p class="mx-auto" style="max-width: 600px;">Kami bukan sekadar membuat website, kami membangun
                    identitas brand Anda di internet.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg></div>
                    <h3>Company Profile</h3>
                    <p>Website profesional untuk membangun kepercayaan klien dan investor dalam waktu singkat.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg></div>
                    <h3>Landing Page</h3>
                    <p>Satu halaman dengan fokus konversi tinggi. Sangat cocok untuk iklan Google & Meta Ads.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="15" x="2" y="3" rx="2" />
                            <path d="M7 21h10" />
                            <path d="M12 18v3" />
                        </svg></div>
                    <h3>Custom Web App</h3>
                    <p>Solusi fitur khusus dengan sistem manajemen mandiri (CMS) sesuai kebutuhan spesifik bisnis Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HARGA -->
    <section id="harga" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title">Pilihan Paket Investasi</h2>
                <p>Sesuai dengan skala dan target gol bisnis Anda.</p>
            </div>
            <div class="pricing-grid">
                <!-- Paket 1 -->
                <div class="price-card reveal">
                    <div class="plan-name">Landing Page</div>
                    <div class="price-val">Rp 500rb</div>
                    <div class="price-desc">1 Halaman • Cocok untuk promosi singkat</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> 1 Halaman Responsif (Mobile Friendly)</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Copywriting Persuasif Basic</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Akses Dashboard Pengelolaan</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Integrasi Link Sosmed & Galeri</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Gratis Hosting & SSL 1 Tahun</li>
                        <li class="disabled"><svg width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg> Custom Email Domain (.com)</li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Landing+Page+500K" class="btn btn-outline">Pesan
                        Sekarang</a>
                </div>
                <!-- Paket 2 -->
                <div class="price-card reveal">
                    <div class="plan-name">Paket Murah</div>
                    <div class="price-val">Rp 750rb <small>- 1Jt</small></div>
                    <div class="price-desc">3 Halaman • Untuk bisnis yang baru mulai</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> 3 Halaman Struktur Lengkap</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Copywriting Profesional</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> 1 Email Bisnis (admin@domain)</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Optimasi SEO On-Page Basic</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Integrasi Google Maps Bisnis</li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Murah+Zephytor" class="btn btn-outline">Pesan
                        Sekarang</a>
                </div>
                <!-- Paket 3 -->
                <div class="price-card popular reveal">
                    <div class="popular-badge">TERLARIS</div>
                    <div class="plan-name">Paket Untung</div>
                    <div class="price-val">Rp 1.5jt</div>
                    <div class="price-desc">5 Halaman • Best value untuk scale-up</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> 5 Halaman Premium (Home, About, etc)</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Premium Sales Driven Copywriting</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> 3 Email Bisnis Terintegrasi</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Full SEO Optimized (Ready to Rank)</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Video Tutorial Panduan Admin</li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Untung+1.5Jt" class="btn btn-primary">Pesan
                        Sekarang</a>
                </div>
                <!-- Paket 4 -->
                <div class="price-card reveal">
                    <div class="plan-name">Paket Pro Custom</div>
                    <div class="price-val">Rp 3jt+</div>
                    <div class="price-desc">Unlimited Halaman • Full custom solution</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Desain Eksklusif UI/UX Mandiri</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Fitur Custom (CMS / Filter / Database)</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Integrasi API / Payment Gateway</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> Jaminan PageSpeed 90+ Score</li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Pro+Custom" class="btn btn-outline">Hubungi
                        Kami</a>
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
                <div class="portfolio-card reveal">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=2574&auto=format&fit=crop"
                            alt="Cuci Sepatu">
                    </div>
                    <div class="portfolio-info">
                        <div>
                            <h4>Cuci Sepatu Pro</h4>
                            <p data-i18n="portCat2">Cleaning Services</p>
                        </div>
                        <span class="text-cyan">Web App</span>
                    </div>
                </div>
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
                <h2 class="section-title">Apa Kata Klien Kami</h2>
            </div>
            <div class="testimonials-wrapper reveal">
                <div class="testimonials-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin
                            percaya dengan bisnis kami. Terima kasih Zephytor!"</blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Ahmad Ridwan</div>
                                <div class="role">CEO, PT Maju Bersama</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI
                            yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sari Dewi</div>
                                <div class="role">Marketing Manager</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya clean dan modern.
                            Highly recommended!"</blockquote>
                        <div class="author">
                            <div class="avatar">B</div>
                            <div class="author-info">
                                <div class="name">Budi Santoso</div>
                                <div class="role">Owner, Photography</div>
                            </div>
                        </div>
                    </div>
                    <!-- Repetition for infinite scroll -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin
                            percaya dengan bisnis kami. Terima kasih Zephytor!"</blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Ahmad Ridwan</div>
                                <div class="role">CEO, PT Maju Bersama</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI
                            yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sari Dewi</div>
                                <div class="role">Marketing Manager</div>
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
                <h2>Siap Membangun Aset Digital?</h2>
                <p>Hubungi kami sekarang untuk mendapatkan website premium dengan penawaran terbaik.</p>
                <a href="https://wa.me/6285892778882" class="btn btn-white btn-lg">Chat WhatsApp Sekarang</a>
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
                    <p style="margin-top: 24px;">Transformasi digital bisnis Indonesia dengan desain modern & performa
                        tinggi.</p>
                </div>
                <div>
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#layanan">Company Profile</a></li>
                        <li><a href="#layanan">Landing Page</a></li>
                        <li><a href="#layanan">Custom App</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Dukungan</h4>
                    <ul>
                        <li><a href="https://wa.me/6285892778882">Konsultasi Gratis</a></li>
                        <li><a href="mailto:hello@zephytor.com">hello@zephytor.com</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Sosial Media</h4>
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
                portTitle: "Karya yang Telah Kami Bangun",
                portCat1: "Arsitektur Interior",
                portCat2: "Layanan Kebersihan",
                portCat3: "Profil Digital Agency",
                portCat4: "Perusahaan Solusi Air",
                portVisit: "Lihat Situs →"
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
                portTitle: "Our Built Masterpieces",
                portCat1: "Interior Architecture",
                portCat2: "Cleaning Services",
                portCat3: "Digital Agency Profile",
                portCat4: "Water Solution Company",
                portVisit: "Visit Site →"
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