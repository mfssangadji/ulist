@extends('auths.layouts.app')
@section('title', 'Kecamatan')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Kecamatan</h3>
	              <a href="{{ route('kecamatan.add') }}" class="btn btn-primary pull-right">Tambah Kecamatan</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nama Kecamatan</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($kecamatan as $kecamatan)
	                		<tr>
	                			<td>{{$kecamatan->id}}</td>
	                			<td>{{$kecamatan->nama_kecamatan}}</td>
	                			<td>
	                				<a href="{{ route('kecamatan').'/'.$kecamatan->id }}/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="{{ route('kecamatan').'/'.$kecamatan->id }}" style="display:inline">
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