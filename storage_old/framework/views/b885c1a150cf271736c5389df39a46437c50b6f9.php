<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Summary</title>

        <!-- For icons -->
      <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>

 <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="w-100 container reviews-a" bgpage="reviews-a" submit-a="">
            <section class="py-3 row sc-global">
                <!-- ______Head Track________ -->
                <div class="col-12 d-flex  pb-5 pt-3 justify-content-center align-items-center align-items-stretch">
                    <ul class="track-st sk-lan">
                        <li><a class="ac-li" href="<?php echo e(url('home/editor/View_Submission')); ?>/<?php echo e($id); ?>}">Summary</a></li>

  

                        <li ><a href="<?php echo e(url('home/editor/main-review')); ?>/<?php echo e($id); ?>">Review</a></li>
                        <!-- <li ><a href="./history-a.html">History</a></li> -->
                    </ul>
                </div>



                   <div class="col-12 text-center mb-3">
                            <a href="<?php echo e(url('home/editor/selectreview')); ?>/<?php echo e($id); ?>" class="btn btn-outline-info">Select Reviewer</a>
                    </div>


                <div class="col-12 tr-forms">
                    <div class="row w-100 sb-content m-0">


                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Submission
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Authors</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_user->name); ?>  <?php echo e(@$papers->first()->get_user->familyName); ?>

                                      <!-- <a  class="anchor-s tc-anch" href="./sendEmail.html"><i class="fas fa-envelope"></i></a> -->
                                    </div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Title</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_metadata->Title); ?> </div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Original File</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><a class="anchor-s" href="<?php echo e(Request::root()); ?>/submit_papers/<?php echo e($papers->first()->paper_link); ?>" class="file"><?php echo e($papers->first()->paper_link); ?></a> <?php echo e($papers->first()->created_at); ?></div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Submitter</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">
                                        <!-- <?php if(isset($submit_myreviews->first()->get_user->name)): ?>
<?php echo e($submit_myreviews->first()->get_user->name); ?>

 <?php endif; ?> -->

 <?php echo e(@$papers->first()->get_user->name); ?>



                                     <!-- <a  class="anchor-s tc-anch" href="./sendEmail.html"><i class="fas fa-envelope"></i></a></div> -->
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Date submitted</div>

                                    <div class="data-col col-6 col-md-8 col-lg-9">

                                      <?php echo e($papers->first()->created_at); ?>


        <!-- <?php if(isset($papers->first()->get_submit_myreviews->created_at)): ?>
                             <?php echo e($papers->first()->get_submit_myreviews->created_at); ?>

 <?php endif; ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>

                            <!-- <div class="row w-100 sb-content m-0">
                                <div class="col-12 sb-header">
                                    <i class="fas fa-layer-group"></i> Editors
                                </div>
                                <div class="col-12 ts-input text-secondary">
                                    <div class="w-100  py-3">
                                        <div class="w-100 row data-row">
                                            <div class="col-6 data-col col-md-4  col-lg-3">
                                                    Status
                                            </div>
                                            <div class="col-6 data-col col-md-8 col-lg-9">
                                                    In Editing
                                            </div>
                                            <div class="col-12 col-6 p-0 table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Review</th>
                                                            <th>Editing</th>
                                                            <th>Request</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Mark</td>
                                                            <td>2019-07-01</td>
                                                            <td>2019-07-01</td>
                                                            <td><a href="#" class="as-tables"> <i class="fas fa-trash-alt"></i> Delete</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <!--     <div class="w-100  pb-5 text-center">
         <a href="<?php echo e(url('home/editor/selectreview')); ?>/<?php echo e($papers->first()->id); ?>" class="btn btn-outline-info m-2"> <i class="fas fa-plus-circle"></i>  Add Editor</a>
                            </div> -->

                                <!-- <div class="w-100  pb-5 text-center">
         <a href="<?php echo e(url('home/editor/selecteditor')); ?>/<?php echo e($papers->first()->id); ?>" class="btn btn-outline-info m-2"> <i class="fas fa-plus-circle"></i>  Add Editor</a>
                            </div> -->

                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                <i class="fas fa-layer-group"></i> Status
                            </div>
                            <div class="col-12 ts-input text-secondary">
                                <div class="w-100  py-3">
                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Status</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_paper_status()->first()->status); ?></div>
                                    </div>
                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Inititated</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->created_at); ?></div>
                                    </div>

                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Last modified</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->updated_at); ?></div>
                                    </div>

                                </div>
                            </div>


                </div>

                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Submission Metadata
                        </div>
                        <div class="col-12 ts-input text-secondary">
                  <!--           <div class="w-100 text-center">
                                    <a href="./upload-s.html" class="btn btn-outline-info m-2"> <i class="fas fa-cog fa-spin"></i> Edit Metadata</a>

                            </div> -->
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Authors Name</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e($papers->first()->get_user->name); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Affiliation</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">  <?php echo e(@$papers->first()->get_metadata->Affilation); ?> </div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Country</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"> <?php echo e(@$papers->first()->get_metadata->Country); ?></div>
                                </div>

                                <!-- <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Bio Statement</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">--</div>
                                </div> -->

<!--
                                <div class="w-100 row data-row">
                                    <div class="data-col col-12 ">Principal contact for editorial correspondence.</div>

                                </div> -->
                            </div>
                        </div>


                    </div>

                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Title and Abstract
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Title</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_metadata->Title); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Abstract</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">  <?php echo e(@$papers->first()->get_metadata->Abstract); ?></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Indexing
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Academic discipline and sub-disciplines</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_metadata->Academic_discipline); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Subject classification</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_metadata->Subject_classification); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Keywords</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"> <?php echo e(@$papers->first()->get_metadata->Keywords); ?></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Language</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$papers->first()->get_metadata->Language); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
       <!--              <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Supporting Agencies
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Agencies</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">—</div>
                                    <div class="data-col col-12">OpenAIRE Specific Metadata</div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">ProjectID</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">—</div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> References
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">References</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">—</div>
                                </div>
                            </div>
                        </div>
                    </div>  -->

                </div>

            </section>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
