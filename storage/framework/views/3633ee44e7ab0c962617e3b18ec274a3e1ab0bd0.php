<?php $__env->startSection('title', 'Sistem Informasi Geografis Pemetaan Spot Diving Pulau morotai '); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <div id="header-msg">
    <strong>SELAMAT DATANG</strong> <br>
    Selamat Datang di Sistem Informasi Geografis Pemetaan Spot Diving Pulau morotai Berbasis Website
    </div>
    <style type="text/css">
        #header-msg {
            background-color: #DDD;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 20px;
        }

        #img-wel {
            text-align: center;
        }

        .img-wel {
            width: 700px;
            height: 350px;
            border-radius:30px;
        }
    </style>
    <div id="img-wel"><img src="<?php echo e(asset('wel.png')); ?>" alt="" title="" name="slide" class="img-wel"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\ulis\resources\views/welcome.blade.php ENDPATH**/ ?>