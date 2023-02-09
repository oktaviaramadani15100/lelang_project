<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
 


class LobbyController extends Controller
{
    public function index(Request $request){
        // $data = Barang::with(['user'])->get();
        if($request->has('search')){
            // $search = $request->search;
            $data = Barang::where('preview_item','LIKE','%' .$request->search.'%')->paginate(12);
        }
        else{
            $data = Barang::all();
        }
        return view('halaman.user', compact('data'));
        
    }

    // public function search(Request $request){
    //     if($request->has('search')){
    //         $search = $request->search;
    //         $data = Barang::where('preview_item', 'LIKE','%'.$search.'%')->get();
    //     }
    //     else{
    //         $data = Barang::all();
    //     }
    //     return view('halaman.user',['data' => $data]);
    // }

}
