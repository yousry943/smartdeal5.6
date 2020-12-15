<?php $__env->startSection('title'); ?>
Manage Mails
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
        Manage Mails
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
                        <h3 class="box-title">   </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/users/EmailSettings/show/edit').'/'.$id); ?>">
                        <?php echo e(csrf_field()); ?>

                    <div class="box-body">



                    <!--  <div class="form-group">-->

                    <!--<label for="lname" class="col-sm-4 control-label">الاسم الثانى </label>-->

                    <!--    <div class="col-sm-4 <?php echo e($errors->has('lname') ? ' has-error' : ''); ?>">-->
                    <!--        <input type="text" name="lname" class="form-control" id="lname" placeholder="لاسم الثانى" value="<?php echo e(old('lname')); ?>">-->
                    <!--        <?php if($errors->has('lname')): ?>-->
                    <!--            <span class="help-block">-->
                    <!--<strong><?php echo e($errors->first('lname')); ?></strong>-->
                    <!--</span>-->
                    <!--        <?php endif; ?>-->
                    <!--    </div>-->

                    <!--</div>-->


                    <!--  <div class="form-group">-->

                    <!--<label for="tname" class="col-sm-4 control-label">الاسم الثالث </label>-->

                    <!--    <div class="col-sm-4 <?php echo e($errors->has('tname') ? ' has-error' : ''); ?>">-->
                    <!--        <input type="text" name="tname" class="form-control" id="tname" placeholder="لاسم الثالث" value="<?php echo e(old('tname')); ?>">-->
                    <!--        <?php if($errors->has('tname')): ?>-->
                    <!--            <span class="help-block">-->
                    <!--<strong><?php echo e($errors->first('tname')); ?></strong>-->
                    <!--</span>-->
                    <!--        <?php endif; ?>-->

                    <!--</div> </div>-->







                                                             <div class="form-group">

                                <label for="email" class="col-sm-4 control-label"> subject </label>

                                    <div class="col-sm-4 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="subject" value="<?php echo e(@$email_Templets->first()->subject); ?>"  >
                                        <?php if($errors->has('subject')): ?>
                                            <span class="help-block">
                                <strong><?php echo e($errors->first('subject')); ?></strong>
                                </span>
                                        <?php endif; ?>
                                    </div>

                                </div>


                                <div class="form-group">

                                <label for="email" class="col-sm-4 control-label"> body </label>

                                <div class="col-sm-4 <?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                                <input type="text" name="body" class="form-control" id="body" placeholder="body" value="<?php echo e(@$email_Templets->first()->body); ?>"  >
                                <?php if($errors->has('body')): ?>
                                <span class="help-block">
                                <strong><?php echo e($errors->first('body')); ?></strong>
                                </span>
                                <?php endif; ?>
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