<?php $__env->startSection('title'); ?>
  تعديل  ولى لامر<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
تعديل ولى لامر           <small></small>
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
                        <h3 class="box-title">   </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post"  action="<?php echo e(url('admin/users/ConferenceTracks/show/edit').'/'.$Track_Selction->id); ?>">
                        <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label"> Track Name</label>

                        <div class="col-sm-4 <?php echo e($errors->has('track_name') ? ' has-error' : ''); ?>">
                            <input type="text" name="track_name" class="form-control" id="track_name" placeholder="track_name" value="<?php echo e($Track_Selction->track_name); ?>" >
                            <?php if($errors->has('track_name')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('track_name')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>

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