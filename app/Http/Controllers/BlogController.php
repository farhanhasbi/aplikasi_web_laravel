<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Kategori;
use App\Komen;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $blog = Blog::all();
        $kategori = Kategori::all();
        return view('artikel')->withData($blog)->withKategori($kategori);
    }

    public function get2()
    {
        $kategori = Kategori::all();
        return view('admin.tbh')->withKategori($kategori);
    }

    public function tampil()
    {
        $blog = Blog::all();
        return view('admin.tampil')->withData($blog);
    }
    public function readmore($id)
    {
        $blog = Blog::where('id', $id)->get();
        $blog2 = Komen::orderBy('id', 'desc')->where('komenid', $id)->get();
        return view('readmore', ['blog'=>$blog, 'blog2'=>$blog2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tbh = new Blog;
        $tbh->judul   = $request->judul;
        $tbh->desc    = $request->desc;
        $tbh->id_kategori = $request->id_kategori;
        $tbh->author = $request->author;

        $file = $request->file('foto');

        $ext = $file->getClientOriginalName();
        $file->move('img/', $ext);
        $tbh->foto = $ext;

        $tbh->save();
        return redirect('tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Blog::find($id);
        $kt = Kategori::all();
        return view('admin.edit')->withData($view)->withKt($kt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $up = Blog::find($req->id);
        $up->judul   = $req->judul;
        $up->desc    = $req->desc;
        $up->id_kategori = $req->id_kategori;
        $up->author = $req->author;
        $file = $req->foto;

        $ext = $file->getClientOriginalName();
        $file->move('img/', $ext);
        $up->foto = $ext;

        $up->save(); 
        return redirect('tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Blog::find($id);
        $del->delete();
        return bacK();
    }
}
