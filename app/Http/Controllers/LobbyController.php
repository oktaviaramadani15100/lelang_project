<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('halaman.user', compact('data'));
    }


}
