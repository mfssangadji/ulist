@extends('auths.layouts.app')
@section('title', 'Jenis SPOT')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Jenis SPOT</h3>
	              <a href="{{ route('jenis.add') }}" class="btn btn-primary pull-right">Tambah Jenis SPOT</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nama Jenis SPOT</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($kelurahan as $kelurahan)
	                		<tr>
	                			<td>{{$loop->iteration}}</td>
	                			<td>{{$kelurahan->nama_jenis}}</td>
	                			<td>
	                				<a href="{{ route('jenis').'/'.$kelurahan->id }}/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="{{ route('jenis').'/'.$kelurahan->id }}" style="display:inline">
	                					@method('DELETE')
	                					@csrf
	                				<button type="submit" class="badge bg-red" onclick="return confirm('Apakan anda yakin?')" style="border: none;">hapus</button>
	                				</form>
	                			</td>
	                		</tr>
	                	@endforeach
	                </tbody>
	              </table>
	            </div>
	        </div>
        </div>
    </div>
@endsection