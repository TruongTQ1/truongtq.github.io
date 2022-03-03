<?php $__env->startSection('content1'); ?>
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									<?php $__currentLoopData = $slideqc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/<?php echo e($sl->image); ?>" data-src="source/image/slide/<?php echo e($sl->image); ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/<?php echo e($sl->image); ?>'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						       		
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sách Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy <?php echo e(count($new_book)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $new_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3">
									<div class="single-item">
										<?php if($new->price_ud!=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale"> Sale</div></div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chitietsach',$new->id)); ?>"><img src="source/image/product/<?php echo e($new->image); ?>" alt="" height="350px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title" ><?php echo e($new->tensach); ?></p>
											<p class="single-item-price"  >
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
											<div class="clearfix"></div>
										</div>
										<p></p>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<div class="row"><?php echo e($new_book->links()); ?></div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sách Khuyến Mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy <?php echo e(count($sachkm)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php $__currentLoopData = $sachkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3">
									<div class="single-item">
										<?php if($skm->price_ud!=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale"> Sale</div></div>
											<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chitietsach',$skm->id)); ?>"><img src="source/image/product/<?php echo e($skm->image); ?>" alt="" height="350px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($skm->tensach); ?></p>
											<p class="single-item-price">
												<span class="flash-del"><?php echo e(number_format($skm->price)); ?> VNĐ</span>
												<span class="flash-sale"><?php echo e(number_format($skm->price_ud)); ?> VNĐ</span>
											</p>
										</div>
										<div class="single-item-caption" style="margin: 10px 15px 30px 15px">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chitietsach',$skm->id)); ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</div>
							<div class="row"><?php echo e($sachkm->links()); ?></div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>