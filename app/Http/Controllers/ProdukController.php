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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
}
