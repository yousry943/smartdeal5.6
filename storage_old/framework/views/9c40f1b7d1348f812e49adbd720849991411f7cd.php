

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Performer Ierek</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
        <!-- Style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/bootstrap.min.css')); ?>" />

            <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/style.css')); ?>" />
        <style>
            .alert-warning {
                color: #856404;
                background-color: #ef292970 !important;
                color: #fff;
                font-size: .9em !important;
                padding: 5px;
                border: none !important;
            }
            .alert-warning a{color: #fff; font-weight:bold;}
            .alert-success{
                color: #ffffff !important;
                background-color: #23983f9e !important;
                border: none !important;
                padding: 5px;
            }
            .loginPage .invalid-feedback{
                border-radius: 10px !important;
                /* margin-bottom: 18px; */
                padding: 5px;
                background: #ff5c5c80 !important;
                color: #ffff;
                margin: 5px 0px !important;
                display: block !important;
                padding: 6px;
                font-size: .8em;
            }
            .loginPage .form-group{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <section class="bgApp loginPage" bgpage="bg-app">
            <div class="con-app row m-0 container-fluid ">

         <form method="POST"   class="row form-app col-12 p-0 col-md-7 col-lg-9 mx-auto"  action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
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
<!--                     <p class="col-12 lead text-center">2nd Euro-Mediterranean Conference for Environmental Integration
                            EMCEI-2, 10-13 October 2019, Sousse, Tunisia</p> -->
                    <div class="col-12 p-0 row m-0 div-golfo" author="loginA">
                            <div class="col-12 col-md-6 mt-3">
                                    <h5 class="text-center head-author">Already have an account ?</h5>
                                    <div class="line-gr">
                                        <div class="w-100 mb-3">
                                            <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-at"></i></span>
                                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                            </div>

                                            <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>




                                        </div>
                                        <div class="w-100 mb-3">
                                        <div class="form-group">
                                            <span class="ts-icon"><i class="fas fa-unlock-alt"></i></span>

                      <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>


                                        </div>
                                        </div>

                                    </div>


                                    <?php if(session('status')): ?>
                   <div class="alert alert-success">
                       <?php echo e(session('status')); ?>

                   </div>
               <?php endif; ?>

                                    <?php if(session('warning')): ?>
                   <div class="alert alert-warning">
                       <?php echo e(session('warning')); ?>

                       <br>
                       <a href="user/resend/verify/<?php echo e(session('user_id')); ?>"><?php echo e(session('link')); ?></a>





                   </div>
               <?php endif; ?>



                                          <button type="submit" class="btn w-100">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                    <div class="w-100 text-center mt-3 foot-form">
                                        <div class="form-check">
  <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>


                                        </div>

                                 <a href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>

                                    </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <h5 class="text-center head-author">Submit a new paper</h5>
                                <p class="h6 text-center m-0 pb-2" author="p">In order for you to be able to submit a paper, you must first create an author account. The author account will allow you to submit multiple papers. This will allow for having a single account for all your papers.</p>
                                <a href="<?php echo e(url('register')); ?>" class="btn w-100"><i class="fas fa-user-circle"></i> Create Account</a>
                            </div>
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
