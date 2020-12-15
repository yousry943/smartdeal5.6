<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ierek Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php echo $__env->make('admin.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <style>
         .login-page{
             height: 100%;
             background-image:url(<?php echo e(url(asset('assets/login/admin.jpeg'))); ?>);
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
        }
        .back-ground{
            position: absolute;
            height: 100%;
            width: 100%;
            background-color:rgba(0,0,0,.3);
        }
         .login-box-body{
             background: rgba(255,255,255,.5);
             padding: 20px;
             border-top: 0;
             color: #000000;
             border-radius: 10px;
             box-shadow: -1px 8px 20px 0px;
         }
    </style>

</head>
<body class="hold-transition login-page">
<div class="back-ground">

<div class="login-box">
    <div class="login-logo">
        <a href="" style="color:#FFF"><b>Ierek</b>System</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
        <?php echo e(csrf_field()); ?>


            <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <?php if($errors->has('email')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
            </div>

            <div class="form-group has-feedback <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php if($errors->has('password')): ?>
            <span class="help-block">
            <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
            <?php endif; ?>
            </div>


            <div class="row">
            <div class="col-xs-8">
            <div class="checkbox icheck" style="margin-left: 20px;">
            <!--<label>-->
            <!--<input type="checkbox"> Remember Me-->
            <!--</label>-->
            </div>
                <a href="<?php echo e(url('admin/forget/password')); ?>">I forgot my password</a><br>

            </div>
            <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</div>

<?php echo $__env->make('admin.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
