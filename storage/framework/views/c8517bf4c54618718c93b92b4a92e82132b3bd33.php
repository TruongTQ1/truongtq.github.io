   
   <?php $__env->startSection('content'); ?>
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn hàng
                            <small><?php echo e($chitiethd->hoadon->khachhang->full_name); ?></small>
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
                         <form action="admin/donhang/sua/<?php echo e($chitiethd->hoadon->id); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                              <div class="form-group">
                                <label>ID Khách Hàng</label>
                                <input class="form-control" name="idkh" placeholder="Nhập tên khách hàng" value="<?php echo e($chitiethd->hoadon->id_kh); ?> " readonly="readonly" />
                            </div>
                                <div class="form-group">
                                <label>Tên Khách Hàng</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên khách hàng" value="<?php echo e($chitiethd->hoadon->khachhang->full_name); ?> " readonly="readonly" />
                            </div>
                                <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="Email" name="email" placeholder="Nhập tên khách hàng" value="<?php echo e($chitiethd->hoadon->khachhang->email); ?> " readonly="readonly" />
                            </div>
                                <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên khách hàng" value="<?php echo e($chitiethd->hoadon->khachhang->diachi); ?> " disabled="" />
                            </div>
                            
                                <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="sdt" placeholder="Nhập tên khách hàng" value="<?php echo e($chitiethd->hoadon->khachhang->phone); ?> " disabled="" />
                            </div>
                            
                              <div class="form-group">
                                <label>Giới Tính</label>
                                <label class="radio-inline">
                                    <input type="radio" name="gioitinh" disabled="" value="Nữ"  <?php if($chitiethd->hoadon->khachhang->gioitinh=='Nữ'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />Nữ
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gioitinh" disabled="" value="Nam" <?php if($chitiethd->hoadon->khachhang->gioitinh=='Nam'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />Nam
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label>Ngày Đặt</label>
                                <input type="date" class="form-control" disabled="" name="ngaydat" value="<?php echo e($chitiethd->hoadon->ngaydat); ?>" />
                            </div>
                             <div class="form-group">
                                <label>Tổng Tiền Thanh Toán</label>
                                <input type="number" class="form-control" disabled=""  name="tongtien" value="<?php echo e($chitiethd->hoadon->tongtien); ?>"/>
                            </div>
                             <!--<div class="form-group">
                                <label>Payment</label>
                                <input class="form-control" name="pay" value="<?php echo e($chitiethd->hoadon->payment); ?>"/>
                            </div>-->
                           <div class="form-group">
                                <label>Payment</label>
                                <label class="radio-inline">
                                    <input type="radio" name="pay" disabled="" value="COD"  <?php if($chitiethd->hoadon->payment=='COD'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />COD
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="pay" disabled="" value="Visa" <?php if($chitiethd->hoadon->payment=='VISA'): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> />VISA
                                </label>
                            </div>
                             <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea name="noidung" disabled="" class="form-control" rows="3"><?php echo e($chitiethd->hoadon->khachhang->ghichu); ?></textarea>
                            </div>
                          <!-- 
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button> -->
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