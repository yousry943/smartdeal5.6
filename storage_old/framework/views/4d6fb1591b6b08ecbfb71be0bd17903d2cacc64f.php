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
                    <ul class="track-st sk-lan">
                        <li><a href="<?php echo e(url('home/editor/View_Submission')); ?>/<?php echo e($id); ?>">Summary</a></li>
                        <li ><a  class="ac-li" href="<?php echo e(url('home/editor/main-review')); ?>/<?php echo e($id); ?>">Review</a></li>
                        <!-- <li ><a href="./history-a.html">History</a></li> -->
                    </ul>
                </div>

                <div class="col-12 tr-forms">
    <!--                 <div class="row w-100 sb-content m-0">
                        <div class="col-12 sb-header">
                            <i class="fas fa-layer-group"></i> Submission
                        </div>
                        <div class="col-12 ts-input text-secondary">
                            <div class="w-100  py-3">
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Authors</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">Mohamed <a  class="anchor-s tc-anch" href="./sendEmail.html"><i class="fas fa-envelope"></i></a></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Title</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">Test</div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Section</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9"><a href="https://press.ierek.com/index.php/ESSD/editor/downloadFile/551/1245" class="file">551-1245-1-SM.docx</a> 2019-06-25</div>
                                </div>

                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Editor</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">Mohamed <a  class="anchor-s tc-anch" href="./sendEmail.html"><i class="fas fa-envelope"></i></a></div>
                                </div>
                                <div class="w-100 row data-row">
                                    <div class="data-col col-6 col-md-4 col-lg-3">Review Version</div>
                                    <div class="data-col col-6 col-md-8 col-lg-9">2019-6-25</div>
                                </div>
                                <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Supp. files</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9">2019-6-25</div>
                                    </div>

                            </div>
                        </div>


                    </div>
 -->


                 <!--    <div class="col-12 text-center mb-3">
                            <a href="<?php echo e(url('home/editor/selectreview')); ?>/<?php echo e($id); ?>" class="btn btn-outline-info">Select Reviewer</a>
                    </div> -->
                    <div class="row w-100 sb-content m-0">
                            <div class="col-12 sb-header">
                                <i class="fas fa-layer-group"></i> Peer Review
                            </div>
                        <!--     <div class="col-12 ts-input text-secondary">
                                <div class="w-100  py-3">
                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Reviewer A</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9">Anna Pisello</div>
                                    </div>
                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Review Form</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9">None / Free Form Review
                                        <div class="col-12 col-6 p-0 table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Request</th>
                                                            <th>Underway</th>
                                                            <th>    Due</th>
                                                            <th>Acknowledge</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2019-07-01</td>
                                                            <td>2019-07-01</td>
                                                            <td>2019-07-29</td>
                                                            <td>    2019-07-01</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    </div>    -->

                         <!--            <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Recommendation</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9">See Comments   2019-07-01</div>
                                    </div>

                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Competing Interests</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9">121212</div>
                                    </div>
                                    <div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Review</div>
                                        <div class="data-col col-6 col-md-8 col-lg-9"> <a href="./decisioncomments.html" target="a_blank"class="anchor-s tc-anch"><i class="fas fa-comment-alt"></i></a> 2019-07-01</div>
                                    </div>
                                    <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Uploaded files</div>
                                            <div class="data-col col-6 col-md-8 col-lg-9">None</div> -->
                                     <!--    </div> -->
                             <!--            <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">Reviewer rating</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">
                                                    <form class="w-100">
                                                            <div class="input-group">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                            <option label="5 High" value="5">5 High</option>
                                                                            <option label="4" value="4">4</option>
                                                                            <option label="3" value="3">3</option>
                                                                            <option label="2" value="2">2</option>
                                                                            <option label="1 Low" value="1">1 Low</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                      <button class="btn btn-outline-secondary" type="submit">Record</button>
                                                                    </div>
                                                                  </div>
                                                    </form>
                                                </div>
                                            </div> -->
                       <!--          </div>
 -->



    <?php for($i = 0; $i < $all_count; $i++): ?>







                                <div class="w-100  py-3">

                                        <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Reviewer </div>
                                            <div class="data-col col-6 col-md-8 col-lg-9"><?php echo e(@$all[$i][0]->name); ?></div>
                                        </div>
                                        <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Status</div>
                                            <div class="data-col col-6 col-md-8 col-lg-9">
                                            <div class="col-12 col-6 p-0 table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Request</th>
                                                                <th>Underway</th>
                                                                <th>    Due</th>
                                                                <th>Acknowledge</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <tr>
 <td><a  class="anchor-s tc-anch" href="<?php echo e(url('home/editor/sendemail')); ?>/<?php echo e(@$all[$i][1]->paper_id); ?>/<?php echo e(@$all[$i][0]->id); ?>"><i class="fas fa-envelope"></i></a></td>


                             <?php if(isset($all[$i][1]->accept_date)): ?>
                                        <td><?php echo e($all[$i][1]->accept_date); ?></td>
                                        <?php else: ?>
                                        <td>---</td>
                               <?php endif; ?>

                                  <?php if(isset($all[$i][1]->Due)): ?>
                                        <td><?php echo e($all[$i][1]->Due); ?></td>
                                        <?php else: ?>
                                        <td>---</td>
                               <?php endif; ?>


          <td><a  class="anchor-s tc-anch" href="<?php echo e(url('home/editor/Review/Reviewer/Acknowledge')); ?>/<?php echo e(@$all[$i][0]->id); ?>"><i class="fas fa-envelope"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
                                        </div>
<div class="w-100 row data-row">
                                        <div class="data-col col-6 col-md-4 col-lg-3">Final Decision</div>
                                        <!-- <div class="data-col col-6 col-md-8 col-lg-9">See Comments   2019-07-01</div> -->
                                    </div>
<div class="w-100 row data-row">




                         <div class="data-col col-6 col-md-4 col-lg-3">Review</div>

<div class="data-col col-6 col-md-8 col-lg-9"> <a href="<?php echo e(url('home/editor/Review/See_Reviewer_Review')); ?>/<?php echo e(@$id); ?>/<?php echo e(@$all[$i][0]->id); ?>" target="a_blank" class="anchor-s tc-anch"><i class="fas fa-comment-alt"></i></a>

 <?php if(isset($all[$i][2]->created_at)): ?>
                                       <?php echo e($all[$i][2]->created_at); ?>

                                        <?php else: ?>
                                     Not found
                               <?php endif; ?>

</div>


                                    </div>
<div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Uploaded files</div>

                                            <?php if(isset($all[$i][3]->filename)): ?>


                                       <div class="data-col col-6 col-md-8 col-lg-9">

<a href="<?php echo e(Request::root()); ?>/submit_myreview/<?php echo e($all[$i][3]->filename); ?>"> <?php echo e($all[$i][3]->filename); ?></a>
                                    </div>
                                        <?php else: ?>

                                     <div class="data-col col-6 col-md-8 col-lg-9"> Not found </div>
                               <?php endif; ?>


                                        </div>
                                    </div>








  <?php endfor; ?>










                            </div>


                        </div>


                        <div class="row w-100 sb-content m-0">
                                <div class="col-12 sb-header">
                                    <i class="fas fa-layer-group"></i> Editor Decision

                                </div>
                                <form class="col-12 ts-input text-secondary" action="<?php echo e(url('home/editor/Review/Editor_Decision')); ?>/<?php echo e($id); ?>" method="post">
                                     <?php echo e(csrf_field()); ?>


                                    <div class="w-100  py-3">
                                        <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Select decision</div>
                                            <div class="data-col col-6 col-md-8 col-lg-9">
                                                <form class="w-100">
                                                    <div class="input-group">

                                                        <input  type="hidden" name="paper_id" value="<?php echo e($id); ?>">

                  <select class="custom-select" name="editor_decisions" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                     <option label="Choose One" value="" selected="selected" >Choose One</option>
                                                    <option label="Accept " value="4" >Accept </option>
                                                 <option label="Reject " value="3">Reject </option>


                                                            </select>
                                                            <div class="input-group-append">
                                                              <button class="btn btn-outline-secondary" type="submit">Record Decision</button>
                                                            </div>
                                                            <?php echo $errors->first('editor_decisions', '<div class="col-12 alert alert-danger"><p>:message</p></div>'); ?>


                                                          </div>

                                            </form>
                                       
                                            </div>
                                        </div>
                                        <div class="w-100 row data-row">
                                            <!-- <div class="data-col col-6 col-md-4 col-lg-3">Decision</div> -->





                                        </div>

                                        <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Notify Author</div>
        <div class="data-col col-6 col-md-8 col-lg-9">

    <a  class="anchor-s tc-anch" href="<?php echo e(url('home/editor/Review/sendemail/toauther')); ?>/<?php echo e($id); ?>/<?php echo e(@$all[0][4][0]->get_user->id); ?>"><i class="fas fa-envelope"></i>


        </a> Editor/Author Email Record
 <a href="<?php echo e(url('home/editor/Review/editer_auther_comment/')); ?>/<?php echo e($id); ?>/<?php echo e(@$all[0][4][0]->get_user->id); ?>" target="a_blank"class="anchor-s tc-anch">

                                    <i class="fas fa-comment-alt"></i></a>

                                     No Comments</div>
                                        </div>

                             <!--            <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Review Version</div>
                                            <div class="data-col col-6 col-md-8 col-lg-9">
                                            <div class="custom-control custom-radio d-inline">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                              </div>121212</div>
                                        </div>
                                        <div class="w-100 row data-row">
                                            <div class="data-col col-6 col-md-4 col-lg-3">Author Version</div>
                                            <div class="data-col col-6 col-md-8 col-lg-9">2019-07-01</div>
                                        </div>
                                        <div class="w-100 row data-row">
                                                <div class="data-col col-6 col-md-4 col-lg-3">Editor Version</div>
                                                <div class="data-col col-6 col-md-8 col-lg-9">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Upload</button>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
 -->
                                    </div>
                                </form>


                            </div>
                            <?php if(session('success')): ?>
                                            <div class="col-12 alert alert-success">
                                                <center><?php echo e(session('success')); ?></center>
                                            </div>
                                            <?php endif; ?>  
                </div>

            </section>

        </div>

        <!-- Script -->
 <?php echo $__env->make('user.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
