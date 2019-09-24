<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    
    public function get()
    {

        $get = Galeri::all();
        return view('menugaleri')->withGaleri($get);

    }

    public function get1()
    {

        $get = Galeri::all();
        return view('galeri')->withGaleri($get);

    }

    public function get2()
    {

        $get = Galeri::all();
        return view('tambahgaleri')->withGaleri($get);

    }

    public function tbh(Request $req)
    {

       $tbh = new Galeri;
       $tbh->author = $req->author;
       $file = $req->file('gambar');

       $this->validate($req, ['gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
       $fnm = rand() .'.'. $file->getClientOriginalName();
       $req->file('gambar')->move('uploadimg/',$fnm);
       $tbh->gambar = $fnm;
       $tbh->save();
       return redirect('galeri');

   }

   public function save()
   {
    $galeri = Galeri::all();
    return view('menugaleri')->withGaleri($galeri);
}

public function delete($id)
{
    $galeri = Galeri::find($id); 
    $galeri->delete();
    return back();
}
public function json()
    {
        return Datatables::of(Galeri::all())->make(true);
    }



}

