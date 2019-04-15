@extends('layouts.admin')
<!-- @section('nama')
<h1>Data Barang</h1>
@endsection -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Distributor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Distributor</th>
                  <th>Nama Distributor</th>
                  <th>Alamat</th>
                  <th>Kota Asal</th>
                  <th>Email</th>
                  <th>Telpon</th>
                  <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
    $d = \App\TblDistributor::all();
    ?>

    @foreach($d as $n)
                <tr>
                  <td>{{$n->id_distributor}}</td>
                  <td>{{$n->nama_distributor}}</td>
                  <td>{{$n->alamat}}</td>
                  <td>{{$n->kota_asal}}</td>
                  <td>{{$n->email}}</td>
                  <td>{{$n->telpon}}</td>
                  <td>
                      <a href="{{url('admin/deletedistributor/'. $n->id)}}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('Apa anda yakin ingin menghapusnya?');"></i></a>
                     <a href="{{url('admin/editdistributor/'. $n->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <form method="POST" action="{{url('admin/savedistributor')}}">
          @csrf
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah Distributor</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Id Distributor</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="number" class="form-control" name="id_distributor">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Nama Distributor</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_distributor">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Alamat</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <textarea class="form-control" name="alamat"></textarea>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Kota Asal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
                  <input type="text" class="form-control" name="kota_asal">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Email</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-at"></i>
                  </div>
                  <input type="text" class="form-control" name="email">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Telepon</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' name="telpon" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></button>
              </div>            </div>
            <!-- /.box-body -->
          </div>
        </form>
          @endsection