

<?php $__env->startSection('content'); ?>
<section class="wrapper">
  <div class="inner">
    <h2>Adatbázis adatok</h2>

    <table>
      <tr>
        <th>Mű</th>
        <th>Alkotó</th>
        <th>Típus</th>
      </tr>

      <?php $__currentLoopData = $kapcsolat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($k->mu->cim); ?></td>
        <td><?php echo e($k->alkoto->nev); ?></td>
        <td><?php echo e($k->tipus); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Windows 11\LaravelProject\resources\views/adatbazis.blade.php ENDPATH**/ ?>