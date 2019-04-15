<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\TblPetugas;

class PetugasController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('admin.petugas');
    }

    public function savepetugas(Request $r)
    {
    	$p = new TblPetugas;
    	$p->id_petugas = $r->input('id_petugas');
    	$p->nama_petugas = $r->input('nama_petugas');
    	$p->alamat = $r->input('alamat');
    	$p->email = $r->input('email');
    	$p->telpon = $r->input('telpon');
    	$p->save();
    	return redirect(url('admin/petugas'));
    }

    public function edit($id)
    {
    	$p = TblPetugas::find($id);
    	return view('admin.editpetugas')->with('p', $p);
    }

    public function updatepetugas(Request $r)
    {
    	$p = TblPetugas::find($r->input('id'));
    	$p->id_petugas = $r->input('id_petugas');
    	$p->nama_petugas = $r->input('nama_petugas');
    	$p->alamat = $r->input('alamat');
    	$p->email = $r->input('email');
    	$p->telpon = $r->input('telpon');
    	$p->save();
    	return redirect(url('admin/petugas'));
    }

    public function delete($id)
    {
    	$p = TblPetugas::find($id);
    	$p->delete();
    	return redirect(url('admin/petugas'));
    }
}
