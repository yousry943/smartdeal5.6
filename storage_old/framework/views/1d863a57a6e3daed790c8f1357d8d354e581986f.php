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
                <form class="col-12 tr-forms re-edit" method="post" action="<?php echo e(url('home/editor/Review/auther_editer_comment')); ?>" >
                	 <?php echo e(csrf_field()); ?>

                    <div class="row  w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-user-friends"></i>  Editor/Author Correspondence
                        </div>
                        <!-- comment -->


                        <div class="col-12">
                        	<?php if(!empty($auther_editer_comments->first()->id)): ?>

                            	  <?php $__currentLoopData = $auther_editer_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auther_editer_comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-secondary alert-com" role="alert">
                            	

<?php echo e($auther_editer_comment->comments); ?>

                                <span class="date-alert">By the <?php echo e($auther_editer_comment->get_user->name); ?>  <?php echo e($auther_editer_comment->created_at); ?></span>


                               



                              
                            </div>

                                
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            	 <?php endif; ?>

                        </div>

                        <div class="col-12 mt-3">
                            <textarea class="form-control" name="comments" rows="3" style="min-height: 126px !important" placeholder="add your Comments ..." required></textarea>
                        </div>
                       

                        <input type="hidden" name="paper_id" value="<?php echo e($paper_id); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
                         <input type="hidden" name="seg_id" value="<?php echo e($seg_id); ?>">


                        


                        <div class="col-12 text-center mt-2">
                            <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-comment"></i> 
                                Send      </button>
                        </div>
                    </div>
                </form>

          
            </section>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>