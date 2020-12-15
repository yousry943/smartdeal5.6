<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Summary</title>

    <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
       <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="w-100 container reviews-a" bgpage="reviews-a" submit-a="">
            <form class="py-3 row sc-global" action="<?php echo e(url('home/editor/Review/Reviewer/Acknowledge/')); ?>" method="post">
            	<?php echo e(csrf_field()); ?>


                <div class="col-12 tr-forms">
                    <div class="row w-100 sb-content m-0 pb-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-envelope-open-text"></i> Send Email
                        </div>
                        <div class="row col-12 m-0 ts-input text-secondary pb-0">
                            <div class="w-100 py-3">
                                <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">To :</div>
                      <div class="data-col col-12 col-md-8 col-lg-9">
                      	<input  type="email" name="to" class="form-control" id="inputEmail3" value="<?php echo e($user->first()->email); ?>" required/></div>
                                </div>

                                <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">CC :</div>
                                    <div class="data-col col-12 col-md-8 col-lg-9">
                             <input type="email" name="cc" class="form-control" id="inputEmail3" required/></div>
                                </div>

                                <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">BCC :</div>
                                    <div class="data-col col-12 col-md-8 col-lg-9">
                               <input type="email" name="bcc" class="form-control" id="inputEmail3" required/></div>
                                </div>
                         <!--        <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">Attachments :</div>
                                    <div class="data-col col-12 col-md-8 col-lg-9"><input type="email" class="form-control" id="inputEmail3" /></div>
                                </div> -->

                                <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">Subject :</div>
                                    <div class="data-col col-12 col-md-8 col-lg-9">
                                 <input type="text" name="subject" class="form-control" id="inputEmail3" value="<?php echo e(@$email_Form->first()->subject); ?>" required/></div>
                                </div>


                                <div class="w-100 row data-row data-send">
                                    <div class="data-col col-12 col-md-4 col-lg-3">Body :</div>
                                    <div class="data-col col-12 col-md-8 col-lg-9">
                                        <textarea class="form-control" name="body" rows="6" required><?php echo e(@$email_Form->first()->body); ?></textarea>
                                    </div>
                                </div>




                                <div class="row m-0 justify-content-center col-12 text-center pb-2">
                                    <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-check-circle"></i> Send</button>
                                    <button type="reset" class="btn btn-outline-info m-2" onClick="window.location.reload();"> <i class="fas fa-times-circle"></i> Cancel</button>


                                </div>
                                <?php if(session('success')): ?>
                                        <div class="col-12 alert alert-success">
                                            <center><?php echo e(session('success')); ?></center>
                                        </div>
                                <?php endif; ?>  
                            </div>
                        </div>


                        </div>


                </div>

            </form>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
