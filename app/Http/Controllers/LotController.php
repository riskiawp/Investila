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
        $request->image->move(public_path('assets/img/lot'),  $request->ikan.'.'.$request->image->getClientOriginalExtension());
        Lot::create([
            'ikan' => $request->ikan,
            'roi' => $request->roi,
            'lokasi' => $request->lokasi,
            'jumlah_lot' => $request->jumlah_lot,
            'image' =>  $request->ikan.'.'.$request->image->getClientOriginalExtension()
        ]);
        return redirect('/admin/tabel-lot')->with('success', 'berhasil input');

    }

    public function update_lot(Request $request){
        if($request->image){
            $name = $request->ikan.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/lot'),  $name);
        }else{
            $name = $request->image_text;
        }
        Lot::where('id',$request->id)->first()->update([
            'ikan' => $request->ikan,
            'roi' => $request->roi,
            'lokasi' => $request->lokasi,
            'jumlah_lot' => $request->jumlah_lot,
            'image' => $name
        ]);
        return redirect('/admin/tabel-lot')->with('success', 'berhasil input');

    }

    public function delete_lot($id){
        Lot::findOrFail($id)->delete();
        return redirect('/admin/tabel-lot')->with('success', 'berhasil delete');
    }
}
