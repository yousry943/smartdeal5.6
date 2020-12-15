
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Performer Ierek</title>

        <!-- For icons -->
        
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
        <!-- Style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/bootstrap.min.css')); ?>" />

            <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/style.css')); ?>" />
    </head>
    <body>
        <section class="bgApp" bgpage="bg-app">
            <div class="con-app row m-0 container-fluid ">
                <form class="row form-app col-12 p-0 col-md-7 col-lg-5 mx-auto"  method="POST" action="<?php echo e(route('password.email')); ?>" aria-label="<?php echo e(__('Reset Password')); ?>" >
                      <?php echo csrf_field(); ?>

                    <h1 class="col-12 text-center ">
                        <div class="brand-e">
                                <div class="ierek">
                                            IEREK
                                </div>
                                <div class="ierek-s">
                                    S
                                </div>
                        </div>
                    </h1>
                    <p class="col-12 lead text-center">Conference Paper Submission and Evaluation System</p>
                    <p class="col-12 lead text-center">2nd Euro-Mediterranean Conference for Environmental Integration
                            EMCEI-2, 10-13 October 2019, Sousse, Tunisia</p>
                    <div class="col-12">
                            <div class="form-group">
                                <span class="ts-icon"><i class="fas fa-at"></i></span>

                                  <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>


                            </div>
                            <button type="submit" class="btn w-100"><i class="fas fa-paper-plane"></i>  <?php echo e(__('Send Password Reset Link')); ?> </button>


                   
                    </div>

                </form>
            </div>
        </section>
        <!-- Script -->
        <script src="<?php echo e(asset('assets/website/js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/website/js/popper.min.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/website/js/bootstrap.min.js')); ?>"></script>

        

        <script src="<?php echo e(asset('assets/website/js/app.js')); ?>"></script>
    </body>
</html>