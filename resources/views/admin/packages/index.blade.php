@extends('layouts.admin')
@section('title', 'Kelola Paket')
@section('page-title', 'Kelola Paket')

@section('content')
<div class="dash-page">

  <div class="page-header">
    <div>
      <h2 class="page-h">Kelola Paket</h2>
      <p class="page-sub">Paket ini akan tampil di halaman beranda dan dashboard user.</p>
    </div>
    <a href="/admin/packages/create" class="btn btn-primary">+ Tambah Paket</a>
  </div>

  <div class="packages-admin-grid">
    @foreach($packages as $pkg)
    <div class="pkg-admin-card {{ $pkg->is_popular ? 'pkg-popular' : '' }} {{ !$pkg->is_active ? 'pkg-inactive' : '' }}">
      <div class="pkg-admin-header">
        <div>
          @if($pkg->badge)
            <div class="pkg-badge">{{ $pkg->badge }}</div>
          @endif
          <div class="pkg-name">{{ $pkg->name }}</div>
          <div class="pkg-price">{{ $pkg->price_display }}</div>
        </div>
        <div class="pkg-admin-actions">
          @if(!$pkg->is_active)
            <span class="status-badge" style="--color: #999">Nonaktif</span>
          @endif
          <a href="/admin/packages/{{ $pkg->id }}/edit" class="btn btn-sm btn-outline">Edit</a>
          <form action="/admin/packages/{{ $pkg->id }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus paket ini?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
          </form>
        </div>
      </div>
      <ul class="pkg-features compact">
        @foreach($pkg->features as $feat)
        <li>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          {{ $feat }}
        </li>
        @endforeach
      </ul>
      @if($pkg->guarantee)
        <div class="pkg-guarantee small">🛡 {{ $pkg->guarantee }}</div>
      @endif
      <div class="pkg-stats">
        <span>{{ $pkg->orders()->count() }} pesanan</span>
        <span>Urutan: {{ $pkg->sort_order }}</span>
      </div>
    </div>
    @endforeach
  </div>

</div>
@endsection
