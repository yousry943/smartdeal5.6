<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Editor</title>

        <!-- For icons -->
    <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <script src="./js/tp.js"></script>
    </head>
    <body>
       <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="w-100 container reviews-a" bgpage="reviews-a">
            <section class="py-3">
                <!-- ______Head Track________ -->
                <div class="col-12 d-flex  pb-5 pt-3 justify-content-center align-items-center align-items-stretch">
                    <ul class="track-st sk-lan">
                        <li><a class="ac-li " href="<?php echo e(url('/home/editor')); ?>">Unassigned</a></li>
                        <li ><a href="<?php echo e(url('/home/editor/in-review')); ?>">In Review</a></li>
                          <li ><a  href="<?php echo e(url('/home/editor/Archive')); ?>">Archive</a></li>
                    </ul>
                </div>

                  <div class="w-100 dataTable py-3 table-responsive" main="tables">
                        <table id="DataTable" Dtable="datatable" class="display table  table-bordered   table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Paper Number</th>
                                        <th>Title of the paper</th>
                                        <th>List of authors</th>
                                        <th>Submission track</th>
                                        <th>Submission date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>


                                        <td><?php echo e($paper->id); ?></td>
                                        <td><?php echo e(@$paper->get_metadata->Title); ?></td>
                                        <td><?php echo e(@$paper->get_user->name); ?></td>
                                        <td> <?php echo e(@$paper->get_Track_Selction->track_name); ?> </td>
                                        <td><?php echo e(@$paper->created_at); ?></td>
                                        <td>
                                            <a class="d-block go-link" href="<?php echo e(url('home/editor/View_Submission')); ?>/<?php echo e($paper->id); ?> "> <i class="fas fa-edit"></i> View Submission</a>
                                        </td>

                                    </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                  </div>

            </section>
        </div>
        <!-- <div class="scroll-table">
            <div class="sc-table"><i class="fas fa-chevron-circle-left"></i></div>
            <div class="sc-table tx-scroll"><i class="fas fa-cog fa-spin"></i></div>
            <div class="sc-table"><i class="fas fa-chevron-circle-right"></i></div>
        </div> -->
        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
