@extends('admin.layout')

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">الصفحة</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>


                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="{{ url('admin/pages') }}" class="m-nav__link">

                            <span class="m-nav__link-text">الصفحة</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                           <span class="m-nav__link-text">تعديل الصفحة</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">







		<form class="m-form" method="post" action="{{ url('admin/pages/update/' . $page->id ) }}">

			{{ csrf_field() }}

      <input type="hidden" name="id" value="{{ $page->id }}" />

			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			        		<div class="tab-pane active" role="tabpanel" id="general-tb">

                    <div class="form-group m-form__group row">

    									<label for="tower_title" class="col-2 col-form-label">اسم الصفحة:</label>

    									<div class="col-10">

    										<input type="text" id="title" class="form-control m-input" name="title" value="{{ $page->title}}">

    									</div>

    								</div>


                    <div class="form-group m-form__group row">

                      <label for="link" class="col-2 col-form-label">إضافة رابط  :</label>

                      <div class="col-10">

                        <input type="text" id="link" class="form-control m-input" name="link" value="{{ $page->link}}">

                      </div>

                    </div>



			        			<div class="form-group m-form__group row m--margin-top-40">

									<label for="description" class="col-2 col-form-label">تفاصيل الصفحة:</label>

									<div class="col-10">

										<textarea id="description" class="summernote" name="description">{{ $page->description}}</textarea>

									</div>

								</div>



							<!-- media -->

							</div>



			            </div>

			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">حفظ التعديل </button>



					</div>

				</div>



		</div>





		</form>



	</div>

</div>





@endsection

@section('footer')


<script src="{{ url('/') }}/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

@endsection
