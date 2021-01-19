@include('site.header')


<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> الرئيسية</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">حسابي</span>
<h2 class="entry-title">حسابي</h2>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="content-innerPage content-innerPage before-bg">
			<div class="container">

        <form method="post" action="{{ url('') }}/profile/update">
       {{ csrf_field() }}
				<div class="profile--page-content">

					<div class="row">
						<div class="col-md-10 col-sm-11">
							<div class="edit-block-page">
								<div class="edit-proHead">
									<h2 class="col-md-6 col-sm-6 col-xs-12">أهلا بك {{$user->name}} </h2>
									<h2 class="col-md-6 col-sm-6 col-xs-12"> {{$user->email}} </h2>
								<br><br>
								<div class="edit-proRow clearfix">
									<br>
									<h2 class="red-title">تعديل الملف الشخصي </h2>
<br>
								</div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <br>
                    <h4 class="red-title">تغيير الاسم</h4><br>
                      <input type="text" class="form-control" name="name" value="{{$user->name}}">
<br>
                </div>
                <br>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="red-title">تغيير البريد الالكتروني</h4><br>
                      <input type="text" class="form-control" name="email" value="{{$user->email}}">
<br>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="red-title">تغيير رقم الهاتف</h4>
                    <br>
                      <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                </div>
                <br>

								<div class="col-md-6 col-sm-6 col-xs-12">
										<h4 class="red-title">تغيير كلمة السر</h4>
<br>
                      <input type="password" class="form-control" name="password" value="{{$user->password}}"><br><br><br>
								</div>



                <table class="table-total-checkout">
                  <button  type="submit" class="btn btn-common btn-full">حفظ </button>

                </table>
<br><br><br><br><br>


							</div>
						</div>
					</div>

				</div>
</form>
			</div>

		</div>

@include('site.footer')
