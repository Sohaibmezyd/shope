@include('site.header')


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

            @if( session('error') )
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif()

            <form class="login-form" role="form" method="post" action="{{ url('/login') }}">
                {{ csrf_field() }}
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

@include('site.footer')
