<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Submit a new paper</title>

 <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </head>
    <body>

 <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="w-100 container reviews-a" bgpage="reviews-a">
            <section class="py-3 sc-global">
          <!--       <div class="alert alert-warning lead not-info" role="alert">
                    <strong> <i class="fas fa-grin-beam-sweat"></i> Oh snap! </strong> The paper submission is closed
                  </div> -->
                      <div class="row w-100 sb-content m-0">
                          <div class="col-12 sb-header">
                                <i class="fas fa-layer-group"></i>   My papers
                          </div>
                          <div class="col-12 sb-papers">
                              <div class="w-100 text-center py-5">
                                    <div class="sb-inline colorC">
                                            <span class="d-block  display-4"><i class="fas fa-layer-group"></i></span>
                                            <p class="lead ">You still have no papers</p>
                                            <a href="<?php echo e(url('home/submit')); ?>" class="btn btn-outline-info">Submit a new paper</a>
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
