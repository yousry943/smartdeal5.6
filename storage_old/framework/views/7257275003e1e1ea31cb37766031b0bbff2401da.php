       <header class="sm-header" sm-header="header">

            <div class="d-flex justify-content-lg-between justify-content-center align-items-center flex-wrap col-12 align-content-center" sm-brand="brand">

                

                <a class="sb-inline" href="<?php echo e(url('/home')); ?>"><img src="<?php echo e(asset('assets/website/img/logo.event.png')); ?>" class="img-fluid" /></a>
                <a href="<?php echo e(url('home/reviews')); ?>" class="rev-header btn btn-secondary" a-link="reviewer"> <i class="fas fa-pen-square"></i> Reviewer area</a>
            </div>
            <nav class="navbar navbar-expand-lg justify-content-end navbar-light bg-light" a-link="nav">
                <button class="navbar-toggler menu-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="menu-btn__icon" >
                        <span class="icon icon--menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="icon icon--close">
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('home/')); ?>"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('home/auther_paper')); ?>"> <i class="fas fa-scroll"></i> My papers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-globe-europe"></i> Conference website</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-tie"></i>   <?php echo e(\Illuminate\Support\Facades\Auth::guard('web')->user()->name); ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo e(url('home/Profile')); ?>"> <i class="fas fa-id-card"></i> My Profile</a>
                                <a class="dropdown-item" href="<?php echo e(url('home/user/logout')); ?>"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>