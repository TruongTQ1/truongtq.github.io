  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:20px">
                    <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                    <?php endif; ?>
                    <?php if(session('thongbo')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('thongbo')); ?>

                            </div>
                    <?php endif; ?>

                    </div>
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ và Tên</th>
                                <th>Email</th>
                                <!--<th>Password</th>-->
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Quyền</th>
                                <th>Xóa</th>
                                <th>Thông Tin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($u->id); ?></td>
                                <td><?php echo e($u->name); ?></td>
                                <td><?php echo e($u->email); ?></td>
                                <!--<td><?php echo e($u->password); ?></td>-->
                                <td><?php echo e($u->phone); ?></td>
                                <td><?php echo e($u->diachi); ?></td>
                                <td> 
                                        <?php if($u->quyen==0): ?>
                                            <?php echo e('user'); ?>

                                        <?php else: ?>
                                            <?php echo e('admin'); ?>

                                        <?php endif; ?>
                                    </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/<?php echo e($u->id); ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/<?php echo e($u->id); ?>">Thông Tin</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.giaodienlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>