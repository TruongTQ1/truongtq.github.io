<?php $__env->startSection('content1'); ?>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sách Tìm kiếm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy <?php echo e(count($book)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3" style="margin-bottom: 60px;">
									<div class="single-item" >
										<?php if($new->price_ud!=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale"> Sale</div></div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chitietsach',$new->id)); ?>"><img src="source/image/product/<?php echo e($new->image); ?>" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title" ><?php echo e($new->tensach); ?></p>
											<p class="single-item-price" >
												<?php if($new->price_ud==0): ?>
												
												<span class="flash-sale"><?php echo e(number_format($new->price)); ?> VNĐ</span>
												<?php else: ?>
												<span class="flash-del"><?php echo e(number_format($new->price)); ?> VNĐ</span>
												<span class="flash-sale"><?php echo e(number_format($new->price_ud)); ?> VNĐ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption" >
											<a class="add-to-cart pull-left" href="<?php echo e(route('themgiohang',$new->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chitietsach',$new->id)); ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix">
												
											</div>
										</div>
										<p></p>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>