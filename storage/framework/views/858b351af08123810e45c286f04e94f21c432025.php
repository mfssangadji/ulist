<?php $__env->startSection('title', 'Tambah Kecamatan'); ?>
<?php $__env->startSection('content'); ?>
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
            <form role="form" method="post" action="<?php echo e(route('kelurahan.store')); ?>">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group <?php $__errorArgs = ['kecamatan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label for="name">Pilih Kecamatan</label>
                  <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                      <option value="" selected=""></option>
                      <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($kec->id == old('kecamatan_id')): ?>
                              <option value="<?php echo e($kec->id); ?>" selected><?php echo e($kec->nama_kecamatan); ?></option>
                          <?php else: ?>
                              <option value="<?php echo e($kec->id); ?>"><?php echo e($kec->nama_kecamatan); ?></option>
                          <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['kecamatan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  	<span class="help-block">kecamatan tidak boleh kosong</span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group <?php $__errorArgs = ['nama_kelurahan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <label for="nama_kelurahan">Nama Kelurahan</label>
                  <input type="text" class="form-control" value="<?php echo e(old('nama_kelurahan')); ?>" id="nama_kelurahan" name="nama_kelurahan" placeholder="masukan nama kelurahan">
                  <?php $__errorArgs = ['nama_kelurahan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  	<span class="help-block">nama kelurahan tidak boleh kosong</span>
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/auths/kelurahan/create.blade.php ENDPATH**/ ?>