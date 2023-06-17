<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered mb-0">
        <tr>
            <th><?php echo app('translator')->get('Type'); ?></th>
            <td><?php echo $__env->make('backend.auth.user.includes.type', ['user' => $logged_in_user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
        </tr>

        <tr>
            <th><?php echo app('translator')->get('Avatar'); ?></th>
            <td><img src="<?php echo e($logged_in_user->avatar); ?>" class="user-profile-image" /></td>
        </tr>

        <tr>
            <th><?php echo app('translator')->get('Name'); ?></th>
            <td><?php echo e($logged_in_user->name); ?></td>
        </tr>

        <tr>
            <th><?php echo app('translator')->get('E-mail Address'); ?></th>
            <td><?php echo e($logged_in_user->email); ?></td>
        </tr>

        <?php if($logged_in_user->isSocial()): ?>
            <tr>
                <th><?php echo app('translator')->get('Social Provider'); ?></th>
                <td><?php echo e(ucfirst($logged_in_user->provider)); ?></td>
            </tr>
        <?php endif; ?>

        <tr>
            <th><?php echo app('translator')->get('Timezone'); ?></th>
            <td><?php echo e($logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A')); ?></td>
        </tr>

        <tr>
            <th><?php echo app('translator')->get('Account Created'); ?></th>
            <td><?php echo e(Timezone::convertToLocal($logged_in_user->created_at)); ?> (<?php echo e($logged_in_user->created_at->diffForHumans()); ?>)</td>
        </tr>

        <tr>
            <th><?php echo app('translator')->get('Last Updated'); ?></th>
            <td><?php echo e(Timezone::convertToLocal($logged_in_user->updated_at)); ?> (<?php echo e($logged_in_user->updated_at->diffForHumans()); ?>)</td>
        </tr>
    </table>
</div><!--table-responsive-->
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/user/account/tabs/profile.blade.php ENDPATH**/ ?>