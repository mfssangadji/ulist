@extends('auths.layouts.app')
@section('title', 'Tambah Kecamatan')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('kecamatan.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group @error('nama_kecamatan') has-error @enderror">
                  <label for="nama_kecamatan">Nama Kecamatan</label>
                  <input type="text" class="form-control" value="{{ old('nama_kecamatan') }}" id="nama_kecamatan" name="nama_kecamatan" placeholder="masukan nama kecamatan">
                  @error('nama_kecamatan')
                  	<span class="help-block">nama kecamatan tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('kecamatan') }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection