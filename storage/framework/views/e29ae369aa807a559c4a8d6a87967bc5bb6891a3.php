<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-lg-offset-3">
        <div class="login">
          <div class="login-form-container">
            <div class="login-text">
            <h3>تسجيل الدخول</h3>
            <p>الرجاء تسجيل الدخول</p>
            </div>

            <?php if( session('error') ): ?>
              <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <form class="login-form" role="form" method="post" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <div class="controls">
                  <input type="text" class="form-control" placeholder="اسم المستخدم" name="email">
                  </div>
                </div>
              <div class="form-group">
                <div class="controls">
                  <input type="password" class="form-control" placeholder="كلمة السر" name="password">
                </div>
              </div>
              <div class="button-box">
                <div class="login-toggle-btn">
                  <input type="checkbox">
                    <label>تذكرني</label>
                  <!-- <a href="#">Forgot Password?</a> -->
                </div>
                <button type="submit" class="btn btn-common log-btn">تسجيل الدخول</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
