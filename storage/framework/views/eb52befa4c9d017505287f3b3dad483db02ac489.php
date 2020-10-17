<?php $__env->startSection('title', 'Kecamatan'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Kecamatan</h3>
	              <a href="<?php echo e(route('kecamatan.add')); ?>" class="btn btn-primary pull-right">Tambah Kecamatan</a>
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
	                	<?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<tr>
	                			<td><?php echo e($kecamatan->id); ?></td>
	                			<td><?php echo e($kecamatan->nama_kecamatan); ?></td>
	                			<td>
	                				<a href="<?php echo e(route('kecamatan').'/'.$kecamatan->id); ?>/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="<?php echo e(route('kecamatan').'/'.$kecamatan->id); ?>" style="display:inline">
	                					<?php echo method_field('DELETE'); ?>
	                					<?php echo csrf_field(); ?>
	                				<button type="submit" class="badge bg-red" onclick="return confirm('Apakan anda yakin?')" style="border: none;">hapus</button>
	                				</form>
	                			</td>
	                		</tr>
	                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </tbody>
	              </table>
	            </div>
	        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/auths/kecamatan/index.blade.php ENDPATH**/ ?>