<?php $__env->startSection('title'); ?>
Conference Important Dates
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <section class="content-header">
        <h1>
Conference Important Dates     <small></small></h1>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="content">

        <div class="row">
        <div class="col-md-12">


                <!-- <a href="<?php echo e(url('/admin/class/create')); ?>" class="btn btn-primary pull-right margin-bottom">
                    <i class="fa fa-plus"></i>
Add Conference Important Dates                </a> -->


        </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                        </h3>
                        
                            
                                
                                       

                                
                                    
                                        
                                
                            
                        
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>   start Date      </th>
                                <th> End Date  </th>
                                <th> Action  </th>
                            </tr>
                            <?php $__currentLoopData = $ConferenceImportantDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ConferenceImportantDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($ConferenceImportantDate->start_date); ?></td>
                                    <td><?php echo e($ConferenceImportantDate->end_date); ?></td>



                                    <td>

                                            <a href="<?php echo e(url('/admin/users/ConferenceImportantDates/show/edit/'.$ConferenceImportantDate->id)); ?>" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>


                                                <!-- <a href="<?php echo e(url('admin/users/ConferenceImportantDates/'.$ConferenceImportantDate->id.'/delete')); ?>" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a> -->

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">

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