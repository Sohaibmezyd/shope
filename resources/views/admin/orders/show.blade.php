@extends('admin.layout',['title' => 'Add new order'])





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

										<a href="{{url('admin/print/show/'.$order->id )}}">
											<i class="fa fa-print"> </i>
										</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="m-portlet__head-title">

                            <span class="m-portlet__head-icon m--hide">

                                <i class="la la-gear"></i>

                            </span>
<br>
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
                                            class="m--font-info">{{ $order->email }}</strong> : البريد الإلكتروني </label>

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
                                            class="m--font-info">{{ $order->created_at }}</strong> : تاريخ تقديم الطلب
                                    </label>

                                </div>
                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label">طريقة الدفع او السداد : <strong
                                        class="m--font-info">{{ $pay->name }}
                                    </strong> </label>

                                </div>








                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label"> <strong class="m--font-info">U.S. Dollar</strong>
                                        : العملة المختارة</label>

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

                                    عنوان الشحن

                                </h3>

                            </div>

                        </div>

                    </div>

                    <div class="m-portlet__body">



                        <div class="row text-right">



                            <div class="col-12">





                                {{ $order->name }}</p>

                                <p>الدولة / {{ $order->country }}</p>

                                <p>المدينة / {{ $order->city }}</p>
                                العنوان / {{ $order->address }} </p>

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
        <form class="m-form" method="post" action="{{ url('') }}/admin/orders/update/{{ $order->id }}">

            {{ csrf_field() }}

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
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    <select class="col-4" name="status">
                                        @foreach (config('statuses') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">أضف
                                        طلب </button>
                                    <label for="name" class="col-3 col-form-label"> : حالة الطلب</label>
                                </div>
                            </div>
                            <!-- media -->
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection









@section('footer')

    <script src="{{ url('/') }}/assets/admin/demo/default/custom/components/forms/widgets/summernote.js"
        type="text/javascript"></script>

@endsection
