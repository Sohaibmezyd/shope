<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> الرئيسية</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"><?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($page->title); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
<h2 class="entry-title"><?php echo e($page->title); ?></h2>
</div>
</div>
</div>
</div>
</div>

<section class="about section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $page->description; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
