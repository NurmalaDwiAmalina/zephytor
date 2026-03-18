<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa UI/UX — Zephytor</title>
    <meta name="description" content="Hasil analisa User Interface dan User Experience website Anda oleh Zephytor.">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ time() }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <style>
        .analyze-navbar {
            position: fixed;
            top: 24px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(25px) saturate(180%);
            border: 1px solid rgba(0, 0, 0, 0.08);
            padding: 10px 12px 10px 24px;
            border-radius: 100px;
            display: flex;
            align-items: center;
            gap: 20px;
            width: max-content;
            max-width: 95vw;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        body.dark-theme .analyze-navbar {
            background: rgba(10, 10, 12, 0.95);
            border-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
        }

        .analyze-navbar .nav-logo {
            display: flex;
            align-items: center;
        }

        .analyze-navbar .nav-logo span {
            color: #000000 !important;
            font-family: var(--font-h);
            font-size: 20px;
            font-weight: 900;
            letter-spacing: -1.2px;
        }

        body.dark-theme .analyze-navbar .nav-logo span {
            color: #ffffff !important;
        }

        .url-chip {
            background: rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 0, 0, 0.05);
            color: var(--text-h);
            padding: 8px 18px;
            border-radius: 100px;
            font-size: 0.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
            max-width: 280px;
            transition: all 0.3s;
        }

        body.dark-theme .url-chip {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.08);
        }

        .theme-toggle-wrap {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 12px 4px 4px;
            background: rgba(0, 0, 0, 0.03);
            border-radius: 100px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s;
        }

        body.dark-theme .theme-toggle-wrap {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.08);
        }

        .theme-toggle-wrap:hover {
            background: rgba(0, 0, 0, 0.08);
        }

        body.dark-theme .theme-toggle-wrap:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .theme-toggle-icon {
            width: 32px;
            height: 32px;
            background: #ffffff;
            color: #000000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        body.dark-theme .theme-toggle-icon {
            background: #000000;
            color: #ffffff;
            transform: rotate(360deg);
        }

        .theme-toggle-text {
            font-size: 0.65rem;
            font-weight: 900;
            color: var(--text-h);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .btn-konsultasi-nav {
            background: #000000;
            color: #ffffff;
            padding: 10px 24px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 900;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        body.dark-theme .btn-konsultasi-nav {
            background: #ffffff;
            color: #000000;
        }

        .btn-konsultasi-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
            opacity: 0.9;
        }

        .btn-konsultasi-nav:active {
            transform: scale(0.96);
        }
        .url-chip:hover {
            background: rgba(0, 0, 0, 0.08);
            border-color: rgba(0, 0, 0, 0.1);
        }

        body.dark-theme .url-chip:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.15);
        }

        .nav-back-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px 8px 12px;
            background: rgba(0,0,0,0.06);
            border-radius: 100px;
            text-decoration: none;
            color: var(--text-h);
            font-weight: 800;
            font-size: 0.8rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-back-btn:hover {
            background: rgba(0,0,0,0.12);
            transform: translateX(-4px);
        }
        body.dark-theme .nav-back-btn {
            background: rgba(255,255,255,0.1);
            color: #ffffff;
        }
        .nav-back-btn:hover {
            background: rgba(255,255,255,0.2);
        }

        /* PREMIUM BUTTON CTA */
        .btn-white {
            background: #ffffff !important;
            color: #000000 !important;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .btn-white:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 45px rgba(0,0,0,0.3);
            filter: brightness(0.95);
        }

        .btn-white:active {
            transform: scale(0.95) translateY(0);
        }

        @media (max-width: 640px) {
            .analyze-navbar {
                padding: 8px 8px 8px 12px;
                gap: 12px;
            }
            .url-chip {
                display: none;
            }
            .analyze-navbar .nav-logo span {
                font-size: 18px;
            }
            .theme-toggle-text {
                display: none;
            }
            .theme-toggle-wrap {
                padding: 4px;
            }
            .nav-back-btn span {
                display: none;
            }
            .nav-back-btn {
                padding: 8px;
            }
        }
        .page-content {
            padding-top: 160px;
            padding-bottom: 120px;
            min-height: 100vh;
        }
        @media (max-width: 640px) {
            .page-content {
                padding-top: 120px;
            }
        }

        /* Loading */
        .loading-wrap {
            text-align: center;
            padding: 100px 0;
        }
        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 3px solid var(--border);
            border-top-color: var(--text-h);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 32px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .loading-steps {
            list-style: none;
            display: inline-flex;
            flex-direction: column;
            gap: 10px;
            text-align: left;
            margin-top: 24px;
        }
        .loading-steps li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: var(--text-muted);
            transition: color 0.3s;
        }
        .loading-steps li.active { color: var(--text-h); }
        .loading-steps li .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--border);
            flex-shrink: 0;
            transition: background 0.3s;
        }
        .loading-steps li.active .dot { background: var(--text-h); }
        .loading-steps li.done .dot { background: #000000; }
        .loading-steps li.done { color: var(--text-b); }

        /* Overall Score Ring */
        .score-ring-wrap {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 160px;
            height: 160px;
        }
        .score-ring-wrap svg {
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(-90deg);
        }
        .score-ring-inner {
            text-align: center;
            z-index: 1;
        }
        .score-ring-inner .score-num {
            font-size: 3.5rem;
            font-weight: 900;
            font-family: var(--font-h);
            line-height: 1;
            color: var(--text-h);
            letter-spacing: -2px;
        }
        .score-ring-inner .score-grade {
            font-size: 1rem;
            font-weight: 700;
            margin-top: 4px;
        }

        /* Category Cards */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 48px;
        }
        .category-card {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 28px;
            padding: 32px;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.06);
        }
        body.dark-theme .category-card {
            background: rgba(15, 23, 42, 0.6);
            border-color: rgba(255,255,255,0.06);
        }
        .category-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }
        .category-name {
            font-weight: 800;
            font-size: 0.95rem;
            color: var(--text-h);
            font-family: var(--font-h);
        }
        .mini-ring {
            position: relative;
            width: 56px;
            height: 56px;
            flex-shrink: 0;
        }
        .mini-ring svg { position: absolute; top: 0; left: 0; transform: rotate(-90deg); }
        .mini-ring-score {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            font-weight: 800;
            color: var(--text-h);
            font-family: var(--font-h);
        }
        .category-desc {
            font-size: 0.88rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 24px;
        }
        body.dark-theme .category-desc {
            color: #cccccc;
        }
        .feedback-list { list-style: none; display: flex; flex-direction: column; gap: 6px; }
        .feedback-list li {
            font-size: 0.83rem;
            line-height: 1.5;
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }
        .feedback-list li .icon { flex-shrink: 0; margin-top: 2px; }
        .feedback-list li.positive { color: var(--text-h); font-weight: 700; }
        .feedback-list li.issue { color: var(--text-muted); }
        body.dark-theme .feedback-list li.positive { color: #ffffff; }
        body.dark-theme .feedback-list li.issue { color: #bbbbbb; }

        /* Recommendations */
        .recommendations-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 32px;
        }
        .rec-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            background: rgba(255,255,255,0.5);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.4);
            border-radius: 20px;
            padding: 24px 28px;
            box-shadow: 0 4px 20px -5px rgba(0,0,0,0.04);
        }
        body.dark-theme .rec-item {
            background: rgba(15, 23, 42, 0.5);
            border-color: rgba(255,255,255,0.06);
        }
        .rec-num {
            width: 36px;
            height: 36px;
            background: var(--primary);
            color: #fff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 0.85rem;
            flex-shrink: 0;
            font-family: var(--font-h);
        }
        .rec-text {
            color: var(--text-b);
            line-height: 1.6;
            padding-top: 6px;
            font-weight: 500;
        }
        body.dark-theme .rec-text {
            color: #eeeeee;
        }

        /* Screenshot */
        .screenshot-wrap {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px -15px rgba(0,0,0,0.1);
        }
        .screenshot-wrap img { width: 100%; display: block; }

        /* Error state */
        .error-wrap {
            text-align: center;
            padding: 80px 0;
        }
        .error-icon {
            font-size: 4rem;
            margin-bottom: 24px;
        }

        /* Try again form */
        .try-again-form {
            display: flex;
            gap: 12px;
            max-width: 500px;
            margin: 0 auto;
        }
        .try-again-form input {
            flex: 1;
            padding: 13px 20px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: rgba(255,255,255,0.8);
            color: var(--text-h);
            font-size: 0.9rem;
            outline: none;
            font-family: var(--font-b);
        }
        body.dark-theme .try-again-form input {
            background: rgba(15, 23, 42, 0.8);
        }
        .try-again-form input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-glow);
        }

        @media (max-width: 991px) {
            .page-content div[style*="grid-template-columns: 1fr 1.5fr"] {
                grid-template-columns: 1fr !important;
                gap: 40px !important;
            }
            .analyze-navbar .inner {
                padding: 0 16px;
            }
        }

        @media (max-width: 640px) {
            .try-again-form { flex-direction: column; }
            .analyze-navbar .url-chip { display: none; }
            .score-ring-wrap {
                width: 120px;
                height: 120px;
            }
            .score-ring-wrap svg {
                width: 120px;
                height: 120px;
            }
            .score-ring-wrap circle {
                cx: 60;
                cy: 60;
                r: 52;
                stroke-width: 6;
            }
            /* Circumference for r=52: 2*π*52 ≈ 326 */
            #overallRing {
                stroke-dasharray: 326;
                stroke-dashoffset: 326;
            }
            .score-ring-inner .score-num {
                font-size: 2rem;
            }
            .score-ring-inner .score-grade {
                font-size: 0.8rem;
            }
            .page-content {
                padding-top: 80px;
            }
            h1 {
                font-size: 1.8rem !important;
            }
            .rec-item {
                padding: 16px 20px;
                gap: 12px;
            }
        }
    </style>
</head>


<body class="dark-theme">
    <div class="bg-mesh">
        <div class="mesh-orb orb-1"></div>
        <div class="mesh-orb orb-2"></div>
        <div class="mesh-orb orb-3"></div>
    </div>

    <!-- Floating Navbar (Top for Analyze) -->
    <div class="analyze-navbar">
        <a href="/" class="nav-back-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            <span>Kembali</span>
        </a>
        <a href="/" class="nav-logo" style="text-decoration: none;">
            <span>Zephytor</span>
        </a>
        <div class="url-chip" title="{{ $url }}">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.5;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $url }}</span>
        </div>
        
        <div style="display: flex; gap: 12px; align-items: center;">
            <div id="themeToggle" class="theme-toggle-wrap">
                <div class="theme-toggle-icon">
                    <svg id="moonIcon" width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
                    <svg id="sunIcon" width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="display:none;"><circle cx="12" cy="12" r="5" /><path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42m12.72-12.72l1.42-1.42" /></svg>
                </div>
                <span class="theme-toggle-text">Mode</span>
            </div>
            <a href="https://wa.me/6285801153409" class="btn-konsultasi-nav">Konsultasi</a>
        </div>
    </div>



    <div class="page-content">
        <div class="container">

            <!-- Loading State -->
            <div id="loadingState" class="loading-wrap">
                <div class="loading-spinner"></div>
                <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 12px;">Menganalisa Website...</h2>
                <p style="color: var(--text-muted); font-size: 0.9rem;">Proses ini membutuhkan 15–30 detik</p>
                <ul class="loading-steps">
                    <li id="step1" class="active"><span class="dot"></span> Mengambil screenshot website</li>
                    <li id="step2"><span class="dot"></span> Mengirim ke AI untuk analisa</li>
                    <li id="step3"><span class="dot"></span> Memproses hasil UI/UX</li>
                    <li id="step4"><span class="dot"></span> Menyiapkan laporan</li>
                </ul>
            </div>

            <!-- Error State -->
            <div id="errorState" class="error-wrap" style="display:none;">
                <div class="error-icon">⚠️</div>
                <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 12px;">Analisa Gagal</h2>
                <p id="errorMsg" style="color: var(--text-muted); margin-bottom: 32px;"></p>
                <a href="/" class="btn btn-outline">← Kembali ke Beranda</a>
            </div>

            <!-- Results State -->
            <div id="resultsState" style="display:none;">

                <!-- Header -->
                <div style="text-align: center; margin-bottom: 80px; padding-top: 40px;">
                    <div class="section-badge" style="margin-bottom: 24px;">LAPORAN UI/UX</div>
                    <h1 style="font-size: 3rem; font-weight: 950; color: var(--text-h); font-family: var(--font-h); margin: 0 0 16px; letter-spacing: -0.04em;">Hasil Analisa Website</h1>
                    <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto; line-height: 1.6;">Laporan komprehensif mengenai kualitas desain dan pengalaman pengguna website Anda.</p>
                </div>

                <!-- Overall + Screenshot -->
                <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 48px; align-items: center; margin-bottom: 64px;">
                    <div style="text-align: center;">
                        <div style="display: flex; justify-content: center; margin-bottom: 28px;">
                            <div class="score-ring-wrap">
                                <svg width="160" height="160" viewBox="0 0 160 160">
                                    <circle cx="80" cy="80" r="68" fill="none" stroke="var(--border)" stroke-width="8"/>
                                    <circle id="overallRing" cx="80" cy="80" r="68" fill="none" stroke="#000000" stroke-width="8"
                                        stroke-linecap="round" stroke-dasharray="427" stroke-dashoffset="427"
                                        style="transition: stroke-dashoffset 1.2s cubic-bezier(0.16,1,0.3,1), stroke 0.3s;"/>
                                </svg>
                                <div class="score-ring-inner">
                                    <div class="score-num" id="overallScoreNum">—</div>
                                    <div class="score-grade" id="overallGrade" style="color: var(--primary);">—</div>
                                </div>
                            </div>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 900; color: var(--text-h); font-family: var(--font-h); margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.05em;">Skor Keseluruhan</h3>
                        <p id="summaryText" style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; max-width: 360px; margin: 0 auto; font-weight: 500;"></p>
                        <style>body.dark-theme #summaryText { color: #eeeeee; }</style>

                        <!-- Try another -->
                        <div style="margin-top: 32px;">
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin-bottom: 12px;">Cek website lain:</p>
                            <form action="/analyze" method="GET" class="try-again-form">
                                <input type="url" name="url" placeholder="https://website-lain.com" required>
                                <button type="submit" class="btn btn-primary" style="white-space: nowrap;">Analisa →</button>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="screenshot-wrap">
                            <img id="screenshotImg" src="" alt="Screenshot website" loading="lazy">
                        </div>
                        <p style="font-size: 0.78rem; color: var(--text-muted); margin-top: 10px; text-align: center;">
                            Screenshot: <a id="screenshotLink" href="#" target="_blank" style="color: var(--primary);">{{ $url }}</a>
                        </p>
                    </div>
                </div>



                <!-- Recommendations -->
                <div style="margin-bottom: 80px;">
                    <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 8px;">Rekomendasi Prioritas</h2>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0;">Langkah yang paling berdampak untuk meningkatkan website kamu.</p>
                    <div class="recommendations-list" id="recommendationsList"></div>
                </div>

                <!-- CTA -->
                <div style="background: #000; border-radius: 40px; padding: 64px 48px; text-align: center; position: relative; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 40px 100px rgba(0,0,0,0.5);">
                    <div style="position: absolute; top: -80px; right: -80px; width: 240px; height: 240px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
                    <div style="position: absolute; bottom: -60px; left: -60px; width: 180px; height: 180px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
                    <div style="position: relative; z-index: 1;">
                        <span style="font-size: 0.75rem; font-weight: 800; color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 12px;">Next Step →</span>
                        <h2 style="font-size: 2.2rem; font-weight: 900; color: #fff; font-family: var(--font-h); margin-bottom: 16px; letter-spacing: -1px;">Ingin Website Kamu <br>Jadi Super Premium?</h2>
                        <p style="color: rgba(255,255,255,0.6); margin-bottom: 32px; max-width: 480px; margin-left: auto; margin-right: auto; line-height: 1.7; font-size: 1rem;">Tim Zephytor siap membantu meningkatkan setiap aspek di atas. Jangan biarkan website lama menghambat pertumbuhan bisnis Anda.</p>
                        <a href="https://wa.me/6285801153409?text=Halo%20Zephytor%2C%20saya%20sudah%20lihat%20hasil%20analisa%20UI%2FUX%20dan%20ingin%20konsultasi" class="btn-white" style="padding: 18px 48px; border-radius: 100px; font-size: 1.05rem;">Chat Kita Sekarang buat Konsultasi Gratis →</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Theme
        const body = document.body;
        const themeToggle = document.getElementById('themeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        function updateTheme(isDark) {
            body.classList.toggle('dark-theme', isDark);
            sunIcon.style.display = isDark ? 'block' : 'none';
            moonIcon.style.display = isDark ? 'none' : 'block';
        }
        updateTheme(localStorage.getItem('theme') === 'dark');
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
            window.location.href = '/?lang=' + lang;
        }

        const currentLang = localStorage.getItem('lang') || 'id';
        document.querySelectorAll('.lang-btn-nav').forEach(btn => {
            btn.classList.toggle('active', btn.innerText.toLowerCase() === currentLang);
        });

        // Score color helper
        function scoreColor(score) {
            if (score >= 80) return '#000000';
            if (score >= 65) return '#333333';
            if (score >= 50) return '#666666';
            return '#999999';
        }

        // Circumference for r=68 (main ring): 2*π*68 ≈ 427
        // Circumference for r=22 (mini ring): 2*π*22 ≈ 138
        function ringOffset(score, circumference) {
            return circumference - (score / 100) * circumference;
        }

        function buildMiniRingSVG(score) {
            const c = 138;
            const offset = ringOffset(score, c);
            const color = scoreColor(score);
            return `<svg width="56" height="56" viewBox="0 0 56 56">
                <circle cx="28" cy="28" r="22" fill="none" stroke="var(--border)" stroke-width="5"/>
                <circle cx="28" cy="28" r="22" fill="none" stroke="${color}" stroke-width="5"
                    stroke-linecap="round" stroke-dasharray="${c}" stroke-dashoffset="${offset}"
                    style="transition: stroke-dashoffset 1s cubic-bezier(0.16,1,0.3,1);"/>
            </svg>`;
        }

        function renderResults(data, screenshotUrl) {
            const { overall_score, grade, summary, categories, top_recommendations } = data;

            // Overall ring
            document.getElementById('overallScoreNum').textContent = overall_score;
            document.getElementById('overallGrade').textContent = grade;
            document.getElementById('overallGrade').style.color = scoreColor(overall_score);
            document.getElementById('summaryText').textContent = summary;

            const ring = document.getElementById('overallRing');
            const circumference = window.innerWidth <= 640 ? 326 : 427;
            ring.style.stroke = scoreColor(overall_score);
            setTimeout(() => {
                ring.style.strokeDashoffset = ringOffset(overall_score, circumference);
            }, 100);

            // Screenshot
            document.getElementById('screenshotImg').src = screenshotUrl;
            document.getElementById('screenshotLink').href = '{{ $url }}';



            // Recommendations
            const recList = document.getElementById('recommendationsList');
            recList.innerHTML = (top_recommendations || []).map((rec, i) =>
                `<div class="rec-item">
                    <div class="rec-num">${i + 1}</div>
                    <div class="rec-text">${rec}</div>
                </div>`
            ).join('');

            // Show results
            document.getElementById('loadingState').style.display = 'none';
            document.getElementById('resultsState').style.display = 'block';
        }

        function showError(msg) {
            document.getElementById('loadingState').style.display = 'none';
            document.getElementById('errorMsg').textContent = msg || 'Terjadi kesalahan saat menganalisa website.';
            document.getElementById('errorState').style.display = 'block';
        }

        // Animate loading steps
        const steps = ['step1', 'step2', 'step3', 'step4'];
        let currentStep = 0;
        function advanceStep() {
            if (currentStep > 0) {
                document.getElementById(steps[currentStep - 1]).classList.remove('active');
                document.getElementById(steps[currentStep - 1]).classList.add('done');
            }
            if (currentStep < steps.length) {
                document.getElementById(steps[currentStep]).classList.add('active');
                currentStep++;
            }
        }
        advanceStep();
        const stepInterval = setInterval(() => {
            if (currentStep < steps.length) advanceStep();
            else clearInterval(stepInterval);
        }, 5000);

        // Fetch analysis
        async function runAnalysis() {
            try {
                const response = await fetch('/analyze', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ url: '{{ addslashes($url) }}' })
                });

                clearInterval(stepInterval);
                // Mark all steps done
                steps.forEach(s => {
                    document.getElementById(s).classList.remove('active');
                    document.getElementById(s).classList.add('done');
                });

                const result = await response.json();
                if (result.success) {
                    renderResults(result.data, result.screenshot);
                } else {
                    showError(result.error);
                }
            } catch (e) {
                clearInterval(stepInterval);
                showError('Koneksi gagal. Pastikan internet Anda stabil dan coba lagi.');
            }
        }


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
        if (floatingNav) {
            floatingNav.classList.add('visible');
        }

        runAnalysis();
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
