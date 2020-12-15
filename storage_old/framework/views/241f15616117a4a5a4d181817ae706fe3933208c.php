<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Submit</title>

        <!-- For icons -->
    <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>

       <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="w-100 container reviews-a" bgpage="reviews-a" submit-a="">
            <section class="py-3 row sc-global">


                <div class="col-12 tr-forms re-edit e-coding">
                    <div class="alert alert-secondary alert-com mb-2" role="alert">




                            Title of the paper : <?php echo e($paper->get_metadata->Title); ?>

                            <br>

                            Abstract : <?php echo e($paper->get_metadata->Abstract); ?>



 <?php if(isset($paper->get_auther_reply->filename)): ?>


        <a class="d-block go-link" href="<?php echo e(Request::root()); ?>/submit_auther_review/<?php echo e($paper->get_auther_reply->filename); ?>" target="_blank" download="<?php echo e($paper->get_auther_reply->filename); ?>"> <i class="fas fa-download"></i> Download</a>

   <?php endif; ?>

                    </div>
                    <div class="w-100 text-center mb-3">
                    <!-- <a href="" class="btn btn-outline-info m-2"> <i class="fas fa-edit"></i> 
                            Update my review
                        </a> -->
                    </div>
                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> My review
                        </div>
                        <div class="col-12 ts-input text-secondary">











                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Reviewer's expertise in this research study</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($myreviews->Reviewer_expertise); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Overall / AVG Mark</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">	<?php echo e($myreviews->Overall_evaluation); ?></div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Originality</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($myreviews->Originality); ?></div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Quality</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($myreviews->Quality); ?></div>
                                </div>


                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">English Quality</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($myreviews->English_Quality); ?></div>
                                </div>


                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Overall evaluation</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($myreviews->Overall_evaluation); ?></div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Detailed comments (shown to the authors)</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">
                                           <?php echo e($myreviews->Detailed_comments); ?>

                                    </div>
                                </div>


                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Comments to the Proceedings Editor (not shown to the authors)</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">
                                          <?php echo e($myreviews->Comments_to_Proceedings); ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
