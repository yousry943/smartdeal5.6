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

<form class="row form-app col-12 p-0 col-md-9 col-lg-9 col-xl-8 mx-auto" method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
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
                            <div class="col-12 p-0 div-golfo" author="loginA">
                                <h4 class="text-center head-author">Create account</h4>
                                    <div class="row     ">
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
                                        </div>
                                        <div class="col-12 col-md-6">
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
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-unlock-alt"></i></span>

  <input id="password-confirm" class="form-control"  type="password" class="form-control" name="password_confirmation" required>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-signature"></i></span>

                    <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="First Name" >

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>




                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                                <input type="text" name="familyName" class="form-control" id="familyName" placeholder="family Name" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                    <span class="ts-icon"><i class="fab fa-black-tie"></i></span>
                          <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" required>

                                        
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                                <input type="text" class="form-control" name="Affilation" id="affilation" placeholder="Affilation"  required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                                    <select name="Country" class="custom-select" required>
                                                        <option value="">Country</option>
                                                        <?php echo $__env->make('user.includes.country', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <div class="col-12 pb-3">
                                            <P class="d-inline">Would you accept an invite to peer review ?</P>
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" id="yes1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="yes1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" id="No1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="No1">No</label>
                                            </div>
                                        </div>
                                    </div>



<input type="text" name="user_type_id" value="1"  hidden="hidden">

                                       <button type="submit"  class="btn w-100 " >
                                          <i class="fas fa-id-badge"></i>
                                    <?php echo e(__('Register')); ?>

                                </button>




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
