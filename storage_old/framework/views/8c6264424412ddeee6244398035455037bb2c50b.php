<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
                اضافة وظيفة

            <small></small>
        </h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-xs-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">  Add Roll
                            </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->



                    <div class="box-body" style="margin-right: 30px;">
                            <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/role')); ?>">
                                <?php echo e(csrf_field()); ?>

                    <div class="form-group">

                    <label for="title" class="col-sm-4 control-label">   Roll  Name    </label>

                        <div class="col-sm-4 <?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <input type="text" name="title" class="form-control" id="title" placeholder="اسم الوظيفة" value="<?php echo e(old('title')); ?>">
                            <?php if($errors->has('title')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-3">
                                <div>
                                    <label for="permission" class="control-label"> auther permation   </label>
                                </div>
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($permission->for == 'auther'): ?>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"
                                                        >
                                                <?php echo e($permission->title); ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        <div class="col-xs-12 col-sm-3">
                            <div>
                                <label for="permission" class="control-label">
                                reviewer permation  </label>
                            </div>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($permission->for == 'reviewer'): ?>
                                    <div class="checkbox">

                                        <label><input type="checkbox" name="permission[]"value="<?php echo e($permission->id); ?>"

                                        ><?php echo e($permission->title); ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        </div>
                    </div>

                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block">save</button>
                    </div>
                </form>

                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/bower_components/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('assets/bower_components/select2/dist/js/select2.min.js')); ?>"></script>


    <script>
        $('.select2').select2()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>