<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Solid State Laravel'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <noscript><link rel="stylesheet" href="<?php echo e(asset('assets/css/noscript.css')); ?>"></noscript>
  </head>
  <body class="is-preload">
    <div id="page-wrapper">
      <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>
      <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/browser.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/breakpoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/util.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  </body>
</html>
<?php /**PATH C:\Users\Windows 11\LaravelProject\resources\views/layouts/app.blade.php ENDPATH**/ ?>