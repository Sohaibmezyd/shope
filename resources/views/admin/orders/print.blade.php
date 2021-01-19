<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title> Order Print </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900" rel="stylesheet">
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="{{ url('/') }}/assets/admin/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{ url('/') }}/assets/admin/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/admin/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/admin/css.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/assets/ehab-jasser') }}/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ url('/assets/ehab-jasser') }}/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/assets/ehab-jasser') }}/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/assets/ehab-jasser') }}/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/assets/ehab-jasser') }}/images/favicon-16x16.png">

    @yield('head')
</head>
<!-- end::Head -->
<!-- end::Body -->

<body
    class="m-page--fluid m--skin- m-content--skin-light2 m-aside-left--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">





    @section('content')



        <div class="m-subheader">


            <div class="row text-right">

                <div class="col-lg-12">

                    <!--begin::Portlet-->

                    <div class="m-portlet">

                        <div class="m-portlet__head">

                            <div class="m-portlet__head-caption">
    
    
    
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
    
                                        <li class="m-portlet__nav-item">
    
                                            تاريخ الطباعة : {{ Carbon\Carbon::now() }}
    
                                        </li>
    
                                    </ul>
    
                                </div>
                            </div>
                            <div class="m-portlet__head-title">
    
                                <span class="m-portlet__head-icon m--hide">
    
                                    <i class="la la-gear"></i>
    
                                    </span>
                                <h3 class="m-portlet__head-text">
                                   
    
                                    تفاصيل التطبيق رقم {{ $order->id }}
    
                                </h3>
    
                            </div>
    
    
                        </div>

                        <div class="m-portlet__body">



                            <div class="row">



                                <div class="col-6">



                                    <h3>الزبون</h3>



                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label"> <strong
                                                class="m--font-info">{{ $order->name }}</strong> : اسم الزبون </label>

                                    </div>



                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label"><strong
                                                class="m--font-info">{{ $order->email }}</strong> :   البريد الإلكتروني  </label>

                                    </div>



                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label">الهاتف : <strong
                                                class="m--font-info">{{ $order->phone }}</strong></label>

                                    </div>



                                </div>





                                <div class="col-6">



                                    <h3>الطلب</h3>





                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label"><strong
                                                class="m--font-info">{{ $order->created_at }}</strong> : تاريخ تقديم الطلب </label>

                                    </div>
                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label">طريقة الدفع او السداد : <strong
                                                class="m--font-info">{{ $pay->name }}
                                            </strong> </label>

                                    </div>








                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label"> <strong
                                                class="m--font-info">U.S. Dollar</strong> : العملة المختارة</label>

                                    </div>

                                    <div class="m-form__group row">

                                        <label class="col-12 col-form-label">حالة الطلب : <strong Order
                                                statusclass="m--font-info">{{ $order->status() }}</strong></label>

                                    </div>


                                </div>





                            </div>





                        </div>



                    </div>

                    <!--end::Portlet-->





                    <!--begin::Portlet-->

                    <div class="m-portlet">

                        <div class="m-portlet__head">

                            <div class="m-portlet__head-caption">

                                <div class="m-portlet__head-title">

                                    <span class="m-portlet__head-icon m--hide">

                                        <i class="la la-gear"></i>

                                    </span>
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
            
        

               
      





                                    <h3 class="m-portlet__head-text">

                                        عنوان الشحن

                                    </h3>

                                </div>

                            </div>

                        </div>

                        <div class="m-portlet__body">



                            <div class="row text-right">



                                <div class="col-12">





                                    <p> {{ $order->name }} /اسم الزبون </p>

                                    <p> الدولة / {{ $order->country }} </p>

                                    <p> {{ $order->city }}/المدينة </p>
                                    <p>{{ $order->address }} /  العنوان</p>

                                    <p>الهاتف / {{ $order->phone }}</p>


                                </div>
                            </div>
                        </div>
                    </div>




                    <!--end::Portlet-->





                    <!--begin::Portlet-->

                    <!--end::Portlet-->
                    <div class="m-portlet">

                        <div class="m-portlet__head">

                            <div class="m-portlet__head-caption">

                                <div class="m-portlet__head-title">

                                    <span class="m-portlet__head-icon m--hide">

                                        <i class="la la-gear"></i>

                                    </span>
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;

                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                  

                                    <h3 class="m-portlet__head-text">

                                        الطلبات

                                    </h3>

                                </div>

                            </div>

                        </div>

                        <div class="m-portlet__body">



                            <table class="table table-bordered">

                                <thead>

                                    <tr>
                                        <td class="text-center">المجموع</td>



                                        <td class="text-center">السعر لكل منتج</td>
                                        <td class="text-center">الكمية</td>

                                        <td class="text-center">الطلبات</td>
                                    </tr>

                                </thead>

                                <tbody>


                                    @foreach ($order->orderProduct as $OrderProduct)

                                        <tr>

                                            <td class="text-center">{{ $OrderProduct->total() }}</td>


                                            <td class="text-center">{{ $OrderProduct->price() }}</td>
                                            <td class="text-center">{{ $OrderProduct->qty }}</td>

                                            <td class="text-center">{{ $OrderProduct->product_name }}</td>
                                        </tr>


                                    @endforeach

                                    <tr>

                                        <td colspan="4" class="text-left">{{ $OrderProduct->total }}$ :المبلغ الكلي </td>
                                        <td></td>

                                    </tr>


                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>

            </div>

                <div class="m-portlet m-portlet--tabs">


                    <div class="m-portlet__body text-right">

                        <div class="m-form__section m-form__section--first">

                            <div class="tab-content prodHeadz">

                                <!-- general -->

                                <div class="tab-pane active text-right" role="tabpanel" id="general-tb">

                                    <div class="form-group m-form__group row text-right">
                                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;

                                        <select class="col-4" name="status">
                                                <option>{{ $order->status()  }}</option>
                                        </select>

                                        <label for="name" class="col-3 col-form-label"> : حالة الطلب</label>
                                    </div>
                                </div>
                                <!-- media -->
                            </div>
                        </div>
                    </div>
                </div>

        </div>



        <script type="text/javascript">
            window.addEventListener("load", window.print());

        </script>

    </body>

    </html>
