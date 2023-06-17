<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.video.store')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" name="video_title" class="form-control" placeholder="Video Title*">
                        </div>

                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="file" name="ban_img" class="form-control" placeholder="Banner Image*">
                        </div>

                        <div class="form-group">
                            <label>Video thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control" placeholder="Video thumbnail*">
                        </div>

                        <div class="form-group">
                            <label>Video Url</label>
                            <input type="text" name="video_url" class="form-control" placeholder="Video Url*">
                        </div>

                        <div class="table-responsive">

                            <button type="submit" class="btn btn-info">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Video Title</th>
                            <th>Banner Image</th>
                            <th>Video thumbnail</th>
                            <th>Video Url</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="height: 40%"><?php echo e($video->video_title); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('backend_img/videos/' . $video->ban_img)); ?>" style="height: 100px">
                                </td>
                                <td>
                                    <img src="<?php echo e(asset('backend_img/videos/' . $video->thumbnail)); ?>" style="height: 100px">
                                </td>
                                <td style="height: 40%"><?php echo e($video->video_url); ?></td>
                                <td>
                                    <?php if($video->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($video->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="<?php echo e(route('admin.setting.video.edit', $video->id)); ?>"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/videos/index.blade.php ENDPATH**/ ?>