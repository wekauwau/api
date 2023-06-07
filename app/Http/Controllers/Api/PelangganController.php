<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function show(Request $request)
    {
        $result = Pelanggan::where('username', $request->username)
            ->where('password', $request->password)
            ->get();

        return sizeof($result);
    }
}
