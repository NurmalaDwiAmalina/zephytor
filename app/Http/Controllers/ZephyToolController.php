<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZephyToolController extends Controller
{
    public function index()
    {
        return view('dashboard.zephytool');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'business_name'    => 'required|string|max:100',
            'tagline'          => 'required|string|max:200',
            'description'      => 'required|string|max:1000',
            'services'         => 'required|string|max:500',
            'contact_phone'    => 'nullable|string|max:20',
            'contact_email'    => 'nullable|email|max:100',
            'color_primary'    => 'nullable|string|max:7',
            'color_secondary'  => 'nullable|string|max:7',
            'template'         => 'required|in:landing,profile,portfolio',
        ]);

        $html = $this->buildWebsite($request->all());

        // Return as downloadable HTML file
        $filename = strtolower(str_replace(' ', '-', $request->business_name)) . '-website.html';

        return response($html, 200, [
            'Content-Type'        => 'text/html',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    private function buildWebsite(array $data): string
    {
        $name        = htmlspecialchars($data['business_name']);
        $tagline     = htmlspecialchars($data['tagline']);
        $description = htmlspecialchars($data['description']);
        $services    = htmlspecialchars($data['services']);
        $phone       = htmlspecialchars($data['contact_phone'] ?? '');
        $email       = htmlspecialchars($data['contact_email'] ?? '');
        $colorPrimary   = $data['color_primary'] ?? '#000000';
        $colorSecondary = $data['color_secondary'] ?? '#ffffff';
        $template    = $data['template'];

        $serviceItems = array_filter(array_map('trim', explode(',', $services)));
        $serviceHtml = '';
        foreach ($serviceItems as $service) {
            $serviceHtml .= '<div class="service-item"><span class="service-icon">✦</span><span>' . htmlspecialchars($service) . '</span></div>';
        }

        $contactHtml = '';
        if ($phone) {
            $contactHtml .= '<a href="https://wa.me/' . preg_replace('/\D/', '', $phone) . '" class="contact-btn">📱 WhatsApp</a>';
        }
        if ($email) {
            $contactHtml .= '<a href="mailto:' . $email . '" class="contact-btn">✉️ Email</a>';
        }

        return <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{$name}</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root { --primary: {$colorPrimary}; --secondary: {$colorSecondary}; --font-h: 'Plus Jakarta Sans', sans-serif; --font-b: 'Inter', sans-serif; }
  body { font-family: var(--font-b); background: #ffffff; color: #333; overflow-x: hidden; line-height: 1.6; }
  body::before { content: ""; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.06) 1px, transparent 0); background-size: 28px 28px; pointer-events: none; z-index: -1; }
  .container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }
  /* NAV */
  nav { position: fixed; top: 20px; left: 50%; transform: translateX(-50%); background: rgba(255,255,255,0.9); backdrop-filter: blur(20px); border: 1px solid rgba(0,0,0,0.08); border-radius: 50px; padding: 12px 28px; display: flex; align-items: center; gap: 24px; z-index: 1000; box-shadow: 0 8px 32px rgba(0,0,0,0.06); }
  nav .logo { font-family: var(--font-h); font-weight: 800; font-size: 1rem; color: #000; text-decoration: none; }
  nav a { color: #555; text-decoration: none; font-size: 0.85rem; font-weight: 500; transition: color 0.2s; }
  nav a:hover { color: var(--primary); }
  /* HERO */
  .hero { min-height: 100vh; display: flex; align-items: center; padding: 120px 0 80px; }
  .hero-inner { max-width: 700px; }
  .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(0,0,0,0.04); border: 1px solid rgba(0,0,0,0.08); border-radius: 50px; padding: 6px 16px; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.05em; color: #555; margin-bottom: 24px; }
  .hero h1 { font-family: var(--font-h); font-size: clamp(2.5rem, 6vw, 4.5rem); font-weight: 900; line-height: 1.1; letter-spacing: -2px; color: #000; margin-bottom: 20px; }
  .hero h1 span { color: var(--primary); text-decoration: underline; text-decoration-color: var(--primary); text-underline-offset: 4px; }
  .hero p { font-size: 1.1rem; color: #555; max-width: 560px; margin-bottom: 36px; line-height: 1.7; }
  .btn-primary { display: inline-flex; align-items: center; gap: 8px; background: #000; color: #fff; padding: 14px 28px; border-radius: 50px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: all 0.3s; }
  .btn-primary:hover { background: #222; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }
  .btn-outline { display: inline-flex; align-items: center; gap: 8px; border: 2px solid rgba(0,0,0,0.15); color: #333; padding: 12px 28px; border-radius: 50px; font-weight: 600; font-size: 0.95rem; text-decoration: none; transition: all 0.3s; margin-left: 12px; }
  .btn-outline:hover { border-color: #000; color: #000; }
  /* SECTIONS */
  section { padding: 80px 0; }
  .section-label { font-size: 0.75rem; font-weight: 700; letter-spacing: 0.12em; color: #999; text-transform: uppercase; margin-bottom: 12px; }
  .section-title { font-family: var(--font-h); font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; letter-spacing: -1px; color: #000; margin-bottom: 16px; line-height: 1.2; }
  .section-desc { font-size: 1rem; color: #666; max-width: 560px; line-height: 1.7; }
  /* SERVICES */
  .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-top: 40px; }
  .service-item { display: flex; align-items: center; gap: 12px; background: #f8f8f8; border: 1px solid rgba(0,0,0,0.06); border-radius: 16px; padding: 20px; font-weight: 600; font-size: 0.95rem; color: #222; }
  .service-icon { font-size: 1.2rem; }
  /* ABOUT */
  .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  @media (max-width: 768px) { .about-grid { grid-template-columns: 1fr; } }
  .about-visual { background: linear-gradient(135deg, #f0f0f0, #e8e8e8); border-radius: 24px; aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; font-size: 4rem; }
  /* CONTACT */
  .contact-section { background: #000; color: #fff; border-radius: 32px; padding: 60px; text-align: center; }
  .contact-section h2 { font-family: var(--font-h); font-size: 2.2rem; font-weight: 800; margin-bottom: 16px; }
  .contact-section p { color: #aaa; margin-bottom: 32px; }
  .contact-buttons { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
  .contact-btn { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.1); color: #fff; padding: 12px 24px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.15); }
  .contact-btn:hover { background: rgba(255,255,255,0.2); }
  /* FOOTER */
  footer { padding: 40px 0; text-align: center; color: #999; font-size: 0.85rem; border-top: 1px solid rgba(0,0,0,0.06); }
  footer strong { color: #000; }
  /* DIVIDER */
  .divider { height: 1px; background: rgba(0,0,0,0.06); margin: 0; }
  /* Generated badge */
  .generated-badge { position: fixed; bottom: 20px; right: 20px; background: #000; color: #fff; padding: 8px 16px; border-radius: 50px; font-size: 0.75rem; font-weight: 600; z-index: 9999; text-decoration: none; opacity: 0.8; }
</style>
</head>
<body>
<nav>
  <a href="#" class="logo">{$name}</a>
  <a href="#layanan">Layanan</a>
  <a href="#tentang">Tentang</a>
  <a href="#kontak">Kontak</a>
</nav>

<section class="hero">
  <div class="container">
    <div class="hero-inner">
      <div class="hero-badge">🚀 {$name}</div>
      <h1>{$tagline}</h1>
      <p>{$description}</p>
      <div>
        <a href="#kontak" class="btn-primary">Hubungi Kami →</a>
        <a href="#layanan" class="btn-outline">Lihat Layanan</a>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="layanan">
  <div class="container">
    <div class="section-label">LAYANAN</div>
    <h2 class="section-title">Apa yang Kami Tawarkan</h2>
    <p class="section-desc">Solusi terbaik untuk kebutuhan bisnis Anda.</p>
    <div class="services-grid">
      {$serviceHtml}
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="tentang">
  <div class="container">
    <div class="about-grid">
      <div>
        <div class="section-label">TENTANG KAMI</div>
        <h2 class="section-title">{$name}</h2>
        <p class="section-desc">{$description}</p>
      </div>
      <div class="about-visual">🏢</div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section id="kontak" style="padding-bottom: 80px;">
  <div class="container">
    <div class="contact-section">
      <h2>Siap Bekerja Sama?</h2>
      <p>Hubungi kami sekarang dan wujudkan bisnis impian Anda.</p>
      <div class="contact-buttons">
        {$contactHtml}
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <p>© 2025 <strong>{$name}</strong>. Dibuat dengan ❤️ menggunakan <strong>Zephytor ZephyTool</strong>.</p>
  </div>
</footer>

<a href="https://zephytor.com" class="generated-badge" target="_blank">⚡ By Zephytor</a>
</body>
</html>
HTML;
    }
}
