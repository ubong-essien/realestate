<?php error_reporting(0);?>
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url()?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>SINGLE LISTING</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Single Listing</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 single-list-page">
				<?php
					if(!empty($accoms[0]['accomodation_images'])):
					$img = explode("~",$accoms[0]['accomodation_images']);
					//foreach($img as $imgs):
					?>
					<div class="single-list-slider owl-carousel" id="sl-slider">
						<?php
						foreach($img as $imgs):
						?>
						<div class="sl-item set-bg" data-setbg="<?= base_url()?>assets/img/properties/<?= $imgs;?>">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<?php
						endforeach;
						?>
						<!--<div class="sl-item set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/2.jpg">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<div class="sl-item set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/3.jpg">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<div class="sl-item set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/4.jpg">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<div class="sl-item set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/5.jpg">
							<div class="rent-notic">FOR RENT</div>
						</div>-->
					</div>
					<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
									<?php
								
									foreach($img as $imgs):
									?>
									<div class="sl-thumb set-bg" data-setbg="<?= base_url()?>assets/img/properties/<?= $imgs;?>"></div>
								<!--	<div class="sl-thumb set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/2.jpg"></div>
									<div class="sl-thumb set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/3.jpg"></div>
									<div class="sl-thumb set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/4.jpg"></div>
									<div class="sl-thumb set-bg" data-setbg="<?// base_url()?>assets/img/single-list-slider/5.jpg"></div>-->
									<?php
									endforeach;
									?>
					</div>
					<?php
									
							else:

							endif;
					?>
					<div class="single-list-content">
						<div class="row">
						<?php //print_r($accoms[0]);?>
							<div class="col-xl-8 sl-title">
								<h2><?= $accoms[0]['accomodation_type_name']?> - NGN<?= $accoms[0]['amount']?>.00/yr</h2>
								<p><i class="fa fa-map-marker"></i><?= $accoms[0]['address']?></p>
							</div>
							<div class="col-xl-4">
								<form id="to_checkout" >
									<button  type="submit" id="amt-btn"  class="price-btn">Book</button>
									<input type="hidden" name="single_item_id" id="single_item_id" value="<?= $accoms[0]['id']?>" />
								</form>
								
									<!--<button value="" onclick="add_to_cart();" id="item_book_btn"  class="price-btn">Book</button>-->
								
							</div>
						</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<?php
									$d = explode("~",$accoms[0]['details']);
									$s = implode(", ",$d);
								?>
								<p><i class="fa fa-th-large"></i><?= $accoms[0]['dimension'];?></p>
								
								
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-user"></i><?= $accoms[0]['agents_name'];?></p>
								
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-phone"></i><?= $accoms[0]['phone'];?></p>
								
							</div>
						</div>
							<div class="row property-details-list">
							<div class="col-md-6">
								<p><i class="fa fa-list"></i><?= $s;?></p>
								
							</div>
							</div>
						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p>The Average transportation fare to the school is about NGN <?= $accoms[0]['average_transportation']?> and the house is about <?= $accoms[0]['distance_from_school'];?> KM form the school.</p>
							</div>
						
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg" data-setbg="<?= base_url()?>assets/img/team/<?= $accoms[0]['passport']?>"></div>
						<div class="author-info">
							<h5><?= $accoms[0]['agents_name']?></h5>
							<p>Real Estate Agent</p>
						</div>
						<div class="author-contact">
							<p><i class="fa fa-phone"></i><?= $accoms[0]['phone']?></p>
							<p><i class="fa fa-envelope"></i><?= $accoms[0]['email']?></p>
						</div>
					</div>
					<div class="contact-form-card">
						<h5>Do you have any question?</h5>
						<form>
							<input type="text" placeholder="Your name">
							<input type="text" placeholder="Your email">
							<textarea placeholder="Your question"></textarea>
							<button>SEND</button>
						</form>
					</div>
					<div class="contact-form-card">
						<div>
						
							<h5><li class="fa fa-shopping-cart"></li> Your Cart</h5>
							<p>Number of Items : <span id="item_in_cart">
							<?php $c = count($_SESSION['items']);
								
									echo $c;
								
							?>
						
							</span></p>	
							<?php
							$items_string = implode("~", $_SESSION['items']);
							//echo $items_string;
							?>
							<a href="<?= base_url('cart/checkout/').$items_string;?>" class=" price-btn btn btn-primary " >Checkout</a>
							<!-- <form action="<?php // base_url('cart/checkout/').$_SESSION['items']?>" method="POST">
							<!--<input type="hidden" name="selected_items" value="<?php //$items_string; ?>" />88
							<button  id="checkout-btn" name="checkout" value="to_checkout"  type="submit" class="price-btn">Checkout</button>
							</form> -->
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->

