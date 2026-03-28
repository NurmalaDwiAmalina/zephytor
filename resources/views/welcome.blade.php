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

    <!-- SEO -->
    <link rel="canonical" href="https://www.zephytor.online/">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0f172a">
    <meta name="author" content="Zephytor">
    <meta name="keywords" content="jasa pembuatan website, website company profile, landing page, website portofolio, web developer Indonesia, digital agency">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.svg') }}?v=2">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ProfessionalService",
      "name": "Zephytor",
      "description": "Jasa pembuatan website Company Profile, Portofolio, dan Landing Page dengan desain eksklusif.",
      "url": "https://www.zephytor.online/",
      "image": "{{ asset('logo-baru.png') }}",
      "priceRange": "$$",
      "areaServed": "Indonesia",
      "serviceType": ["Website Development", "Company Profile", "Landing Page", "Portfolio Website"]
    }
    </script>

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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



    <!-- FLOATING LANG SWITCHER (top right) -->
    <div class="lang-switcher-top" id="langSwitcherTop">
        <button class="lang-btn active" onclick="setLanguage('id')">ID</button>
        <button class="lang-btn" onclick="setLanguage('en')">EN</button>
    </div>

    <!-- FLOATING NAV -->
    <nav class="floating-nav" id="floatingNav">
        <!-- Desktop Pill -->
        <div class="nav-pill-desktop">
            <div class="nav-logo-float"><span>Zephytor</span></div>
            <div class="lang-switcher-nav">
                <button class="lang-btn-nav active" onclick="setLanguage('id')">ID</button>
                <button class="lang-btn-nav" onclick="setLanguage('en')">EN</button>
            </div>
            <div class="nav-pill-sep"></div>
            @auth
                <a href="/dashboard" class="btn-mulai-pill">Dashboard</a>
            @else
                <a href="https://wa.me/6285892778882?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." class="btn-konsultasi-pill" target="_blank" data-i18n="btnMulai">Konsultasi</a>
                <a href="/login" class="btn-mulai-pill">Login</a>
            @endauth
        </div>

        <!-- Mobile Card -->
        <div class="nav-card-mobile">
            <div class="nav-handle"></div>
            <div class="nav-bottom-row">
                <div class="nav-bottom-left">
                    <a href="/" class="nav-logo-mini" style="text-decoration: none;"><span>Zephytor</span></a>
                    <div class="nav-menu-toggle" id="mobileMenuToggle">
                        <svg id="menuToggleIcon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                        <span>MENU</span>
                    </div>
                </div>
                <div class="nav-bottom-right">
                    <div class="nav-lang-switch">
                        <button class="lang-btn-nav active" onclick="setLanguage('id')">ID</button>
                        <button class="lang-btn-nav" onclick="setLanguage('en')">EN</button>
                    </div>
                    @auth
                        <a href="/dashboard" class="nav-btn-konsultasi">Dashboard</a>
                    @else
                        <a href="/login" class="nav-btn-konsultasi">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>



    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
            <div class="hero-content reveal">
                <div class="section-badge reveal-delay-1" data-i18n="heroBadge">🚀 Partner Transformasi Digital Terpercaya</div>
                <h1 class="reveal-delay-2" data-i18n="heroTitle">Digitalisasi Bisnis Anda <span>Sesuai Hasil Akhir.</span></h1>
                <p class="reveal-delay-3" data-i18n="heroDesc">Kami membangun infrastruktur digital profesional untuk merampingkan operasional
                    Anda. Tanpa modal
                    awal yang besar, dapatkan website premium yang meyakinkan klien.</p>
                <div class="hero-buttons reveal-delay-4">
                    <a href="https://wa.me/6285892778882?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." class="btn btn-primary btn-lg" data-i18n="heroBtn">Pesan
                        Website Sekarang</a>
                    <a href="#layanan" class="btn btn-outline btn-lg" data-i18n="navLayanan">Lihat Layanan</a>
                </div>


                <div class="hero-stats">
                    <div class="hero-stat-item">
                        <span class="hero-stat-num">50+</span>
                        <span class="hero-stat-label">Real Project Selesai</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat-item">
                        <span class="hero-stat-num">&lt; 48h</span>
                        <span class="hero-stat-label">MVP Delivery</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-wrap floating">
                    <img src="{{ asset('images/premium_website_mockup.png') }}" alt="Premium Project Preview" style="width: 100%; border-radius: 32px; box-shadow: 0 40px 100px rgba(0,0,0,0.15); border: 1px solid rgba(255,255,255,0.3);">
                    <div class="card-stat">
                        <h2 style="font-size: 2.2rem; margin-bottom: 4px;">99%</h2>
                        <p style="font-size: 0.8rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Uptime & Speed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- UI/UX CHECKER SECTION -->
    <section class="checker-section" id="hero-checker">
        <div class="checker-grid-bg"></div>
        <div class="container">
            <div class="checker-card reveal">
                <div class="checker-card-glow"></div>
                <div class="checker-header">
                    <span class="checker-badge">✦ Instant Analysis</span>
                    <h2 class="checker-title" data-i18n="auditTitle">Yakin UI/UX Website Kamu <span>Sudah Bagus?</span></h2>
                    <p class="checker-sub" data-i18n="auditSub">Dapatkan analisis mendalam berdasarkan standar industri UX global dalam hitungan detik.</p>
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
                    <p class="checker-law-note" style="margin-top: 20px; font-size: 0.8rem; opacity: 0.6; line-height: 1.5;" data-i18n="auditNote">
                        *Evaluasi menggunakan standar 10 Usability Heuristics & Jakob's Law dari Nielsen Norman Group untuk menjamin kenyamanan pengunjung kamu.
                    </p>
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
                <div class="service-card reveal reveal-delay-1" data-number="01">
                    <div class="service-icon">❌</div>
                    <h3 data-i18n="prob1Title">Hasil Tidak Sesuai</h3>
                    <p data-i18n="prob1Desc">Kebanyakan agency membatasi revisi sehingga hasil akhir seringkali tidak
                        sesuai dengan ekspektasi awal Anda.</p>
                </div>
                <div class="service-card reveal reveal-delay-2" data-number="02">
                    <div class="service-icon">❌</div>
                    <h3 data-i18n="prob2Title">Desain Kaku</h3>
                    <p data-i18n="prob2Desc">Template murahan yang membuat brand Anda terlihat tidak profesional di mata
                        klien.</p>
                </div>
                <div class="service-card reveal reveal-delay-3" data-number="03">
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
                <div class="section-badge" data-i18n="navLayanan">LAYANAN</div>
                <h2 class="section-title" data-i18n="layananTitle">Solusi Bisnis Digital</h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="layananDesc">Kami bukan sekadar membuat website, kami membangun identitas brand Anda di internet.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal reveal-delay-1">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg></div>
                    <h3 data-i18n="srv1Title">Company Profile</h3>
                    <p data-i18n="srv1Desc">Website profesional untuk membangun kepercayaan klien dan investor dalam waktu singkat.</p>
                </div>
                <div class="service-card reveal reveal-delay-2">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg></div>
                    <h3 data-i18n="srv2Title">Landing Page</h3>
                    <p data-i18n="srv2Desc">Satu halaman dengan fokus konversi tinggi. Sangat cocok untuk iklan Google & Meta Ads.</p>
                </div>
                <div class="service-card reveal reveal-delay-3">
                    <div class="service-icon"><svg width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                        </svg></div>
                    <h3 data-i18n="srv3Title">Custom Web App</h3>
                    <p data-i18n="srv3Desc">Solusi fitur khusus dengan sistem manajemen mandiri (CMS) sesuai kebutuhan spesifik bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    </section>

    <!-- SHOWCASE HASIL KERJA -->
    <section id="hasil-kerja" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="showTitle">Liat Nih, Hasilnya Sekeren Apa 👀</h2>
                <p class="mx-auto" style="max-width: 600px;" data-i18n="showDesc">Gak pake ribet urusan desain kaku, brand kamu langsung kelihatan kece dan profesional.</p>
            </div>
            
            <div class="showcase-grid" style="grid-template-columns: 1fr; max-width: 800px; margin-inline: auto;">
                <!-- Main Showcase ONLY -->
                <div class="showcase-item reveal showcase-featured">
                    <div class="showcase-img">
                        <img src="{{ asset('images/trio_mockups.png') }}" alt="Main Showcase">
                    </div>
                    <div class="showcase-info text-center">
                        <h3 data-i18n="show2Title">Berbagai Niche Lainnya ✨</h3>
                        <p data-i18n="show2Desc">Desain premium yang fleksibel untuk segala jenis bisnis kamu.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 60px;">
                <p style="font-size: 1.25rem; font-weight: 800; margin-bottom: 24px;" data-i18n="showCtaText">Mau punya tampilan yang se-premium ini juga? 🤫</p>
                <a href="https://wa.me/6285892778882?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." class="btn btn-primary btn-lg" data-i18n="showBtn">Pilih Paket Kamu Sekarang →</a>
            </div>
        </div>
    </section>

    <!-- ALUR KERJA -->
    <section id="alur-kerja">
        <div class="container">
            <div class="section-header text-center reveal">
                <div class="section-badge" data-i18n="stepBadge">WORKFLOW</div>
                <h2 class="section-title" data-i18n="stepTitle">Cara Kami Bekerja</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal reveal-delay-1" data-number="01">
                    <div class="service-icon">01</div>
                    <h3 data-i18n="step1Title">Konsultasi Strategi</h3>
                    <p data-i18n="step1Desc">Kami mendalami model bisnis Anda untuk menentukan fitur yang paling krusial.</p>
                </div>
                <div class="service-card reveal reveal-delay-2" data-number="02">
                    <div class="service-icon">02</div>
                    <h3 data-i18n="step2Title">Desain Eksklusif</h3>
                    <p data-i18n="step2Desc">UI/UX yang dirancang khusus untuk meningkatkan kepercayaan dan konversi.</p>
                </div>
                <div class="service-card reveal reveal-delay-3" data-number="03">
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
                <div class="adv-item reveal reveal-delay-1">
                    <div class="adv-icon">📈</div>
                    <p data-i18n="adv1">Website sudah terintegrasi dengan Google Analytics dan Google Search Console</p>
                </div>
                <div class="adv-item reveal reveal-delay-2">
                    <div class="adv-icon">🔍</div>
                    <p data-i18n="adv2">Website SEO friendly</p>
                </div>
                <div class="adv-item reveal reveal-delay-3">
                    <div class="adv-icon">⚡</div>
                    <p data-i18n="adv3">Website 3 halaman bisa selesai kurang dari 3 jam</p>
                </div>
                <div class="adv-item reveal reveal-delay-4">
                    <div class="adv-icon">💻</div>
                    <p data-i18n="adv4">Menggunakan bahasa pemrograman terbaru yang ringan</p>
                </div>
                <div class="adv-item reveal reveal-delay-1">
                    <div class="adv-icon">🛡️</div>
                    <p data-i18n="adv5">Sistem lebih stabil dan minim error</p>
                </div>
                <div class="adv-item reveal reveal-delay-2">
                    <div class="adv-icon">💰</div>
                    <p data-i18n="adv6">Harga yang kami tawarkan lebih murah dibandingkan kompetitor</p>
                </div>
            </div>
    </section>
    
    <!-- HARGA -->
    <section id="harga" class="section-alt">
        <div class="container">
            <div class="section-header text-center reveal">
                <h2 class="section-title" data-i18n="hargaTitle">Pilih Paket Investasi</h2>
                <p data-i18n="hargaDesc">Sesuai dengan skala dan target gol bisnis Anda.</p>
            </div>
            <div class="pricing-grid">
                <!-- Paket 1 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg1Name">Landing Page</div>
                    <div class="price-val" data-i18n="pkg1Price">Rp 300rb</div>
                    <div class="price-desc" data-i18n="pkg1Desc">Cocok untuk sales, personal branding individual, dkk</div>
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
                            </svg> <span data-i18n="pkg1Feat5">Gratis Domain .online / .site</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg1Rev">Garansi 1 Bulan</span></li>
                    </ul>
                    <a href="/dashboard/orders/create?package_id=1" class="btn btn-outline"
                        data-i18n="btnPilih">Pesan Sekarang</a>
                </div>
                <!-- Paket 2 -->
                <div class="price-card popular reveal">
                    <div class="popular-badge" data-i18n="pkgBest">TERLARIS</div>
                    <div class="plan-name" data-i18n="pkg3Name">Paket Premium</div>
                    <div class="price-val" data-i18n="pkg3Price">Rp 3.5jt</div>
                    <div class="price-desc" data-i18n="pkg3Desc">Cocok untuk sales top achiever & bisnis umkm</div>
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
                            </svg> <span data-i18n="pkg3Feat6">Gratis Domain .com, .co.id, .id</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg3Rev">Garansi 3 Bulan</span></li>
                    </ul>
                    <a href="/dashboard/orders/create?package_id=2" class="btn btn-primary"
                        data-i18n="btnPilih">Pesan Sekarang</a>
                </div>
                <!-- Paket 3 -->
                <div class="price-card reveal">
                    <div class="plan-name" data-i18n="pkg4Name">Paket Enterprise</div>
                    <div class="price-val price-custom-text" style="font-size: 1.8rem; font-weight: 800; margin: 30px 0; line-height: 1.2; letter-spacing: -1px; min-height: 110px; display: flex; align-items: center; justify-content: center;" data-i18n="pkg4Desc">Harga Menyesuaikan Kebutuhan</div>
                    <ul>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat1">Unlimited Halaman (Custom)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat2">Desain Eksklusif UI/UX Mandiri</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat3">Fitur Custom (CMS / Filter / Database)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat4">Integrasi API / Payment Gateway (Syarat NIB/Legalitas)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat5">Jaminan PageSpeed 90+ Score</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat6">Premium Sales Driven Copywriting</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat7">Email Bisnis Terintegrasi</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat8">Full SEO Optimized (Ready to Rank)</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat9">Video Tutorial Panduan Admin</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Feat10">Gratis Domain .com, .co.id, .id</span></li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg> <span data-i18n="pkg4Rev">Garansi 12 Bulan</span></li>
                    </ul>
                    <a href="/dashboard/orders/create?package_id=3" class="btn btn-outline"
                        data-i18n="btnHubungi">Pesan Sekarang</a>
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
                <h2 class="section-title" data-i18n="testTitle">Apa Kata Klien Kami</h2>
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
                <a href="https://wa.me/6285892778882?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." class="btn btn-white btn-lg cta-btn-fix" data-i18n="ctaBtn">Chat WhatsApp Sekarang</a>
            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-giant-text">ZEPHYTOR</div>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#" class="nav-logo">
                        <span style="font-family: var(--font-h); font-size: 24px; font-weight: 900; color: var(--logo-color); letter-spacing: -1.2px;">Zephytor</span>
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
                        <li><a href="/kontak" data-i18n="navKontak">Kontak Kami</a></li>
                        <li><a href="https://wa.me/6285892778882?text=Halo%20Zephytor,%20saya%20mau%20tanya-tanya%20nih%20seputar%20pembuatan%20website." data-i18n="btnKonsultasi">Konsultasi Gratis</a></li>
                        <li><a href="mailto:zephytor@gmail.com">zephytor@gmail.com</a></li>
                    </ul>
                </div>
                <div>
                    <h4 data-i18n="foot3Title">Sosial Media</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/zephytor?igsh=cHBjNXJzMXcyeHln" target="_blank">Instagram</a></li>
                        <li><a href="https://www.tiktok.com/@zephytor?_r=1&_t=ZS-94nTYfDMvXV" target="_blank">TikTok</a></li>
                        <li><a href="https://www.facebook.com/share/1CVboN13Nm/" target="_blank">Facebook</a></li>
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
                navAudit: "AUDIT",
                navLayanan: "LAYANAN",
                navMvp: "MVP",
                navPaket: "PAKET",
                navKontak: "KONTAK",
                btnMulai: "Konsultasi",
                faqBadge: "TANYA JAWAB",
                mvpBadge: "KILAT & RAPI",
                mvpTitle: "Berhenti Buang Waktu Berbulan-bulan.",
                mvpDesc: "Dapetin versi rilis performa MVP cepet! Desain premium, siap kelar dalam jam-jaman doang, ga pake numpuk delay.",
                mvpSimpleTime: "< 3 Jam",
                mvpSimpleTitle: "Sistem Simple",
                mvpSimpleDesc: "Butuh landing page buat jualan cepat? Kita rakitin lengkap langsung siap online kurang dari 3 jam.",
                mvpComplexTime: "< 1 Minggu",
                mvpComplexTitle: "Sistem Kompleks",
                mvpComplexDesc: "Aplikasi custom buat tes pasar MVP? Maksimal seminggu udah kelar dibuild dari dasar buat validasi idemu.",
                stepBadge: "ALUR FRAMEWORK KITA",
                btnKonsultasi: "Konsultasi Gratis",
                heroBadge: "🚀 Berhenti Menebak, Mulai Go-Digital yang Tepat",
                heroTitle: "Bikin Website yang Didesain Buat Jualan, Biar Kamu Fokus Closing. 🚀",
                heroDesc: "Gak pake ribet urusan desain & coding. Kita buatkan website premium dengan alur copywriting yang 'nge-hook' buat brand kamu.",
                layananTitle: "Layanan Kita Bisa Buat Apa Aja? 🤔",
                layananDesc: "Kita nggak cuma ngerjain coding. Ada framework teruji di balik setiap website yang kita buat untuk ningkatin konversi brand kamu.",
                srv1Title: "Profil Perusahaan Kece",
                srv1Desc: "Bikin klien ngerasa 'wow' dan investor makin yakin sama brand lo. Profesional & Berwibawa.",
                srv2Title: "Landing Page Juara",
                srv2Desc: "Fokus buat satu hal aja: JUALAN. Dirancang khusus buat lo yang main Ads (Google/Meta).",
                srv3Title: "Sistem Custom Lo",
                srv3Desc: "Punya ide sistem khusus? Kita rakitin dashboard admin yang super simpel & tinggal pakai.",
                hargaTitle: "Investasi Buat Aset Digitalmu",
                pkg1Desc: "Pas buat sales, personal branding, atau kamu yang baru mau mulai jualan online.",
                pkg1Feat1: "1 Halaman Responsif (Cakep di HP)",
                pkg1Feat2: "Framework Copywriting (Gak Asal Tulis)",
                pkg1Feat3: "Halaman Admin (Gampang Edit Sendiri)",
                pkg1Feat4: "Tombol WhatsApp & Link Sosmed",
                pkg1Feat5: "Gratis Domain .online / .site",
                pkg1Rev: "Garansi Full 1 Bulan",
                pkgBest: "TERLARIS",
                pkg3Name: "Paket Premium",
                pkg3Price: "Rp 3.5jt",
                pkg3Desc: "Pilihan terbaik buat UMKM & Sales Top Achiever yang mau kelihatan eksklusif.",
                pkg3Feat1: "5 Halaman Premium (Bikin Brand Mahal)",
                pkg3Feat2: "High-Conversion Sales Copywriting",
                pkg3Feat3: "3 Email Bisnis (admin@namamu.com)",
                pkg3Feat4: "SEO Dasar (Biar Gampang Dicari)",
                pkg3Feat5: "Video Tutorial (Anti Bingung)",
                pkg3Feat6: "Gratis Domain .com, .id, atau .co.id",
                pkg3Rev: "Garansi Full 3 Bulan",
                pkg4Name: "Paket Enterprise",
                pkg4Price: "",
                pkg4Desc: "Harga Menyesuaikan Kebutuhan",
                pkg4Feat1: "Bebas Nambah Halaman (Custom)",
                pkg4Feat2: "Desain Eksklusif Dari Nol (Bukan Template)",
                pkg4Feat3: "Fitur Custom (Filter, Database, dll)",
                pkg4Feat4: "Sistem Payment & API (Syarat NIB/Legalitas)",
                pkg4Feat5: "Loading Super Ngebut (PageSpeed 90+)",
                pkg4Feat6: "Premium Content & Framework Jualan",
                pkg4Feat7: "Email Bisnis Unlimited",
                pkg4Feat8: "Full SEO (Siap Nongkrong di Google)",
                pkg4Feat9: "Video Panduan Eksklusif",
                pkg4Feat10: "Gratis Domain .com / .id / .co.id",
                pkg4Rev: "Garansi Full 12 Bulan",
                btnPesan: "Pesan Sekarang",
                btnPilih: "Pilih Paket Ini",
                btnHubungi: "Konsultasi Sekarang",
                advBadge: "KENAPA KITA?",
                advTitle: "NILAI LEBIH ZEPHYTOR",
                adv1: "Website udah nyambung langsung ke Google Analytics & Search Console",
                adv2: "Strukturnya rapi & SEO Friendly banget",
                adv3: "Web 3 halaman bisa live kurang dari 3 jam",
                adv4: "Pake teknologi terbaru yang bikin loadingnya super enteng",
                adv6: "Harga lebih masuk akal dibanding agensi lain dengan kualitas setara",
                showTitle: "Liat Nih, Hasilnya Sekeren Apa 👀",
                showDesc: "Gak pake skill desain kaku, brand kamu langsung kelihatan kece dan profesional.",
                show1Title: "Niche Kuliner & FnB 🍔",
                show1Desc: "Visual yang bikin laper & tombol order yang gampang diklik.",
                show2Title: "Berbagai Niche Lainnya ✨",
                show2Desc: "Desain premium yang fleksibel untuk segala jenis bisnis lo.",
                show3Title: "Personal Branding 🤳",
                show3Desc: "Eksklusif, bersih, dan langsung ningkatin kredibilitas kamu.",
                showCtaText: "Mau punya tampilan yang se-premium ini juga? 🤫",
                showBtn: "Pilih Paket Kamu Sekarang →",
                showPriceLabel: "INVESTASI TERJANGKAU",
                showPriceVal: "RP 300rb",
                promoHookTitle: "Website ini bikin lo kepikiran buat beli bukan karena desain asal-asalan.",
                promoHookDesc: "Ada framework + alur copywriting di baliknya. Nah, kita bisa rakitin juga buat bisnismu sekarang. 😍",
                promoHookBtn: "Gass Kita Eksekusi 🚀",
                navLayanan: "LIHAT HASIL",
                navPaket: "PAKET",
                hargaTitle: "Pilih Cara Kamu Buat Go-Digital 🤔",
                testTitle: "Banyak orang yang puas dan terbantu sama Zephytor ⭐⭐⭐⭐⭐",
                test1Quote: '"Website profile kita jadi kelihatan mahal banget. Klien baru makin percaya. Gokil emang Zephytor!"',
                test1Role: "Founder, Tech Start-up",
                test2Quote: '"Landing page-nya beneran ningkatin konversi iklan sampe 3x lipat. ROI-nya liar!"',
                test2Role: "Marketing Director",
                test3Quote: '"Kerjaannya cepet dan hasilnya di luar prediksi. Desainnya clean & modern banget. Recommended!"',
                test3Role: "Creative Director",
                test4Quote: '"Serius kaget sama hasilnya! Web kita sekarang jauh lebih premium dari kompetitor. Klien langsung yakin."',
                test4Role: "Owner, Kuliner Nusantara",
                test5Quote: '"Prosesnya transparan & responsif. Dari brief sampe live cuma 4 hari. Hasilnya beyond expectation!"',
                test5Role: "CEO, Butik Fashion",
                test6Quote: '"Investasi terbaik buat bisnis gue. Portofolio online langsung ningkatin inquiry klien baru 2x lipat."',
                test6Role: "Fotografer & Videografer",
                probTitle: "Sering Ngadepin Hal Ini? 😩",
                probDesc: "Niat launching produk, eh stuck di halaman penawaran. Tenang, kita bantuin urus semuanya.",
                prob1Title: "Ide Mentok, Halaman Gak Jadi",
                prob1Desc: "Bingung mulai dari mana, hasil desain 'pas-pasan' dan kurang meyakinkan buat calon klien.",
                prob2Title: "Desain Kaku & Gak Jelas",
                prob2Desc: "Template murahan yang bikin brand kamu kelihatan gak profesional di mata klien premium.",
                prob3Title: "Urusan Teknis yang Ribet",
                prob3Desc: "Pusing tiap manu ganti isi web? Sistem kita tinggal klik-klik aja, gak pake ribet.",
                stepTitle: "Liat nih, cara kita kerjainnya segampang ini 🤫",
                step1Title: "Bedah Strategi & Copy",
                step1Desc: "Kita dalami model bisnismu buat nentuin alur jualan yang paling 'nge-hook' buat pelanggan.",
                step2Title: "Desain Premium Eksklusif",
                step2Desc: "Kita gabungin copy jualan tadi bareng desain responsif yang kerasa mahal dan eksklusif.",
                step3Title: "Launching Kilat, Langsung Close",
                step3Desc: "Proses develop beres, sistem kenceng banget. Aset digital kamu kelar dan tinggal dipake aja buat dapet sales.",
                faqTitle: "Yang Sering Ditanyain",
                faq1Q: "Jenis website apa aja yang \"bisa\" dibikin di sini?",
                faq1A: "Kita bisa bantuin bikin berbagai website profesional. Mulai dari Company Profile, Landing Page, e-commerce, sampai Custom Web App buat kebutuhan spesifik bisnis kamu.",
                faq2Q: "Terus, website apa yang \"nggak bisa\" dibikin?",
                faq2A: "Kita nggak nerima project untuk situs judi online, penipuan, pornografi, atau hal-hal lain yang melanggar ketentuan hukum di Indonesia ya.",
                faq3Q: "Kalau webnya udah jadi, boleh minta revisi nggak?",
                faq3A: "Boleh banget dong! Kita kasih kamu fasilitas revisi sepuasnya secara gratis sampai kamu bener-bener sreg sama hasilnya sebelum kita launching.",
                faq4Q: "Nanti tampilan desainnya bakal kayak gimana?",
                faq4A: "Web kamu bakal kita desain custom dan spesifik nyocokin sama identitas brand kamu. Kita nggak pake template pasaran, jadi web kamu bakal kelihatan premium dan nggak ada duanya.",
                faq5Q: "Kalau belum punya logo, dibuatin juga nggak?",
                faq5A: "Kalau belum punya, kita bisa buatin desain logo simpel secara gratis. Tapi kalau mau dapet desain logo yang lebih premium, kamu bisa nambah dikit aja buat layanannya.",
                faq6Q: "Nanti teks sama fotonya bisa aku edit sendiri?",
                faq6A: "Pasti! Setiap web udah kita lengkapi sama halaman admin (CMS) yang gampang banget dipake. Kamu bisa ubah isi web sendiri kapan aja tanpa perlu jago coding.",
                faq7Q: "Bisa nambah halaman baru sendiri nggak?",
                faq7A: "Bisa banget, kamu tinggal nambahin aja lewat dashboard admin yang kita sediain.",
                faq8Q: "Udah dapet domain gratis di tiap paket?",
                faq8A: "Saat ini hosting dan SSL udah gratis setahun untuk semua paket. Kalau buat domain (kayak .com, .co.id, .id, .online, .site), itu juga free di paket-paket tertentu. Tergantung promonya.",
                faq9Q: "Kapasitas hostingnya seberapa gede?",
                faq9A: "Tergantung paket yang kamu pilih. Ada yang kapasitasnya pas buat web standar, sampai yang resource-nya unlimited buat kamu yang butuh Custom App gede.",
                faq10Q: "Udah termasuk keamanan SSL belum?",
                faq10A: "Udah dong! Kita pastiin pengunjung web kamu ngerasa aman pake perlindungan Free SSL Certificate tanpa tambahan biaya sedikitpun.",
                faq11Q: "Dapet email pake nama domain aku sendiri nggak (misal: admin@namamu.com)?",
                faq11A: "Iyap. Kalau ambil paket Premium ke atas, kamu udah langsung dapet email bisnis profesional yang siap dipake biar kelihatan makin kredibel.",
                faq12Q: "Bisa nyambungin logo medsos ke IG/TikTok aku nggak?",
                faq12A: "Bisa banget, pengunjung bakal bisa langsung kepoin platform medsos kamu.",
                faq13Q: "Kalau mau minta tolong update konten, bayar lagi nggak?",
                faq13A: "Selama masih masa garansi atau sebelum live, itu free. Tapi kalau nanti webnya udah lama rilis dan butuh update rutin, kita sedia layanan maintenance bulanan yang ramah di kantong.",
                faq14Q: "Kalau webnya udah jadi, boleh minta rombak desain dari nol?",
                faq14A: "Karena desainnya kita custom khusus buat kamu dari awal, kalau minta rombak total waktu kelar dikerjain, itu masuknya ke project redesign dengan hitungan terpisah ya.",
                faq15Q: "Ada batasan konten atau gambar di satu halaman?",
                faq15A: "Nggak ada batasan kaku sih, yang penting nggak bikin lemot atau bikin pengunjung bingung aja. Tim kita siap ngasih tau seberapa panjang konten yang pas buat target konversi SEO kamu.",
                faq16Q: "Gimana kalau webnya mau dibikin 2 bahasa?",
                faq16A: "Kalau pake multi-bahasa, bahasa utamanya dihitung satu halaman, dan translasi bahasanya itu diitung halaman ekstra. Biasanya kita kerjain pakai paket Pro Custom.",
                faq17Q: "Webnya nanti bisa langsung muncul di nomor 1 Google?",
                faq17A: "Biar bisa nongkrong di halaman depan Google itu butuh waktu. Tapi tenang, di paket kita udah termasuk setup SEO On-Page supaya Google jadi gampang ngebaca web kamu ke depannya.",
                expTitle: "Dibalik Layar Zephytor",
                expDesc: "Kita bukan sekadar tim biasa, tapi partner yang bener-bener peduli buat ningkatin bisnis kamu.",
                exp1Desc: "Bikin pondasi teknis yang solid plus performa yang nggak lemot.",
                exp2Desc: "Ngeracik desain premium yang bikin klien langsung ngerasa 'wow'.",
                exp3Desc: "Susun kalimat & tata letak yang emang terbukti ningkatin closingan kamu.",
                ctaTitle: "Udah Siap Go-Digital Dengan Bener?",
                ctaDesc: "Yuk ngobrol bareng tim kita sekarang, tanya-tanya dulu aja nggak apa-apa kok!",
                ctaBtn: "Chat Kita Sekarang",
                auditTitle: "Yakin UI/UX Website Kamu <span>Sudah Bagus?</span>",
                auditSub: "Dapatkan analisis mendalam berdasarkan standar industri UX global dalam hitungan detik.",
                auditNote: "*Evaluasi menggunakan standar 10 Usability Heuristics & Jakob's Law dari Nielsen Norman Group untuk menjamin kenyamanan pengunjung kamu.",

                footDesc: "Transformasi digital bisnis Indonesia dengan desain modern & performa tinggi.",
                foot1Title: "Layanan",
                foot2Title: "Dukungan",
                foot3Title: "Sosial Media"
            },
            en: {
                navInfo: "INFO",
                navAudit: "AUDIT",
                navLayanan: "SERVICES",
                navMvp: "MVP",
                navPaket: "PRICING",
                navKontak: "CONTACT",
                btnMulai: "Consult",
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
                stepBadge: "WORKFLOW",
                btnKonsultasi: "Free Consultation",
                heroBadge: "🚀 Trusted Digital Transformation Partner",
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
                pkg1Desc: "Perfect for sales & personal branding individuals",
                pkg1Feat1: "1 Responsive Page (Mobile Friendly)",
                pkg1Feat2: "Basic Persuasive Copywriting",
                pkg1Feat3: "Admin Dashboard Access",
                pkg1Feat4: "Social Media & Gallery Integration",
                pkg1Feat5: "Free .online / .site Domain",
                pkg1Rev: "1 Month Guarantee",
                pkgBest: "BEST SELLER",
                pkg3Name: "Premium Package",
                pkg3Price: "$220",
                pkg3Desc: "Perfect for top achiever sales & SME business",
                pkg3Feat1: "5 Premium Pages (Home, About, etc)",
                pkg3Feat2: "Premium Sales Driven Copywriting",
                pkg3Feat3: "3 Integrated Business Emails",
                pkg3Feat4: "Full SEO Optimized (Ready to Rank)",
                pkg3Feat5: "Admin Guide Video Tutorial",
                pkg3Feat6: "Free .com, .co.id, .id Domain",
                pkg3Rev: "3 Months Guarantee",
                pkg4Name: "Enterprise Package",
                pkg4Price: "",
                pkg4Desc: "Price Tailored to Your Needs",
                pkg4Feat1: "Unlimited Pages (Custom)",
                pkg4Feat2: "Exclusive UI/UX Independent Design",
                pkg4Feat3: "Custom Features (CMS / Filter / Database)",
                pkg4Feat4: "API / Payment Gateway Integration (Legal/NIB Req)",
                pkg4Feat5: "PageSpeed 90+ Score Guaranteed",
                pkg4Feat6: "Premium Sales Driven Copywriting",
                pkg4Feat7: "Integrated Business Emails",
                pkg4Feat8: "Full SEO Optimized (Ready to Rank)",
                pkg4Feat9: "Admin Guide Video Tutorial",
                pkg4Feat10: "Free .com, .co.id, .id Domain",
                pkg4Rev: "12 Months Guarantee",
                btnPesan: "Order Now",
                btnPilih: "Choose This Package",
                btnHubungi: "Consult Now",
                advBadge: "ADVANTAGES",
                advTitle: "OUR SERVICE ADVANTAGES",
                adv1: "Website integrated with Google Analytics and Google Search Console",
                adv2: "SEO friendly website",
                adv3: "3-page website can be completed in less than 3 hours",
                adv4: "Uses latest lightweight programming languages",
                adv5: "More stable system with minimum errors",
                adv6: "Our prices are cheaper than competitors",
                showTitle: "See What Our Results Look Like 👀",
                showDesc: "Without rigid design skills, your brand instantly looks professional and premium.",
                show1Title: "Food & Beverage Niche 🍔",
                show1Desc: "Visuals that make visitors hungry & an easy order button.",
                show2Title: "Various Other Niches ✨",
                show2Desc: "Premium flexible design for any type of business.",
                show3Title: "Personal Branding 🤳",
                show3Desc: "Exclusive, clean, and instantly boosts your credibility.",
                showCtaText: "Want a display this premium too? 🤫",
                showBtn: "Choose Your Package Now →",
                showPriceLabel: "AFFORDABLE INVESTMENT",
                showPriceVal: "IDR 300K",
                promoHookTitle: "This landing page makes you think about buying, not because of random design.",
                promoHookDesc: "There is a framework + copywriting flow behind it. We can build one for your business right now. 😍",
                promoHookBtn: "Let's Execute This 🚀",
                promoBadge: "🔥 LIMITED OFFER",
                promoTitle: "This Landing Page makes you think about buying <span>not because of random words.</span>",
                promoDesc: "There is a framework + word flow behind it. Now, we present premium design with a neat structure — you just use it for your own sale. 😍",
                promoPriceLabel: "Investment Starting From",
                promoPrice: "IDR 300,000",
                promoBtn: "Get This Offer Now →",

                navLayanan: "RESULTS",
                navPaket: "PRICING",
                hargaTitle: "Choose Your Path to Go Digital 🤔",
                testTitle: "Many people are satisfied and helped by Zephytor ⭐⭐⭐⭐⭐",
                port1Title: "Daiji Design",
                port1Desc: "Premium interior architecture design that combines modern aesthetics with optimal spatial functionality.",
                port2Title: "Cuci Sepatu Pro",
                port2Desc: "Premium shoe cleaning service platform with online booking system and real-time processing status tracking.",
                port3Title: "InDepth Mental Wellness",
                port3Desc: "Premium Hypnotherapy Clinic Semarang. Private Sessions. Short. Real Impact. Some seek therapy. Others choose directed change. InDepth Mental Wellness presents private hypnotherapy experience with exclusive approach, professional system, and clear outcome evaluation in one structured session.",
                port4Title: "Tirta Bhumi",
                port4Desc: "Grow Faster, Digitalize Better with Tirta Bhumi Indonesia. We are a trusted Digital Services, IT Infrastructure, and Procurement company. We help your business Go Digital, manage internet networks, and fulfill office operational needs with ease.",
                portCat1: "Interior Architecture",
                portCat2: "Cleaning Services",
                portCat3: "Healthcare & Mental Wellness",
                portCat4: "IT Infrastructure & Procurement",
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
                auditSub: "Get in-depth analysis based on global UX industry standards in seconds.",
                auditNote: "*Evaluation uses 10 Usability Heuristics & Jakob's Law standards from Nielsen Norman Group to ensure your visitors' comfort.",

                footDesc: "Digital transformation for Indonesian businesses with modern design & high performance.",
                foot1Title: "Services",
                foot2Title: "Support",
                foot3Title: "Social Media"
            }
        };

        function setLanguage(lang) {
            localStorage.setItem('lang', lang);

            // Update all lang buttons
            document.querySelectorAll('.lang-btn-nav').forEach(btn => {
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

        // Theme logic removed per request

        // Reveal Observer (Scroll Animations)
        const reveals = document.querySelectorAll('.reveal');
        const observerOptions = {
            threshold: 0.05,
            rootMargin: '0px 0px -50px 0px'
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        reveals.forEach(r => {
            // If element is already in viewport on load, show it immediately
            if (r.getBoundingClientRect().top < window.innerHeight) {
                r.classList.add('visible');
            } else {
                revealObserver.observe(r);
            }
        });

        // Fallback for older browsers or if observer fails
        if (!window.IntersectionObserver) {
            reveals.forEach(r => r.classList.add('visible'));
        }

        // Floating Nav & Top Nav logic
        const floatingNav = document.getElementById('floatingNav');
        const navLinks = document.querySelectorAll('.nav-pill-desktop a:not(.btn-mulai-pill), .nav-item-big, .nav-menu .nav-link-item');

        // Map each nav link to its target section element
        const navSections = Array.from(navLinks).map(link => {
            const href = link.getAttribute('href');
            let section = null;
            try {
                if (href && href.startsWith('#')) {
                    section = document.querySelector(href);
                }
            } catch (e) {}
            return { link, section };
        }).filter(item => item.section);

        function updateActiveNav() {
            const floatingNav = document.getElementById('floatingNav');
            const langSwitcherTop = document.getElementById('langSwitcherTop');
            
            // Floating nav is now always visible from start as per user request
            floatingNav.classList.add('visible');
            
            if (window.scrollY > -1) { // Always true
                if (langSwitcherTop) langSwitcherTop.classList.add('scrolled');
            } else {
                if (langSwitcherTop) langSwitcherTop.classList.remove('scrolled');
            }

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
                const targetId = this.getAttribute('href');
                if (targetId && targetId.startsWith('#')) {
                    e.preventDefault();
                    try {
                        const target = document.querySelector(targetId);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth' });
                            navLinks.forEach(link => link.classList.remove('active'));
                            this.classList.add('active');
                        }
                    } catch (err) {}
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

        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navCardMobile = document.querySelector('.nav-card-mobile');
        const menuToggleIcon = document.getElementById('menuToggleIcon');

        if (mobileMenuToggle) {
            const navHandle = document.querySelector('.nav-handle');

            mobileMenuToggle.addEventListener('click', () => {
                navCardMobile.classList.toggle('expanded');
                menuToggleIcon.style.transform = navCardMobile.classList.contains('expanded') ? 'rotate(180deg)' : 'rotate(0deg)';
            });

            if (navHandle) {
                navHandle.addEventListener('click', () => {
                    navCardMobile.classList.toggle('expanded');
                    menuToggleIcon.style.transform = navCardMobile.classList.contains('expanded') ? 'rotate(180deg)' : 'rotate(0deg)';
                });
            }

            // Handle & Card Swipe logic
            let startY = 0;
            let currentY = 0;

            const onTouchStart = (e) => {
                startY = e.touches[0].pageY;
            };

            const onTouchMove = (e) => {
                currentY = e.touches[0].pageY;
                let diff = startY - currentY;
                
                // Optional: visual feedback during swipe
                if (diff > 0 && !navCardMobile.classList.contains('expanded')) {
                    // Pulling up
                }
            };

            const onTouchEnd = (e) => {
                let diff = startY - e.changedTouches[0].pageY;
                if (Math.abs(diff) > 30) {
                    if (diff > 30) { // Swipe up
                        navCardMobile.classList.add('expanded');
                        menuToggleIcon.style.transform = 'rotate(180deg)';
                    } else if (diff < -30) { // Swipe down
                        navCardMobile.classList.remove('expanded');
                        menuToggleIcon.style.transform = 'rotate(0deg)';
                    }
                }
            };

            navCardMobile.addEventListener('touchstart', onTouchStart, {passive: true});
            navCardMobile.addEventListener('touchend', onTouchEnd, {passive: true});
            
            // Specifically on handle for better response
            navHandle.addEventListener('touchstart', onTouchStart, {passive: true});
            navHandle.addEventListener('touchend', onTouchEnd, {passive: true});
        }

        // Close menu on link click
        document.querySelectorAll('.nav-card-mobile a').forEach(link => {
            link.addEventListener('click', () => {
                navCardMobile.classList.remove('expanded');
                if (menuToggleIcon) menuToggleIcon.style.transform = 'rotate(0deg)';
            });
        });

        // Scroll Progress Logic
        const progressBar = document.getElementById('scrollProgress');
        window.addEventListener('scroll', () => {
            const windisplay = window.scrollY || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = (windisplay / height) * 100;
            if (progressBar) progressBar.style.height = scrolled + '%';
        });
    </script>
    <style>
        img, .hero-image-wrap img, .portfolio-img img {
            filter: grayscale(1) contrast(1.1);
            transition: filter 0.5s ease;
        }
        img:hover, .portfolio-card:hover img {
            filter: grayscale(0) contrast(1.0);
        }
    </style>
</body>

</html>
