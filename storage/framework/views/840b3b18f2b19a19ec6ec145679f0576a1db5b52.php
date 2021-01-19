<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i>الرئيسية</a>
                    <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                    <span class="current"> سلة التسوق</span>
                    <h2 class="entry-title"> سلة التسوق </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h1 class='title-checkout text-right'>(card-bank) عن طريق بطاقة البنك</h1>
                    <div class="row col-lg-12 text-right">
                        <form method="post" action="<?php echo e(url('/push/card')); ?>">
                            <?php echo e(csrf_field()); ?>



                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="CardBank name" type="text" name="name">
                                    <input class="form-control" placeholder="number" type="number" name="number">
                                </div>
                                <button type="submit" class="btn btn-lg btn-info text-right"> ارسـال </button>
                                <button type="reset" class="btn btn-lg btn-danger text-right"> الـغـاء </button>
                            </div>
                        </form>
                    </div>


                    <table class="table-total-checkout"></table>
                    <h1 class='title-checkout text-right'>(paypal) عن طريق باي بال </h1>

                    <div class="row col-lg-6 text-right ">
                        <form method="post" action="<?php echo e(url('/push/paypal')); ?>">
                            <?php echo e(csrf_field()); ?>



                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Paypalname" type="text" name="name">
                                    <input class="form-control" placeholder="number" type="number" name="number">
                                </div>
                                <button type="submit" class="btn btn-lg btn-info text-right"> ارسـال </button>
                                <button type="reset" class="btn btn-lg btn-danger text-right"> الـغـاء </button>
                            </div>
                        </form>
                    </div>

                </div>


            </div>


        </div>
        <div class="row">



            <table class="table-total-checkout"></table>


            <div class="row col-lg-12 text-right card card--padding">
                <form method="post" action="<?php echo e(url('/push/end')); ?>">
 <?php echo e(csrf_field()); ?>

                    <span class='title-checkout form-control'>
                        <input type="checkbox" name="number"> الدفع عند الاستلام
                    </span>
                    
                    <button type="submit" class="btn btn-common btn-full">
                        انهاء العملية
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
