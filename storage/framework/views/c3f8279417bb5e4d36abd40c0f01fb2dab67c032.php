       <link href="<?php echo e(asset('css/icons.css')); ?>" rel="stylesheet">
       <?php echo $__env->yieldPushContent('before-styles'); ?>
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset(get_setting('favicon'))); ?>">
       <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset(get_setting('favicon'))); ?>">
       <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset(get_setting('favicon'))); ?>">
       <link rel="manifest" href="<?php echo e(asset(get_setting('favicon'))); ?>">
       
       <link href="<?php echo e(mix('css/frontend.css')); ?>" rel="stylesheet">


       <style>
         html,
         body {
           background-color: #fff;
           color: #636b6f;
           font-family: 'Nunito', sans-serif;
           font-weight: 200;
           height: 100vh;
           margin: 0;
         }

         .full-height {
           height: 100vh;
         }

         .flex-center {
           align-items: center;
           display: flex;
           justify-content: center;
         }

         .position-ref {
           position: relative;
         }

         .top-right {
           position: absolute;
           right: 10px;
           top: 18px;
         }

         .content {
           text-align: center;
         }

         .title {
           font-size: 84px;
         }

         .links>a {
           color: #636b6f;
           padding: 0 25px;
           font-size: 13px;
           font-weight: 600;
           letter-spacing: .1rem;
           text-decoration: none;
           text-transform: uppercase;
         }

         .m-b-md {
           margin-bottom: 30px;
         }
       </style>
       <?php echo $__env->yieldPushContent('after-styles'); ?>

       <?php echo $__env->yieldPushContent('before-scripts'); ?>
       <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
       <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
       <script src="<?php echo e(mix('js/frontend.js')); ?>"></script>
       <?php echo $__env->yieldPushContent('after-scripts'); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/style/bstyle.blade.php ENDPATH**/ ?>