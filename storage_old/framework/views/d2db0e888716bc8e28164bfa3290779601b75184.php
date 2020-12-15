<?php $__env->startSection('title'); ?>
    اضافة ادمن
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
            اضافة ادمن
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
                        <h3 class="box-title">اضافة ادمن</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/manager')); ?>">
                        <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">الاسم الاول</label>

                        <div class="col-sm-4 <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?php echo e(old('username')); ?>">
                            <?php if($errors->has('username')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('username')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>

                    </div>

                        <div class="form-group">

                            <label for="name" class="col-sm-4 control-label">الاسم الثانى</label>

                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name" value="<?php echo e(old('name')); ?>">
                            </div>

                        </div>





                        <div class="form-group">

                            <label for="email" class="col-sm-4 control-label">البريد الالكترونى</label>

                            <div class="col-sm-4 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                                <?php endif; ?>
                            </div>

                        </div>





                        <div class="form-group">

                            <label for="password" class="col-sm-4 control-label">كلمة المرور</label>

                            <div class="col-sm-4 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <input type="password" name="password" class="form-control" id="password" placeholder="password">
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                                <?php endif; ?>
                            </div>

                        </div>




                        <div class="form-group">

                            <label for="password_confirmation" class="col-sm-4 control-label">تاكيد كلمة المرور</label>

                            <div class="col-sm-4 <?php echo e($errors->has('confirm_password') ? ' has-error' : ''); ?>">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm password">
                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                                <?php endif; ?>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="role" class="col-sm-4 control-label">الوظيفة</label>

                            <div class="col-lg-4 text-center <?php echo e($errors->has('role') ? ' has-error' : ''); ?>">
                                <div class="row">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label><input type="checkbox" class="form-check"  name="role[]" value="<?php echo e($role->id); ?>"><?php echo e($role->title); ?></label> |
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($errors->has('role')): ?>
                                            <span class="help-block">
                                                  <strong><?php echo e($errors->first('role')); ?></strong>
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