<?php if(Session::has('flash_message')): ?>
    <script>
        swal("Great Job","<?php echo e(Session::get('flash_message')); ?>", "success");
    </script>
<?php endif; ?>

<?php if(Session::has('failed_message')): ?>
    <script>
        
        
        swal("Sorry !!", "<?php echo e(Session::get('failed_message')); ?>", "error");
    </script>
<?php endif; ?>