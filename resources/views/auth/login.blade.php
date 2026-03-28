<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masuk — Zephytor</title>
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/landing.css">
<style>
  .auth-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    position: relative;
  }
  .auth-card {
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 32px;
    padding: 48px 40px;
    width: 100%;
    max-width: 420px;
    box-shadow: var(--shadow-lg);
    text-align: center;
    position: relative;
    z-index: 1;
  }
  .auth-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 32px;
    text-decoration: none;
    color: var(--text-h);
  }
  .auth-logo svg { color: var(--text-h); }
  .auth-logo-text {
    font-family: var(--font-h);
    font-weight: 900;
    font-size: 1.4rem;
    letter-spacing: -0.5px;
  }
  .auth-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(0,0,0,0.04);
    border: 1px solid var(--border);
    border-radius: 50px;
    padding: 5px 14px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    color: var(--text-muted);
    margin-bottom: 20px;
  }
  .auth-title {
    font-family: var(--font-h);
    font-size: 2rem;
    font-weight: 900;
    letter-spacing: -1px;
    color: var(--text-h);
    margin-bottom: 8px;
    line-height: 1.2;
  }
  .auth-subtitle {
    font-size: 0.92rem;
    color: var(--text-muted);
    margin-bottom: 36px;
    line-height: 1.6;
  }
  .google-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    padding: 14px 24px;
    background: var(--bg);
    color: var(--text-h);
    border: 2px solid var(--border);
    border-radius: 50px;
    font-family: var(--font-h);
    font-weight: 700;
    font-size: 0.95rem;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
    position: relative;
    overflow: hidden;
  }
  .google-btn::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.03);
    opacity: 0;
    transition: opacity 0.2s;
  }
  .google-btn:hover::before { opacity: 1; }
  .google-btn:hover {
    border-color: rgba(0,0,0,0.2);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  }
  .google-btn svg { flex-shrink: 0; }
  .auth-divider {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 28px 0;
  }
  .auth-divider::before,
  .auth-divider::after {
    content: "";
    flex: 1;
    height: 1px;
    background: var(--border);
  }
  .auth-divider span {
    font-size: 0.75rem;
    color: var(--text-muted);
    font-weight: 500;
  }
  .auth-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-top: 36px;
  }
  .auth-feature {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 0.8rem;
    color: var(--text-muted);
    text-align: left;
  }
  .auth-feature-icon {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    flex-shrink: 0;
  }
  .auth-back {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: 24px;
    font-size: 0.85rem;
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.2s;
  }
  .auth-back:hover { color: var(--text-h); }
  .alert-error {
    background: rgba(239, 68, 68, 0.08);
    border: 1px solid rgba(239, 68, 68, 0.2);
    color: #dc2626;
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 0.85rem;
    margin-bottom: 20px;
    text-align: left;
  }
  /* Decorative blobs */
  .auth-blob {
    position: fixed;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.06;
    pointer-events: none;
    z-index: 0;
  }
  .auth-blob-1 { width: 400px; height: 400px; background: #000; top: -100px; right: -100px; }
  .auth-blob-2 { width: 300px; height: 300px; background: #555; bottom: -80px; left: -80px; }
</style>
</head>
<body>
<div class="auth-blob auth-blob-1"></div>
<div class="auth-blob auth-blob-2"></div>

<div class="auth-page">
  <div class="auth-card">
    <a href="/" class="auth-logo">
      <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><polygon points="16,2 30,28 2,28" fill="currentColor"/></svg>
      <span class="auth-logo-text">Zephytor</span>
    </a>

    <div class="auth-badge">✦ AKSES DASHBOARD</div>
    <h1 class="auth-title">Selamat Datang<br>Kembali 👋</h1>
    <p class="auth-subtitle">Login dengan akun Google kamu untuk akses dashboard, pesanan, dan invoice.</p>

    @if(session('error'))
      <div class="alert-error">{{ session('error') }}</div>
    @endif

    <a href="/auth/google" class="google-btn">
      <svg width="20" height="20" viewBox="0 0 24 24">
        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/>
        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
      </svg>
      Lanjutkan dengan Google
    </a>

    <div class="auth-divider"><span>Aman & Terenkripsi</span></div>

    <div class="auth-features">
      <div class="auth-feature">
        <div class="auth-feature-icon">🔒</div>
        <span>Login aman via Google OAuth</span>
      </div>
      <div class="auth-feature">
        <div class="auth-feature-icon">⚡</div>
        <span>Tanpa daftar manual</span>
      </div>
      <div class="auth-feature">
        <div class="auth-feature-icon">📋</div>
        <span>Kelola pesanan & invoice</span>
      </div>
      <div class="auth-feature">
        <div class="auth-feature-icon">🛠</div>
        <span>Akses ZephyTool gratis</span>
      </div>
    </div>

    <a href="/" class="auth-back">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
      Kembali ke beranda
    </a>
  </div>
</div>
</body>
</html>
