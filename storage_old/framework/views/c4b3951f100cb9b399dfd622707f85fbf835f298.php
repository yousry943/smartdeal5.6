<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>reviews</title>

        <!-- For icons -->
     <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <link href="https://unpkg.com/bootstrap-table@1.15.3/dist/bootstrap-table.min.css" rel="stylesheet"/>
        <script src="./js/tp.js"></script>
    </head>
    <body>
 <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                 <div class="w-100 container-fluid reviews-a" bgpage="reviews-a">
                <section class="py-3">

                            <div class="form-group col-12 pt-3 px-0 col-sm-6 col-lg-3">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <button class="btn btn-outline-secondary" type="button" id="button-addon1">Search</button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                          </div>
                                  </div>

                          <div class="w-100 dataTable py-3 " main="tables">
                                <table id="DataTable" dtable="datatable" class="display table  table-bordered  table-responsive  table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Reviewing interests</th>

                                                <th>Done</th>


                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $__currentLoopData = $reviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form class="w-100"  method="post" action="<?php echo e(url('home/editor/selectreview')); ?>/<?php echo e($id); ?>">
 <?php echo e(csrf_field()); ?>

                                            <tr>

                                                <td>

                                    <a  class="d-block go-link" href=""><?php echo e($reviewer->name); ?></a></td>
                                                <td>Dean of the School of Architecture, Computing and Engineering (ACE), A fellow of the Royal Society for the Encouragement of Arts, Manufactures and Commerce, the Institution of Mechanical Engineers (IMechE)</td>

                                                <td>0</td>

                                              
                                                <td>0</td>
                                                <td>
                                            <input type="hidden" name="paper_id" value="<?php echo e($id); ?>">
                                        <input type="hidden" name="user_id" value="<?php echo e($reviewer->id); ?>">

                     <button class="d-block go-link" >Assign</button>

                                                </td>

                                            </tr>

                            </form>

                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                          </div>

                    </section>
        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
