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
                        <li> <span>3</span>Confirmation</li>
                    </ul>
                </div>

                <form class="col-12 tr-forms" method="post"  <?php echo e(url('metadata')); ?>/<?php echo e($id); ?> bt="formMain"  >
                    <?php echo e(csrf_field()); ?>

                    <div class="row w-100 sb-content m-0" bt="cAuthor" gName="cGrand">
                        <div class="col-12 sb-header">
                                <i class="fas fa-user-tie"></i> Authors
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="row pt-4">
                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">First Name</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="text" required class="form-control" value="<?php echo e($users->name); ?>"  />
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Middle Name</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="text"  class="form-control"  />
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Last Name</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                        <input type="text" required class="form-control"  value="<?php echo e($users->familyName); ?>"  />
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Email</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-at"></i></span>
                                        <input type="email" required class="form-control" value="<?php echo e($users->email); ?>" />
                                    </div>
                                </div>


                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">URL</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-link"></i></span>
                                        <input type="url" name="URL" class="form-control" required/>
                                    </div>
                                </div>



                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Affilation</p>
                                    <textarea class="form-control" rows="7" name="Affilation" value="<?php echo e($users->Affilation); ?>" required ></textarea>
                                </div>

                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Country</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                        <select class="custom-select" name="Country" required >
                                          <option value="<?php echo e($users->Country); ?>"> <?php echo e($users->Country); ?> </option>
                                         <?php echo $__env->make('user.includes.country', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </select>
                                    </div>
                                </div>

                          <!--       <div class="col-12 col-md-8 mx-auto text-center mb-5">
                                    <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-plus-circle"></i>  add Co-Auhor</button>
                                </div> -->
                            </div>

                        </div>
                    </div>

<!-- 
                    <div class="w-100 text-center mb-5" >
                        <div class="btn btn-outline-info m-2" coBtn="coAuthor"><i class="fas fa-user-plus"></i> Add Co Author</div>
                    </div> -->


                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                    <i class="fab fa-buffer"></i> Title and Abstract
                            </div>
                            <div class="col-12 ts-input text-secondary">
                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Title</p>
                                    <div class="form-group">
                                        <span class="ts-icon"><i class="fas fa-user-tie"></i></span>
                                        <input type="text" class="form-control"  name="Title" required />
                                    </div>
                                </div>

<input type="text" class="d-none" name="papers_id" value="<?php echo e($id); ?>" >

                                <div class="col-12 col-md-8 mx-auto mb-5">
                                    <p class="h6 text-center">Abstract</p>



                                    <textarea name="Abstract"  class="form-control" rows="7" required></textarea>


                                </div>
                            </div>

                        </div>
                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                    <i class="fab fa-buffer"></i> Indexing
                            </div>
                            <div class="col-12 ts-input text-secondary">
                                <p class="h6 text-secondary">Provide terms for indexing the submission; separate terms with a semi-colon (term1; term2; term3).</p>

                                <div class="row pt-4">
                                    <div class="col-12 col-md-8 mx-auto mb-5">
                                        <p class="h6 text-center">Academic discipline and sub-disciplines</p>
                                        <div class="form-group">
                                            <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                            <input type="text"   class="form-control" name="Academic_discipline" required/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 mx-auto mb-5">
                                        <p class="h6 text-center">Subject classification</p>
                                        <div class="form-group">
                                            <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                            <input type="text" required class="form-control" name="Subject_classification" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 mx-auto mb-5">
                                        <p class="h6 text-center">Keywords</p>
                                        <div class="form-group">
                                            <span class="ts-icon"><i class="fas fa-certificate"></i></span>
                                            <input type="text" required  class="form-control"  name="Keywords" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-8 mx-auto mb-5">
                                        <p class="h6 text-center">Language</p>
                                        <div class="form-group">
                                                <span class="ts-icon"><i class="fas fa-globe"></i></span>
                                                <select required  class="custom-select" name="Language">
                                               <?php echo $__env->make('user.includes.Language', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                </select>
                                            </div>
                                    </div>

                                </div>

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
