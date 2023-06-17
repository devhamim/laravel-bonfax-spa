<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.patch','data' => ['action' => route('frontend.user.profile.update')]]); ?>
<?php $component->withName('forms.patch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.user.profile.update'))]); ?>
    <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right"><?php echo app('translator')->get('Name'); ?></label>

        <div class="col-md-9">
            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name') ?? $logged_in_user->name); ?>" required autofocus autocomplete="name" />
        </div>
    </div><!--form-group-->

    <?php if($logged_in_user->canChangeEmail()): ?>
        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label text-md-right"><?php echo app('translator')->get('E-mail Address'); ?></label>

            <div class="col-md-9">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.alert','data' => ['type' => 'info','class' => 'mb-3','dismissable' => false]]); ?>
<?php $component->withName('utils.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'info','class' => 'mb-3','dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
                    <i class="fas fa-info-circle"></i> <?php echo app('translator')->get('If you change your e-mail you will be logged out until you confirm your new e-mail address.'); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo e(__('E-mail Address')); ?>" value="<?php echo e(old('email') ?? $logged_in_user->email); ?>" required autocomplete="email" />
            </div>
        </div><!--form-group-->
    <?php endif; ?>

    <div class="form-group row mb-0">
        <div class="col-md-12 text-right">
            <button class="btn btn-sm btn-primary float-right" type="submit"><?php echo app('translator')->get('Update'); ?></button>
        </div>
    </div><!--form-group-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/user/account/tabs/information.blade.php ENDPATH**/ ?>