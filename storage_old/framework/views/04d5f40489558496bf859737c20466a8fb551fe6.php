<?php $__env->startSection('title'); ?>
Add users
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
          Add users
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


                    <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/users/show/edit').'/'.$user->first()->id); ?>">
                        <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                    <div class="form-group">

                    <label for="username" class="col-sm-4 control-label">  Name </label>

                        <div class="col-sm-4 <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <input type="text" name="name" class="form-control" id="name" value="<?php echo e($user->first()->name); ?>"  placeholder="Name">
                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>

                    </div>


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

                    <label for="phone" class="col-sm-4 control-label">familyName </label>

                        <div class="col-sm-4 <?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <input type="text" name="familyName" class="form-control" id="familyName" placeholder="familyName"  value="<?php echo e($user->first()->familyName); ?>"  >
                            <?php if($errors->has('familyName')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('familyName')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>

                    </div>


                             <div class="form-group">

<label for="email" class="col-sm-4 control-label"> Title </label>

    <div class="col-sm-4 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" value="<?php echo e($user->first()->Title); ?>"  >
        <?php if($errors->has('Title')): ?>
            <span class="help-block">
<strong><?php echo e($errors->first('Title')); ?></strong>
</span>
        <?php endif; ?>
    </div>

</div>


<div class="form-group">

<label for="email" class="col-sm-4 control-label"> Affilation </label>

<div class="col-sm-4 <?php echo e($errors->has('Affilation') ? ' has-error' : ''); ?>">
<input type="text" name="Affilation" class="form-control" id="Affilation" placeholder="Title" value="<?php echo e($user->first()->Affilation); ?>"  >
<?php if($errors->has('Affilation')): ?>
<span class="help-block">
<strong><?php echo e($errors->first('Affilation')); ?></strong>
</span>
<?php endif; ?>
</div>

</div>





                        <div class="form-group">

                    <label for="classes" class="col-sm-4 control-label"> Country </label>

                        <div class="col-sm-4 <?php echo e($errors->has('Country') ? ' has-error' : ''); ?>">


                            <!--<input type="text" name="education_year" class="form-control" id="education_year" placeholder="قم الموبيل" value="<?php echo e(old('education_year')); ?>">-->
                            <select class="form-control" name="Country"   >

                            <?php echo $__env->make('user.includes.country', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                  </select>


                            <?php if($errors->has('Country')): ?>
                                <span class="help-block">
                    <strong><?php echo e($errors->first('Country')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>

                    </div>



                    <div class="form-group">

                    <label for="email" class="col-sm-4 control-label"> Email </label>

                    <div class="col-sm-4 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo e($user->first()->email); ?>"  >
                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                    </div>

                    </div>



                        <div class="form-group">

                            <label for="mom_id" class="col-sm-4 control-label">  user type </label>

                            <div class="col-sm-4 <?php echo e($errors->has('user_type_id') ? ' has-error' : ''); ?>">


                            <!--<input type="text" name="education_year" class="form-control" id="education_year" placeholder="قم الموبيل" value="<?php echo e(old('education_year')); ?>">-->
                                <select class="form-control" name="user_type_id"  >


                    <option selected  value="<?php echo e($user->first()->get_user_type_id()->first()->id); ?>"> <?php echo e($user->first()->get_user_type_id()->first()->name); ?> </option>


                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"> <?php echo e($type->name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </select>


                                <?php if($errors->has('user_type_id')): ?>
                                    <span class="help-block">
                    <strong><?php echo e($errors->first('user_type_id')); ?></strong>
                    </span>
                                <?php endif; ?>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="role" class="col-sm-4 control-label">Assign Role</label>

                            <div class="col-lg-4 text-center">
                                <div class="row">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label><input type="radio" name="role[]" value="<?php echo e($role->id); ?>"
                                          <?php $__currentLoopData = $manager->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($role->id == $manager_role->id): ?>

                                            checked

                                            <?php endif; ?>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>><?php echo e($role->title); ?></label>
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