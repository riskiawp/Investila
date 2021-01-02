<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Lot;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    public function index(){
        $trans = Transaction::where('id_user', Auth::id())->get();
        return view('user/dashboard', compact('trans'));
    }

    public function input(Request $request){
        if(!$request->jumlah < 5){
            $roi = Lot::where('id', $request->id_lot)->first();
            $keuntungan = ($request->jumlah * 100000) * $roi->roi / 100;
            Transaction::create([
                'id_user' => Auth::id(),
                'id_lot' => $request->id_lot,
                'jumlah' => $request->jumlah,
                'keuntungan' => $keuntungan,
                'status' => 0
            ]);
            return redirect('user/pendanaan')->with('success', 'berhasil input');
        }
    }

    public function index_admin(){
        $trans = Transaction::all();
        return view('admin/tabel-transaksi', compact('trans'));
    }

    public function delete_transaksi($id){
        Transaction::findOrFail($id)->delete();
        return redirect('admin/tabel-transaksi')->with('success', 'berhasil delete');
    }
}
