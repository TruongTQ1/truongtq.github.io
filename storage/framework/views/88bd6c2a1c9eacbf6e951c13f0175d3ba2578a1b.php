<?php $__env->startSection('content1'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thông Tin Tài Khoản</h6>

			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Thông Tin Tài Khoản</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              
				   <div class="panel panel-default">
				  	
				  	<div class="panel-body">
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
				  	
				    	 <form action="<?php echo e(route('nguoidung')); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên user" value="<?php echo e($nguoidung->name); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập tên email" value="<?php echo e($nguoidung->email); ?>" readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <input type="Checkbox" id="doipassword" name="doipass"  >
                                <label>Đổi Mật khẩu</label>
                                    <input type="password" class="form-control password"  name="pass" placeholder="Nhập password" disabled=""/>
                                                                
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control password"  name="passagain" placeholder="Nhập lại password" disabled=""/>
                                
                                
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="diachi" placeholder="Nhập địa chỉ" value="<?php echo e($nguoidung->diachi); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Số Điện thoại</label>
                                <input type="number" class="form-control" name="sdt" placeholder="Nhập số điện thoại" value="<?php echo e($nguoidung->phone); ?>"/>
                            </div>
         

                            <button type="submit" class="btn btn-default">Cập nhật thông tin</button>
                         
                        </form>
				  	</div>
				  </div>
				
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>

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
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>