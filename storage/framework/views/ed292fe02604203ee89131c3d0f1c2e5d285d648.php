<?php $__env->startSection('content'); ?>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                    BANNER START
                                                                                                                                                                                                                                                                                                                                                                            =====================================-->
    <section class="tf__banner">
        <div class="row banner_slider">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                    <div class="tf__single_slider"
                        style="background: url(<?php echo e(asset('setting/banner')); ?>/<?php echo e($slider->image); ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-8">
                                    <div class="tf__single_slider_text wow fadeInUp " data-wow-duration="1s">
                                        <h5><?php echo e($slider->header_title); ?></h5>
                                        <h1><span>Service!!</span></h1>
                                        <p><?php echo e($slider->bottom_title); ?></p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <a class="common_btn" href="#">get started</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                            BANNER END
                                                                                                                                                                                                                                                    =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                        FUTURED SERVICES START
                                                                                                                                                                                                                                                    =====================================-->
    <section class="tf__services_2 mt_115 xs_mt_65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="tf__section_heading_2 mb_30">
                        <h5>Our Service</h5>
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $services->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <div class="tf__single_service_2">
                            <div class="tf__single_service_2_img">
                                <img src="<?php echo e(asset('/setting/banner/' . $service->service_image)); ?>" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="tf__single_service_2_text">
                                <a class="title"
                                    href="<?php echo e(route('services.details', $service->id)); ?>"><?php echo e($service->title); ?></a>
                                <p class="description"><?php echo e($service->service_details); ?></p>
                                <div class="btn_area">
                                    <a href="<?php echo e(route('services.details', $service->id)); ?>">Read More</a>
                                    <strong><?php echo e($service->price); ?> TK</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="common_btn" href="<?php echo e(route('service.view')); ?>">All Services</a>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            FUTURED SERVICES END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ABOUT START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
    <section class="tf__about mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf__section_heading tf__heading_left mb_25">
                                <h5>About Us</h5>
                                <h3><?php echo e($secrets->first()->title); ?></h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tf__about_text">
                                <?php echo e($secrets->first()->secrets_des); ?>

                            </div>
                            <a class="common_btn mt_25" href="<?php echo e(route('about')); ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__about_img">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="<?php echo e($secrets->first()->video); ?>">
                            <i class="fas fa-play"></i>
                        </a>
                        <img src="<?php echo e(asset('backend_img/secrets/' . $secrets->first()->secrets_img)); ?> " alt="about us"
                            class="img-fluid-100 large_img_1">
                        <img src="<?php echo e(asset('backend_img/secrets/' . $secrets->first()->secrets_img_l)); ?>" alt="about us"
                            class="img-fluid-100 large_img_2">
                        <img src="<?php echo e(asset('backend_img/secrets/' . $secrets->first()->secrets_img_r)); ?>" alt="about us"
                            class="img-fluid-100 large_img_3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                         ABOUT END
                                                                                                                                                                                                                                                                     =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                          SERVICES START
                                                                                                                                                                                                                                                                     =====================================-->
    <section class="tf__services mt_115 xs_mt_70" style="background: url(images/background_shapes.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35">
                        <h5>Our Pricing</h5>
                        <h3>Pricing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $services->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__services_item">
                            <div class="tf__services_img" style="height: 200px">
                                <img src="<?php echo e(asset('/setting/banner/' . $service->service_image)); ?>" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="tf__services_text ">
                                <a class="title"
                                    href="<?php echo e(route('services.details', $service->id)); ?>"><?php echo e($service->title); ?></a>
                                <p><?php echo e($service->description); ?></p>
                                <h3><strong>Price :</strong> <?php echo e($service->price); ?> Tk</h3>
                                <div class="btn_area mt-2">
                                    <a href="<?php echo e(route('services.details', $service->id)); ?>"
                                        style="color: var(--colorPrimary)">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                    SERVICES END
                                                                                                                                                                                                                                                                =====================================-->



    <!--=====================================
                                                                                                                                                                                                                                                                GALLERY START
                                                                                                                                                                                                                                                            =====================================-->
    <section class="tf__gallery mt_85 xs_mt_35">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35 xs_mb_30">
                        <h5>Our Gallery</h5>
                        <h3>Let's See Our Gallery</h3>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_filter">
                        <button class="active" type="button" data-filter="*">ahow all</button>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                data-filter=".<?php echo e($project->header_title); ?>"><?php echo e($project->header_title); ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <div class="row grid">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 <?php echo e($project->header_title); ?> message wow fadeInUp"
                        data-wow-duration="1s">
                        <div class="tf__gallery_item">
                            <a class="venobox" data-gall="gallery01"
                                href="<?php echo e(asset('/setting/banner/' . $project->image)); ?>">
                                <img src="<?php echo e(asset('/setting/banner/' . $project->image)); ?>" alt="gallery1"
                                    class="img-fluid w-100">
                                <div class="gal_img_overlay">
                                    <h4><?php echo e($project->header_title); ?></h4>
                                    <p>Duis auteirure dolor in reprehenderit</p>
                                </div>
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            GALLERY END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            COUNTER START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
    <section class="tf__counter mt_105 xs_mt_55 " style="background: url(images/counter_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_counter">
                        <div class="tf__single_counter_center">
                            <h2>
                                <span class="counter">378</span>
                            </h2>
                        </div>
                        <p>Worldwide Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_counter">
                        <div class="tf__single_counter_center">
                            <h2>
                                <span class="counter">835</span>
                            </h2>
                        </div>
                        <p>Wellness & Spa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_counter">
                        <div class="tf__single_counter_center">
                            <h2>
                                <span class="counter">712</span>
                            </h2>
                        </div>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_counter">
                        <div class="tf__single_counter_center">
                            <h2>
                                <span class="counter">75</span>
                            </h2>
                        </div>
                        <p>Awards Winner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                            COUNTER END
                                                                                                                                                                                                                                                        =====================================-->




    <!--=====================================
                                                                                                                                                                                                                                BLOG START
                                                                                                                                                                                                                            =====================================-->
    <section class="tf__blog mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_35">
                        <h5>Our News & Blogs</h5>
                        <h3>Read Latest News & Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__featured_blog">
                        <div class="tf__featured_blog_img">
                            <img src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blogs->first()->blog_img); ?>" alt="blog"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__featured_blog_text">

                            <a class="title"
                                href="<?php echo e(route('blog.details', $blogs->first()->id)); ?>"><?php echo e($blogs->first()->blog_title); ?></a>
                            <p><?php echo e($blogs->first()->blog_sort); ?></p>
                            <a class="read_more_btn" href="<?php echo e(route('blog.details', $blogs->first()->id)); ?>">read more <i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php $__currentLoopData = $blogs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key != 0): ?>
                                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_blog">
                                        <div class="tf__single_blog_img">
                                            <img src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blog->blog_img); ?>"
                                                alt="blog" class="img-fluid w-100">
                                        </div>
                                        <div class="tf__single_blog_text">

                                            <a class="title"
                                                href="<?php echo e(route('blog.details', $blog->id)); ?>"><?php echo e($blog->blog_title); ?></a>
                                            <p><?php echo e($blog->blog_sort); ?></p>
                                            <a class="blog_read_btn" href="<?php echo e(route('blog.details', $blog->id)); ?>">read
                                                more
                                                <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            BLOG END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/index.blade.php ENDPATH**/ ?>