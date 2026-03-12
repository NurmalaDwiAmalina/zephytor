<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa UI/UX — Zephytor</title>
    <meta name="description" content="Hasil analisa User Interface dan User Experience website Anda oleh Zephytor.">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <style>
        .analyze-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: rgba(248, 250, 252, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            padding: 16px 0;
        }
        body.dark-theme .analyze-navbar {
            background: rgba(3, 7, 18, 0.85);
        }
        .analyze-navbar .inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .analyze-navbar .url-chip {
            background: var(--primary-glow);
            border: 1px solid rgba(99,102,241,0.2);
            color: var(--primary);
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.82rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 320px;
        }
        .page-content {
            padding-top: 100px;
            padding-bottom: 100px;
            min-height: 100vh;
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
            border-top-color: var(--primary);
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
        .loading-steps li.active .dot { background: var(--primary); }
        .loading-steps li.done .dot { background: #22c55e; }
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
            font-size: 2.8rem;
            font-weight: 800;
            font-family: var(--font-h);
            line-height: 1;
            color: var(--text-h);
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
            margin-bottom: 16px;
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
        .feedback-list li.positive { color: #16a34a; }
        .feedback-list li.issue { color: #dc2626; }
        body.dark-theme .feedback-list li.positive { color: #4ade80; }
        body.dark-theme .feedback-list li.issue { color: #f87171; }

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

        @media (max-width: 640px) {
            .try-again-form { flex-direction: column; }
            .analyze-navbar .url-chip { display: none; }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="analyze-navbar">
        <div class="inner">
            <a href="/" style="text-decoration: none;">
                <svg class="logo-svg" viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 32px; color: var(--text-h);">
                    <path d="M5 25H30L15 45H40" stroke="currentColor" stroke-width="6" stroke-linecap="butt" stroke-linejoin="miter" />
                    <path d="M20 5H45L30 25H55" stroke="currentColor" stroke-width="6" stroke-linecap="butt" stroke-linejoin="miter" />
                    <text x="65" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-size="28" font-weight="800" fill="currentColor">Ephytor</text>
                </svg>
            </a>
            <div class="url-chip" title="{{ $url }}">{{ $url }}</div>
            <div style="display: flex; gap: 12px; align-items: center;">
                <button id="themeToggle" class="btn btn-outline btn-sm" style="padding: 10px; min-width: 44px;">
                    <svg id="moonIcon" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
                    <svg id="sunIcon" width="18" height="18" fill="currentColor" viewBox="0 0 24 24" style="display:none;"><circle cx="12" cy="12" r="5" /><path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42m12.72-12.72l1.42-1.42" /></svg>
                </button>
                <a href="https://wa.me/6285892778882?text=Halo%20Zephytor%2C%20saya%20ingin%20konsultasi%20gratis" class="btn btn-primary btn-sm">Konsultasi Gratis</a>
            </div>
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
                <div style="text-align: center; margin-bottom: 60px;">
                    <div class="section-badge">LAPORAN UI/UX</div>
                    <h1 style="font-size: 2.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin: 16px 0 12px;">Hasil Analisa Website</h1>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Dianalisa menggunakan GPT-4o Vision oleh Zephytor</p>
                </div>

                <!-- Overall + Screenshot -->
                <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 48px; align-items: center; margin-bottom: 64px;">
                    <div style="text-align: center;">
                        <div style="display: flex; justify-content: center; margin-bottom: 28px;">
                            <div class="score-ring-wrap">
                                <svg width="160" height="160" viewBox="0 0 160 160">
                                    <circle cx="80" cy="80" r="68" fill="none" stroke="var(--border)" stroke-width="8"/>
                                    <circle id="overallRing" cx="80" cy="80" r="68" fill="none" stroke="#6366f1" stroke-width="8"
                                        stroke-linecap="round" stroke-dasharray="427" stroke-dashoffset="427"
                                        style="transition: stroke-dashoffset 1.2s cubic-bezier(0.16,1,0.3,1), stroke 0.3s;"/>
                                </svg>
                                <div class="score-ring-inner">
                                    <div class="score-num" id="overallScoreNum">—</div>
                                    <div class="score-grade" id="overallGrade" style="color: var(--primary);">—</div>
                                </div>
                            </div>
                        </div>
                        <h3 style="font-size: 1rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 12px;">Skor Keseluruhan</h3>
                        <p id="summaryText" style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.7; max-width: 320px; margin: 0 auto;"></p>

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

                <!-- Category Scores -->
                <div style="margin-bottom: 64px;">
                    <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 8px;">Penilaian Per Kategori</h2>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0;">Detail analisa setiap aspek UI/UX website kamu.</p>
                    <div class="categories-grid" id="categoriesGrid"></div>
                </div>

                <!-- Recommendations -->
                <div style="margin-bottom: 80px;">
                    <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--text-h); font-family: var(--font-h); margin-bottom: 8px;">Rekomendasi Prioritas</h2>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0;">Langkah yang paling berdampak untuk meningkatkan website kamu.</p>
                    <div class="recommendations-list" id="recommendationsList"></div>
                </div>

                <!-- CTA -->
                <div style="background: var(--primary); border-radius: 40px; padding: 64px 48px; text-align: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -80px; right: -80px; width: 240px; height: 240px; background: rgba(255,255,255,0.06); border-radius: 50%;"></div>
                    <div style="position: absolute; bottom: -60px; left: -60px; width: 180px; height: 180px; background: rgba(255,255,255,0.06); border-radius: 50%;"></div>
                    <div style="position: relative; z-index: 1;">
                        <h2 style="font-size: 2rem; font-weight: 800; color: #fff; font-family: var(--font-h); margin-bottom: 16px;">Mau Website yang Lebih Baik?</h2>
                        <p style="color: rgba(255,255,255,0.8); margin-bottom: 32px; max-width: 480px; margin-left: auto; margin-right: auto; line-height: 1.7;">Tim Zephytor siap mewujudkan website impian kamu — desain premium, performa tinggi, dan hasil yang memuaskan.</p>
                        <a href="https://wa.me/6285892778882?text=Halo%20Zephytor%2C%20saya%20sudah%20lihat%20hasil%20analisa%20UI%2FUX%20dan%20ingin%20konsultasi" class="btn btn-white btn-lg" style="padding: 16px 40px; border-radius: 16px; font-size: 1rem;">Chat Sekarang →</a>
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

        // Score color helper
        function scoreColor(score) {
            if (score >= 80) return '#22c55e';
            if (score >= 65) return '#f59e0b';
            if (score >= 50) return '#f97316';
            return '#ef4444';
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
            ring.style.stroke = scoreColor(overall_score);
            setTimeout(() => {
                ring.style.strokeDashoffset = ringOffset(overall_score, 427);
            }, 100);

            // Screenshot
            document.getElementById('screenshotImg').src = screenshotUrl;
            document.getElementById('screenshotLink').href = '{{ $url }}';

            // Categories
            const grid = document.getElementById('categoriesGrid');
            grid.innerHTML = categories.map(cat => {
                const posHTML = (cat.positives || []).map(p =>
                    `<li class="positive"><span class="icon">✓</span> ${p}</li>`).join('');
                const issHTML = (cat.issues || []).map(i =>
                    `<li class="issue"><span class="icon">✗</span> ${i}</li>`).join('');
                const feedbackHTML = (posHTML || issHTML)
                    ? `<ul class="feedback-list">${posHTML}${issHTML}</ul>` : '';
                return `
                <div class="category-card">
                    <div class="category-header">
                        <div class="category-name">${cat.name}</div>
                        <div class="mini-ring">
                            ${buildMiniRingSVG(cat.score)}
                            <div class="mini-ring-score">${cat.score}</div>
                        </div>
                    </div>
                    <p class="category-desc">${cat.description}</p>
                    ${feedbackHTML}
                </div>`;
            }).join('');

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

        runAnalysis();
    </script>
</body>

</html>
