<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Produk;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class HomeDashboardAdmin extends Controller
{
    public function index()
    {
        $blogs = Blog::count();
        $produk = Produk::count();
        $komunitas = Komunitas::count();
        return view('admin.index', compact('blogs', 'produk', 'komunitas'));
    }
}
