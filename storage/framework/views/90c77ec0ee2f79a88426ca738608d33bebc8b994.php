<?php $__env->startSection('content1'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Danh mục </h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('trang-chu')); ?>">Home</a> / <span>Danh mục</span> / <span><?php echo e($loai_danhmuc->tendm); ?></span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<?php $__currentLoopData = $loaidanhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('danhmucsach', $ldm->id)); ?>" style="font-size: 20px"><?php echo e($ldm->tendm); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4> <?php echo e($loai_danhmuc->tendm); ?> </h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy <?php echo e(count($sp_dm)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $sp_dm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-4" style="margin-bottom: 70px">
									<div class="single-item">
										<?php if($sd->price_ud!=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale"> Sale</div></div>
										<?php endif; ?>
										<div class="single-item-eader" >
											<a href="<?php echo e(route('chitietsach',$sd->id)); ?>"><img height="250px" src="<?php echo e(asset('source/image/product/'.$sd->image)); ?>"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($sd->tensach); ?></p>
											<p class="single-item-price" style="font-size: 18px">
												<?php if($sd->price_ud==0): ?>
												
												<span class="flash-sale" style="margin-left: 20px"><?php echo e(number_format($sd->price)); ?> VNĐ</span>
												<?php else: ?>
												<span class="flash-del"><?php echo e(number_format($sd->price)); ?> VNĐ</span>
												<span class="flash-sale"><?php echo e(number_format($sd->price_ud)); ?> VNĐ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption" style="margin: 5px 0px 0px 15px">
											<a class="add-to-cart pull-left" href="<?php echo e(route('themgiohang',$sd->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chitietsach',$sd->id)); ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
											
										</div>
									</div>
								</div>	
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>							
							</div>
						</div> <!-- .beta-products-list -->
						<div class="row" align="center"><?php echo e($sp_dm->links()); ?></div>
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sách Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy <?php echo e(count($dm_khac)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							
							<div class="row">
								<?php $__currentLoopData = $dm_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-4">
									<div class="single-item">
										<?php if($dk->price_ud!=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale"> Sale</div></div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chitietsach',$dk->id)); ?>"><img src="<?php echo e(asset('source/image/product/'.$dk->image)); ?>" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($dk->tensach); ?></p>
											<p class="single-item-price">
												<?php if($dk->price_ud==0): ?>
												
												<span class="flash-sale" style="margin-left: 20px"><?php echo e(number_format($dk->price)); ?> VNĐ</span>
												<?php else: ?>
												<span class="flash-del"><?php echo e(number_format($dk->price)); ?> VNĐ</span>
												<span class="flash-sale"><?php echo e(number_format($dk->price_ud)); ?> VNĐ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="<?php echo e(route('themgiohang',$dk->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chitietsach',$dk->id)); ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>

								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>

							<div class="row" align="center"><?php echo e($dm_khac->links()); ?></div>
						<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>