@extends('auths.layouts.app')
@section('title', 'Manajemen SPOT')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Manajemen SPOT</h3>
	              <a href="{{ route('rth.add') }}" class="btn btn-primary pull-right">Tambah SPOT Diving</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nama Lokasi</th>
	                  <th>Jenis SPOT</th>
	                  <!-- <th>Luas</th> -->
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($rth as $rth)
	                		<tr>
	                			<td>{{$loop->iteration}}</td>
	                			<td>{{$rth->nama_lokasi}}</td>
	                			<td>{{$rth->jenis_spot->nama_jenis}}</td>
	                			<td>
	                				<a href="{{ route('rth').'/'.$rth->id }}/view" class="badge bg-green">selengkapnya</a>
	                				<a href="{{ route('rth').'/'.$rth->id }}/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="{{ route('rth').'/'.$rth->id }}" style="display:inline">
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