<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataMember;

class AutoSearchController extends Controller
{
    public function index()
    {
    	return view('autocomplete');
    }

    public function ajaxData(Request $request){
        $query = $request->get('query');        
        $posts = DataMember::select('nama_member as name')->where('nama_member', 'LIKE','%'.$query.'%')->get();        
        return response()->json($posts);
	}
}
