<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'description' => 'required',
        ]);

        $slug = Str::slug($request->nama, '-');

        $imageName = date('YmdHis') . '.' . $request->image->extension();
        $imageNamePath = 'images/produk/' . $imageName;
        Storage::putFileAs('public/images/produk', $request->image, $imageName);

        Produk::create([
            'name' => $request->nama,
            'slug' => $slug,
            'price' => $request->harga,
            'image' => $imageNamePath,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'description' => 'required',
        ]);

        $produk = Produk::where('slug', $slug)->first();

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            Storage::delete('public/' . $produk->image);

            $imageName = date('YmdHis') . '.' . $request->image->extension();
            $imageNamePath = 'images/produk/' . $imageName;
            Storage::putFileAs('public/images/produk', $request->image, $imageName);
        } else {
            $imageNamePath = $produk->image;
        }

        $produk->update([
            'name' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'price' => $request->harga,
            'image' => $imageNamePath,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.produk')->with('success', 'Produk berhasil diubah');
    }

    public function destroy($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        Storage::delete('public/' . $produk->image);
        $produk->delete();

        return redirect()->route('dashboard.produk')->with('success', 'Produk berhasil dihapus');
    }
}
