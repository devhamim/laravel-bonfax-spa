

<?php $__env->startSection('title', 'Mixed Settings'); ?>

<?php
    $required = html()
        ->span('*')
        ->class('text-danger');
    $demoImg = 'img/backend/front-logo.png';
?>

<?php $__env->startSection('content'); ?>

    <?php
        $multis = DB::table('donates')->get();
    ?>

    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Manage Donate </h3>
        </div>
        <div class="card-body">

            <?php echo e(html()->form('POST', route('admin.setting.donates.store'))->attribute('enctype', 'multipart/form-data')->open()); ?>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Donate Header')->for('donates_text_header')); ?>

                        <?php echo e(html()->text('donates_text_header', get_setting('donates_text_header'))->placeholder('donates_text_header')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div><!-- form-group-->
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Donate Title Color')->for('donates_title_bg_color')); ?>

                        <?php echo e(html()->text('donates_title_bg_color', get_setting('donates_title_bg_color'))->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div><!-- form-group-->

                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Donate Banner Image')->for('donates_image_1')); ?>

                        <?php echo e(html()->file('donates_image_1')->class('form-control-file image d-none')->id('donates_image_1')->acceptImage()); ?>

                        <div class="d-block">
                            <label for="donates_image_1">
                                <img src="<?php echo e(asset(get_setting('donates_image_1', $demoImg))); ?>"
                                    class="border img-fluid rounded holder" alt="Image upload">
                            </label>
                        </div>
                    </div> <!-- form-group-->
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bank Transfer</label>
                        <textarea id="" class="editor form-control" col="10" row="3" name="bank"><?php echo e(get_setting('bank')); ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cash</label>
                        <textarea id="" class="editor form-control" col="10" row="3" name="cash"><?php echo e(get_setting('cash')); ?></textarea>
                    </div>
                </div>

            </div>
            <div class="form-group ">
                <?php echo e(html()->button('Update')->class('btn btn-block  btn-primary')); ?>

            </div> <!-- form-group-->

            <?php echo e(html()->form()->close()); ?>


        </div> <!--  .card-body -->
    </div> <!--  .card -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.donate.store')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="banner_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" name="color" class="form-control">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dynamic_field">
                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                        <td><input type="file" name="multiimage[]" placeholder="multiimage" class="form-control name_list" /></td>
                                                                                                                                                                                                                                                                                        <td><input type="text" name="title[]" placeholder="title" class="form-control name_list" /></td>
                                                                                                                                                                                                                                                                                        <td><textarea class="form-control" col="10" row="3" name="description[]"></textarea></td>
                                                                                                                                                                                                                                                                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                                                                                                                                                                                                                                                                    </tr>
                                                                                                                                                                                                                                                                                </table>   -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!--<input value="Submit" />  -->
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
                            <th>Image</th>
                            <th>Price</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $multis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img src="<?php echo e(asset('/setting/banner/' . $multi->image)); ?>" style="height: 100px">
                                </td>
                                <td><?php echo e($multi->title); ?></td>

                                <td>
                                    <?php if($multi->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($multi->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="/admin/setting/donate/edit/<?php echo e($multi->id); ?>"
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


<?php $__env->startPush('after-styles'); ?>
    <?php echo e(style(asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'))); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <?php echo script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/editor-helper.js')); ?>

    <?php echo script(asset('assets/plugins/moment/moment.js')); ?>

    <?php echo script(asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>


    <script>
        $(document).ready(function() {
            simple_editor('.editor', 450);
            $('#datepicker-autoclose').datepicker({
                format: "dd/mm/yyyy",
                clearBtn: true,
                autoclose: true,
                todayHighlight: true,
            });

            $("#image").change(function() {
                readImageURL(this, $('#holder'));
            });
        });

        $(document).on('blur', "#post_title", function() {
            let postField = $(this);
            let post_title = postField.val();
            if (post_title) {
                ajax_slug_url(post_title);
                setTimeout(update, 1000); // 30 seconds
                $("#post_error").empty();
                postField.removeClass('is-invalid');
            } else {
                $("#post_error").text('Title must not empty');
                postField.addClass('is-invalid');
            }
        });

        $(function() {
            $(".form-check-input").click(function() {
                const status = $(this).val();
                if (status === "schedule") {
                    $("#scheduleDate").removeClass("d-none");
                } else if (status === "1") {
                    $("#for_New_upload").removeClass("d-none");
                } else if (status === "0") {
                    $("#for_New_upload").addClass("d-none");
                } else {
                    $("#scheduleDate").addClass("d-none");
                }
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/content/settings/donate/index.blade.php ENDPATH**/ ?>