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
                        <li   class="ac-li"> <span>2</span>Enter Metadata</li>
                        <li class="ac-li"> <span>3</span>Confirmation</li>
                    </ul>
                </div>

                <form class="col-12 tr-forms">
                    <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                                <i class="fas fa-check-circle"></i> Done
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="row pt-1">
                                <p class="h6 col-12"><?php echo e($messge); ?></p>
                            </div>
                        </div>

                    </div>

                 
                </form>
                    
            </section>

        </div>

        <!-- Script -->
   <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>