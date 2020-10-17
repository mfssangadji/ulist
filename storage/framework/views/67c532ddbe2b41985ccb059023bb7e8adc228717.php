<?php $__env->startSection('title', 'Manajemen SPOT'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Manajemen SPOT</h3>
	              <a href="<?php echo e(route('rth.add')); ?>" class="btn btn-primary pull-right">Tambah SPOT Diving</a>
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
	                	<?php $__currentLoopData = $rth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<tr>
	                			<td><?php echo e($loop->iteration); ?></td>
	                			<td><?php echo e($rth->nama_lokasi); ?></td>
	                			<td><?php echo e($rth->jenis_spot->nama_jenis); ?></td>
	                			<td>
	                				<a href="<?php echo e(route('rth').'/'.$rth->id); ?>/view" class="badge bg-green">selengkapnya</a>
	                				<a href="<?php echo e(route('rth').'/'.$rth->id); ?>/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="<?php echo e(route('rth').'/'.$rth->id); ?>" style="display:inline">
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\ulis\resources\views/auths/rth/index.blade.php ENDPATH**/ ?>