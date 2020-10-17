@extends('auths.layouts.app')
@section('title', 'Detail Ruang Terbuka Hijau (RTH)')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail SPOT Diving</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="frm" action="{{ route('rth').'/'.$rth->id }}" enctype="multipart/form-data">
              @method('PATCH')
              @csrf
              <div class="box-body">
                <div class="form-group @error('jenis_spot_id') has-error @enderror">
                  <label>Jenis SPOT</label>
                  <select class="form-control" disabled id="jenis_spot_id" name="jenis_spot_id" data-placeholder=""
                          style="width: 100%;">
                    @foreach($kelurahan as $kelurahan)
                        @if($kelurahan->id == $rth->jenis_spot_id))
                            <option value="{{$kelurahan->id}}" selected>{{$kelurahan->nama_jenis}}</option>
                        @else
                            <option value="{{$kelurahan->id}}">{{$kelurahan->nama_jenis}}</option>
                        @endif
                    @endforeach
                  </select>
                  @error('jenis_spot_id')
                      <span class="help-block">kelurahan tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('nama_lokasi') has-error @enderror">
                  <label>Nama Lokasi</label>
                  <input type="text" name="nama_lokasi" disabled value="{{$rth->nama_lokasi}}" id="nama_lokasi" class="form-control">
                  @error('nama_lokasi')
                      <span class="help-block">nama lokasi tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('gambar') has-error @enderror">
                  <label>Gambar Lokasi</label><br>
                  <img src="{{asset('uploads/'.$rth->gambar)}}" style="width: 500px; border-radius: 10px;">
                  @error('gambar')
                      <span class="help-block">gambar tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('keterangan') has-error @enderror">
                  <label>Keterangan</label><br>
                  <style type="text/css">
                  		.code {
                  			padding: 20px;
                  			-webkit-box-shadow: inset -1px -1px 12px -3px rgba(0,0,0,0.43);
							-moz-box-shadow: inset -1px -1px 12px -3px rgba(0,0,0,0.43);
							box-shadow: inset -1px -1px 12px -3px rgba(0,0,0,0.43);
                  		}
                  </style>
                  <div class="code">{!! $rth->keterangan !!}</div>
                  @error('keterangan')
                      <span class="help-block">keterangan tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label>Click pada peta untuk mengambil titik koordinat</label>
                    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDs7DDghtxpe7kOIwtCcgkIPNSr5pVgYA4&sensor=false"></script>
                        <script type="text/javascript">
                          var map;
                          var mapOptions = { center: new google.maps.LatLng(2.2962185,128.4788257),
                                               zoom: 11,
                                               mapTypeId: google.maps.MapTypeId.ROADMAP,
                                               mapTypeId: 'satellite' };

                          function initialize() {
                              map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                              google.maps.event.addListener(map, 'click',
                                function(event) {
                                    document.frm.bujur.value=event.latLng.lng();
                                    document.frm.lintang.value=event.latLng.lat();
                                    
                                }
                               );
                              <?php
                                  $arrz = json_encode($arrz);
                                  $mac = str_replace('"', "", $arrz);
                              ?>
                              var userCoor = <?php echo json_encode(array_values($arrx)); ?>;

                              

                              var userCoordinate = new google.maps.Polyline({
                                /**
                                path: userCoorPath,
                                strokeColor: "#f4bc42",
                                strokeOpacity: 1,
                                strokeWeight: 2
                                **/
                              });

                              userCoordinate.setMap(map);
                              var infowindow = new google.maps.InfoWindow();
                              var marker, i;

                              for (i = 0; i < userCoor.length; i++) {  
                                marker = new google.maps.Marker({
                                  position: new google.maps.LatLng(userCoor[i][1], userCoor[i][2]),
                                  map: map
                              });

                              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                  return function() {
                                    infowindow.setContent(userCoor[i][0]);
                                    infowindow.open(map, marker);
                                  }
                                })(marker, i));
                              }
                          }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="map_canvas" style="width: 100%; height: 500px; border-radius: 10px;"></div>
                </div>
                <div class="form-group @error('lintang') has-error @enderror">
                  <label>Lintang</label>
                  <input type="text" name="lintang" value="{{$rth->lintang}}" readonly id="lintang" class="form-control">
                  @error('lintang')
                      <span class="help-block">lintang tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('bujur') has-error @enderror">
                  <label>Bujur</label>
                  <input type="text" name="bujur" value="{{$rth->bujur}}" readonly id="bujur" class="form-control">
                  @error('bujur')
                      <span class="help-block">bujur tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="self.history.back()" class="btn btn-default">Kembali</button>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection

@section('script')
    <script type="text/javascript">
        /** Muliply Select **/
        $('.select2').select2({
            theme: "classic",
            maximumSelectionLength:1
        });
    </script>
@endsection