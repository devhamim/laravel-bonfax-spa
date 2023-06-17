<?php $__env->startSection('content'); ?>
    <!--=====================================
                                                        BREADCRUMB START
                                                    =====================================-->
    <section class="tf__breadcrumb" style="background: url(<?php echo e(asset('setting/banner')); ?>/<?php echo e($services->first()->ban_img); ?>);">
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
                                                        BREADCRUMB END
                                                    =====================================-->


    <!--=====================================
                                                        SERVICES PAGE START
                                                    =====================================-->
    <section class="tf__services_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <div class="tf__single_service_2">
                            <div class="tf__single_service_2_img">
                                <img src="<?php echo e(asset('/setting/banner/' . $service->service_image)); ?>" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="tf__single_service_2_text">
                                <a class="title" href="#"><?php echo e($service->title); ?></a>
                                <p class="description"><?php echo e($service->service_details); ?></p>
                                <div class="btn_area">
                                    <a href="<?php echo e(route('services.details', $service->id)); ?>">Read More</a>
                                    <strong class=""><?php echo e($service->price); ?> tk</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </section>
    <!--=====================================
                                                        SERVICES PAGE END
                                                    =====================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/services_view.blade.php ENDPATH**/ ?>