<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<section id="slider">
  <div class="tp-banner-container">
  <div class="tp-banner">
  <ul>

    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="<?php echo e(url('/assets')); ?>/img/slider/slide1.jpg" data-delay="10000">
      <img width="100%" src="<?php echo e($slider->image()); ?>" alt="laptopmockup_sliderdy" data-lazyload="<?php echo e($slider->image()); ?>" data-bgposition="top" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="right">


      <div class="tp-caption largeHeadingWhite sfl str tp-resizeme start" data-x="20" data-y="center" data-voffset="-40" data-speed="1200" data-start="950" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" data-endeasing="easeInOutExpo">
        <h1><?php echo e($slider->title); ?></h1>
      </div>

      <div class="tp-caption detailTextWhiteLarge sfl tp-resizeme start" data-x="20" data-y="center" data-voffset="30" data-speed="1200" data-start="1350" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
        <p><?php echo $slider->description; ?></p>
      </div>

      <div class="tp-caption sfb tp-resizeme start" data-x="20" data-hoffset="0" data-y="center" data-voffset="90" data-speed="1200" data-start="1750" data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
        <a href="#shop-collection" class="btn btn-common"><i class="icon-handbag" style="font-size: 14px"></i>ابدأ الشراء الأن</a>
      </div>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  </ul>
  </div>
  </div>
</section>


<section class="feature-categories section">

  <div class="container">

  <div class="row">

  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="feature-item-content" >
  <img src="<?php echo e(url('/assets')); ?>/img/feature/img1.jpg" alt=""  height="550px">
  <div class="feature-content" >
  <div class="banner-text">
  <h4>فئة الرجال</h4>
  <p>مجموعة جديدة</p>
  </div>
  <a href="<?php echo e(url('/category/men')); ?>" class="btn btn-common">اشتري الأن</a>
  </div>
  </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="feature-item-content">
  <img src="<?php echo e(url('/assets')); ?>/img/feature/img3.jpg" alt=""  height="550px">
  <div class="feature-content">
  <div class="banner-text">
  <h4>فئة النساء</h4>
  <p>مجموعة جديدة</p>
  </div>
  <a href="<?php echo e(url('/category/women')); ?>" class="btn btn-common">اشتري الأن</a>
  </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="feature-item-content">
  <img src="<?php echo e(url('/assets')); ?>/img/feature/4.jpg" alt=""  height="550px">
  <div class="feature-content">
  <div class="banner-text">
  <h4>فئة الاطفال</h4>
  <p>مجموعة جديدة</p>
  </div>
  <a href="<?php echo e(url('/category/kids')); ?>" class="btn btn-common">اشتري الأن</a>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>

<section id="shop-collection">
  <div class="container">
    <h1 class="section-title">أحدث المنتجات </h1>
    <hr class="lines">

    <div class="row">

      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 col-sm-6 col-xs-12" >
        <?php echo $__env->make('site.products.item', ['product' => $product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>

    <!-- end row -->

  </div>
  <!-- end continar -->
</section>

<section class="discount-product-area">
  <div class="container">
  <div class="row">
  <div class="discount-text">
  <p>أفضل المنتجات الموجودة</p>
  <h3>خصم 40% على المنتجات الصيفية </h3>
  </div>
  </div>
  </div>
</section>


<section class="section">
  <div class="container">
  <h1 class="section-title">منتجات مميزة</h1>
  <hr class="lines">
  <div class="row">
  <div class="col-md-12">
  <div id="new-products" class="owl-carousel">
    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="item">
                <div class="shop-product">
                <div class="product-box">
                <a href="#"><img src="<?php echo e($product->image()); ?>" alt="" height="310px" ></a>
                <div class="cart-overlay">
                </div>
                <?php if($product->isNew()): ?>
                  <span class="sticker new"><strong>جديد</strong></span>
                <?php endif; ?>

                <div class="actions">
                <div class="add-to-links">
                <a href="<?php echo e(url('/cart/add/'.$product->id)); ?>" title=" أضف إلى السلة" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                </div>
                </div>
                </div>
                <div class="product-info">
                <h4 class="product-title"><a href="<?php echo e($product->url()); ?>"><?php echo e($product->title); ?></a></h4>
                 <div class="align-items">
                <div class="pull-left">
                <span class="price"><?php echo e($product->price()); ?></span>
                </div>
                <div class="pull-right">

                </div>
                </div>
                </div>
                </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  </div>
  </div>
  </div>
  </div>
</section>



<section id="services" class="section">

<div class="container">
<div class="row">
  <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4 col-sm-6">
<div class="services-box">
<div class="services-icon">
 <i class="<?php echo e($service->icon); ?>"></i>
</div>
<div class="services-content">
<h4><a href="#"><?php echo e($service->name); ?></a></h4>
<p>
<?php echo $service->vsion; ?>

</p>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

</section>


<div class="testimonial section">
<div class="container">
<div class="row">

<div class="testimonials-carousel owl-carousel">
<div class="item">
<div class="testimonial-item">
<div class="author-info">
<a href="#"><img src="<?php echo e(url('/assets')); ?>/img/img1.jpg" alt=""></a>
<div class="author-title">
<h5>صهيب مزيد</h5>
<span>- مطور مواقع</span>
</div>
</div>
<div class="datils">
<p>“ مطور ويب هو مطور برمجيات أو مهندس برمجيات متخصص في تطوير تطبيقات الشبكة العنكبوتية العالمية (أو الويب)، أو تطبيقات الشبكات الموزعة التي تشغل عبر بروتوكول نقل النص الفائق (http) من خادم ويب إلى متصفح ويب“ <br>تضع رابطة الشبكة العالمية مجموعة من المعايير القياسية المفتوحة لتطوير ويب، هذه المعايير تعتبر أفضل تدريب عند البرمجة لويب. يساهم مطورو ويب في هذه المعايير القياسية عبر عملهم في تطوير المشاريع مفتوحة المصدر الهادفة إلى تعزيز ومعالجة تقنيات تطوير ويب.</p>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="author-info">
<a href="#"><img src="<?php echo e(url('/assets')); ?>/img/121.jpg" alt=""></a>
    <div class="author-title">
<h5>خالد دياب</h5>
<span>- مطور مواقع</span>
</div>
</div>
<div class="datils">
<p>“ مطور ويب هو مطور برمجيات أو مهندس برمجيات متخصص في تطوير تطبيقات الشبكة العنكبوتية العالمية (أو الويب)، أو تطبيقات الشبكات الموزعة التي تشغل عبر بروتوكول نقل النص الفائق (http) من خادم ويب إلى متصفح ويب“ <br>تضع رابطة الشبكة العالمية مجموعة من المعايير القياسية المفتوحة لتطوير ويب، هذه المعايير تعتبر أفضل تدريب عند البرمجة لويب. يساهم مطورو ويب في هذه المعايير القياسية عبر عملهم في تطوير المشاريع مفتوحة المصدر الهادفة إلى تعزيز ومعالجة تقنيات تطوير ويب.</p>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="author-info">
<a href="#"><img src="<?php echo e(url('/assets')); ?>/img/img3.jpg" alt=""></a>
<div class="author-title">
<h5>غازي المصري</h5>
<span>- مطور مواقع</span>
</div>
</div>
<div class="datils">
<p>“ مطور ويب هو مطور برمجيات أو مهندس برمجيات متخصص في تطوير تطبيقات الشبكة العنكبوتية العالمية (أو الويب)، أو تطبيقات الشبكات الموزعة التي تشغل عبر بروتوكول نقل النص الفائق (http) من خادم ويب إلى متصفح ويب“ <br>تضع رابطة الشبكة العالمية مجموعة من المعايير القياسية المفتوحة لتطوير ويب، هذه المعايير تعتبر أفضل تدريب عند البرمجة لويب. يساهم مطورو ويب في هذه المعايير القياسية عبر عملهم في تطوير المشاريع مفتوحة المصدر الهادفة إلى تعزيز ومعالجة تقنيات تطوير ويب.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


 <!-- <section class="latest-blog section">
  <div class="container">
  <h1 class="section-title">Latest Blog</h1>
  <hr class="lines">
  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
  <div class="blog-item">
  <div class="blog-img">
  <a href="blog-details.html">
  <img src="<?php echo e(url('/assets')); ?>/img/blog/img1.jpg" alt="">
  </a>
  <div class="mask">
  </div>
  </div>
  <div class="blog-info">
  <div class="post-date">15 ابريل</div>
  <h3><a href="blog-details.html">Where Trends Going Next</a></h3>
  <p>مطور ويب هو مطور برمجيات أو مهندس برمجيات متخصص في تطوير تطبيقات الشبكة العنكبوتية العالمية (أو الويب)، أو تطبيقات الشبكات الموزعة التي تشغل عبر بروتوكول نقل النص الفائق (http) من خادم ويب إلى متصفح ويب.....</p>
  <a href="blog-details.html" class="readmore">Read More</a>
  </div>
  </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
  <div class="blog-item">
  <div class="blog-img">
  <a href="blog-details.html">
  <img src="<?php echo e(url('/assets')); ?>/img/blog/img2.jpg" alt="">
  </a>
  <div class="mask">
  </div>
  </div>
  <div class="blog-info">
  <div class="post-date">16 ابريل</div>
  <h3><a href="blog-details.html">Ellie Goulding – High For This</a></h3>
  <p>مطور ويب هو مطور برمجيات أو مهندس برمجيات متخصص في تطوير تطبيقات الشبكة العنكبوتية العالمية (أو الويب)، أو تطبيقات الشبكات الموزعة التي تشغل عبر بروتوكول نقل النص الفائق (http) من خادم ويب إلى متصفح ويب.....</p>
  <a href="blog-details.html" class="readmore">Read More</a>
  </div>
  </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
  <div class="blog-item">
  <div class="blog-img">
  <a href="blog-details.html">
  <img src="<?php echo e(url('/assets')); ?>/img/blog/img3.jpg" alt="">
  </a>
  <div class="mask">
  </div>
  </div>
  <div class="blog-info">
  <div class="post-date">17 ابريل</div>
  <h3><a href="blog-details.html">أفضل المنتجات في سنة 2017 </a></h3>
  <p>اللاى تبلايبرتىيب نىيللانتيبلاى نيبىنلابيلاىى يبىلانيبىلاىيبلايىب نيبىلانبيلاىهيبلا </p>
  <a href="blog-details.html" class="readmore">المزيد ..</a>
  </div>
  </div>
  </div>
  </div>
  </div>
</section> -->


<div class="client section">
<div class="container">
<div class="row">
<div id="client-logo" class="owl-carousel">
  <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="client-logo item">
<img src="<?php echo e($company->image()); ?>" alt="" style="width: 178.333px; margin-right: 20px;" />
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</div>



<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
