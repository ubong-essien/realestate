<?php error_reporting(0);?>
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url()?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>CHECKOUT</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="<?= site_url();?>"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Checkout</span>
		</div>
	</div>
    <!-- page -->
	<section class="page-section" style="background:">
		<div class="container">
			
			<div class="row about-text">
				<div id="delstg" class="col-md-12">
				
				</div>
				<div class="col-xl-8 ">
					<h5>CHECKOUT </h5>
					
                    <div class="contact-form-card" id="chk">
                        <table class="table  table-hovered" style="font-family:arial narrow">
							<?php
						//	print_r($selected);
							foreach($selected as $key => $item):
							?>
                            <tr id="row<?= $key; ?>"><td><?= $item['accomodation_type_name'];?></td><td><?= $item['address'];?></td><td>NGN<?= $item[0]['amount'];?>.00</td><td><?= $item['booking_fee'];?></td><td><button   onclick="del_item('<?= $item['id']; ?>')" type="button" class="close" aria-label="close"><span aria-hidden="true">&times;</span></button></td></tr>
                            
							<?php
								$total[] = (int)$item['booking_fee'];
							endforeach;
							$tot_booking = array_sum($total);
						 	?>
							 <tr><td colspan="4" style="text-align:center;font-weight:bolder">Total Booking Fee</td><td><b>NGN <?= $tot_booking; ?>.00</b></td></tr>
							
						</table> 
						<div class="row">
							<div class="col-md-2">
							<?php
							
							?>
							<form method='POST' id='payform' action='//voguepay.com/pay/' onsubmit='return false;'>
								<input type='hidden' name='v_merchant_id' value='DEMO' />
								<input type='hidden' name='merchant_ref' value='234-567-890' />
								<input type='hidden' name='memo' value='Bookings from Campus Homes' />
								<input type='hidden' name='cur' value='NGN' />

								<input type='hidden' name='developer_code' value='pq7778ehh9YbZ' />
								<input type='hidden' name='store_id' value='25' />

								<!--Use notify url if you want a transaction response to be sent to the notify-->
								<input type='hidden' name='notify_url' value='//www.mydomain.com/notification.php' />

								<!--Success and fail URL are not required if integration method is inline.-->
								<!--These are to be uses if you are using the form redirect method.-->
								<input type='hidden' name='success_url' value='//www.mydomain.com/thank_you.html' />
								<input type='hidden' name='fail_url' value='//www.mydomain.com/failed.html' />

								<input type='hidden' name='total' value='13000' />


								<input type='hidden' name='name' value='Customer name'/>
								<input type='hidden' name='address' value='Customer Address'/>
								<input type='hidden' name='city' value='Customer City'/>
								<input type='hidden' name='state' value='Customer State'/>
								<input type='hidden' name='zipcode' value='Customer Zip/Post Code'/>
								<input type='hidden' name='email' value='Customer email'/>
								<input type='hidden' name='phone' value= 'Customer phone '/>

								<!--notification triggers for inline payments only-->
								

								<button class="btn btn-primary" type='submit' style="width:50px;height:50px;">Pay Now</button>
							</form>
							
							</div>
						</div>
                    </div>
				</div>
				<div class="col-md-4">
				
				</div>
			</div>
		</div>
    </section>