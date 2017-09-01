<nav class="navbar navbar-default " style="opacity:0.9;">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Farmer's Paradise</a>
        </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav navbar-right">




          <li><a href="welcome/buyers"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buyers </a></li>
            <li><a href="welcome/seller"><i class="fa fa-money" aria-hidden="true"></i> Sellers </a></li>


              <?php if(Auth::check()): ?>
              <li class="dropdown" id="markasread" onclick="markNotificationAsRead('<?php echo e(count(auth()->user()->unreadNotifications)); ?>')">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-globe"></span><span class="badge"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                          <?php $__empty_1 = true; $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <?php echo $__env->make('templates.notifications.'.snake_case(class_basename($notification->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                          <a href="#">No unread Notifications</a>
                          <?php endif; ?>
                        </li>
                    </ul>
              </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"> </i> Welcome <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="#"></a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="/logout">Logout</a></li>
                      </ul>
                </li>
              <?php endif; ?>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" style="width:700px; align:center;">
            </div>
        <!--<button type="submit" class="btn btn-default"> <button>-->

        <a class="btn btn-default" href="#">
            <i class="fa fa-search"></i> </a>
        </form>
          <ul class="nav navbar-nav navbar-right">
          <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>

        </ul>
        </div>
    </div>
</nav>
