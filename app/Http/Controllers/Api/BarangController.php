<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BarangResource;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        //get posts
        // $posts = Barang::latest()->paginate(5);
        $posts = Barang::all();

        //return collection of posts as a resource
        return new BarangResource(true, 'List Barang', $posts);
    }

    public function show(string $id)
    {
        return Barang::where('id', $id)->get();
    }
}
