@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> الرئيسية</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> سلة التسوق</span>
<h2 class="entry-title"> سلة التسوق </h2>
</div>
</div>
</div>
</div>
</div>

<div class="empty-cart text-center" style="margin:50px 0;">

					<h2>لا يوجد منتجات في السلة</h2>
					<br>
					<br>
					<a href="{{ url('/') }}" class="btn btn-primary" style="width: 200px;    margin-bottom: 100px;">استكمال الشراء</a>
					<br>



				</div>
				<br>

@include('site.footer')
