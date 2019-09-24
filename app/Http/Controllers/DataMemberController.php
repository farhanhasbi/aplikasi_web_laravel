<?php

namespace App\Http\Controllers;

use App\DataMember;
use App\Member;
use Illuminate\Http\Request;
use App\Exports\DataMemberExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Datatables;

class DataMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get2()
    {
        $jenis = Member::all();
        return view('member.nambah')->withMember($jenis);
    }

    public function muncul()
    {
        $datamember = DataMember::all();
        return view('member.muncul')->withData($datamember);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nambah(Request $request)
    {
        $nambah = new DataMember;
        $nambah->nama_member   = $request->nama_member;
        $nambah->jenis_member  = $request->jenis_member;
        $nambah->email         = $request->email;
        $nambah->save();
        return redirect('muncul');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = DataMember::find($id);
        $jenis = Member::all();
        return view('member.ngedit')->withData($view)->withMember($jenis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMember $datamember)
    {
        $view = DataMember::find($request->id);
        $view->nama_member  = $request->nama_member;
        $view->jenis_member = $request->jenis_member;
        $view->email        = $request->email;
        $view->save();
        return redirect('muncul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DataMember::find($id);
        $delete->delete();
        return bacK();
    }
    public function excel()
    {
        return Excel::download(new DataMemberExport, 'Data_Member.xlsx');
    }
    public function cetak_pdf()
    {
        $datamember = DataMember::all();
 
        $pdf = PDF::loadview('member.muncul_pdf',['data'=>$datamember]);
        return $pdf->download('laporan-datamember-pdf');
    }

   public function index(){
  return response( DataMember::all());
}

public function create(request $req){
        $nambah = new DataMember;
        $nambah->nama_member   = $req->nama_member;
        $nambah->jenis_member  = $req->jenis_member;
        $nambah->email         = $req->email;
        $nambah->save();


        return "Data Berhasil Masuk";
}

 public function dissapear($id)
    {
        $delete = DataMember::find($id);
        $delete->delete();

        return "Berhasil Dihapus";

  }
  
  public function upgrade(request $req, $id){
        $nama_member   = $req->nama_member;
        $jenis_member  = $req->jenis_member;
        $email         = $req->email;

        $up = DataMember::find($id);
        $up->nama_member = $nama_member;
        $up->jenis_member = $jenis_member;
        $up->email = $email;
        $up->save();

        return "Data Berhasil Di Update";


}

   }