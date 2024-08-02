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
}
