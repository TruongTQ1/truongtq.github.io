  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sách
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:30px">
                    <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                    <?php endif; ?>
                    </div>
                    <table  class="table table-striped table-bordered table-hover ">
                        <thead >
                            <tr align="center" >
                                <th >ID Sách</th>
                                <!-- <th>Mã Danh Mục</th> -->
                                <th>Tên Danh Mục</th>
                                <th>ảnh</th>
                                <th>Tên Sách</th>
                                <th>Tác Giả</th>
                                <!-- <th>Nội Dung</th> -->
                                <!-- <th>Nhà Xuất Bản</th> -->
                                <!-- <th>Năm Xuất Bản</th> -->
                                <th>Đơn giá</th>
                                <th>Khuyến Mãi</th>
                                <th>Sản phẩm</th>
                                <th>Xóa</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center" >
                                    <td><?php echo e($b->id); ?></td>
                                    <!-- <td><?php echo e($b->id_madm); ?></td> -->
                                    <td><?php echo e($b->danhmuc->tendm); ?></td>
                                    <td><img src="source/image/product/<?php echo e($b->image); ?>"  height="100px"></td>
                                    <td ><?php echo e($b->tensach); ?></td>
                                    <td><?php echo e($b->tacgia); ?></td>
                                    <!-- <td><?php echo e($b->noidung); ?></td> -->
                                    <!-- <td><?php echo e($b->nxb); ?></td> -->
                                    <!-- <td><?php echo e($b->namxb); ?></td> -->
                                    <td><?php echo e($b->price); ?></td>
                                    <td><?php echo e($b->price_ud); ?></td>
                                    <td>
                                        <?php if($b->new==0): ?>
                                            <?php echo e('Cũ'); ?>

                                        <?php else: ?>
                                            <?php echo e('Mới'); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/book/xoa/<?php echo e($b->id); ?>"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/book/sua/<?php echo e($b->id); ?>">Chi Tiết</a></td>
                                </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                    <div class="row" style="margin-left: 400px"><?php echo e($book->links()); ?></div>
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.giaodienlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>