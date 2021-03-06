<?php $__env->startSection('title', 'Tambah Kecamatan'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Ruang Terbuka Hijau (RTH)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="frm" action="<?php echo e(route('rth.store')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group <?php $__errorArgs = ['kelurahan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Pilih Kelurahan</label>
                  <select class="form-control select2" multiple="multiple" id="kelurahan_id" name="kelurahan_id" data-placeholder=""
                          style="width: 100%;">
                    <?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelurahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($kelurahan->id == old('kelurahan_id')): ?>
                            <option value="<?php echo e($kelurahan->id); ?>" selected><?php echo e($kelurahan->nama_kelurahan); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($kelurahan->id); ?>"><?php echo e($kelurahan->nama_kelurahan); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['kelurahan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">kelurahan tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Jenis</label>
                  <select class="form-control select2" multiple="multiple" id="jenis" name="jenis" style="width: 100%;">
                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == old('jenis')): ?>
                            <option value="<?php echo e($key); ?>" selected><?php echo e($val); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">jenis tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['nama_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Nama Lokasi</label>
                  <input type="text" name="nama_lokasi" value="<?php echo e(old('nama_lokasi')); ?>" id="nama_lokasi" class="form-control">
                  <?php $__errorArgs = ['nama_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">nama lokasi tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['luas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Luas (m<sup>2</sup>)</label>
                  <input type="text" name="luas" value="<?php echo e(old('luas')); ?>" id="luas" class="form-control">
                  <?php $__errorArgs = ['luas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">luas tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Gambar</label>
                  <input type="file" name="gambar" id="gambar">
                  <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">gambar tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" id="keterangan"><?php echo e(old('keterangan')); ?></textarea>
                  <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">keterangan tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label>Click pada peta untuk mengambil titik koordinat</label>
                    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDs7DDghtxpe7kOIwtCcgkIPNSr5pVgYA4&sensor=false"></script>
                        <script type="text/javascript">
                          var map;
                          var mapOptions = { center: new google.maps.LatLng(0.808419, 127.333481),
                                               zoom: 14,
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
                <div class="form-group <?php $__errorArgs = ['lintang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Lintang</label>
                  <input type="text" name="lintang" value="<?php echo e(old('lintang')); ?>" readonly id="lintang" class="form-control">
                  <?php $__errorArgs = ['lintang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">lintang tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['bujur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label>Bujur</label>
                  <input type="text" name="bujur" value="<?php echo e(old('bujur')); ?>" readonly id="bujur" class="form-control">
                  <?php $__errorArgs = ['bujur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="help-block">bujur tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?php echo e(route('kecamatan')); ?>" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        /** Muliply Select **/
        $('.select2').select2({
            theme: "classic",
            maximumSelectionLength:1
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/auths/rth/create.blade.php ENDPATH**/ ?>