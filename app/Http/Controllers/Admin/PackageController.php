<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('sort_order')->get();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:100',
            'description'   => 'nullable|string',
            'price'         => 'nullable|numeric',
            'price_display' => 'required|string|max:50',
            'badge'         => 'nullable|string|max:50',
            'features'      => 'required|string',
            'guarantee'     => 'nullable|string|max:100',
            'wa_link'       => 'nullable|url',
            'sort_order'    => 'nullable|integer',
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->features)));

        Package::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name) . '-' . time(),
            'description'   => $request->description,
            'price'         => $request->price,
            'price_display' => $request->price_display,
            'badge'         => $request->badge,
            'features'      => array_values($features),
            'guarantee'     => $request->guarantee,
            'wa_link'       => $request->wa_link,
            'is_popular'    => $request->boolean('is_popular'),
            'is_active'     => $request->boolean('is_active', true),
            'sort_order'    => $request->sort_order ?? 0,
        ]);

        return redirect('/admin/packages')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'          => 'required|string|max:100',
            'description'   => 'nullable|string',
            'price'         => 'nullable|numeric',
            'price_display' => 'required|string|max:50',
            'badge'         => 'nullable|string|max:50',
            'features'      => 'required|string',
            'guarantee'     => 'nullable|string|max:100',
            'wa_link'       => 'nullable|url',
            'sort_order'    => 'nullable|integer',
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->features)));

        $package->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
            'price_display' => $request->price_display,
            'badge'         => $request->badge,
            'features'      => array_values($features),
            'guarantee'     => $request->guarantee,
            'wa_link'       => $request->wa_link,
            'is_popular'    => $request->boolean('is_popular'),
            'is_active'     => $request->boolean('is_active', true),
            'sort_order'    => $request->sort_order ?? 0,
        ]);

        return redirect('/admin/packages')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/admin/packages')->with('success', 'Paket berhasil dihapus.');
    }
}
