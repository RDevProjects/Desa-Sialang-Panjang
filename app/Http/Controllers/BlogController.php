<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.tambah');
    }

    public function store(Request $request)
    {
        // Validasi data request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar
        $imageName = date('YmdHis') . '.' . $request->image->extension();
        $imageNamePath = 'images/blog/' . $imageName;
        Storage::putFileAs('public/images/blog', $request->image, $imageName);

        // Buat slug
        $slug = Str::slug($request->title, '-');

        // Buat blog baru
        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $imageNamePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.blog')->with('success', 'Blog berhasil ditambahkan');
    }


    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $slug)
    {
        // Validasi data request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Temukan blog berdasarkan slug
        $blog = Blog::where('slug', $slug)->first();

        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }

            // Simpan gambar baru
            $imageName = date('YmdHis') . '.' . $request->image->extension();
            $imageNamePath = 'images/blog/' . $imageName;
            Storage::putFileAs('public/images/blog', $request->image, $imageName);

            // Set path gambar baru untuk diupdate
            $blog->image = $imageNamePath;
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $imageNamePath = $blog->image;
        }

        // Update slug jika title berubah
        $newSlug = Str::slug($request->title, '-');
        if ($newSlug !== $blog->slug) {
            $blog->slug = $newSlug;
        }

        // Update data blog
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageNamePath;

        // Simpan perubahan
        $blog->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.blog')->with('success', 'Blog berhasil diupdate');
    }

    public function destroy($slug)
    {
        // Temukan blog berdasarkan slug
        $blog = Blog::where('slug', $slug)->first();

        // Hapus gambar jika ada
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        // Hapus blog
        $blog->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.blog')->with('success', 'Blog berhasil dihapus');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blog.show', compact('blog'));
    }
}
