<?php $__env->startSection('content'); ?>



<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">الاعدادات</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="<?php echo e(url('admin')); ?>" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="<?php echo e(url('')); ?>/admin/settings" class="m-nav__link">

                            <span class="m-nav__link-text">الاعدادات</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <span class="m-nav__link-text">اضافة اعداد جديد</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">

		<form class="m-form" method="post" action="<?php echo e(url('')); ?>/admin/settings/store">

			<?php echo e(csrf_field()); ?>


			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			    	<div class="tab-pane active" role="tabpanel" id="general-tb">

			         <div class="form-group m-form__group row">
									<label for="tower_title" class="col-2 col-form-label">اسم الموقع:</label>
									  <div class="col-10">
										<input type="text" id="title" class="form-control m-input" name="title" value="<?php echo e(old('title')); ?>">
									</div>
                </div>

                <div class="form-group m-form__group row">
                   <label for="tower_title" class="col-2 col-form-label">رابط فيس بوك:</label>
                     <div class="col-10">
                     <input type="text" id="facebook" class="form-control m-input" name="facebook" value="<?php echo e(old('facebook')); ?>">
                   </div>
                 </div>

                 <div class="form-group m-form__group row">
   									<label for="tower_title" class="col-2 col-form-label">رابط تويتر:</label>
   									  <div class="col-10">
   										<input type="text" id="twitter" class="form-control m-input" name="twitter" value="<?php echo e(old('twitter')); ?>">
   									</div>
                   </div>

                   <div class="form-group m-form__group row">
     									<label for="tower_title" class="col-2 col-form-label">رابط انستغرام:</label>
     									  <div class="col-10">
     										<input type="text" id="instagram" class="form-control m-input" name="instagram" value="<?php echo e(old('instagram')); ?>">
     									</div>
                     </div>

                     <div class="form-group m-form__group row">
       									<label for="tower_title" class="col-2 col-form-label">رابط لينكدان:</label>
       									  <div class="col-10">
       										<input type="text" id="linkedIn" class="form-control m-input" name="linkedIn" value="<?php echo e(old('linkedIn')); ?>">
       									</div>
                       </div>

							<!-- media -->

							</div>

			            </div>



			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">اضافة الاعدادات </button>



					</div>

				</div>



			</div>



		</form>



	</div>

</div>





<?php $__env->stopSection(); ?>









<?php $__env->startSection('footer'); ?>

<script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout',['title' => 'اضافه اعدادات جديدة'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>