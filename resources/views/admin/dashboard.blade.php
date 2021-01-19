@extends('admin.layout')

@section('title' , 'الصفحة الرئيسية')

@section('content')



<div class="m-subheader ">
	<div class="row">
		<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">عدد المنتجات : {{ $products }} </h3>

				</div>
			</div>
		</div>
			<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title ">عدد الطلبات : {{ $orders }} </h3>

					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-Top:10px">
			<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title ">عدد الخدمات : {{ $services }} </h3>

					</div>
				</div>
			</div>
				<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title ">عدد المستخدمين : {{ $users }} </h3>

						</div>
					</div>
				</div>
			</div>
	</div>



</div>

<div class="m-content">



</div>

@endsection

@section('footer')

@endsection
