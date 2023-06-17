<?php $__env->startSection('content'); ?>
    <section class="tf__breadcrumb"
        style="background: url(<?php echo e(asset('setting/banner')); ?>/<?php echo e($service_details->first()->ban_img); ?>);">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our services</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="<?php echo e(route('service.view')); ?>">services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================
                                                                                                         DETAILS START
                                                                                                    =====================================-->
    <section class="tf__blog_details mt_120 xs_mt_70 pb_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tf__blog_details_text">
                        <div class="tf__blog_details_img">
                            <img src="<?php echo e(asset('setting/banner')); ?>/<?php echo e($service_details->first()->service_image); ?>"
                                alt="service" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2><?php echo e($service_details->first()->title); ?></h2>
                    <ul class="header_info d-flex flex-wrap justify-content-between mt-3">
                        <li><i class="fas fa-user" aria-hidden="true"></i> Admin</li>
                        <li><i class="far fa-calendar-alt"
                                aria-hidden="true"></i><?php echo e($service_details->first()->created_at->format('d-M-Y')); ?>

                        </li>
                        <li></li>
                    </ul>
                    <p class="mt-3"><?php echo e($service_details->first()->description); ?></p>

                    <h3 class="mt-5"><strong>Price : </strong><?php echo e($service_details->first()->price); ?> TK</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p><?php echo e($service_details->first()->service_details); ?></p>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>

        </div>
    </section>
    <!--=====================================
                                                                                                         DETAILS END
                                                                                                    =====================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/services_details.blade.php ENDPATH**/ ?>