
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url();?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Explore All Accomodations</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>explore</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
        <div class="row" >
			<?php
			//print_r($featured);
				//$tokens=array();
				foreach($featured as $listing ):
			//	$token = uniqidReal(8);
				
				//$tokens[] = $token;
				
			//echo $_SESSION['token_num'];
				?>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg"  data-setbg="<?= base_url();?>assets/img/feature/1.jpg">
							<div class="rent-notic">FOR RENT</div>
							<img src="" >
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5><?= $listing['accomodation_type_name'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?= $listing['address'];?></p>
							</div>
							<div class="room-info-warp">
							<?php
							$d = explode("~",$listing['details']);
							$s = implode(", ",$d);
							?>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i><?= $listing['dimension'];?></p>
										<p><i class="fa fa-list"></i><?= $s;?></p>
									</div>
									
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> <?= $listing['agents_name'];?></p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-phone"></i> <?= $listing['phone'];?></p>
									</div>	
								</div>
							</div>
							<?php
							//$param = $listing['id']."_".$_SESSION['token_num'];
							//$param = $listing['id']."_".$token;
							$param = $listing['id'];
							?>
								<form method="post" action="<?= base_url('accomodation/single_listing'); ?>">
									<button class="room-price" type="submit" id="amt-btn"  class="price-btn">NGN <?= $listing['amount'];?>.00</button>
									<input type="hidden" name="item_id" id="item_id" value="<?= $listing['id']?>" />
								</form>

							<!--<a href=" // site_url('accomodation/single_listing/'.$param);?>" id="list-amt" class="room-price">NGN  //$listing['amount'];?>.00</a>-->
						</div>
					</div>
				</div>
				<?php
				endforeach;
				//$_SESSION['token_num'] = $tokens;
				?>
			
			</div>
		</div>
</section>