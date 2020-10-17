<?php $__env->startSection('title', 'Statistik'); ?>
<?php $__env->startSection('content'); ?>
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
                      <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <th><?php echo e($val); ?></th>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <th>Maps</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kec[$key]); ?></td>
                                <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $vals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        try {
                                            ?>
                                            <td><?php echo e(count($kj[$key][$keys])); ?></td>
                                            <?php      
                                        } catch (Exception $e) {
                                            echo 0;
                                        }
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <td><a href="<?php echo e(url('maps/'.$key.'/kecamatan')); ?>">Lihat Maps</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/statistik.blade.php ENDPATH**/ ?>