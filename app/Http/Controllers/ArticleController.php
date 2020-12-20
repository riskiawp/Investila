<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function tampil_article(){
        $artikel = Article::all();
        return view('admin/tabel-artikel', compact('artikel'));
    }

    public function update_article($id){
        $artikel = Article::findOrFail($id);
        return view('admin/update-artikel', compact('artikel'));
    }

    public function input(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image

        ]);
        return redirect('/admin/tabel-artikel')->with('success', 'berhasil input');

    }

    public function update(Request $request){
        Article::where('id',$request->id)->first()->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image
        ]);
        return redirect('/admin/tabel-artikel')->with('success', 'berhasil input');

    }

    public function delete_article($id){
        Article::findOrFail($id)->delete();
        return redirect('/admin/tabel-artikel')->with('success', 'berhasil delete');
    }
}
