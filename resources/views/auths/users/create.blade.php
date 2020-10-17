@extends('auths.layouts.app')
@section('title', 'Tambah Administrator')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Administrator</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('users.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group @error('name') has-error @enderror">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="masukan nama">
                  @error('name')
                  	<span class="help-block">nama tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email" placeholder="masukan email">
                  @error('email')
                  	<span class="help-block">email tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('password') has-error @enderror">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="masukan password">
                  @error('password')
                  	<span class="help-block">password tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('users') }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection