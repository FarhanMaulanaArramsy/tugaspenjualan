@extends('layouts.admin')
@section('content')
<form method="POST" action="{{url('admin/updatepetugas')}}">
          @csrf
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Ubah Petugas</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Id Petugas</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="hidden" name="id" value="{{$p->id}}"> 
                  <input type="number" class="form-control" name="id_petugas" value="{{$p->id_petugas}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Nama Petugas</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_petugas" value="{{$p->nama_petugas}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Alamat</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <textarea class="form-control" name="alamat">{{$p->alamat}}</textarea>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Email</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-at"></i>
                  </div>
                  <input type="text" class="form-control" name="email" value="{{$p->email}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Telepon</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' name="telpon" value="{{$p->telpon}}" data-mask>
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