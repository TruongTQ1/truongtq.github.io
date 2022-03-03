  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>danh sáh</small>
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
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                 <th>Link</th>
                                <th>Image Slide</th>

                                <th>Xóa</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $slideqc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($sl->id); ?></td>
                                <td><?php echo e($sl->link); ?></td>
                                <td><img src="source/image/slide/<?php echo e($sl->image); ?>" height="100px"></td>


                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slideqc/xoa/<?php echo e($sl->id); ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slideqc/sua/<?php echo e($sl->id); ?>">Chi Tiết</a></td>
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