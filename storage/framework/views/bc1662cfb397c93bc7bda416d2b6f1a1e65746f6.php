<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vapers Info</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo e(asset('vendor/magnific-popup/magnific-popup.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/creative.min.css')); ?>" rel="stylesheet">

  </head>

  <body id="page-top">
  <!-- NAVIGATION -->
  <br>
  <br>
  <br>
  <?php echo $__env->make('items.navbarumum', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('items.baterai', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
  
  
  
  
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/scrollreveal/scrollreveal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo e(asset('js/creative.min.js')); ?>"></script>

  </body>

</html>
