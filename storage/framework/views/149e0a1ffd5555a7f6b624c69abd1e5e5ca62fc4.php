<?php $__env->startSection('content'); ?>
    <!--=====================================
                                                            BREADCRUMB START
                                                        =====================================-->
    <section class="tf__breadcrumb"
        style="background: url(<?php echo e(asset('backend_img/contact')); ?>/<?php echo e($contact_banner->first()->contact_img); ?>);">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>contact us</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">contact us</a></li>
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
                                                            CONTACT US START
                                                        =====================================-->
    <section class="tf__contact mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <h3>Our Location</h3>
                        <p><?php echo e(get_setting('office_address')); ?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-envelope"></i></span>
                        <h3>Email Us</h3>
                        <p><?php echo e(get_setting('office_email')); ?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h3>Call Us</h3>
                        <p><?php echo e(get_setting('office_phone')); ?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-clock"></i></span>
                        <h3>Working Hours</h3>
                        <?php $__currentLoopData = $shedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($shedule->time_form != null): ?>
                                <p><?php echo e($shedule->shedule_form); ?> to <?php echo e($shedule->shedule_to); ?> :</p>
                                <p><?php echo e($shedule->time_form); ?> - <?php echo e($shedule->time_to); ?></p>
                            <?php else: ?>
                                <p><?php echo e($shedule->shedule_form); ?> : <a class="text-danger"> Close</a></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="row mt_120 xs_mt_70">
                <div class="col-xl-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.787582070454!2d90.43684581929189!3d23.819543211524437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1671603674550!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <form class="tf__contact_form" action="<?php echo e(route('contact.submit')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <h2>Do You have Any Questions?</h2>
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            
                            <div class="col-xl-12">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-xl-12">
                                <textarea rows="7" name="comments" placeholder="Write something Here"></textarea>
                                <button type="submit" class="common_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                            CONTACT US END
                                                        =====================================-->



    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/contact.blade.php ENDPATH**/ ?>