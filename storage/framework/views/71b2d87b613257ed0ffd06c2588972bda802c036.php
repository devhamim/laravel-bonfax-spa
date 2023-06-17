<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLanguageLink">
    <?php $__currentLoopData = collect(config('boilerplate.locale.languages'))->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($code !== app()->getLocale()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'dropdown-item pt-1 pb-1','href' => route('locale.change', $code),'text' => __(getLocaleName($code))]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'dropdown-item pt-1 pb-1','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('locale.change', $code)),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(getLocaleName($code)))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!--dropdown-menu-->
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/includes/partials/lang.blade.php ENDPATH**/ ?>