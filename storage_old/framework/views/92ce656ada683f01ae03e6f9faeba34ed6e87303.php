<?php $__env->startSection('title'); ?>
show  users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--<section class="content-header">-->
    <!--    <h1>-->
    <!--        Home Page-->
    <!--        <small></small>-->
    <!--    </h1>-->

    <!--</section>-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="content">

        
            
                
                    
                    
                
            
        

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                     <form  method="get" action="<?php echo e(url('/admin/users/show/0')); ?>">
                    <div class="box-header">
                        <h3 class="box-title">
                          </h3>

                        <div class="box-tools">
            <a class="fa fa-refresh fa-spin" style="float: right;position: relative;margin-right: -400%; top:4px;" href="<?php echo e(url('admin/users/show')); ?>"></a>
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <input type="text" name="search" class="form-control pull-right"
                                       placeholder="Search">


                                <div class="input-group-btn">

                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i></button>
                                </div>


                            </div>
                        </div>


                    </div>
                    </form>


                    <!-- /.box-header -->



                    <div class="box-body table-responsive no-padding">

                        <table class="table table-hover">

                            <tr>
                                <th>serial</th>
                                <th>Name</th>

                                <th>familyName</th>
                                   <th>Title</th>
                                   <th>Affilation</th>
                                   <th>Country</th>
                                <th>email</th>

                                <th>user type</th>
                                <th>user  permation  </th>
                                  <th>created_at</th>
                                  <th>updated_at</th>
                                      <th>Edit</th>
                                          <th>Delete</th>

                            </tr>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>

                                    <td><?php echo e($user->familyName); ?></td>
                                      <td><?php echo e($user->Title); ?></td>
                                        <td><?php echo e($user->Affilation); ?></td>
                                    <td><?php echo e($user->Country); ?></td>
                                    <td><?php echo e($user->email); ?></td>

                                    <td><?php echo e($user->get_user_type_id()->first()->name); ?></td>

                                    <td>  <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($manager_role->title); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>

<td><?php echo e($user->created_at); ?></td>
<td><?php echo e($user->updated_at); ?></td>








                                          <td>

                                              <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.update')): ?>
                                                  <a href="<?php echo e(url('admin/users/show'.'/edit/'.$user->id)); ?>" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                              <?php endif; ?>
                                    </td>



                                    <td>

                                        <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('student.delete')): ?>
                                            <a href="<?php echo e(url('admin/users/show'.'/delete/'.$user->id)); ?>" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                        <?php endif; ?>
                                    </td>





                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <!--<li><a href="#">&laquo;</a></li>-->
                            <!--<li><a href="#">1</a></li>-->
                            <!--<li><a href="#">2</a></li>-->
                            <!--<li><a href="#">3</a></li>-->
                            <!--<li><a href="#">&raquo;</a></li>-->

                            <?php echo e($users->links()); ?>

                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

        <br>

    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bower_components/lightbox2-master/lightbox.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('assets/bower_components/lightbox2-master/lightbox.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>