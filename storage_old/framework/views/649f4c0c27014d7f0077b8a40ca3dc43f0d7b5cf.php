<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site <?php echo e($add_user['name']); ?></h2>
<br/>
Your registered email-id is <?php echo e($add_user['email']); ?> , Please click on the below link to verify your email account
<br/>
<a href="<?php echo e(url('user/verify', $add_user->verifyUser->token)); ?>">Verify Email</a>
</body>

</html>
