   
   <?php $__env->startSection('content'); ?>
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small><?php echo e($user->name); ?></small>
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
                        <form action="admin/user/sua/<?php echo e($user->id); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên user" value="<?php echo e($user->name); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập tên email" value="<?php echo e($user->email); ?>" readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="doipassword" name="doipass">
                                <label>Đổi Mật khẩu</label>
                                    <input type="password" class="form-control password"  name="pass" placeholder="Nhập password" disabled=""/>
                                                                
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control password"  name="passagain" placeholder="Nhập lại password" disabled=""/>
                                
                                
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="diachi" placeholder="Nhập địa chỉ" value="<?php echo e($user->diachi); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Số Điện thoại</label>
                                <input type="number" class="form-control" name="sdt" placeholder="Nhập số điện thoại" value="<?php echo e($user->phone); ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Đặc quyền :</label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="0" <?php if($user->quyen==0): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?> > User
                                    
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="1" 
                                    <?php if($user->quyen==1): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?> > Admin
                                </label>
                            </div>

                            <button type="submit" class="btn btn-default">Cập Nhật Thông Tin</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
    <script >
        $(document).ready(function(){

            $("#doipassword").change(function(){
                if ($(this).is(":checked")) 
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }

            });
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.giaodienlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>