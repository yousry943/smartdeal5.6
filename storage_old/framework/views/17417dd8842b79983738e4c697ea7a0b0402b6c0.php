<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>reviews</title>

        <!-- For icons -->
    <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <link href="https://unpkg.com/bootstrap-table@1.15.3/dist/bootstrap-table.min.css" rel="stylesheet"/>
        <style>
            .dataTable td:first-of-type, .dataTable th:first-of-type, .dataTable td:last-of-type, .dataTable th:last-of-type{
                border-right: none !important;
                border-left: none !important;
            }
        </style>
    </head>
    <body>
       <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="w-100 container-fluid reviews-a" bgpage="reviews-a">
            <section class="py-3 col-md-10 mx-auto sc-global">
                <!-- <div class="list-group">
                    <a href="./cherry-pick-papers.html" class="list-group-item not-info list-group-item-action list-group-item-warning">
                            <span class="icon-n"><i class="fas fa-cog fa-spin"></i></span>
                            Choose papers that you want to review
                            Click Here !
                    </a>
                  </div> -->

                  <div class="sb-content w-100 dataTable " main="tables">
                        <div class="col-12 sb-header">
                            <input type="text" class="search form-control"  placeholder="Search for names.." >
                        </div>





                        <div class="col-12 px-0 sb-papers">

                        <div class="table-responsive">
                            <table id="myTable" class="display table  table-bordered m-0   table-hover results">
                                <thead>
                                    <tr>
                                        <th  >Paper Number</th>
                                        <th >Title of the paper</th>
                                        <th >List of authors</th>
                                        <th >Submission track</th>
                                        <th >Submission date</th>
                                        <th >Has been conducted</th>
                                        <th >Last revision date</th>
                                        <th >Revised paper submission date</th>
                                        <th>Status </th>
                                        <th >Actions</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr class="warning no-result">
                                        <td colspan="9"><i class="fa fa-warning"></i> No result</td>
                                    </tr>

                                    <?php for($i = 0; $i < @$all_count; $i++): ?>
                                    <tr>







                                     <?php if(!empty($papers[$i][0]->first()->id)): ?>


                                        <td><?php echo e(@$papers[$i][0][0]->id); ?></td>

                                        <td><?php echo e(@$papers[$i][0][0]->get_metadata->Title); ?></td>
                                        <td><?php echo e(@$papers[$i][0][0]->get_user->name); ?> <?php echo e(@$papers[$i][0][0]->get_user->familyName); ?> </td>
                                        <td><?php echo e(@$papers[$i][0][0]->get_Track_Selction->track_name); ?></td>


                                        <td><?php echo e(@$papers[$i][0][0]->created_at); ?></td>




                               <?php if(isset($papers[$i][0]->first()->get_submit_myreviews->created_at)): ?>


                                         <td>YES</td>
                                         <?php else: ?>
                                        <td>Not yet</td>
                                         <?php endif; ?>










                                         <?php if(isset($papers[$i][0]->first()->get_reviewer_reply->created_at)): ?>


                                      <td><?php echo e($papers[$i][0]->first()->get_reviewer_reply->created_at); ?></td>
                                         <?php else: ?>
                                         <td> Not yet</td>
                                         <?php endif; ?>






                                    <?php if(isset($papers[$i][0]->first()->get_auther_reply->created_at)): ?>


                                      <td><?php echo e($papers[$i][0]->first()->get_auther_reply->created_at); ?></td>
                                         <?php else: ?>
                                         <td> Not </td>

                                         <?php endif; ?>





                                           <td><?php echo e($papers[$i][0][0]->get_paper_status->status); ?></td>









                                        <td>

       <a class="d-block go-link" href="<?php echo e(Request::root()); ?>/submit_papers/<?php echo e($papers[$i][0]->first()->paper_link); ?>" target="_blank" download="<?php echo e(@$papers[$i][0]->first()->paper_link); ?>"> <i class="fas fa-download"></i> Download</a>





    <?php if(!isset($papers[$i][1]->id)): ?>
         <a class="d-block go-link" href="<?php echo e(url('home/submit_myreview')); ?>/<?php echo e($papers[$i][0]->first()->id); ?>"> <i class="fas fa-edit"></i> Submit my review</a>

   <?php else: ?>
         <a class="d-block go-link" href="<?php echo e(url('home/submit_myreview')); ?>/edit/<?php echo e($papers[$i][0]->first()->id); ?>"> <i class="fas fa-edit"></i> update my review</a>

         <a class="d-block go-link" href="<?php echo e(url('home/reviews-show-data')); ?>/<?php echo e($papers[$i][0]->first()->id); ?>"><i class="fas fa-search"></i> Review details</a>


  <?php endif; ?>



<p style="color: green !important;" class="d-block go-link"> <?php echo e(@$papers[$i][2]->editor_decisions); ?></p>










                          <?php if(!empty($paper[0][0]->get_auther_reply->filename )): ?>



     <a class="d-block go-link" style="color: #2eaf08 !important;" href="<?php echo e(Request::root()); ?>/submit_auther_review/<?php echo e($papers[$i][0]->first()->get_auther_reply->filename); ?>"><i class="fas fa-download"></i>

Download revised paper
</a>





                                                    </td>
                                                </tr>
<?php endif; ?>


         <?php endif; ?>
            <?php endfor; ?>

                                    </tbody>

                                  </table>

                       </div>
                        </div>

                       <!-- <nav aria-label="Page navigation example" class="flex-s">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav> -->
                  </div>

            </section>
        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
