  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn Hàng
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
                               <th>id Hóa đơn</th>
                                <th>ID Khách Hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                 <th>Tên Sách</th>
                                <th>Số Lượng</th>
                                <th>Đơn giá</th>
                                <th>Hình Thức Thanh Toán</th>
                                <th>Ngày Đặt Hàng</th>
                               
                                <th>Xóa</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $chitiethd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center" >
                                   <tbody><tr><td><?php echo e($hd->id_hd); ?></td></tr></tbody> 
                                   <td></td>    
                                    
                                    <td><?php echo e($hd->hoadon->khachhang->full_name); ?></td>
                                    <td><?php echo e($hd->hoadon->khachhang->diachi); ?></td>
                                    <td><?php echo e($hd->hoadon->khachhang->phone); ?></td>
                                    <td><?php echo e($hd->book->tensach); ?></td>

                                    <td><?php echo e($hd->soluong); ?></td>
                                    <td><?php echo e($hd->dongia); ?></td>
                                    <td><?php echo e($hd->hoadon->payment); ?></td>
                                    <td><?php echo e($hd->hoadon->ngaydat); ?></td>
                                    
                                   
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/donhang/xoa/<?php echo e($hd->id); ?>"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/donhang/sua/<?php echo e($hd->id); ?>">Chi Tiết</a></td> <!--  -->
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