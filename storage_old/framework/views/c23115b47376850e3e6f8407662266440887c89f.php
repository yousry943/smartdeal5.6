<?php $__env->startSection('title'); ?>
    Edit Slider
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
            Home Page
            <small></small>
        </h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="<?php echo e(url('/admin/PaperTemplate/'.$paper_examples->first()->id)); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <!-- <input type="hidden" name="_method" value="patch"> -->

                        <div class="box-body">
                            <div class="form-group">

                                <label for="photo" class="col-sm-1 control-label">Photo</label>
                                <div class="col-sm-5 <?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                                    <input type="file" name="link" id="photo" class="form-control">
                                    <?php if($errors->has('photo')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('photo')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>



                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info center-block">Save <i class="fa fa-save" style="margin-left: 5px"></i></button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->

                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/bower_components/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>