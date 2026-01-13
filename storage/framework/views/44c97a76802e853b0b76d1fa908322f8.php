<header id="header">
  <h1><a href="<?php echo e(url('/')); ?>">Operettek</a></h1>
  <nav id="nav">
    <ul>
      <li><a href="<?php echo e(url('/')); ?>">Főoldal</a></li>
      <li><a href="<?php echo e(url('/kapcsolat')); ?>">Kapcsolat</a></li>
      <li><a href="<?php echo e(url('/crud')); ?>">CRUD</a></li>
      <li><a href="<?php echo e(url('/diagram')); ?>">Diagram</a></li>
      <li><a href="<?php echo e(url('/admin')); ?>">Admin</a></li>

      
    <?php if(auth()->guard()->check()): ?>
      <li><a href="<?php echo e(url('/logout')); ?>">Kijelentkezés</a></li>
      <li><a href="<?php echo e(url('/uzenetek')); ?>">Üzenetek</a></li>

    <?php else: ?>
      <li><a href="<?php echo e(url('/login')); ?>">Bejelentkezés</a></li>
      <li><a href="<?php echo e(url('/register')); ?>">Regisztráció</a></li>
    <?php endif; ?>

    <li><a href="<?php echo e(route('adatbazis')); ?>">Adatbázis</a></li>

    </ul>
  </nav>
</header>
<?php /**PATH C:\Users\Windows 11\LaravelProject\resources\views/partials/nav.blade.php ENDPATH**/ ?>