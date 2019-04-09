@extends('layouts.admin')
<!-- @section('nama')
<h1>Data Barang</h1>
@endsection -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Kode Jenis</th>
                  <th>Harga Net</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
                  <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
    $b = \App\TblBarang::all();
    ?>

    @foreach($b as $n)
                <tr>
                  <td>{{$n->kode_barang}}</td>
                  <td>{{$n->nama_barang}}</td>
                  <td>{{$n->kode_jenis}}</td>
                  <td>{{$n->harga_net}}</td>
                  <td>{{$n->harga_jual}}</td>
                  <td>{{$n->stok}}</td>
                  <td>
                      <a href="{{url('admin/delete/'. $n->id)}}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('Apa anda yakin ingin menghapusnya?');"></i></a>
                     <a href="{{url('admin/edit/'. $n->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <form method="POST" action="{{url('admin/savebarang')}}">
          @csrf
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Kode Barang</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="number" class="form-control" name="kode_barang">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Nama Barang</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_barang">
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
                  <input type="number" class="form-control" name="harga_net">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Harga Jual</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-tag"></i>
                  </div>
                  <input type="number" class="form-control" name="harga_jual">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Stok</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-tasks"></i>
                  </div>
                  <input type="number" class="form-control" name="stok">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             <button type="submit" style="color: green; float: right;">Tambah</button>
            </div>
            <!-- /.box-body -->
          </div>
        </form>
          @endsection