<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
	<div id="header-msg">
    <strong>SELAMAT DATANG</strong> <br>
    Selamat Datang di Control Panel Sistem Informasi Geografis Pemetaan Ruang Terbuka Hijau di Kota Ternate Berbasis Website
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
	<div id="img-wel"><img src="<?php echo e(asset('wel.jpg')); ?>" alt="" title="" name="slide" class="img-wel"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\indra\resources\views/auths/dashboard.blade.php ENDPATH**/ ?>