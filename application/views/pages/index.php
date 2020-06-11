
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?= base_url();?>assets/img/bg.jpg">
		<div class="container hero-text text-white">
			<h2>find a comfortable accomodation that suits your budget</h2>
			<p>Let's help you find that house that suits your budget and still gives you great comfort.</p>
			<a href="#" class="site-btn">LEARN MORE</a>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Filter form section -->
	<div class="filter-search">
		<div class="" style="margin-left:5%;margin-right:5%">
		
			<form method="post" id="search" class="filter-form">
				<h5>Select to find that perfect accomodation</h5>
				<select id ="sch_type" name="sch_type"  placeholder="Select a school Type e.g University,polytechnic,college of education" required>
					<option value="">Select a school Type</option>
							<?php foreach($school_type as $sch):?>
							<option value="<?= $sch['school_type_id']?>"><?= $sch['school_type']?></option>
							<?php endforeach;?>
				</select>
				<select id="sch" name="sch" placeholder="Select a University/Poly/College of Education" required>
					<option value="">Select a University/Poly/College</option>
							
				</select>
				<select id="locate" name="locate" placeholder="Select a location">
					<option value="">Select a location</option>
					
				</select>
				<select id="acc_type" name="acc_type" placeholder="Select type">
					<option value="">Select type</option>
					<option value="1">Single room</option>
					<option value="2">Self Con</option>
					<option value="3">One Bedroom</option>
					<option value="4">Two Bedroom</option>
					<option value="5">Three Bedroom</option>
				</select>
				<!--<input name="min" type="number" id="bud_min" placeholder="Min Budget(NGN)" />-->
				<input name="max" type="number" id="bud_max" placeholder="Max Budget (NGN)"/>
				
				
				<button type="submit" class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div>
	<!-- Filter form section end -->


	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container" >
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row" id="stg">
			<?php
			//print_r($featured);
				$tokens=array();
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
								<!-- <form method="post" action="<?php // base_url('accomodation/single_listing'); ?>">
									<button class="room-price" type="submit" id="amt-btn"  class="price-btn">NGN <?// $listing['amount'];?>.00</button>
									<input type="hidden" name="item_id" id="item_id" value="<? //$listing['id']?>" />
								</form> -->

							<a href=" <?= site_url('accomodation/single_listing/'.$param);?>" id="list-amt" class="room-price">NGN  <?= $listing['amount'];?>.00</a>
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
	<!-- feature section end -->

	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="<?= base_url();?>assets/img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="<?= base_url()?>assets/img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
					<?php foreach($services as $service):?>
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5><?= $service['title'] ;?></h5>
								<p><?= $service['desc_text'] ;?></p>
							</div>
						</div>
						<?php  endforeach;?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LATEST NEWS</h3>
				<p>Real estate news headlines around the world.</p>
			</div>
			<div class="row">
			<?php
			foreach($news as $fnews):
			?>
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="<?= base_url();?>assets/img/blog/<?= $fnews['image'];?>" alt="">
					<h5><a href="single-blog.html"><?= $fnews['title'];?></a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i><?= $fnews['author'];?></span>
						<span><i class="fa fa-clock-o"></i><?= $fnews['added_date'];?></span>
					</div>
					<p><?= $fnews['text'];?></p>
				</div>
				<?php
				endforeach;
				?>
			
			</div>
		</div>
	</section>
	<!-- Blog section end -->
