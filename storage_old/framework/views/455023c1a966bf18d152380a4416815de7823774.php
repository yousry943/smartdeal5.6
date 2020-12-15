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
                <form class="col-12 tr-forms re-edit"  method="post"  <?php echo e(url('submit_myreview')); ?> enctype="multipart/form-data">

                     <?php echo e(csrf_field()); ?>



                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-pen-nib"></i> my review
                        </div>

                        <div class="alert alert-secondary alert-com mb-2" role="alert">




                                Title of the paper : <?php echo e($paper->get_metadata->Title); ?>

                                <br>

                                Abstract : <?php echo e($paper->get_metadata->Abstract); ?>



     <?php if(isset($paper->get_auther_reply->filename)): ?>


            <a class="d-block go-link" href="<?php echo e(Request::root()); ?>/submit_auther_review/<?php echo e($paper->get_auther_reply->filename); ?>" target="_blank" download="<?php echo e($paper->get_auther_reply->filename); ?>"> <i class="fas fa-download"></i> Download</a>

       <?php endif; ?>

                        </div>

                        <div class="col-12 ts-input text-secondary">
                            <div class="col-12 col-md-12 re-ed-row row mb-5">
                                <p class="h6 flex-s m-0 col-12 col-md-6 col-lg-4 ">Reviewer's expertise in this research study</p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select class="custom-select" name="Reviewer_expertise" required>
                                          <option  value=""> </option>
                                            <option  value="yes"> yes</option>
                                             <option  value="no"> no</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-md-12 row mb-5 re-ed-row  ">
                                <p class="h6  flex-s  m-0 col-12 col-md-6 col-lg-4">Originality
                                    <span>Does the paper produce a new knowledge instead of summarizing what is already known in a new form?</span>
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select class="custom-select" name="Originality" required>
                                          <option  value=""> </option>
                                          <option  value="10%"> %10</option>
                                          <option  value="20%"> %20</option>
                                          <option  value="30%"> %30</option>
                                          <option  value="40%"> %40</option>
                                          <option  value="50%"> %50</option>
                                          <option  value="60%"> %60</option>
                                          <option  value="70%"> %70</option>
                                          <option  value="80%"> %80</option>
                                          <option  value="90%"> %90</option>
                                          <option  value="100%"> %100</option>



                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">Quality
                                    <span>Is the paper well written (e.g. Logically argued; Clearly structured and formatted; Written in a professional, academic style)?</span>
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select class="custom-select" name="Quality" required>
                                          <option  value=""> </option>
                                          <option  value="10%"> %10</option>
                                          <option  value="20%"> %20</option>
                                          <option  value="30%"> %30</option>
                                          <option  value="40%"> %40</option>
                                          <option  value="50%"> %50</option>
                                          <option  value="60%"> %60</option>
                                          <option  value="70%"> %70</option>
                                          <option  value="80%"> %80</option>
                                          <option  value="90%"> %90</option>
                                          <option  value="100%"> %100</option>


                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">English Quality
                                    <span>How do you judge the quality of English?</span>
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select class="custom-select" name="English_Quality" required>
                                          <option  value=""> </option>
                                          <option  value="10%"> %10</option>
                                          <option  value="20%"> %20</option>
                                          <option  value="30%"> %30</option>
                                          <option  value="40%"> %40</option>
                                          <option  value="50%"> %50</option>
                                          <option  value="60%"> %60</option>
                                          <option  value="70%"> %70</option>
                                          <option  value="80%"> %80</option>
                                          <option  value="90%"> %90</option>
                                          <option  value="100%"> %100</option>

                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">Detailed comments (shown to the authors)
                                    <span>- It should be at least 50-100 words long.<br>
                                        - Please try to help the authors to resubmit a better version (if relevant).<br>
                                        - Please do not include your recommendation (e.g. accept, reject) in your comments to the authors.
                                    </span>
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <textarea  required class="form-control" name="Detailed_comments" rows="7" placeholder="add your Comments ..."></textarea>

                                </div>
                            </div>


                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">Comments to the Proceedings Editor (not shown to the authors)
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <textarea  required class="form-control" name="Comments_to_Proceedings" rows="7" placeholder="add your Comments ..."></textarea>

                                </div>
                            </div>



                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">Overall evaluation</p>
                                <div class="col-12 col-md-6 col-lg-8">
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select required  class="custom-select" name="Overall_evaluation">
                                          <option  value=""> </option>
                                          <option  value="10%"> %10</option>
                                          <option  value="20%"> %20</option>
                                          <option  value="30%"> %30</option>
                                          <option  value="40%"> %40</option>
                                          <option  value="50%"> %50</option>
                                          <option  value="60%"> %60</option>
                                          <option  value="70%"> %70</option>
                                          <option  value="80%"> %80</option>
                                          <option  value="90%"> %90</option>
                                          <option  value="100%"> %100</option>

                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 col-md-12 row mb-5  re-ed-row ">
                                <p class="h6 flex-s  m-0 col-12 col-md-6 col-lg-4">Corrected file
                                    <span>i. e. If you insert other comments on the authors paper</span>
                                </p>
                                <div class="col-12 col-md-6 col-lg-8">

                     <input type="file"   name="filename" class="form-control-file" id="exampleFormControlFile1" required>
                   
                                </div>
                                <?php echo $errors->first('filename', ' <div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                        </div>
                        <div class="row m-0 justify-content-center col-12 text-center pb-2">
            <!-- <button  class="btn btn-outline-info m-2"> <i class="fas fa-times-circle"></i> Reset</button> -->
                            <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-check-circle"></i> Send</button>
                        </div>
                    </div>
                </form>


            </section>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
