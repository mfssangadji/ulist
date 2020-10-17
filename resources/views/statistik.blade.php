@extends('layouts.app')
@section('title', 'Statistik')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Statistik Jumlah Ruang Terbuka Hijau Di Kota Ternate</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="datapost" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kecamatan</th>
                      @foreach($jenis as $key => $val)
                          <th>{{$val}}</th>
                      @endforeach
                      <th>Maps</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kj as $key => $val)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$kec[$key]}}</td>
                                @foreach($jenis as $keys => $vals)
                                    <?php
                                        try {
                                            ?>
                                            <td>{{count($kj[$key][$keys])}}</td>
                                            <?php      
                                        } catch (Exception $e) {
                                            echo 0;
                                        }
                                    ?>
                                @endforeach
                                <td><a href="{{url('maps/'.$key.'/kecamatan')}}">Lihat Maps</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection