<?php $__env->startSection('content'); ?>
    <!--=====================================
                                                                    BREADCRUMB START
                                                                =====================================-->
    <section class="tf__breadcrumb"
        style="background: url(<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blogs->first()->blog_ban_img); ?>);">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our blogs</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="<?php echo e(route('blog')); ?>">blog</a></li>
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
                                                                    BLOG GRID START
                                                                =====================================-->
    <section class="tf__blog_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">

                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="tf__single_blog">
                                    <div class="tf__single_blog_img">
                                        <img src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blog->blog_img); ?>" alt="blog"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_blog_text">

                                        <a class="title"
                                            href="<?php echo e(route('blog.details', $blog->id)); ?>"><?php echo e($blog->blog_title); ?></a>
                                        <p><?php echo e($blog->blog_sort); ?></p>
                                        <a class="blog_read_btn" href="<?php echo e(route('blog.details', $blog->id)); ?>">read more <i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

        </div>
    </section>
    <!--=====================================
                                                                    BLOG GRID END
                                                                =====================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/blog.blade.php ENDPATH**/ ?>