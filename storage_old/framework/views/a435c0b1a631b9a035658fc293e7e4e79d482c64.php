<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php echo $__env->make('admin.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php echo $__env->make('admin.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
<?php echo $__env->make('admin.includes.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <?php echo $__env->yieldContent('page-header'); ?>

        <!-- Main content -->
        <?php echo $__env->yieldContent('content'); ?>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php echo $__env->make('admin.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<?php echo $__env->make('admin.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.includes.flash_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
