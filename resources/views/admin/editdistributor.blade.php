@extends('layouts.admin')
@section('content')
<form method="POST" action="{{url('admin/updatedistributor')}}">
          @csrf
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Ubah Distributor</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Id Distributor</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                  </div>
                  <input type="hidden" name="id" value="{{$d->id}}">
                  <input type="number" class="form-control" name="id_distributor" value="{{$d->id_distributor}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Nama Distributor</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_distributor" value="{{$d->nama_distributor}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Alamat</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <textarea class="form-control" name="alamat">{{$d->alamat}}</textarea>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Kota Asal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
                  <input type="text" class="form-control" name="kota_asal" value="{{$d->kota_asal}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Email</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-at"></i>
                  </div>
                  <input type="text" class="form-control" name="email" value="{{$d->email}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Telepon</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' name="telpon" data-mask value="{{$d->telpon}}">
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