<?php if(Breadcrumbs::has() && !Route::is('frontend.index')): ?>
    <nav id="breadcrumbs" aria-label="breadcrumb">
        <ol class="container breadcrumb mb-0">
            <?php $__currentLoopData = Breadcrumbs::current(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($crumb->url() && !$loop->last): ?>
                    <li class="breadcrumb-item">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => $crumb->url(),'text' => $crumb->title()]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($crumb->url()),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($crumb->title())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </li>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo e($crumb->title()); ?>

                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/includes/partials/breadcrumbs.blade.php ENDPATH**/ ?>