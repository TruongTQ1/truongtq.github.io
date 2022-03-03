  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách Hàng
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

                    <table class="table table-striped table-bordered table-hover" id=""> <!--dataTables-example-->
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Ghi chú Đặt Hàng</th>
                                <th>Xóa</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $khachhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                    <td><?php echo e($kh->id); ?></td>
                                    <td><?php echo e($kh->full_name); ?></td>
                                    <td><?php echo e($kh->email); ?></td>
                                    <td><?php echo e($kh->gioitinh); ?></td>
                                    <td><?php echo e($kh->diachi); ?></td>
                                    <td><?php echo e($kh->phone); ?></td>
                                    <td><?php echo e($kh->ghichu); ?></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/<?php echo e($kh->id); ?>"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachhang/sua/<?php echo e($kh->id); ?>">Chi Tiết</a></td>
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