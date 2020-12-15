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
                <!-- ______Head Track________ -->
                <div class="col-12 d-flex  pb-5 pt-3 justify-content-center align-items-center align-items-stretch">
                    <ul class="track-st">
                        <li  class="ac-li"> <span>1</span>Upload Submission</li>
                        <li> <span>2</span>Enter Metadata</li>
                        <li> <span>3</span>Confirmation
                        </li>
                    </ul>
                </div>

                <form class="col-12 tr-forms"  method="post"  <?php echo e(url('submit')); ?> enctype="multipart/form-data" >

                	    <?php echo e(csrf_field()); ?>


                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i>  Track Selction
                        </div>
                        <div class="col-12 ts-input">
                            <p class="h6 text-secondary">Select the appropriate track for this submission track Selection</p>
                            <select class="custom-select" name="Track_Selction" required>
                                <option selected value="">Open this select menu</option>

                            <?php $__currentLoopData = $Track_Selctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Track_Selction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($Track_Selction->id); ?>"><?php echo e($Track_Selction->track_name); ?></option>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                    </div>

                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                                <i class="fas fa-tasks"></i>  Submission Checklist
                        </div>
                        <div class="col-12 ts-input">
                            <p class="h6 text-secondary">indicate that this submission is ready to be considered by checking off the following for this conference</p>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check1"  >
                                <label class="custom-control-label" for="Check1">The Submitted manuscript has not been previously published and has not been sent to a different publisher for publishing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check2"  >
                                <label class="custom-control-label" for="Check2">You've read the Author Instructoins</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check3"  >
                                <label class="custom-control-label" for="Check3">The manuscript file should be submitted in OpenOffice, Microsoft Word format</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check4"  >
                                <label class="custom-control-label" for="Check4">All authors have been named on the paper, and the online submission form</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check5"  >
                                <label class="custom-control-label" for="Check5">The text should be single-spaced and the font set to be 10 pt.</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check6"  >
                                <label class="custom-control-label" for="Check6">You've obtained permission to reuse anynay figures, tables, and data set if needed</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check7"  >
                                <label class="custom-control-label" for="Check7">The Author sould double-check</label>
                            </div>
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input" id="Check8"  >
                                <label class="custom-control-label" for="Check8">having removed authors name and identification from the document</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check9"  >
                                <label class="custom-control-label" for="Check9">The article has been checked for proper grammar and spelling</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check10"  >
                                <label class="custom-control-label" for="Check10">You've notified all the co-authors thar the paper has been submitted</label>
                            </div>


                        </div>


                    </div>


                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                    <i class="fas fa-scroll"></i>  Ierek Privacy Statement
                            </div>
                            <div class="col-12 ts-input text-secondary">
                                <p class="h6 text-secondary">The names and email addresses entered in this Conference site will be used exclusively for the the states purposes of this conference and will not be made available for any other purpose or to any other party</p>

                                <h5 class="h5 mt-4">Plagiarism Policy</h5>
                                <p class="h6">When citing others (or your own) previous work, please ensure you have :</p>
                                <ul>
                                    <li>Clearly marked quoted verbatim text ("") from another source with quotation marks.</li>
                                    <li>Attributed and referenced the source of the quotation clearly using in-text citation and a reference is your bibliography.</li>
                                    <li>Got approval from an author of another source in case of taking any material from his/her manuscript.</li>

                                </ul>


                                <p class="h6 mt-4">Before you submit, make sure that :</p>
                                <ul>
                                    <li>You've read the author instructions.</li>
                                    <li>All authors have been named on the paper, and the online submission form.</li>
                                    <li>All material has been referenced in the text clearly and thoroughly.</li>
                                    <li>You've obtained permission to reuse any figures, tables, and data sets.</li>
                                    <li>You've only submitted the paper to on journal at a time.</li>
                                    <li>You've notified all the co-authors that the paper has been submitted.</li>

                                </ul>
                            </div>

                    </div>


                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                <i class="fas fa-layer-group"></i> Submission Instructions
                            </div>
                            <div class="col-12 ts-input text-secondary">
                                    <p class="h6 text-secondary">To upload a manuscript to this conference complate the following steps</p>
                                    <ol>
                                        <li>On this page, click Browse (or choose file) which opens a Choose File window for locating the hard drive of your computer.</li>
                                        <li>Locate the file you wish to submit and highlight it.</li>
                                        <li>Click Open on the Choose File window, which places the name of the file on this page.</li>
                                        <li>Click Upload on this page, which uploads the file from the computer to the conferences web site.</li>
                                        <li>Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>
                                    </ol>
                                    <div class="custom-control custom-checkbox" style="box-shadow: none">
                                            <input type="checkbox" class="custom-control-input" id="Check13"  >
                                            <label class="custom-control-label" for="Check13">Please note that your submission will be ignored if you don't download and use writing template</label>
                                    </div>

                                    <div class="w-100 text-center">


                                            <a href="<?php echo e(Request::root()); ?>/paper_example/<?php echo e($paper_examples->first()->link); ?>" class="btn btn-outline-info m-2"> <i class="fas fa-file-download"></i> Paper Template</a>
                                    </div>
                                </div>


                        </div>
                        <div class="row w-100 sb-content m-0">
                                <div class="col-12 sb-header">
                                        <i class="fas fa-cloud-upload-alt"></i> Submission File
                                </div>
                                <div class="col-12 ts-input text-secondary">

                                   <?php if($errors->has('paper')): ?>
                                             <div class="alert alert-warning lead not-info" role="alert">
                                            <strong> <i class="fas fa-map-signs"></i></strong><?php echo e($errors->first('paper')); ?>

                                            </div>

                                    <?php endif; ?>





                                        <!-- <div class="w-100  py-3">
                                            <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">File Name</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">Gu-7-A.docx</div>
                                            </div>
                                            <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">Orignal file name</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">Editor.docx</div>
                                            </div>

                                            <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">File Size</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">OB</div>
                                            </div>

                                            <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">Date Uploaded</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">2019-6-25 10:04 AM</div>
                                            </div>
                                        </div> -->



                       <input type="file" name="paper" id="photo" required  class="form-control-file" id="exampleFormControlFile1">
                                    <?php if($errors->has('photo')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('photo')); ?></strong>
                                        </span>
                                    <?php endif; ?>




                                    </div>


                            </div>
                        <div class="row m-0 justify-content-center col-12 text-center pb-4">
                            <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-check-circle"></i> Save and continue</button>


                        </div>
                </form>

            </section>

        </div>

        <!-- Script -->
   <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
