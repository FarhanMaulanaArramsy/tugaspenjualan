<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TblJenis;

class JenisController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('admin.jenis');
    }

    public function savejenis(Request $r)
    {
    	$j = new TblJenis;
    	$j->kode_jenis = $r->input('kode_jenis');
    	$j->jenis = $r->input('jenis');
    	$j->save();
    	return redirect(url('admin/jenis'));
    }

    public function updatejenis(Request $r)
    {
    	$j = TblJenis::find($r->input('id'));
    	$j->kode_jenis = $r->input('kode_jenis');
    	$j->jenis = $r->input('jenis');
    	$j->save();
    	return redirect(url('admin/jenis'));	
    }

    public function edit($id)
    {
    	$j = TblJenis::find($id);
    	return view('admin.editjenis')->with('j', $j);
    }

    public function delete($id)
    {
    	$j = TblJenis::find($id);
    	$j->delete();
    	return redirect(url('admin/jenis'));
    }
}
