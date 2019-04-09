@extends('layouts.admin')
@section('content')
<form method="POST" action="{{url('admin/updatebarang')}}">
          @csrf
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Ubah Barang</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Kode Barang</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="hidden" class="form-control" name="id" value="{{$b->id}}" hidden="true">
                  <input type="number" class="form-control" name="kode_barang" value="{{$b->kode_barang}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Nama Barang</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_barang" value="{{$b->nama_barang}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Kode Jenis</label>
                <?php 
                $j = \App\TblJenis::all();
                ?>
                <select class="form-control select2" style="width: 100%;" name="kode_jenis">
                @foreach($j as $n)
                  <option>{{$n->kode_jenis}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Harga Net</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-tags"></i>
                  </div>
                  <input type="number" class="form-control" name="harga_net" value="{{$b->harga_net}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Harga Jual</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-tags"></i>
                  </div>
                  <input type="number" class="form-control" name="harga_jual" value="{{$b->harga_jual}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Stok</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-tasks"></i>
                  </div>
                  <input type="number" class="form-control" name="stok" value="{{$b->stok}}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             <button type="submit" style="color: blue; float: right;">Ubah</button>
            </div>
            <!-- /.box-body -->
          </div>
        </form>
        @endsection