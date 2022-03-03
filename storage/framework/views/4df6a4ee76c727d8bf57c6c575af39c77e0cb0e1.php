  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CHI TIẾT HÓA ĐƠN
                            <small>DANH SÁCH</small>
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
                    <table class="table table-striped table-bordered table-hover" >
                       <!-- id="dataTables-example"-->
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>MÃ HÓA ĐƠN</th>
                                <th>Tên Sách</th>
                                <th>SỐ LƯỢNG</th>
                                <th>ĐƠN GIÁ</th>
                                <th>Xóa</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $chitiethd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cthd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($cthd->id); ?></td>
                                <td><?php echo e($cthd->id_hd); ?></td>
                                <td><?php echo e($cthd->book->tensach); ?></td>
                                <td><?php echo e($cthd->soluong); ?></td>
                                <td><?php echo e($cthd->dongia); ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitiethd/xoa/<?php echo e($cthd->id); ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitiethd/sua/<?php echo e($cthd->id); ?>">Chi Tiết</a></td>
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