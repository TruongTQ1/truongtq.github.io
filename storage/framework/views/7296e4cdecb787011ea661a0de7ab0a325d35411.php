   
   <?php $__env->startSection('content'); ?>
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sách
                            <small><?php echo e($book->tensach); ?></small>
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
                        <form action="admin/book/sua/<?php echo e($book->id); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                            <div class="form-group">
                                <label>Danh Mục</label>
                                <select class="form-control" name="danhmuc">
                                    <?php $__currentLoopData = $danhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dm->id); ?>"><?php echo e($dm->tendm); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sách</label>
                                <input class="form-control" name="Tensach" placeholder="Nhập tên sách" value="<?php echo e($book->tensach); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Tác Gỉa</label>
                                <input class="form-control" name="Tacgia" placeholder="Nhập tên tác giả" value="<?php echo e($book->tacgia); ?>"  />
                            </div>
                            <div class="form-group">
                                <label>Nhà sản xuất</label>
                                <input class="form-control" name="nsx" placeholder="Nhập nhà sản xuất" value="<?php echo e($book->nxb); ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Năm xuất bản</label>
                                <input  class="form-control" name="nsb" placeholder="Nhập năm xuất bản" value="<?php echo e($book->namxb); ?>"/ >
                            </div>
                            <div class="form-group">
                                <label>ĐƠN GIÁ</label>
                                <input  class="form-control" name="dongia" placeholder="Nhập đơn giá" value="<?php echo e($book->price); ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Đơn giá khuyến mãi</label>
                                <input  class="form-control" name="dongiakm" placeholder="Nhập don gia khuyến mãi" value="<?php echo e($book->price_ud); ?> "/>
                            </div>
                            
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="noidung" class="form-control" rows="3"><?php echo e($book->noidung); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <p>
                                <img width="250px" height="300px" src="source/image/product/<?php echo e($book->image); ?>"/>
                                </p>
                                <input type="file" name="Hinh" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Sản Phẩm</label>
                                <label class="radio-inline">
                                    <input type="radio" name="cu" value="0" 
                                    <?php if($book->new==0): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> 
                                     >Cũ
                                </label>
                                <label  class="radio-inline">
                                    <input  type="radio" name="cu" value="1"
                                     <?php if($book->new==1): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?> >Mới
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
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