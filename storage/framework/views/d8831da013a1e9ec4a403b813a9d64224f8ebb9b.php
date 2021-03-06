<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>My Admin </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900" rel="stylesheet">
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="<?php echo e(url('/')); ?>/assets/admin/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/css.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/css-rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-16x16.png">

  <?php echo $__env->yieldContent('head'); ?>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-aside-left--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
  <div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
      <!-- BEGIN: Left Aside -->
      <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-light ">
        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
          <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">لوحة التحكم</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/products')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">المنتجات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/sliders')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">أشرطة التمرير</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/pages')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الصفحات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/orders')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الطلبات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/services')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الخدمات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/companies')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الشركات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/categories')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الفئات</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/users')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">المستخدمين</span>
                    </span>
                </span>
              </a>
            </li>
            <li class="m-menu__item" >
              <a  href="<?php echo e(url('admin/settings')); ?>" class="m-menu__link">
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">الضبط</span>
                    </span>
                </span>
              </a>
            </li>
          </ul>
        </div>
        <!-- END: Aside Menu -->
      </div>
      <!-- END: Left Aside -->
      <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <?php if($errors->any()): ?>
          <div class="m-subheader ">
            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
              <div class="m-alert__text">
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php if( session('success') ): ?>
          <div class="m-subheader ">
            <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
              <div class="m-alert__text">
                  <?php echo e(session('success')); ?>

              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php if( session('error') ): ?>
          <div class="m-subheader ">
            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
              <div class="m-alert__text">
                  <?php echo e(session('error')); ?>

              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
  </div>

  <!--end::Base Scripts -->
  <?php echo $__env->yieldContent('footer'); ?> 
   <script src="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.js" type="text/javascript"></script>
  <script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
</body>

</html>
