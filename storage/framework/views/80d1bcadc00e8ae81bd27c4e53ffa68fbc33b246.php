<?php if($logged_in_user->hasTwoFactorEnabled()): ?>
    <h4><?php echo app('translator')->get('Two Factor Authentication is Enabled'); ?></h4>

    <a href="<?php echo e(route('frontend.auth.account.2fa.disable')); ?>" class="btn btn-danger btn-sm btn-block"><?php echo app('translator')->get('Remove Two Factor Authentication'); ?></a>
    <a href="<?php echo e(route('frontend.auth.account.2fa.show')); ?>" class="btn btn-primary btn-sm btn-block"><?php echo app('translator')->get('View/Regenerate Recovery Codes'); ?></a>
<?php else: ?>
    <h4><?php echo app('translator')->get('Two Factor Authentication is Disabled'); ?></h4>

    <a href="<?php echo e(route('frontend.auth.account.2fa.create')); ?>" class="btn btn-success btn-sm btn-block"><?php echo app('translator')->get('Enable Two Factor Authentication'); ?></a>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/user/account/tabs/two-factor-authentication.blade.php ENDPATH**/ ?>