<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    public function index(){
        $trans = Transaction::where('id_user', Auth::id())->get();
        return view('user/dashboard', compact('trans'));
    }
}
