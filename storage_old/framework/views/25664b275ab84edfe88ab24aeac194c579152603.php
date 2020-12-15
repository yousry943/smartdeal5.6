<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>reviews</title>

 <?php echo $__env->make('user.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <style>
    .alert-danger{
        margin-top: 10px;
        padding: 5px;
    }
    .alert-danger p{
        margin: 0;
    }
</style>
    </head>
    <body>
 <?php echo $__env->make('user.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="w-100 container reviews-a" bgpage="reviews-a">
            <!-- Group -->
            <form class="py-3  sc-global" method="post" action="<?php echo e(url('home/Profile/').'/'.$user->first()->id); ?>" >
            <?php echo e(csrf_field()); ?>


                <div class="row w-100 sb-content mt-5 tr-forms m-0">
                    <div class="col-12 sb-header text-center">
                        <i class="fas fa-id-card"></i>   Update profile information
                    </div>
                    <div class="col-12 ts-input py-3 text-secondary">
                        <div class="row">
                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">First Name</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name',$user[0]->name)); ?>"/>
                                </div>
                                <?php echo $errors->first('name', ' <div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">Family Name</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="text" name="familyName" class="form-control" value="<?php echo e(old('familyName',$user[0]->familyName)); ?>"/>
                                </div>
                                <?php echo $errors->first('familyName', ' <div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                                

                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">Country</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                    <select name="Country" class="custom-select">
                                    <option value="<?php echo e(old('Country',$user[0]->Country)); ?>" >
                                    <?php echo e(old('Country',$user[0]->Country)); ?>

                                    </option>

                                    <option>
                                        <?php echo $__env->make('user.includes.country', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </option>

                                    </select>
                                </div>
                                <?php echo $errors->first('Country', '<div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                             
                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">Title</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="text" name="Title" class="form-control" value="<?php echo e(old('Title',$user[0]->Title)); ?>"/>
                                </div>
                                <?php echo $errors->first('Title', '<div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                            <div class="col-12  py-3">
                                <p class="h6 text-center">Affiliation
                                    (Format: Institute, City) (Please refrain from adding the country)</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="text" name="Affilation" class="form-control" value="<?php echo e(old('Affilation',$user[0]->Affilation)); ?>"/>
                                </div>
                                <?php echo $errors->first('Affilation', '<div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>
                
                        </div>
                    </div>
                </div>
                <!-- Group -->
                <div class="row w-100 sb-content mt-5 tr-forms m-0">
                    <div class="col-12 sb-header text-center">
                        <i class="fas fa-at"></i>    Change Email
                    </div>
                    <div class="col-12 ts-input py-3 text-secondary">
                        <!-- <div class="alert alert-warning" role="alert">
                            <strong>Warning!</strong>  If you update your email address you will be required to verify it.
                        </div> -->
                        <!-- <p class="h6 colorA">Email : morad_amer@yahoo.com</p> -->
                        <div class="row">
                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">New Email</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email',$user[0]->email)); ?>" required/>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 py-3">
                                <p class="h6 text-center">New email confirmation</p>
                                <div class="form-group">
                                    <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                    <input type="email" name="email_confirm" class="form-control"  value="<?php echo e(old('email_confirm',$user[0]->email_confirm)); ?>" required/>
                                </div>
                                <?php echo $errors->first('email', '<div class="col-12 alert alert-danger">
                                <p >:message</p></div>'); ?>

                            </div>

                         
                        </div>
                    </div>
                </div>

           <!-- Group -->
                <div class="row w-100 sb-content mt-5 tr-forms m-0">
                        <div class="col-12 sb-header text-center">
                                <i class="fas fa-key"></i>     Change password
                        </div>
                        <div class="col-12 ts-input py-3 text-secondary">
                            <div class="row">
                                <!-- <div class="col-12  py-3">
                                    <p class="h6 text-center">Old password</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="password" name="current_password" class="form-control" required/>
                                    </div>
                                    <?php echo $errors->first('current_password', '<div class="col-12 alert alert-danger"><p >:message</p></div>'); ?>


                                </div> -->
                              
                                <div class="col-12 col-md-6 py-3">
                                    <p class="h6 text-center">New password</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="password"  name="password" class="form-control"   required/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 py-3">
                                    <p class="h6 text-center">New password confirmation</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="password" name="password_confirm" class="form-control" required/>
                                    </div>
                                    <?php echo $errors->first('password', '<div class="col-12 alert alert-danger"><p >:message</p></div>'); ?>

                                </div>
                                </div>

                              
                            </div>
                        </div>
                        <div class="row m-0 justify-content-center col-12 text-center pb-2">
                            <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-check-circle"></i> Send</button>
                            <!-- <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-times-circle"></i> Reset</button> -->

                        </div>
                    </div>
                </form>
                <?php if(session('success')): ?>
                                        <div class="col-12 alert alert-success">
                                            <center><?php echo e(session('success')); ?></center>
                                        </div>
                                <?php endif; ?>  
        </div>

 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
