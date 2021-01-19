<?php $__env->startSection('content'); ?>



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

										<a href="<?php echo e(url('admin/print/show/'.$order->id )); ?>">
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

                                تفاصيل التطبيق رقم <?php echo e($order->id); ?>


                            </h3>

                        </div>


                    </div>

                    <div class="m-portlet__body">



                        <div class="row">



                            <div class="col-6">



                                <h3>الزبون</h3>



                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label"> <strong
                                            class="m--font-info"><?php echo e($order->name); ?></strong> : اسم الزبون </label>

                                </div>



                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label"><strong
                                            class="m--font-info"><?php echo e($order->email); ?></strong> : البريد الإلكتروني </label>

                                </div>



                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label">الهاتف : <strong
                                            class="m--font-info"><?php echo e($order->phone); ?></strong></label>

                                </div>



                            </div>





                            <div class="col-6">



                                <h3>الطلب</h3>





                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label"><strong
                                            class="m--font-info"><?php echo e($order->created_at); ?></strong> : تاريخ تقديم الطلب
                                    </label>

                                </div>
                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label">طريقة الدفع او السداد : <strong
                                        class="m--font-info"><?php echo e($pay->name); ?>

                                    </strong> </label>

                                </div>








                                <div class="m-form__group row">

                                    <label class="col-12 col-form-label"> <strong class="m--font-info">U.S. Dollar</strong>
                                        : العملة المختارة</label>

                                </div>

                                <div class="m-form__group row">

                                    
                                    <label class="col-12 col-form-label">حالة الطلب : <strong Order
                                        statusclass="m--font-info"><?php echo e($order->status()); ?></strong></label>

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





                                <?php echo e($order->name); ?></p>

                                <p>الدولة / <?php echo e($order->country); ?></p>

                                <p>المدينة / <?php echo e($order->city); ?></p>
                                العنوان / <?php echo e($order->address); ?> </p>

                                <p>الهاتف / <?php echo e($order->phone); ?></p>

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


                                <?php $__currentLoopData = $order->orderProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>

                                        <td class="text-center"><?php echo e($OrderProduct->total()); ?></td>


                                        <td class="text-center"><?php echo e($OrderProduct->price()); ?></td>
                                        <td class="text-center"><?php echo e($OrderProduct->qty); ?></td>

                                        <td class="text-center"><?php echo e($OrderProduct->product_name); ?></td>
                                    </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <tr>

                                    <td colspan="4" class="text-left"><?php echo e($OrderProduct->total); ?>$ :المبلغ الكلي </td>
                                    <td></td>

                                </tr>


                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>
        <form class="m-form" method="post" action="<?php echo e(url('')); ?>/admin/orders/update/<?php echo e($order->id); ?>">

            <?php echo e(csrf_field()); ?>


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
                                        <?php $__currentLoopData = config('statuses'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>









<?php $__env->startSection('footer'); ?>

    <script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/custom/components/forms/widgets/summernote.js"
        type="text/javascript"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout',['title' => 'Add new order'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>