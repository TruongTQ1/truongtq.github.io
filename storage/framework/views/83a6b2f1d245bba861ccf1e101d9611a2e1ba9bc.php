  <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin <?php if(Auth::check()): ?>
                 <?php echo e(Auth::user()->name); ?>

                  <?php endif; ?>
             </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="index"><i class="fa fa"></i>Trang Chủ</a></li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <?php if(Auth::check()): ?>
                        <li>  <i class="fa fa-user fa-fw" style="margin-left: 17px"></i><?php echo e(Auth::user()->name); ?></a>
                        </li>
                        <li><a href="admin/user/sua/<?php echo e(Auth::user()->id); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/dangxuat"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                        </li>
                        <?php endif; ?>
                       
                         
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <?php echo $__env->make('admin.giaodienlayout.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.navbar-static-side -->
        </nav>