@extends('layouts.admin')
@section('content')
<form method="POST" action="{{url('admin/updatebarang')}}" enctype="multipart/form-data">
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
              <label>Foto Barang</label>
                 <br>
                 <center>
                   <div class="form-group col-md-12">
                     <img src="{{asset('images/'. $b->foto_barang)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 90px;">
                     <br>  
                     <center>
                         <div class="container-fluid" style="width: 100%;">                                            
                             <input name="foto_barang" type="file" class="ts-forms" style="" onchange="readURL1(this);" >
                         </div>

                     </center>
                   </div>
                   </center>
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
        <script type="text/javascript">
                         function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
        @endsection