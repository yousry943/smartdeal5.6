<?php $__env->startSection('title'); ?>
    Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
Roll             <small></small>
        </h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="content">

        <div class="row">
            <div class="col-md-12">
                  <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('roles.create')): ?>
                    <a href="<?php echo e(url('/admin/user/role/create')); ?>" class="btn btn-primary pull-right margin-bottom">
                        <i class="fa fa-plus"></i>
Add New Roll
                    </a>
                  <?php endif; ?>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                             All Roles </h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->title); ?></td>
                                <td>
                                      <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('roles.update')): ?>
                                         <a href="<?php echo e(url('/admin/user/role/'.$role->id.'/edit')); ?>" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                      <?php endif; ?>
                                      <!-- <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('roles.delete')): ?>

                                            <a href="<?php echo e(url('/admin/user/role/'.$role->id.'/delete')); ?>" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>

                                      <?php endif; ?> -->
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>


    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>