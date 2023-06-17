<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.patch','data' => ['action' => route('frontend.auth.password.change')]]); ?>
<?php $component->withName('forms.patch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.password.change'))]); ?>
    <div class="form-group row">
        <label for="current_password" class="col-md-3 col-form-label text-md-right"><?php echo app('translator')->get('Current Password'); ?></label>

        <div class="col-md-9">
            <input type="password" name="current_password" class="form-control" placeholder="<?php echo e(__('Current Password')); ?>" maxlength="100" required autofocus />
        </div>
    </div><!--form-group-->

    <div class="form-group row">
        <label for="password" class="col-md-3 col-form-label text-md-right"><?php echo app('translator')->get('New Password'); ?></label>

        <div class="col-md-9">
            <input type="password" name="password" class="form-control" placeholder="<?php echo e(__('New Password')); ?>" maxlength="100" required />
        </div>
    </div><!--form-group-->

    <div class="form-group row">
        <label for="password_confirmation" class="col-md-3 col-form-label text-md-right"><?php echo app('translator')->get('New Password Confirmation'); ?></label>

        <div class="col-md-9">
            <input type="password" name="password_confirmation" class="form-control" placeholder="<?php echo e(__('New Password Confirmation')); ?>" maxlength="100" required />
        </div>
    </div><!--form-group-->

    <div class="form-group row mb-0">
        <div class="col-md-12 text-right">
            <button class="btn btn-sm btn-primary float-right" type="submit"><?php echo app('translator')->get('Update Password'); ?></button>
        </div>
    </div><!--form-group-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/user/account/tabs/password.blade.php ENDPATH**/ ?>