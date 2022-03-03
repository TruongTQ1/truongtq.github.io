<?php $__env->startSection('content1'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="<?php echo e(route('trang-chu')); ?>">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			 
			<form action="<?php echo e(route('dangnhap')); ?>" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
				<div class="row">
					<?php if(count($errors)>0): ?>
                                <div class="alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(session('thongbao')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(session('thongbao')); ?>

                                </div>
                            <?php endif; ?>
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email"  >Email *</label>
							<input type="email" class="form-control "  name="email" required>
						</div>
						<div class="form-block">
							<label for="phone"  >Mật Khẩu*</label>
							<input type="password" class="form-control "   id="phone" name="pass" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary" style="margin-left: 200px">Đăng Nhập</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>