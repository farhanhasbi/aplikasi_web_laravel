<?php
use App\Blog;
use App\Exports\DataMemberExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
 });

// route web
Route::get('/readmore/{id}', 'BlogController@readmore')->name('read.blog');

Route::get('/profile', function () {
	return view('profile');
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/email', function () {
	return view('email');
});

Route::get('/portfolio', function () {
	return view('portfolio');
});
Route::get('/admin.tampil', function () {
    return view('admin.tampil');
});

Route::get('/member.muncul', function () {
    return view('member.muncul');
});

Route::get('/muncul', 'DataMemberController@muncul', function() {
    return view('member.muncul');
});



Route::get('/artikel', 'BlogController@get', function () {
    return view('artikel');
});

Route::get('/tampil', 'BlogController@tampil', function() {
	return view('admin.tampil');
});

Route::get('/tbh', 'BlogController@get2', function () {
    return view('admin.tbh');
});

Route::get('/nambah',  'DataMemberController@get2', function () {
    return view('member.nambah');
});

Route::get('/member.muncul/export_excel', 'DataMemberController@excel')->name('export.member');
Route::get('/member.muncul/cetak_pdf', 'DataMemberController@cetak_pdf')->name('pdf.member');

// Galeri
Route::get('/galeri','GaleriController@get1');

Route::get('/menugaleri',function(){
	return view('menugaleri');
});

Route::get('/menugaleri', 'GaleriController@get', function(){
	return view('menugaleri');
});

Route::get('getgaleri', 'GaleriController@get2',function(){
	return view('tambahgaleri');
});

Route::get('/tampil', 'UserController@index', function() {
    return view('tampil');
});

Route::post('/tambahgaleri', 'GaleriController@tbh')->name('tambahgaleri');
Route::get('/savegaleri', 'GaleriController@tbh')->name('galeri.save');
Route::get('/deletegaleri/{id}', 'GaleriController@delete')->name('galeri.delete');
// end

Route::get('chart/{type}', 'ChartController@makeChart');

Route::post('/kirimemail','EmailController@kirim')->name('kirim.email');

Route::post('/tbh_komen', 'KomenController@tambah')->name('tbh_komen');

Route::post('/save', 'DataMemberController@nambah')->name('save');

Route::post('/simpan', 'BlogController@tambah')->name('simpan');

Route::get('/edit/{id}', 'BlogController@edit')->name('edit.art');

Route::get('/edit_member/{id}', 'DataMemberController@edit')->name('edit');

Route::post('/editl', 'BlogController@update')->name('edit.spn');

Route::post('/edit_member', 'DataMemberController@update')->name('edt.simpan');

Route::get('/del/{id}', 'BlogController@destroy')->name('del');

Route::get('/delete/{id}', 'DataMemberController@destroy')->name('delete');

Route::get('/galeri/json','GaleriController@json');

Route::get('autocomplete-search',array('as'=>'autocomplete.search','uses'=>'AutoSearchController@index'));

Route::get('autocomplete-ajax',array('as'=>'autocomplete.ajax','uses'=>'AutoSearchController@ajaxData'));



Route::get('/cari/{id}', function($id){
	$kategori = DB::table('blog')->where('id_kategori', $id)->get();
	$title = DB::table('kategori')->where('id', $id)->get();
	return view('artikel2', ['kategori'=>$kategori, 'title'=>$title]);
})->name('kategori');

Auth::routes();




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
