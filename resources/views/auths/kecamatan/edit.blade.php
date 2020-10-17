@extends('auths.layouts.app')
@section('title', 'Ubah Kecamatan')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('kecamatan').'/'.$kecamatan->id }}">
              @method('PATCH')
              @csrf
              <div class="box-body">
                <div class="form-group @error('nama_kecamatan') has-error @enderror">
                  <label for="nama_kecamatan">Nama Kecamatan</label>
                  <input type="text" class="form-control" value="{{ $kecamatan->nama_kecamatan }}" id="nama_kecamatan" name="nama_kecamatan" placeholder="masukan nama kecamatan">
                  @error('name')
                  	<span class="help-block">nama kecamatan tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Ubah</button>
                <a href="{{ route('kecamatan') }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection