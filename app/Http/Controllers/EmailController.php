<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HasbiEmail;
use Auth;
 
class EmailController extends Controller
{
    public function kirim(Request $req)
    {
    	$data = array(
    		"email" => $req->email,
    		"msg"  => $req->msg,
    	);

    	Mail::to($data['email'])->send(new HasbiEmail($data));
        return back();

    }
 
}