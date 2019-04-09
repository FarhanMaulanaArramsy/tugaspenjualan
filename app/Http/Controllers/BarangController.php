<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TblBarang;

class BarangController extends Controller
{
    public function index()
    {
    	return view('admin.barang');
    }

    public function savebarang(Request $r)
    {
    	$b = new TblBarang;
    	$b->kode_barang = $r->input('kode_barang');
    	$b->nama_barang = $r->input('nama_barang');
    	$b->kode_jenis = $r->input('kode_jenis');
    	$b->harga_net = $r->input('harga_net');
    	$b->harga_jual = $r->input('harga_jual');
    	$b->stok = $r->input('stok');
    	$b->save();
    	return redirect(url('admin/barang'));
    }

    public function edit($id)
    {
    	$b = TblBarang::find($id);
    	return view('admin.editbarang')->with('b',$b);
    }

    public function updatebarang(Request $r)
    {
    	$b = TblBarang::find($r->input('id'));
    	$b->kode_barang = $r->input('kode_barang');
    	$b->nama_barang = $r->input('nama_barang');
    	$b->kode_jenis = $r->input('kode_jenis');
    	$b->harga_net = $r->input('harga_net');
    	$b->harga_jual = $r->input('harga_jual');
    	$b->stok = $r->input('stok');
    	$b->save();
    	return redirect(url('admin/barang'));
    }

    public function delete($id)
    {
    	$b = TblBarang::find($id);
    	$b->delete();
    	return redirect(url('admin/barang'));
    }
}
