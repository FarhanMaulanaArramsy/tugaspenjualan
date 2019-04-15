<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TblDistributor;

class DistributorController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('admin.distributor');
    }

    public function savedistributor(Request $r)
    {
    	$d = new TblDistributor;
    	$d->id_distributor = $r->input('id_distributor');
    	$d->nama_distributor = $r->input('nama_distributor');
    	$d->alamat = $r->input('alamat');
    	$d->kota_asal = $r->input('kota_asal');
    	$d->email = $r->input('email');
    	$d->telpon = $r->input('telpon');
    	$d->save();
    	return redirect(url('admin/distributor'));
    }

    public function updatedistributor(Request $r)
    {
    	$d = TblDistributor::find($r->input('id'));
    	$d->id_distributor = $r->input('id_distributor');
    	$d->nama_distributor = $r->input('nama_distributor');
    	$d->alamat = $r->input('alamat');
    	$d->kota_asal = $r->input('kota_asal');
    	$d->email = $r->input('email');
    	$d->telpon = $r->input('telpon');
    	$d->save();
    	return redirect(url('admin/distributor'));
    }

    public function edit($id)
    {
    	$d = TblDistributor::find($id);
    	return view('admin.editdistributor')->with('d',$d);
    }

    public function delete($id)
    {
    	$d = TblDistributor::find($id);
    	$d->delete();
    	return redirect(url('admin/distributor'));
    }
}
