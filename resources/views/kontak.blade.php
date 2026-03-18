<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami — Zephytor</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <style>
        .contact-page {
            padding: 160px 0 100px;
            min-height: 100vh;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 48px;
            margin-top: 64px;
        }

        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }

        .contact-info-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 40px;
            height: fit-content;
        }

        .info-item {
            margin-bottom: 32px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-item h4 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            margin-bottom: 8px;
        }

        .info-item p, .info-item a {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-h);
            text-decoration: none;
        }

        .contact-form-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 48px;
            box-shadow: var(--shadow-lg);
        }

        .form-group-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }

        @media (max-width: 576px) {
            .form-group-row {
                grid-template-columns: 1fr;
            }
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-h);
        }

        .form-control {
            width: 100%;
            padding: 14px 20px;
            background: rgba(0, 0, 0, 0.02);
            border: 1px solid var(--border);
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            color: var(--text-h);
            transition: var(--transition);
        }

        body.dark-theme .form-control {
            background: rgba(255, 255, 255, 0.03);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--text-h);
            background: transparent;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 18px;
        }

        .btn-submit {
            width: 100%;
            padding: 16px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 1rem;
            margin-top: 12px;
            cursor: pointer;
            border: none;
            background: var(--text-h);
            color: var(--bg);
            transition: var(--transition);
        }

        .btn-submit:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }

        .social-icon {
            width: 44px;
            height: 44px;
            border: 1px solid var(--border);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-h);
            transition: var(--transition);
        }

        .social-icon:hover {
            background: var(--text-h);
            color: var(--bg);
        }
    </style>
</head>

<body class="dark-theme">
    <div class="bg-mesh">
        <div class="mesh-orb orb-1"></div>
        <div class="mesh-orb orb-2"></div>
        <div class="mesh-orb orb-3"></div>
    </div>

    <!-- NAVBAR -->
    <div class="navbar-top" style="background: rgba(var(--bg-rgb), 0.8); backdrop-filter: blur(20px); border-bottom: 1px solid var(--border);">
        <div class="container">
            <a href="/" class="nav-logo">
                <span style="font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--logo-color); letter-spacing: -1px;">Zephytor</span>
            </a>
            <div class="nav-menu">
                <a href="/#hero" class="nav-link-item">INFO</a>
                <a href="/#hero-checker" class="nav-link-item">AUDIT</a>
                <a href="/#layanan" class="nav-link-item">LAYANAN</a>
                <a href="/#mvp" class="nav-link-item">MVP</a>
                <a href="/#harga" class="nav-link-item">PAKET</a>
                <a href="/kontak" class="nav-link-item active">KONTAK</a>
            </div>
            <div style="display: flex; align-items: center; gap: 16px;">
                <button id="themeToggle" class="btn btn-outline btn-sm" style="padding: 10px; min-width: 44px;">
                    <svg id="moonIcon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                    </svg>
                    <svg id="sunIcon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" style="display:none;">
                        <circle cx="12" cy="12" r="5" />
                        <path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42m12.72-12.72l1.42-1.42" />
                    </svg>
                </button>
                <a href="https://wa.me/6285801153409" class="btn btn-primary btn-sm">Konsultasi Gratis</a>
            </div>
        </div>
    </div>

    <!-- FLOATING NAV -->
    <nav class="floating-nav" id="floatingNav">
        <!-- Desktop Pill -->
        <div class="nav-pill-desktop">
            <div class="nav-logo-float"><span>Zephytor</span></div>
            <a href="/#hero" data-i18n="navInfo">INFO</a>
            <a href="/#hero-checker" data-i18n="navAudit">AUDIT</a>
            <a href="/#layanan" data-i18n="navLayanan">LAYANAN</a>
            <a href="/#mvp" data-i18n="navMvp">MVP</a>
            <a href="/#harga" data-i18n="navPaket">PAKET</a>
            <a href="/kontak" class="active" data-i18n="navKontak">KONTAK</a>
            <div class="nav-pill-sep"></div>
            <div class="lang-switcher-nav">
                <button class="lang-btn-nav active" onclick="setLanguage('id')">ID</button>
                <button class="lang-btn-nav" onclick="setLanguage('en')">EN</button>
            </div>
            <div class="nav-pill-sep"></div>
            <a href="https://wa.me/6285801153409" class="btn-mulai-pill" data-i18n="btnMulai">Konsultasi</a>
        </div>

        <!-- Mobile Card -->
        <div class="nav-card-mobile">
            <div class="nav-handle"></div>
            <div class="nav-primary-grid">
                <a href="/#hero" class="nav-item-big">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>HOME</span>
                </a>
                <a href="/#hero-checker" class="nav-item-big">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <span>AUDIT</span>
                </a>
            </div>
            
            <div class="nav-secondary-grid" id="navSecondaryGrid">
                <a href="/#layanan" class="nav-item-small">
                    <span data-i18n="navLayanan">LAYANAN</span>
                </a>
                <a href="/#mvp" class="nav-item-small">
                    <span data-i18n="navMvp">MVP</span>
                </a>
                <a href="/#harga" class="nav-item-small">
                    <span data-i18n="navPaket">PAKET</span>
                </a>
                <a href="/kontak" class="nav-item-small active">
                    <span data-i18n="navKontak">KONTAK</span>
                </a>
            </div>
            
            <div class="nav-bottom-row">
                <div class="nav-bottom-left">
                    <div class="nav-logo-mini">Z</div>
                    <div class="nav-menu-toggle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                        <span>MENU</span>
                    </div>
                </div>
                <div class="nav-bottom-right">
                    <div class="nav-lang-switch">
                        <button class="lang-btn-nav active" onclick="setLanguage('id')">ID</button>
                        <button class="lang-btn-nav" onclick="setLanguage('en')">EN</button>
                    </div>
                    <a href="https://wa.me/6285801153409" class="nav-btn-konsultasi">Konsultasi</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="contact-page">
        <div class="container">
            <div class="section-header text-center reveal visible">
                <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 16px;">Ngobrol Bareng Kita</h1>
                <p class="mx-auto" style="max-width: 650px; opacity: 0.8; font-size: 1.1rem;">
                    Punya ide project seru atau masih bingung mau mulai dari mana? Santai aja, tim Zephytor siap dengerin dan kasih solusi terbaik buat bisnis kamu.
                </p>
            </div>

            <div class="contact-container reveal visible">
                <!-- Left Column: Info Content -->
                <div class="contact-info-card">
                    <div class="info-item">
                        <h4>Email Resmi</h4>
                        <a href="mailto:zephytor@gmail.com">zephytor@gmail.com</a>
                    </div>

                    <div class="info-item">
                        <h4>WhatsApp</h4>
                        <a href="https://wa.me/6285801153409">+62 858-0115-3409</a>
                    </div>


                </div>

                <!-- Right Column: Form -->
                <div class="contact-form-card">
                    <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 32px;">Tinggalin Pesan di Sini</h3>
                    <form action="#">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" class="form-control" placeholder="Budi Santoso" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" id="email" class="form-control" placeholder="budi@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek Pesan</label>
                            <select id="subject" class="form-control" required>
                                <option value="" disabled selected>Pilih Kepentingan</option>
                                <option value="landing">Pembuatan Landing Page</option>
                                <option value="company">Company Profile</option>
                                <option value="custom">Custom Web App</option>
                                <option value="partnership">Kerja Sama / Partnership</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Curhatin Ide Project Kamu</label>
                            <textarea id="message" class="form-control" rows="5" placeholder="Tulisin aja apa yang kamu butuhin, makin detail makin oke!" required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Kirim Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-giant-text">ZEPHYTOR</div>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="/" class="nav-logo">
                        <span style="font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--logo-color); letter-spacing: -1px;">Zephytor</span>
                    </a>
                    <p style="margin-top: 24px;">Bantuin bisnis Indonesia jadi lebih keren di dunia digital dengan desain premium & performa kenceng.</p>
                </div>
                <div>
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="/#layanan">Company Profile</a></li>
                        <li><a href="/#layanan">Landing Page</a></li>
                        <li><a href="/#layanan">Custom App</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Dukungan</h4>
                    <ul>
                        <li><a href="/kontak">Kontak Kami</a></li>
                        <li><a href="https://wa.me/6285801153409">Konsultasi Gratis</a></li>
                        <li><a href="mailto:zephytor@gmail.com">zephytor@gmail.com</a></li>
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

        const savedTheme = localStorage.getItem('theme') || 'dark';
        updateTheme(savedTheme === 'dark');

        themeToggle.addEventListener('click', () => {
            const isDark = !body.classList.contains('dark-theme');
            updateTheme(isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });

        function setLanguage(lang) {
            localStorage.setItem('lang', lang);
            document.querySelectorAll('.lang-btn-nav').forEach(btn => {
                btn.classList.toggle('active', btn.innerText.toLowerCase() === lang);
            });
            // If contact page also uses i18n, redirect or update here. 
            // For now just keep stay consistent.
            window.location.href = '/?lang=' + lang; 
        }

        const currentLang = localStorage.getItem('lang') || 'id';
        document.querySelectorAll('.lang-btn-nav').forEach(btn => {
            btn.classList.toggle('active', btn.innerText.toLowerCase() === currentLang);
        });

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
            if (r.getBoundingClientRect().top < window.innerHeight) {
                r.classList.add('visible');
            } else {
                revealObserver.observe(r);
            }
        });

        if (!window.IntersectionObserver) {
            reveals.forEach(r => r.classList.add('visible'));
        }

        // Floating Nav logic
        const floatingNav = document.getElementById('floatingNav');
        const navbarTop = document.querySelector('.navbar-top');
        
        function handleScroll() {
            // Force visible from start as per home page behavior
            floatingNav.classList.add('visible');
            
            navbarTop.style.opacity = '1';
            navbarTop.style.pointerEvents = 'auto';
            
            if (window.scrollY > 50) navbarTop.classList.add('scrolled');
            else navbarTop.classList.remove('scrolled');
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        window.addEventListener('load', handleScroll);
        handleScroll();
    </script>
</body>

</html>
