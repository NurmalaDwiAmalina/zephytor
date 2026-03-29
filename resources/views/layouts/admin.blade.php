<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Admin') — Zephytor Admin</title>
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon.svg">
<meta name="theme-color" content="#0f172a">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/landing.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

<div class="dash-wrapper">
  <!-- Sidebar -->
  <aside class="dash-sidebar" id="sidebar">
    <div class="sidebar-logo">
      <a href="/admin" class="logo-link">
        <span>Zephytor</span>
      </a>
      <span class="admin-badge">ADMIN</span>
    </div>

    <nav class="sidebar-nav">
      <a href="/admin" class="sidebar-link {{ request()->is('admin') ? 'active' : '' }}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
        <span>Dashboard</span>
      </a>
      <a href="/admin/packages" class="sidebar-link {{ request()->is('admin/packages*') ? 'active' : '' }}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
        <span>Paket</span>
      </a>
      <a href="/admin/orders" class="sidebar-link {{ request()->is('admin/orders*') ? 'active' : '' }}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>
        <span>Pesanan</span>
      </a>
      <a href="/admin/invoices" class="sidebar-link {{ request()->is('admin/invoices*') ? 'active' : '' }}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
        <span>Invoices</span>
      </a>
      <a href="/admin/invoices/create" class="sidebar-link {{ request()->is('admin/invoices/create') ? 'active' : '' }}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
        <span>Buat Invoice</span>
      </a>
      <div class="sidebar-divider"></div>
      <a href="/" class="sidebar-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        <span>Lihat Website</span>
      </a>
    </nav>

    <div class="sidebar-user">
      @if(auth()->user()->avatar)
        <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="user-avatar">
      @else
        <div class="user-avatar-placeholder">{{ substr(auth()->user()->name, 0, 1) }}</div>
      @endif
      <div class="user-info">
        <span class="user-name">{{ auth()->user()->name }}</span>
        <span class="user-role-badge">Admin</span>
      </div>
    </div>
  </aside>

  <!-- Main -->
  <div class="dash-main">
    <header class="dash-topbar">
      <button class="sidebar-toggle" onclick="document.getElementById('sidebar').classList.toggle('open')">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div class="topbar-title">@yield('page-title', 'Admin')</div>
      <div class="topbar-actions">
        <button class="theme-btn" id="themeToggle">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
        </button>
        <form action="/logout" method="POST" style="display:inline">
          @csrf
          <button type="submit" class="logout-btn">Keluar</button>
        </form>
      </div>
    </header>

    <main class="dash-content">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
      @endif
      @yield('content')
    </main>
  </div>
</div>

<script>
const themeToggle = document.getElementById('themeToggle');
const html = document.documentElement;
if (localStorage.getItem('theme') === 'dark') html.classList.add('dark-theme');
themeToggle.addEventListener('click', () => {
  html.classList.toggle('dark-theme');
  localStorage.setItem('theme', html.classList.contains('dark-theme') ? 'dark' : 'light');
});
</script>
@stack('scripts')
</body>
</html>
