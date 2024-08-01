<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'price', 'description', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
