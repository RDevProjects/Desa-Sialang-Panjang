<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KomunitasController extends Controller
{

    public function index()
    {
        $komunitass = Komunitas::all();
        return view('admin.komunitas.index', compact('komunitass'));
    }

    public function create()
    {
        return view('admin.komunitas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $imageName = date('YmdHis') . '.' . $request->image->extension();
        $imageNamePath = 'images/komunitas/' . $imageName;
        Storage::putFileAs('public/images/komunitas', $request->image, $imageName);

        $slug = Str::slug($request->name, '-');

        Komunitas::create([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $imageNamePath,
        ]);

        return redirect()->route('dashboard.komunitas')->with('success', 'Komunitas berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $komunitas = Komunitas::where('slug', $slug)->first();
        return view('admin.komunitas.edit', compact('komunitas'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $komunitas = Komunitas::where('slug', $slug)->first();

        if ($request->hasFile('image')) {
            if ($komunitas->image) {
                Storage::delete('public/' . $komunitas->image);
            }

            $imageName = date('YmdHis') . '.' . $request->image->extension();
            $imageNamePath = 'images/komunitas/' . $imageName;
            Storage::putFileAs('public/images/komunitas', $request->image, $imageName);

            $komunitas->image = $imageNamePath;
        } else {
            $imageNamePath = $komunitas->image;
        }

        $newSlug = Str::slug($request->name, '-');
        if ($newSlug !== $komunitas->slug) {
            $komunitas->slug = $newSlug;
        }

        $komunitas->name = $request->name;
        $komunitas->description = $request->description;
        $komunitas->image = $imageNamePath;

        $komunitas->save();

        return redirect()->route('dashboard.komunitas')->with('success', 'Komunitas berhasil diupdate');
    }

    public function destroy($slug)
    {
        $komunitas = Komunitas::where('slug', $slug)->first();

        if ($komunitas->image) {
            Storage::delete('public/' . $komunitas->image);
        }

        $komunitas->delete();

        return redirect()->route('dashboard.komunitas')->with('success', 'Komunitas berhasil dihapus');
    }

    public function show($slug)
    {
        $komunitas = Komunitas::where('slug', $slug)->first();
        return view('admin.komunitas.show', compact('komunitas'));
    }
}
