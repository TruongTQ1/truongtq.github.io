<?php $__env->startSection('content1'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="<?php echo e(route('dathang')); ?>" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
				<div class="row">
					<div class="col-sm-6">
						<h4>Thông tin khách hàng</h4>
						<div class="space20">&nbsp;</div>
						 <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                    	<?php endif; ?>

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text"  name="Ten" placeholder="Họ tên" required>
						</div>
						<div class="form-block">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="Nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="Nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" required placeholder="expample@gmail.com" name="email">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" placeholder="Street Address" required name="diachi">
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="number" id="phone" required name="sdt">
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" name="ghichu"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">

									<div>
										<?php if(Session::has('cart')): ?>
									<?php $__currentLoopData = $sp_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<!--  one item	 -->
									
										<div class="media">
											<img width="25%" src="source/image/product/<?php echo e($spp['item']['image']); ?>" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large" style="font-size: 20px"> <?php echo e($spp['item']['tensach']); ?> </p> <br/>
												

												<?php if($spp['item']['price_ud']!=0): ?>
												<span class="color-gray your-order-info" style="font-size: 15px"> Đơn Giá : <?php echo e(number_format($spp['item']['price_ud'])); ?> VNĐ</span>
												<?php else: ?>
												<span class="color-gray your-order-info" style="font-size: 15px"> Đơn Giá :
												<?php echo e(number_format($spp['item']['price'])); ?> VNĐ </span>
												<?php endif; ?>
												<span class="color-gray your-order-info" style="font-size: 15px"> Số lượng : <?php echo e($spp['qty']); ?></span>
											</div>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<p class="font-large" style="font-size: 20px"> Không có đơn hàng nào </p> <br/>
												
									<?php endif; ?>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền: </p></div>
									<div class="pull-right"><h5 class="color-black"><?php if(Session::has('cart')): ?>
										<?php echo e(number_format(Session('cart')->totalPrice)); ?>

										<?php else: ?>
										0
										<?php endif; ?>
										VNĐ</h5></div>
									<div class="clearfix"></div>
								</div>
							
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="" >
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="VISA" data-order_button_text="" s>
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>