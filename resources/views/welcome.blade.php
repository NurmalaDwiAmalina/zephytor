<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephytor — Jasa Pembuatan Website Premium</title>
    <meta name="description"
        content="Bangun kehadiran digital profesional dalam 48 jam. Jasa pembuatan website Company Profile, Portofolio, dan Landing Page dengan desain eksklusif.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.zephytor.online/">
    <meta property="og:title" content="Zephytor — Jasa Pembuatan Website & Digitalisasi Bisnis Premium">
    <meta property="og:description" content="Bangun kehadiran digital profesional dalam 48 jam. Jasa pembuatan website Modern, Cepat, dan Berkelas untuk bisnis Anda.">
    <meta property="og:image" content="{{ asset('logo-baru.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.zephytor.online/">
    <meta property="twitter:title" content="Zephytor — Jasa Pembuatan Website & Digitalisasi Bisnis Premium">
    <meta property="twitter:description" content="Bangun kehadiran digital profesional dalam 48 jam. Jasa pembuatan website Modern, Cepat, dan Berkelas untuk bisnis Anda.">
    <meta property="twitter:image" content="{{ asset('logo-baru.png') }}">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v=5.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
</head>

<body data-spy="scroll" data-target="#floatingNav" data-offset="100">

    <div class="bg-mesh">
        <div class="mesh-orb orb-1"></div>
        <div class="mesh-orb orb-2"></div>
        <div class="mesh-orb orb-3"></div>
    </div>

    <div class="scroll-sidebar">
        <div class="explore-text">EXPLORE</div>
        <div class="progress-container">
            <div class="progress-bar" id="scrollProgress"></div>
        </div>
    </div>

    <div class="navbar-top">
        <div class="container">
            <a href="#" class="nav-logo">
                <span style="font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--logo-color); letter-spacing: -1px;">Zephytor</span>
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
        <a href="#hero" data-i18n="navInfo">INFO</a>
        <a href="#layanan" data-i18n="navLayanan">LAYANAN</a>
        <a href="#mvp" data-i18n="navMvp">MVP</a>
        <a href="#testimoni" data-i18n="navKontak">KONTAK</a>
        <a href="https://wa.me/6285892778882" class="btn btn-primary btn-sm btn-mulai" data-i18n="btnMulai">Mulai</a>
    </nav>



    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
            <div class="reveal">
                <div class="section-badge" data-i18n="heroBadge">✨ Tersedia Slot April 2026</div>
                <h1 data-i18n="heroTitle">Digitalisasi Bisnis Anda <span>Sesuai Hasil Akhir.</span></h1>
                <p data-i18n="heroDesc">Kami membangun infrastruktur digital profesional untuk merampingkan operasional
                    Anda. Tanpa modal
                    awal yang besar, dapatkan website premium yang meyakinkan klien.</p>
                <div class="hero-buttons">
                    <a href="https://wa.me/6285892778882" class="btn btn-primary btn-lg" data-i18n="heroBtn">Pesan
                        Website Sekarang</a>
                    <a href="#layanan" class="btn btn-outline btn-lg" data-i18n="navLayanan">Lihat Layanan</a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat-item">
                        <span class="hero-stat-num">50+</span>
                        <span class="hero-stat-label">Proyek Selesai</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat-item">
                        <span class="hero-stat-num">100%</span>
                        <span class="hero-stat-label">Kepuasan Klien</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat-item">
                        <span class="hero-stat-num">&lt; 48h</span>
                        <span class="hero-stat-label">MVP Delivery</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual reveal">
                <div class="hero-glass floating">
                    <div class="controls">
                        <div class="dot dot-r"></div>
                        <div class="dot dot-y"></div>
                        <div class="dot dot-g"></div>
                    </div>
                    <div class="code-line">
                        <span style="color: var(--text-muted)">class</span>&nbsp;<span style="color: var(--text-h)">Zephytor</span>&nbsp;{
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;<span style="color: var(--text-muted)">public</span>&nbsp;function&nbsp;<span
                            style="color: var(--text-h)">buildSuccess</span>()&nbsp;{
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;[
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: var(--text-muted)">'design'</span>&nbsp;=>&nbsp;<span
                            style="color: var(--text-h)">'Premium'</span>,
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: var(--text-muted)">'speed'</span>&nbsp;=>&nbsp;<span
                            style="color: var(--text-h)">'Ultra Fast'</span>,
                    </div>
                    <div class="code-line">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                            style="color: var(--text-muted)">'conversion'</span>&nbsp;=>&nbsp;<span style="color: var(--text-h)">'High'</span>
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
            </div>
        </div>
    </section>
    
    <!-- UI/UX CHECKER SECTION -->
    <section class="checker-section">
        <div class="checker-grid-bg"></div>
        <div class="container">
            <div class="checker-card reveal">
                <div class="checker-card-glow"></div>
                <div class="checker-header">
                    <span class="checker-badge">✦ Instant Analysis</span>
                    <h2 class="checker-title" data-i18n="auditTitle">Audit UI/UX Website Kamu <span>Sekarang</span></h2>
                    <p class="checker-sub" data-i18n="auditSub">Dapatkan laporan performa, desain, dan aksesibilitas dalam hitungan detik.</p>
                </div>
                <form action="/analyze" method="GET" class="checker-form-v2">
                    <div class="checker-input-container">
                        <div class="checker-input-group">
                            <div class="checker-input-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                </svg>
                            </div>
                            <input type="url" name="url" class="checker-field" placeholder="https://website-bisnis-anda.com" required>
                        </div>
                        <button type="submit" class="checker-submit-btn">
                            <span>Mulai Analisa</span>
                            <div class="btn-shine"></div>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="checker-footer">
                    <div class="checker-stat-item">
                        <span class="stat-value">98%</span>
                        <span class="stat-label">Accuracy</span>
                    </div>
                    <div class="checker-divider"></div>
                    <div class="checker-stat-item">
                        <span class="stat-value">< 3s</span>
                        <span class="stat-label">Analysis Speed</span>
                    </div>
                    <div class="checker-divider"></div>
                    <div class="checker-stat-item">
                        <span class="stat-value">Free</span>
                        <span class="stat-label">Unlimited Checks</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TANTANGAN -->
    <section id="tantangan" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="probTitle">Kenapa Banyak Bisnis <span class="gradient-text">Gagal Go-Digital?</span></h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="probDesc">Digitalisasi bukan hanya soal punya
                    website, tapi soal efisiensi dan hasil nyata.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal" data-number="01">
                    <div class="service-icon">❌</div>
                    <h3 data-i18n="prob1Title">Hasil Tidak Sesuai</h3>
                    <p data-i18n="prob1Desc">Kebanyakan agency membatasi revisi sehingga hasil akhir seringkali tidak
                        sesuai dengan ekspektasi awal Anda.</p>
                </div>
                <div class="service-card reveal" data-number="02">
                    <div class="service-icon">❌</div>
                    <h3 data-i18n="prob2Title">Desain Kaku</h3>
                    <p data-i18n="prob2Desc">Template murahan yang membuat brand Anda terlihat tidak profesional di mata
                        klien.</p>
                </div>
                <div class="service-card reveal" data-number="03">
                    <div class="service-icon">❌</div>
                    <h3 data-i18n="prob3Title">Sulit Dikelola</h3>
                    <p data-i18n="prob3Desc">Sistem yang rumit membuat Anda ketergantungan pada developer terus-menerus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="layananTitle">Solusi Bisnis <span class="gradient-text">Digital Kami</span></h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="layananDesc">Kami membangun infrastruktur yang
                    mempercepat pertumbuhan bisnis Anda.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal" data-number="01">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg></div>
                    <h3 data-i18n="srv1Title">Company Profile</h3>
                    <p data-i18n="srv1Desc">Website profesional untuk membangun kepercayaan klien dan investor dalam
                        waktu singkat.</p>
                </div>
                <div class="service-card reveal" data-number="02">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg></div>
                    <h3 data-i18n="srv2Title">Landing Page</h3>
                    <p data-i18n="srv2Desc">Satu halaman dengan fokus konversi tinggi. Sangat cocok untuk iklan Google &
                        Meta Ads.</p>
                </div>
                <div class="service-card reveal" data-number="03">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                        </svg></div>
                    <h3 data-i18n="srv3Title">Custom Web App</h3>
                    <p data-i18n="srv3Desc">Solusi fitur khusus dengan sistem manajemen mandiri (CMS) sesuai kebutuhan
                        spesifik bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ALUR KERJA -->
    <section id="alur-kerja">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="stepTitle">Cara Kami Bekerja</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal" data-number="01">
                    <div class="service-icon">01</div>
                    <h3 data-i18n="step1Title">Konsultasi Strategi</h3>
                    <p data-i18n="step1Desc">Kami mendalami model bisnis Anda untuk menentukan fitur yang paling
                        krusial.</p>
                </div>
                <div class="service-card reveal" data-number="02">
                    <div class="service-icon">02</div>
                    <h3 data-i18n="step2Title">Desain Eksklusif</h3>
                    <p data-i18n="step2Desc">UI/UX yang dirancang khusus untuk meningkatkan kepercayaan dan konversi.
                    </p>
                </div>
                <div class="service-card reveal" data-number="03">
                    <div class="service-icon">03</div>
                    <h3 data-i18n="step3Title">Development & Launch</h3>
                    <p data-i18n="step3Desc">Proses coding yang cepat dan optimasi performa maksimal sebelum live.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section id="keunggulan" class="section">
        <div class="container">
            <div class="section-header text-center reveal">
                <div class="section-badge" data-i18n="advBadge">ADVANTAGES</div>
                <h2 class="section-title" data-i18n="advTitle">KEUNGGULAN LAYANAN KAMI</h2>
            </div>
            <div class="adv-grid">
                <div class="adv-item reveal">
                    <div class="adv-icon">📈</div>
                    <p data-i18n="adv1">Website sudah terintegrasi dengan Google Analytics dan Google Search Console</p>
                </div>
                <div class="adv-item reveal">
                    <div class="adv-icon">🔍</div>
                    <p data-i18n="adv2">Website SEO friendly</p>
                </div>
                <div class="adv-item reveal">
                    <div class="adv-icon">⚡</div>
                    <p data-i18n="adv3">Website 3 halaman bisa selesai kurang dari 3 jam</p>
                </div>
                <div class="adv-item reveal">
                    <div class="adv-icon">💻</div>
                    <p data-i18n="adv4">Menggunakan bahasa pemrograman terbaru yang ringan</p>
                </div>
                <div class="adv-item reveal">
                    <div class="adv-icon">🛡️</div>
                    <p data-i18n="adv5">Sistem lebih stabil dan minim error</p>
                </div>
                <div class="adv-item reveal">
                    <div class="adv-icon">💰</div>
                    <p data-i18n="adv6">HARGA YANG KAMI TAWARKAN LEBIH MURAH DIBANDINGKAN COMPETITOR</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HARGA -->
    <section id="harga" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="hargaTitle">Pilihan <span class="gradient-text">Paket Investasi</span></h2>
                <p data-i18n="hargaDesc">Sesuai dengan skala dan target gol bisnis Anda.</p>
            </div>
            <div class="pricing-grid">
                <!-- Paket 1 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg1Name">Landing Page</div>
                    <div class="price-val" data-i18n="pkg1Price">Rp 300rb</div>
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
                            </svg> <span data-i18n="pkgRev">Gratis Revisi Sepuasnya</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Landing+Page+300rb" class="btn btn-outline"
                        data-i18n="btnPesan">Pesan Sekarang</a>
                </div>
                <!-- Paket 2 -->
                <div class="price-card popular reveal">
                    <div class="popular-badge" data-i18n="pkgBest">TERLARIS</div>
                    <div class="plan-name" data-i18n="pkg3Name">Paket Premium</div>
                    <div class="price-val" data-i18n="pkg3Price">Rp 3.5jt</div>
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
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkgRev">Gratis Revisi Sepuasnya</span></li>
                    </ul>
                    <a href="https://wa.me/6285892778882?text=Pesan+Paket+Premium+3.5Jt" class="btn btn-primary"
                        data-i18n="btnPesan">Pesan Sekarang</a>
                </div>
                <!-- Paket 3 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg4Name">Paket Enterprise</div>
                    <div class="price-val" data-i18n="pkg4Price">Rp 7jt+</div>
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
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkgRev">Gratis Revisi Sepuasnya</span></li>
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
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="portTitle">Karya yang Telah <span class="gradient-text">Kami Bangun</span></h2>
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
                        <img src="{{ asset('images/portfolio/cuci-sepatu.png') }}" alt="Cuci Sepatu">
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
                        <img src="{{ asset('images/portfolio/indepth.png') }}" alt="InDepth">
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
                        <img src="{{ asset('images/portfolio/tirtabhumi.png') }}" alt="Tirta Bhumi">
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

    <!-- EXPERTISE -->
    <section id="expertise">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="expTitle">Siapa yang Membangun Proyek Anda?</h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="expDesc">Tim ahli yang berdedikasi untuk
                    memberikan hasil terbaik bagi bisnis Anda.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon">👨‍💻</div>
                    <h3>Full-Stack Developer</h3>
                    <p data-i18n="exp1Desc">Ahli dalam membangun sistem yang cepat, aman, dan mudah diskalakan.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">🎨</div>
                    <h3>UI/UX Designer</h3>
                    <p data-i18n="exp2Desc">Fokus pada estetika dan pengalaman pengguna yang intuitif.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">📊</div>
                    <h3>Digital strategist</h3>
                    <p data-i18n="exp3Desc">Memastikan setiap elemen website Anda mendukung tujuan bisnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MVP -->
    <section id="mvp" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <div class="section-badge" data-i18n="mvpBadge">KECEPATAN PENGIRIMAN</div>
                <h2 class="section-title" data-i18n="mvpTitle">MVP Siap dalam Hitungan Jam</h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="mvpDesc">Kami bergerak cepat. Dari ide ke produk yang bisa digunakan — tanpa menunggu berbulan-bulan.</p>
            </div>

            <div class="mvp-grid reveal">
                <div class="mvp-card mvp-card-light">
                    <div class="mvp-line"></div>
                    <div class="mvp-time" data-i18n="mvpSimpleTime">&lt; 3 Jam</div>
                    <h3 class="mvp-card-title" data-i18n="mvpSimpleTitle">Sistem Tidak Kompleks</h3>
                    <p class="mvp-card-desc" data-i18n="mvpSimpleDesc">Landing page, company profile, atau portofolio — MVP Anda sudah jadi dan siap diluncurkan kurang dari 3 jam.</p>
                </div>

                <div class="mvp-card mvp-card-primary">
                    <div class="mvp-orb"></div>
                    <div class="mvp-time" data-i18n="mvpComplexTime">&lt; 1 Minggu</div>
                    <h3 class="mvp-card-title" data-i18n="mvpComplexTitle">Sistem Kompleks</h3>
                    <p class="mvp-card-desc" data-i18n="mvpComplexDesc">Web app dengan fitur custom, dashboard, atau integrasi API — MVP fungsional selesai kurang dari 1 minggu. Cukup untuk validasi pasar Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimoni">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="testTitle">Apa Kata <span class="gradient-text">Klien Kami</span></h2>
            </div>
            <div class="testimonials-wrapper reveal">
                <div class="testimonials-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test1Quote">"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"</blockquote>
                        <div class="author">
                            <div class="avatar">R</div>
                            <div class="author-info">
                                <div class="name">Rizky Ramadhan</div>
                                <div class="role" data-i18n="test1Role">Founder, Tech Start-up</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test2Quote">"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">P</div>
                            <div class="author-info">
                                <div class="name">Putri Utami</div>
                                <div class="role" data-i18n="test2Role">Marketing Director</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test3Quote">"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya clean dan modern. Highly recommended!"</blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Andika Pratama</div>
                                <div class="role" data-i18n="test3Role">Creative Director</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test4Quote">"Serius kaget sama hasilnya! Website kami sekarang terlihat jauh lebih premium dari kompetitor. Klien yang datang langsung bilang website-nya bikin mereka lebih yakin."</blockquote>
                        <div class="author">
                            <div class="avatar">B</div>
                            <div class="author-info">
                                <div class="name">Budi Santoso</div>
                                <div class="role" data-i18n="test4Role">Owner, Kuliner Nusantara</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 5 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test5Quote">"Prosesnya transparan banget dan komunikasinya responsif. Dari brief sampai live cuma 4 hari. Hasilnya beyond expectation dan semua revisi dilayani tanpa drama!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sinta Maharani</div>
                                <div class="role" data-i18n="test5Role">CEO, Butik Fashion</div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 6 -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test6Quote">"Investasi terbaik untuk bisnis saya. Portofolio online dari Zephytor langsung meningkatkan inquiry klien baru hingga 2x dalam bulan pertama. Desainnya juga sangat premium!"</blockquote>
                        <div class="author">
                            <div class="avatar">D</div>
                            <div class="author-info">
                                <div class="name">Dimas Prasetyo</div>
                                <div class="role" data-i18n="test6Role">Photographer &amp; Videographer</div>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicates for seamless infinite loop -->
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test1Quote">"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"</blockquote>
                        <div class="author">
                            <div class="avatar">R</div>
                            <div class="author-info">
                                <div class="name">Rizky Ramadhan</div>
                                <div class="role" data-i18n="test1Role">Founder, Tech Start-up</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test2Quote">"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI yang luar biasa!"</blockquote>
                        <div class="author">
                            <div class="avatar">P</div>
                            <div class="author-info">
                                <div class="name">Putri Utami</div>
                                <div class="role" data-i18n="test2Role">Marketing Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test3Quote">"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya clean dan modern. Highly recommended!"</blockquote>
                        <div class="author">
                            <div class="avatar">A</div>
                            <div class="author-info">
                                <div class="name">Andika Pratama</div>
                                <div class="role" data-i18n="test3Role">Creative Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test4Quote">"Serius kaget sama hasilnya! Website kami sekarang terlihat jauh lebih premium dari kompetitor. Klien yang datang langsung bilang website-nya bikin mereka lebih yakin."</blockquote>
                        <div class="author">
                            <div class="avatar">B</div>
                            <div class="author-info">
                                <div class="name">Budi Santoso</div>
                                <div class="role" data-i18n="test4Role">Owner, Kuliner Nusantara</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test5Quote">"Prosesnya transparan banget dan komunikasinya responsif. Dari brief sampai live cuma 4 hari. Hasilnya beyond expectation dan semua revisi dilayani tanpa drama!"</blockquote>
                        <div class="author">
                            <div class="avatar">S</div>
                            <div class="author-info">
                                <div class="name">Sinta Maharani</div>
                                <div class="role" data-i18n="test5Role">CEO, Butik Fashion</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <blockquote data-i18n="test6Quote">"Investasi terbaik untuk bisnis saya. Portofolio online dari Zephytor langsung meningkatkan inquiry klien baru hingga 2x dalam bulan pertama. Desainnya juga sangat premium!"</blockquote>
                        <div class="author">
                            <div class="avatar">D</div>
                            <div class="author-info">
                                <div class="name">Dimas Prasetyo</div>
                                <div class="role" data-i18n="test6Role">Photographer &amp; Videographer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="section-header text-center reveal">
                <div class="section-badge">TANYA JAWAB</div>
                <h2 class="section-title" data-i18n="faqTitle">Hal yang Sering Ditanyakan</h2>
            </div>

            <div class="faq-accordion reveal">
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq1Q">Jenis website apa saja yang "bisa" dibuat menggunakan layanan ini?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq1A">Kami melayani pembuatan berbagai website profesional mulai dari Company Profile, Landing Page, dan e-commerce atau Custom Web App untuk kebutuhan bisnis Anda.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq3Q">Bagaimana jika website sudah jadi dan perlu revisi?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq3A">Tenang saja! Kami memberikan fasilitas gratis revisi sepuasnya hingga Anda benar-benar puas dengan hasil akhirnya sebelum website dipublikasikan.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq4Q">Tampilan websitenya akan seperti apa?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq4A">Tampilan website Anda akan dirancang secara eksklusif (custom) menyesuaikan identitas brand dan preferensi Anda. Kami tidak menggunakan template kaku, sehingga website Anda akan terlihat unik dan premium.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq6Q">Apakah editing website dapat dilakukan sendiri?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq6A">Tentu saja! Karena setiap website kami lengkapi dengan akses Dashboard Pengelolaan (CMS) yang user-friendly, Anda dapat dengan mudah mengedit konten sendiri tanpa coding.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq8Q">Apakah mendapatkan domain gratis pada tiap paketnya?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq8A">Saat ini hosting dan SSL sudah termasuk gratis selama 1 tahun untuk seluruh paket. Untuk domain (seperti .com, .id) gratis pada paket-paket tertentu sesuai ketentuan promo.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq11Q">Apakah sudah mendapat email dengan nama domain sendiri?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq11A">Tentu. Mulai dari paket tertentu, Anda sudah mendapatkan email bisnis profesional (contoh: admin@domainanda.com) yang bisa langsung digunakan.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 data-i18n="faq17Q">Setelah website selesai, apakah otomatis muncul di halaman pertama Google?</h4>
                        <div class="faq-toggle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p data-i18n="faq17A">Berada di halaman utama Google (SEO) merupakan proses berkelanjutan. Paket kami sudah mencakup optimasi SEO On-Page di awal sebagai fondasi agar mesin pencari (Google) lebih mudah melakukan indeks dan memberikan ranking ke depannya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="container">
        <div class="cta-box reveal" style="border-radius: 40px; overflow: hidden; position: relative;">
            <div class="cta-content" style="padding: 80px 40px;">
                <h2 data-i18n="ctaTitle" style="font-size: 3rem; font-weight: 800; margin-bottom: 24px;">Siap Membangun
                    Aset Digital?</h2>
                <p data-i18n="ctaDesc" style="font-size: 1.25rem; opacity: 0.9; margin-bottom: 40px;">Hubungi kami
                    sekarang untuk mendapatkan website premium dengan penawaran terbaik.
                </p>
                <a href="https://wa.me/6285892778882" class="btn btn-white btn-lg" data-i18n="ctaBtn"
                    style="padding: 18px 48px; font-size: 1.1rem; border-radius: 20px;">Chat WhatsApp
                    Sekarang</a>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER -->
    <!-- NEWSLETTER -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-box reveal">
                <div class="newsletter-content">
                    <h2 data-i18n="newsTitle">Dapatkan Insight Digital Bisnis Terkini</h2>
                    <p data-i18n="newsDesc">Berlangganan newsletter kami untuk tips strategi digital & info promo eksklusif setiap minggunya.</p>
                </div>
                <form class="newsletter-form">
                    <div class="newsletter-input-group">
                        <input type="email" placeholder="Alamat email Anda..." required>
                        <button type="submit" class="btn btn-primary" data-i18n="btnSubscribe">Langganan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-giant-text">SASTRO JENDRO</div>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#" class="nav-logo">
                        <span style="font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--logo-color); letter-spacing: -1px;">Zephytor</span>
                    </a>
                    <p style="margin-top: 24px;" data-i18n="footDesc">Transformasi digital bisnis Indonesia dengan desain modern & performa tinggi.</p>
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
                        <li><a href="mailto:zephytor@gmail.com">zephytor@gmail.com</a></li>
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
                navInfo: "INFO",
                navLayanan: "LAYANAN",
                navMvp: "MVP",
                navKontak: "KONTAK",
                btnMulai: "Mulai",
                faqBadge: "TANYA JAWAB",
                mvpBadge: "KECEPATAN PENGIRIMAN",
                mvpTitle: "MVP Siap dalam Hitungan Jam",
                mvpDesc: "Kami bergerak cepat. Dari ide ke produk yang bisa digunakan — tanpa menunggu berbulan-bulan.",
                mvpSimpleTime: "< 3 Jam",
                mvpSimpleTitle: "Sistem Tidak Kompleks",
                mvpSimpleDesc: "Landing page, company profile, atau portofolio — MVP Anda sudah jadi dan siap diluncurkan kurang dari 3 jam.",
                mvpComplexTime: "< 1 Minggu",
                mvpComplexTitle: "Sistem Kompleks",
                mvpComplexDesc: "Web app dengan fitur custom, dashboard, atau integrasi API — MVP fungsional selesai kurang dari 1 minggu. Cukup untuk validasi pasar Anda.",
                btnKonsultasi: "Konsultasi Gratis",
                heroBadge: "✨ Tersedia Slot April 2026",
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
                pkgRev: "Gratis Revisi Sepuasnya",
                pkg1Name: "Landing Page",
                pkg1Price: "Rp 300rb",
                pkg1Desc: "1 Halaman • Cocok untuk promosi singkat",
                pkg1Feat1: "1 Halaman Responsif (Mobile Friendly)",
                pkg1Feat2: "Copywriting Persuasif Basic",
                pkg1Feat3: "Akses Dashboard Pengelolaan",
                pkg1Feat4: "Integrasi Link Sosmed & Galeri",
                pkgBest: "TERLARIS",
                pkg3Name: "Paket Premium",
                pkg3Price: "Rp 3.5jt",
                pkg3Desc: "5 Halaman • Best value untuk scale-up",
                pkg3Feat1: "5 Halaman Premium (Home, About, etc)",
                pkg3Feat2: "Premium Sales Driven Copywriting",
                pkg3Feat3: "3 Email Bisnis Terintegrasi",
                pkg3Feat4: "Full SEO Optimized (Ready to Rank)",
                pkg3Feat5: "Video Tutorial Panduan Admin",
                pkg4Name: "Paket Enterprise",
                pkg4Price: "Rp 7jt+",
                pkg4Desc: "Unlimited Halaman • Full custom solution",
                pkg4Feat1: "Desain Eksklusif UI/UX Mandiri",
                pkg4Feat2: "Fitur Custom (CMS / Filter / Database)",
                pkg4Feat3: "Integrasi API / Payment Gateway",
                pkg4Feat4: "Jaminan PageSpeed 90+ Score",
                btnPesan: "Pesan Sekarang",
                btnHubungi: "Hubungi Kami",
                advBadge: "KEUNGGULAN",
                advTitle: "KEUNGGULAN LAYANAN KAMI",
                adv1: "Website sudah terintegrasi dengan Google Analytics dan Google Search Console",
                adv2: "Website SEO friendly",
                adv3: "Website 3 halaman bisa selesai kurang dari 3 jam",
                adv4: "Menggunakan bahasa pemrograman terbaru yang ringan",
                adv5: "Sistem lebih stabil dan minim error",
                adv6: "HARGA YANG KAMI TAWARKAN LEBIH MURAH DIBANDINGKAN COMPETITOR",
                portTitle: "Karya yang Telah Kami Bangun",
                portCat1: "Arsitektur Interior",
                portCat2: "Layanan Kebersihan",
                portCat3: "Profil Digital Agency",
                portCat4: "Perusahaan Solusi Air",
                portVisit: "Lihat Situs →",
                testTitle: "Apa Kata Klien Kami",
                test1Quote: '"Website company profile kami jadi terlihat sangat profesional. Klien baru semakin percaya dengan bisnis kami. Terima kasih Zephytor!"',
                test1Role: "Founder, Tech Start-up",
                test2Quote: '"Landing page dari Zephytor meningkatkan konversi iklan kami hingga 3x lipat. ROI yang luar biasa!"',
                test2Role: "Marketing Director",
                test3Quote: '"Pengerjaan cepat dan hasilnya melebihi ekspektasi. Desainnya clean dan modern. Highly recommended!"',
                test3Role: "Creative Director",
                test4Quote: '"Serius kaget sama hasilnya! Website kami sekarang terlihat jauh lebih premium dari kompetitor. Klien yang datang langsung bilang website-nya bikin mereka lebih yakin."',
                test4Role: "Owner, Kuliner Nusantara",
                test5Quote: '"Prosesnya transparan banget dan komunikasinya responsif. Dari brief sampai live cuma 4 hari. Hasilnya beyond expectation dan semua revisi dilayani tanpa drama!"',
                test5Role: "CEO, Butik Fashion",
                test6Quote: '"Investasi terbaik untuk bisnis saya. Portofolio online dari Zephytor langsung meningkatkan inquiry klien baru hingga 2x dalam bulan pertama. Desainnya juga sangat premium!"',
                test6Role: "Photographer & Videographer",
                probTitle: "Kenapa Banyak Bisnis Gagal Go-Digital?",
                probDesc: "Digitalisasi bukan hanya soal punya website, tapi soal efisiensi dan hasil nyata.",
                prob1Title: "Hasil Tidak Sesuai",
                prob1Desc: "Kebanyakan agency membatasi revisi sehingga hasil akhir seringkali tidak sesuai dengan ekspektasi awal Anda.",
                prob2Title: "Desain Kaku",
                prob2Desc: "Template murahan yang membuat brand Anda terlihat tidak profesional di mata klien.",
                prob3Title: "Sulit Dikelola",
                prob3Desc: "Sistem yang rumit membuat Anda ketergantungan pada developer terus-menerus.",
                stepTitle: "Cara Kami Bekerja",
                step1Title: "Konsultasi Strategi",
                step1Desc: "Kami mendalami model bisnis Anda untuk menentukan fitur yang paling krusial.",
                step2Title: "Desain Eksklusif",
                step2Desc: "UI/UX yang dirancang khusus untuk meningkatkan kepercayaan dan konversi.",
                step3Title: "Development & Launch",
                step3Desc: "Proses coding yang cepat dan optimasi performa maksimal sebelum live.",
                faqTitle: "Pertanyaan yang Sering Diajukan",
                faq1Q: "Jenis website apa saja yang \"bisa\" dibuat menggunakan layanan ini?",
                faq1A: "Kami melayani pembuatan berbagai website profesional mulai dari Company Profile, Landing Page, dan e-commerce atau Custom Web App untuk kebutuhan bisnis Anda.",
                faq2Q: "Jenis website apa saja yang \"tidak bisa\" dibuat menggunakan layanan ini?",
                faq2A: "Kami tidak melayani pembuatan website untuk keperluan judi online, penipuan, pornografi, atau hal-hal lain yang melanggar hukum di Indonesia.",
                faq3Q: "Bagaimana jika website sudah jadi dan perlu revisi?",
                faq3A: "Tenang saja! Kami memberikan fasilitas gratis revisi sepuasnya hingga Anda benar-benar puas dengan hasil akhirnya sebelum website dipublikasikan.",
                faq4Q: "Tampilan websitenya akan seperti apa?",
                faq4A: "Tampilan website Anda akan dirancang secara eksklusif (custom) menyesuaikan identitas brand dan preferensi Anda. Kami tidak menggunakan template kaku, sehingga website Anda akan terlihat unik dan premium.",
                faq5Q: "Apakah logo website nantinya dibuatkan?",
                faq5A: "Jika Anda belum memiliki logo, kami dapat membantu membuatkan logo sederhana secara gratis. Untuk desain logo premium dapat dipesan dengan biaya tambahan.",
                faq6Q: "Apakah editing website dapat dilakukan sendiri?",
                faq6A: "Tentu saja! Karena setiap website kami lengkapi dengan akses Dashboard Pengelolaan (CMS) yang user-friendly, Anda dapat dengan mudah mengedit konten sendiri tanpa coding.",
                faq7Q: "Apakah penambahan halaman baru dapat dilakukan sendiri?",
                faq7A: "Ya, Anda dapat menambahkan halaman baru melalui dashboard admin.",
                faq8Q: "Apakah mendapatkan domain gratis pada tiap paketnya?",
                faq8A: "Saat ini hosting dan SSL sudah termasuk gratis selama 1 tahun untuk seluruh paket. Untuk domain (seperti .com, .id) gratis pada paket-paket tertentu sesuai ketentuan promo.",
                faq9Q: "Berapa kapasitas hosting websitenya?",
                faq9A: "Kapasitas hosting bervariasi tergantung pada paket yang Anda pilih, mulai dari kapasitas ideal standar hingga resource unlimited untuk keperluan Custom App.",
                faq10Q: "Apakah mendapatkan gratis SSL?",
                faq10A: "Ya! Kami selalu memastikan keamanan pengunjung website Anda dengan menyertakan perlindungan Free SSL Certificate tanpa memungut biaya tambahan.",
                faq11Q: "Apakah sudah mendapat email dengan nama domain sendiri?",
                faq11A: "Tentu. Mulai dari paket tertentu, Anda sudah mendapatkan email bisnis profesional (contoh: admin@domainanda.com) yang bisa langsung digunakan.",
                faq12Q: "Apakah bisa menambahkan logo sosmed yang terhubung langsung ke sosmednya?",
                faq12A: "Ya, semua paket sudah termasuk Integrasi Link Sosmed & Galeri, pengunjung bisa langsung diarahkan ke platform media sosial Anda.",
                faq13Q: "Apakah dikenakan biaya jika ingin dibantu update website?",
                faq13A: "Selama masa garansi/revisi (sebelum rilis akhir), tidak ada biaya. Jika Anda butuh bantuan update secara rutin ke depannya, kami menyediakan layanan maintenance (bulanan/tahunan) yang terjangkau.",
                faq14Q: "Apakah bisa mengubah template setelah website selesai diproses?",
                faq14A: "Karena website dibangun dengan desain custom secara eksklusif, perombakan desain secara total setelah proyek dinyatakan selesai akan dianggap sebagai permintaan redesign dengan biaya terpisah.",
                faq15Q: "Berapa batas konten per halaman?",
                faq15A: "Tidak ada batasan yang kaku, asalkan tidak membatasi performa kecepatan dan User Experience pengunjung. Tim kami akan selalu menyarankan panjang halaman yang optimal untuk target SEO & konversi.",
                faq16Q: "Bagaimana perhitungan jumlah halaman multi bahasa?",
                faq16A: "Apabila menyertakan multi bahasa, bahasa utama akan dihitung sebagai halaman dasarnya, sedangkan setiap duplikasi terjemahan dianggap sebagai halaman tambahan, dan biasanya dikerjakan dalam paket Pro Custom.",
                faq17Q: "Setelah website selesai, apakah otomatis muncul di halaman pertama Google?",
                faq17A: "Berada di halaman utama Google (SEO) merupakan proses berkelanjutan. Paket kami sudah mencakup optimasi SEO On-Page di awal sebagai fondasi agar mesin pencari (Google) lebih mudah melakukan indeks dan memberikan ranking ke depannya.",
                expTitle: "Dibalik Layar Zephytor",
                expDesc: "Kami adalah tim yang berdedikasi untuk mentransformasi bisnis Anda di dunia digital.",
                exp1Desc: "Membangun pondasi teknis yang kuat dan performa yang ultra-cepat.",
                exp2Desc: "Merancang visual premium yang memikat audiens target Anda.",
                exp3Desc: "Strategi konten dan alur konversi yang efektif meningkatkan ROI.",
                ctaTitle: "Siap Membangun Aset Digital?",
                ctaDesc: "Hubungi kami sekarang untuk mendapatkan website premium dengan penawaran terbaik.",
                ctaBtn: "Konsultasi Sekarang",
                auditTitle: "Audit UI/UX Website Kamu <span>Sekarang</span>",
                auditSub: "Masukkan URL website dan dapatkan laporan lengkap dalam hitungan detik.",
                newsTitle: "Dapatkan Insight Digital Bisnis Terkini",
                newsDesc: "Berlangganan newsletter kami untuk tips strategi digital & info promo eksklusif setiap minggunya.",
                btnSubscribe: "Langganan",
                footDesc: "Transformasi digital bisnis Indonesia dengan desain modern & performa tinggi.",
                foot1Title: "Layanan",
                foot2Title: "Dukungan",
                foot3Title: "Sosial Media"
            },
            en: {
                navInfo: "INFO",
                navLayanan: "SERVICES",
                navMvp: "MVP",
                navKontak: "CONTACT",
                btnMulai: "Start",
                faqBadge: "QUESTIONS",
                mvpBadge: "DELIVERY SPEED",
                mvpTitle: "MVP Ready in Hours",
                mvpDesc: "We move fast. From idea to usable product — no waiting months.",
                mvpSimpleTime: "< 3 Hours",
                mvpSimpleTitle: "Simple System",
                mvpSimpleDesc: "Landing page, company profile, or portfolio — your MVP is ready and launchable in under 3 hours.",
                mvpComplexTime: "< 1 Week",
                mvpComplexTitle: "Complex System",
                mvpComplexDesc: "Web app with custom features, dashboard, or API integrations — a functional MVP done in under 1 week. Enough to validate your market.",
                btnKonsultasi: "Free Consultation",
                heroBadge: "✨ March 2026 Slots Available",
                heroTitle: "Digitalize Your Business <span>Exactly as Promised.</span>",
                heroDesc: "We build professional digital infrastructure to streamline your operations. Without high upfront capital, get a premium website that convinces clients.",
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
                pkgRev: "Unlimited Free Revisions",
                pkg1Name: "Landing Page",
                pkg1Price: "$19",
                pkg1Desc: "1 Page • Suitable for short promotions",
                pkg1Feat1: "1 Responsive Page (Mobile Friendly)",
                pkg1Feat2: "Basic Persuasive Copywriting",
                pkg1Feat3: "Admin Dashboard Access",
                pkg1Feat4: "Social Media & Gallery Integration",
                pkgBest: "BEST SELLER",
                pkg3Name: "Premium Package",
                pkg3Price: "$220",
                pkg3Desc: "5 Pages • Best value for scaling up",
                pkg3Feat1: "5 Premium Pages (Home, About, etc)",
                pkg3Feat2: "Premium Sales Driven Copywriting",
                pkg3Feat3: "3 Integrated Business Emails",
                pkg3Feat4: "Full SEO Optimized (Ready to Rank)",
                pkg3Feat5: "Admin Guide Video Tutorial",
                pkg4Name: "Enterprise Package",
                pkg4Price: "$450+",
                pkg4Desc: "Unlimited Pages • Full custom solution",
                pkg4Feat1: "Exclusive UI/UX Independent Design",
                pkg4Feat2: "Custom Features (CMS / Filter / Database)",
                pkg4Feat3: "API / Payment Gateway Integration",
                pkg4Feat4: "PageSpeed 90+ Score Guaranteed",
                btnPesan: "Order Now",
                btnHubungi: "Contact Us",
                advBadge: "ADVANTAGES",
                advTitle: "OUR SERVICE ADVANTAGES",
                adv1: "Website integrated with Google Analytics and Google Search Console",
                adv2: "SEO friendly website",
                adv3: "3-page website can be completed in less than 3 hours",
                adv4: "Uses latest lightweight programming languages",
                adv5: "More stable system with minimum errors",
                adv6: "OUR PRICES ARE CHEAPER THAN COMPETITORS",
                portTitle: "Our Built Masterpieces",
                portCat1: "Interior Architecture",
                portCat2: "Cleaning Services",
                portCat3: "Digital Agency Profile",
                portCat4: "Water Solution Company",
                portVisit: "Visit Site →",
                testTitle: "What Our Clients Say",
                test1Quote: '"Our company profile website looks very professional now. New clients trust our business more. Thank you Zephytor!"',
                test1Role: "Founder, Tech Start-up",
                test2Quote: '"Landing page from Zephytor increased our ad conversion by 3x. Amazing ROI!"',
                test2Role: "Marketing Director",
                test3Quote: '"Fast execution and results exceeded expectations. Clean and modern design. Highly recommended!"',
                test3Role: "Creative Director",
                test4Quote: '"Truly blown away by the results! Our website now looks far more premium than our competitors. Clients say the website makes them more confident."',
                test4Role: "Owner, Kuliner Nusantara",
                test5Quote: '"The process was transparent and communication responsive. From brief to live in just 4 days. Results beyond expectation and all revisions handled without drama!"',
                test5Role: "CEO, Fashion Boutique",
                test6Quote: '"Best investment for my business. Online portfolio from Zephytor doubled new client inquiries in the first month. The design is incredibly premium!"',
                test6Role: "Photographer & Videographer",
                probTitle: "Why Do Many Businesses Fail to Go Digital?",
                probDesc: "Digitalization is not just about having a website, it's about efficiency and real results.",
                prob1Title: "Results Not as Expected",
                prob1Desc: "Most agencies limit revisions, often leading to a final product that doesn't meet your initial expectations.",
                prob2Title: "Rigid Design",
                prob2Desc: "Cheap templates that make your brand look unprofessional in the eyes of clients.",
                prob3Title: "Difficult to Manage",
                prob3Desc: "Complicated systems that make you constantly dependent on developers.",
                stepTitle: "How We Work",
                step1Title: "Strategy Consultation",
                step1Desc: "We dive deep into your business model to determine the most crucial features.",
                step2Title: "Exclusive Design",
                step2Desc: "UI/UX specifically designed to increase trust and conversion.",
                step3Title: "Development & Launch",
                step3Desc: "Fast coding process and maximum performance optimization before going live.",
                faqTitle: "Frequently Asked Questions",
                faq1Q: "What kind of websites \"can\" be created using this service?",
                faq1A: "We build various professional websites ranging from Company Profiles, Landing Pages, e-commerce sites, to Custom Web Apps for your business needs.",
                faq2Q: "What kind of websites \"cannot\" be created using this service?",
                faq2A: "We do not accept websites that violate the law (e.g., gambling, fraud, pornography).",
                faq3Q: "What if the website is done and needs revision?",
                faq3A: "Don't worry! We provide unlimited free revisions before your website goes live.",
                faq4Q: "What will the website look like?",
                faq4A: "The website design is exclusive (custom) and tailored to your brand identity. We do not use rigid generic templates, so your website will look unique and premium.",
                faq5Q: "Will a website logo be created later?",
                faq5A: "If you don't have a logo, we can assist with a basic logo for free. Premium logo design can be ordered separately.",
                faq6Q: "Can the website be edited by myself?",
                faq6A: "Yes, you will be given access to a user-friendly admin dashboard (CMS) so you can edit the content yourself without coding.",
                faq7Q: "Can I add new pages myself?",
                faq7A: "Yes, you can easily add pages via the CMS dashboard.",
                faq8Q: "Do I get a free domain in each package?",
                faq8A: "Currently, hosting and SSL are included for free for 1 year in all packages. Free domains (like .com, .id) are available for certain packages according to promotional terms.",
                faq9Q: "What is the hosting capacity of the website?",
                faq9A: "The capacity varies depending on the package you choose, ranging from an ideal standard capacity to unlimited resources for Custom App needs.",
                faq10Q: "Do I get a free SSL?",
                faq10A: "Of course, all our packages include a Free SSL Certificate to ensure your website's security at no additional cost.",
                faq11Q: "Will I get an email with my own domain name?",
                faq11A: "Certainly. Starting from specific packages, you already receive professional business emails (e.g., admin@yourdomain.com) ready for use.",
                faq12Q: "Can I add social media logos that link directly to my social media?",
                faq12A: "Yes, all packages include Social Media & Gallery Integration, allowing visitors to be directed straight to your social media platforms.",
                faq13Q: "Will there be a fee if I want help updating the website?",
                faq13A: "During the warranty/revision period (before final release), it's free. For ongoing routine updates, we provide affordable maintenance services (monthly/yearly).",
                faq14Q: "Can I change the template after the website is finished?",
                faq14A: "Because the website is built with a custom exclusive design, a total design overhaul after the project is considered complete will be treated as a redesign request with a separate fee.",
                faq15Q: "What is the content limit per page?",
                faq15A: "There are no strict limits as long as it doesn't hinder speed performance and User Experience. Our team will recommend the optimal page length for SEO and conversion targets.",
                faq16Q: "How is the number of multi-language pages calculated?",
                faq16A: "When including multiple languages, the primary language counts as the base page, while each translated duplicate counts as an additional page, typically handled within the Pro Custom package.",
                faq17Q: "After the website is finished, does it automatically appear on the first page of Google?",
                faq17A: "Appearing on Google's first page (SEO) is an ongoing process. Our packages already include initial On-Page SEO optimization to make it much easier for search engines (Google) to index and rank your site in the future.",
                expTitle: "Behind the Scenes of Zephytor",
                expDesc: "We are a team dedicated to transforming your business in the digital world.",
                exp1Desc: "Building a strong technical foundation and ultra-fast performance.",
                exp2Desc: "Designing premium visuals that captivate your target audience.",
                exp3Desc: "Content strategy and effective conversion flows to increase ROI.",
                ctaTitle: "Ready to Build Digital Assets?",
                ctaDesc: "Contact us now to get a premium website with the best offer.",
                ctaBtn: "Consult Now",
                auditTitle: "Audit Your Website's UI/UX <span>Now</span>",
                auditSub: "Enter your website URL and get a full report in seconds.",
                newsTitle: "Get Latest Digital Business Insights",
                newsDesc: "Subscribe to our newsletter for digital strategy tips & exclusive promo info every week.",
                btnSubscribe: "Subscribe",
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

        // Map each nav link to its target section element
        const navSections = Array.from(navLinks).map(link => {
            const href = link.getAttribute('href');
            return {
                link,
                section: href ? document.querySelector(href) : null
            };
        }).filter(item => item.section);

        function updateActiveNav() {
            // Show/hide floating nav
            if (window.scrollY > 300) floatingNav.classList.add('visible');
            else floatingNav.classList.remove('visible');

            // Find current active section based on scroll position
            // A nav section is "active" if we've scrolled past its top (minus offset)
            // The LAST one that matches wins (most recently entered)
            const scrollY = window.scrollY + window.innerHeight * 0.4;

            let activeLink = navSections[0]?.link; // default to first

            navSections.forEach(({ link, section }) => {
                if (section.offsetTop <= scrollY) {
                    activeLink = link;
                }
            });

            navLinks.forEach(link => link.classList.remove('active'));
            if (activeLink) activeLink.classList.add('active');
        }

        // Run on scroll and on load
        window.addEventListener('scroll', updateActiveNav, { passive: true });
        window.addEventListener('load', updateActiveNav);
        updateActiveNav();

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

        // FAQ Accordion Logic
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                const isActive = item.classList.contains('active');

                // Close all others
                document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('active'));

                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Scroll Progress Logic
        const progressBar = document.getElementById('scrollProgress');
        window.addEventListener('scroll', () => {
            const windisplay = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (windisplay / height) * 100;
            progressBar.style.height = scrolled + '%';
        });
    </script>
</body>

</html>