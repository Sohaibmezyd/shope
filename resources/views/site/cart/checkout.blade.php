@include('site.header')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}"><i class="icon-home"></i>الرئيسية</a>
                    <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                    <span class="current"> سلة التسوق</span>
                    <h2 class="entry-title"> سلة التسوق </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" action="{{ url('') }}/checkout/store">
        {{ csrf_field() }}
        <br>
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <h2 class="title-checkout text-right "><i class="icon-user"></i>الاسم و العنوان</h2>


                        <div class="row text-right ">

                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                <div class="form-group">
                                    <label> الاسم كامل <sup></sup></label>
                                    <input class="form-control" type="text" name="name" value="{{old('name')}}" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label> الدولة </label>
                                    <input class="form-control" type="text" name="country" value="{{old('country')}}"  required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label> المدينة </label>
                                    <input class="form-control" type="text" name="city" value="{{old('city')}}"  required>
                                </div>
                            </div>




                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label> العنوان <sup></sup></label>
                                    <input class="form-control" type="text" name="address" value="{{old('address')}}"  required>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="mb-50"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-sx-12  text-right">
                        <div class="order-details">
                            <h2 class="title-checkout text-right"><i class="icon-basket-loaded-loaded"></i>طلباتك</h2>
                            <div class="order_review margin-bottom-35">
                                <table class="table table-responsive table-review-order">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-total text-right">المجموع</th>
                                            <th class="product-name text-right">المنتج</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                            <tr>                                                <td>
                                                    <p class="price">{{ $cart->product->price() }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $cart->product->title }}</p>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           
                                            <td>
                                                <p class="price">{{ $cart->cartTotalWithIcon() }}</p>
                                            </td>
                                             <th class="text-right">المجموع</th>
                                        </tr>


                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-sx-12">


                        <div class="card card--padding fill-bg">

                            <button type="submit" class="btn btn-common btn-full"><span
                                class="icon-arrow-left"></span> التالي</button>
                        </div>

                    </div>
                </div>
            </div>

    </form>
</div>
</div>
@include('site.footer')
