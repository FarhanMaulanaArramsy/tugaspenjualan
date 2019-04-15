@extends('layouts.admin')
<!-- @section('nama')
<h1>Data Barang</h1>
@endsection -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Jenis</th>
                  <th>Jenis</th>
                  <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
    $j = \App\TblJenis::all();
    ?>

    @foreach($j as $n)
                <tr>
                  <td>{{$n->kode_jenis}}</td>
                  <td>{{$n->jenis}}</td>
                  <td>
                      <a href="{{url('admin/deletejenis/'. $n->id)}}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('Apa anda yakin ingin menghapusnya?');"></i></a>
                     <a href="{{url('admin/editjenis/'. $n->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <form method="POST" action="{{url('admin/savejenis')}}">
          @csrf
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah Jenis</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Kode Jenis</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="number" class="form-control" name="kode_jenis">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Jenis</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-filter"></i>
                  </div>
                  <input type="Text" class="form-control" name="jenis">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i></button>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </form>
          @endsection