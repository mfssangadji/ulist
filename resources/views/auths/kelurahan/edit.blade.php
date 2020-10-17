@extends('auths.layouts.app')
@section('title', 'Ubah Jenis SPOT')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Jenis SPOT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('jenis').'/'.$kelurahan->id }}">
              @method('PATCH')
              @csrf
              <div class="box-body">
                <div class="form-group @error('nama_jenis') has-error @enderror">
                  <label for="nama_jenis">Nama Jenis SPOT</label>
                  <input type="text" class="form-control" value="{{$kelurahan->nama_jenis}}" id="nama_jenis" name="nama_jenis" placeholder="masukan nama jenis post">
                  @error('nama_jenis')
                    <span class="help-block">nama jenis spot tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Ubah</button>
                <a href="#" onclick="self.history.back()" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection