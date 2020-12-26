<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function tampil_produk(){
        $lot = Lot::all();
        return view('user/product', compact('lot'));
    }
    public function detail_produk($id){
        $lot = Lot::findOrFail($id);
        return view('user/detail-product', compact('lot'));
    }
}
