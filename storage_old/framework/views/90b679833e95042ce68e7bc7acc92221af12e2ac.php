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
              <div class="sb-content w-100 dataTable" main="tables">
                <div class="col-12 sb-header">
                    <input type="text" class="search form-control"  placeholder="Search for names.." >
                </div>
                <div class="col-12 px-0 sb-papers">
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
                                <th >Status</th>
                                <th >Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr class="warning no-result">
                                <td colspan="9"><i class="fa fa-warning"></i> No result</td>
                            </tr>
                            <tr>

                            <?php $__currentLoopData = $papers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><?php echo e($paper->id); ?></td>
                                <td><?php echo e(@$paper->get_metadata->Title); ?></td>
                                <td><?php echo e($paper->get_user->name); ?> <?php echo e(@$paper->get_user->familyName); ?></td>
                                <td><?php echo e($paper->get_Track_Selction->track_name); ?></td>
                                <td><?php echo e($paper->created_at); ?></td>
                            <?php if(isset($paper->get_submit_myreviews->created_at)): ?>
                                <td>YES</td>
                            <?php else: ?>
                                <td>Not yet</td>
                            <?php endif; ?>

                            <?php if(isset($paper->get_auther_reply->created_at)): ?>
                                <td><?php echo e($paper->get_auther_reply->created_at); ?></td>
                            <?php else: ?>
                                <td> Not </td>
                            <?php endif; ?>
                            <?php if(isset($paper->get_reviewer_reply_for_auther->created_at)): ?>
                                <td><?php echo e($paper->get_reviewer_reply_for_auther->created_at); ?></td>
                            <?php else: ?>
                                <td> Not yet</td>
                            <?php endif; ?>
                            <?php if(isset($paper->get_paper_status->status)): ?>
                                <td><?php echo e($paper->get_paper_status->status); ?></td>
                            <?php endif; ?>
                                <td>
                                    <a class="d-block go-link" href="<?php echo e(Request::root()); ?>/submit_papers/<?php echo e($paper->paper_link); ?>" target="_blank" download="<?php echo e(Request::root()); ?>/submit_papers/<?php echo e($paper->paper_link); ?>"> <i class="fas fa-download"></i> Download</a>
                                     <!--      <a class="d-block go-link" href="./re-edit.html"> <i class="fas fa-edit"></i> Submit my review</a>  -->



                                    <a class="d-block go-link" href="<?php echo e(url('home/edit/metadata')); ?>/<?php echo e($paper->id); ?>" target="_blank" > <i class="fas fa-edit"></i> Edit Metadata</a>


                                    <!-- <?php if(isset($paper->get_auther_reply->filename)): ?>
                                            <a class="d-block go-link" style="color: #2eaf08 !important;" href="<?php echo e(url('home/auther-show-data')); ?>/<?php echo e($paper->id); ?>"><i class="fas fa-search"></i>Upload revised paper  </a>
                                    <?php endif; ?> -->
                                    <?php if(isset($paper->get_Editor_decisions->editor_decisions)): ?>
                                        <a class="d-block go-link" style="color: #2eaf08 !important;" href="#">
                                            <i class="fas fa-search"></i><?php echo e($paper->get_Editor_decisions->editor_decisions); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if(isset($paper->get_editer_auther_comment->id)): ?>
                                        <a class="d-block go-link" style="color: #2eaf08 !important;" href="<?php echo e(url('home/editor/Review/auther_editer_comment')); ?>/<?php echo e($paper->id); ?>">
                                            <i class="fas fa-comment-alt"></i>Editor Comments
                                        </a>
                                        <a class="d-block go-link" style="color: #2eaf08 !important;" href="<?php echo e(url('home/auther-show-data')); ?>/<?php echo e($paper->id); ?>">
                                            <i class="fas fa-cloud-upload-alt"></i>Upload revised paper
                                        </a>
                                    <?php endif; ?>
                                </td>
                            </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>
                </div>
              </div>
                <!-- <div class="list-group">
                    <a href="./cherry-pick-papers.html" class="list-group-item not-info list-group-item-action list-group-item-warning">
                            <span class="icon-n"><i class="fas fa-cog fa-spin"></i></span>
                            Choose papers that you want to review
                            Click Here !
                    </a>
                  </div> -->

                  <div class="w-100 dataTable py-3 " main="tables">






                       <div class="table-responsive">

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
