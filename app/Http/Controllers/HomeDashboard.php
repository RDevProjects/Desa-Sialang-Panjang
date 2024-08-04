<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Produk;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class HomeDashboard extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->paginate(3);
        $produk = Produk::latest()->paginate(4);
        $komunitas = Komunitas::latest()->paginate(4);
        return view('index', compact('blog', 'produk', 'komunitas'));
    }

    public function blog()
    {
        $blog = Blog::latest()->get();
        return view('users.blog', compact('blog'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('users.showBlog', compact('blog'));
    }

    public function produk()
    {
        $produk = Produk::latest()->get();
        return view('users.produk', compact('produk'));
    }

    public function produkShow($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        return view('users.showProduk', compact('produk'));
    }

    public function komunitas()
    {
        $komunitas = Komunitas::latest()->get();
        return view('users.komunitas', compact('komunitas'));
    }

    public function komunitasShow($slug)
    {
        $komunitas = Komunitas::where('slug', $slug)->first();
        return view('users.showKomunitas', compact('komunitas'));
    }
}
