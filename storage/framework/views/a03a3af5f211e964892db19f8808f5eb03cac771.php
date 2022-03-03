  
   <?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small><?php echo e($hoadon->id); ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         <?php if(count($errors)>0): ?>
                            <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                        <?php endif; ?>
                        <form action="admin/hoadon/sua/<?php echo e($hoadon->id); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                              <div class="form-group">
                                <label>Tên Khách Hàng</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên khách hàng" value="<?php echo e($hoadon->khachhang->full_name); ?> " readonly="readonly" />
                            </div>
                            
                            <div class="form-group">
                                <label>Ngày Đặt</label>
                                <input type="date" class="form-control" name="ngaydat" value="<?php echo e($hoadon->ngaydat); ?>" />
                            </div>
                             <div class="form-group">
                                <label>Tổng Tiền Thanh Toán</label>
                                <input type="number" class="form-control" name="tongtien" value="<?php echo e($hoadon->tongtien); ?>"/>
                            </div>
                             <!--<div class="form-group">
                                <label>Payment</label>
                                <input class="form-control" name="pay" value="<?php echo e($hoadon->payment); ?>"/>
                            </div>-->
                           <div class="form-group">
                                <label>Payment</label>
                                <label class="radio-inline">
                                    <input type="radio" name="pay" value="COD"  <?php if($hoadon->payment=='COD'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />COD
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="pay" value="Visa" <?php if($hoadon->payment=='VISA'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />VISA
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Cập Nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
         <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.giaodienlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>