 
  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
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
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Khách Hàng</th>
                                <th>Ngày Đặt</th>
                                <th>Tổng Tiền</th>
                                <th>Payment</th>
                                <th>Xóa</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php $__currentLoopData = $hoadon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($hd->id); ?></td>
                                <td><?php echo e($hd->khachhang->full_name); ?></td>
                                <td><?php echo e($hd->ngaydat); ?></td>
                                <td><?php echo e($hd->tongtien); ?></td>
                                <td><?php echo e($hd->payment); ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/xoa/<?php echo e($hd->id); ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hoadon/sua/<?php echo e($hd->id); ?>"> Chi Tiết</a></td>
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