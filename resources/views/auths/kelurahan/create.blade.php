@extends('auths.layouts.app')
@section('title', 'Tambah Jenis SPOT')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jenis SPOT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('jenis.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group @error('nama_jenis') has-error @enderror">
                  <label for="nama_jenis">Nama Jenis Spot</label>
                  <input type="text" class="form-control" value="{{old('nama_jenis')}}" id="nama_jenis" name="nama_jenis" placeholder="masukan nama jenis spot">
                  @error('nama_jenis')
                  	<span class="help-block">nama jenis spot tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="#" onclick="self.history.back()" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection