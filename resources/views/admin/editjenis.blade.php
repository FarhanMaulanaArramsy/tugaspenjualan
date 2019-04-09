@extends('layouts.admin');
@section('content');
<form method="POST" action="{{url('admin/updatejenis')}}">
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
                  <input type="hidden" name="id" value="{{$j->id}}">
                  <input type="number" class="form-control" name="kode_jenis" value="{{$j->kode_jenis}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Jenis</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-filter"></i>
                  </div>
                  <input type="Text" class="form-control" name="jenis" value="{{$j->jenis}}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             <button type="submit" style="color: green; float: right;">Ubah</button>
            </div>
            <!-- /.box-body -->
          </div>
        </form>
        @endsection