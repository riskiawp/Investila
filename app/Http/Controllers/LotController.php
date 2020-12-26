<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function tampil_lot(){
        $lot = Lot::all();
        return view('admin/tabel-lot', compact('lot'));
    }

    public function detail_lot($id){
        $lot = Lot::findOrFail($id);
        return view('admin/update-lot', compact('lot'));
    }

    public function input_lot(Request $request){
        Lot::create([
            'ikan' => $request->ikan,
            'roi' => $request->roi,
            'lokasi' => $request->lokasi,
            'jumlah_lot' => $request->jumlah_lot,
            'image' => $request->image
        ]);
        return redirect('/admin/tabel-lot')->with('success', 'berhasil input');

    }

    public function update_lot(Request $request){
        Lot::where('id',$request->id)->first()->update([
            'ikan' => $request->ikan,
            'roi' => $request->roi,
            'lokasi' => $request->lokasi,
            'jumlah_lot' => $request->jumlah_lot,
            'image' => $request->image_text
        ]);
        return redirect('/admin/tabel-lot')->with('success', 'berhasil input');

    }

    public function delete_lot($id){
        Lot::findOrFail($id)->delete();
        return redirect('/admin/tabel-lot')->with('success', 'berhasil delete');
    }
}
