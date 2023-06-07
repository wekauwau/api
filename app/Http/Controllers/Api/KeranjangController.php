<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function store(Request $request)
    {
        $order = new Keranjang([
            'pelanggans_id' => $request->pelanggan_id,
            'barangs_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
        ]);
        $order->save();
    }

    public function show($id)
    {
        return Keranjang::where('pelanggans_id', $id)->get();
    }
}
