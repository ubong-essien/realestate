
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url()?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>About us</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>About us</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section">
		<div class="container">
			
			<div class="row about-text">
				<div class="col-xl-12 about-text-left">
					<h5>ABOUT US</h5>
					<p>Lorem ipsum dolor sitdoni amet, consectetur donald adipis elite for. Vivamus interdum ultrices augue. Aenean dos cursus lania. Duis et fringilla leonardo. Mauris mattis sem, debut curus risus viverra sed. Vestibul vitae velit felis. Nulla placerat orci ante casat. Pellentesque ac placerat . Cras urna duis, ornare cursus purus.</p>
					<p>Lorem ipsum dolor sitdoni amet, consectetur donald adipis elite for. Vivamus interdum ultrices augue. Aenean dos cursus lania. Duis et fringilla leonardo. Mauris mattis sem, debut curus risus viverra sed. Vestibul vitae velit felis. Nulla placerat orci ante casat. Pellentesque ac placerat . Cras urna duis, ornare cursus purus.</p>
					<p>Ut vel auctor ligula. Aenean nec dui pretium, commodo ligula sit amet, faucibus purus. Mauris at dolor imperdiet, aliquet nisi non, vulputate est. Maecenas feugiat sagittis lacus. Mauris dinissim consequat tellus id congue. Mauris bendum mollis viverra. Vestibulum in leo placerat sollicitudin varius.</p>
					<p>Ut vel auctor ligula. Aenean nec dui pretium, commodo ligula sit amet, faucibus purus. Mauris at dolor imperdiet, aliquet nisi non, vulputate est. Maecenas feugiat sagittis lacus. Mauris dinissim consequat tellus id congue. Mauris bendum mollis viverra. Vestibulum in leo placerat sollicitudin varius.</p>
				</div>
				
			</div>
		</div>
		
		<!-- Review section -->
		<section class="review-section set-bg" data-setbg="<?= base_url()?>assets/img/review-bg.jpg">
			<div class="container">
				<div class="review-slider owl-carousel">
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="<?= base_url()?>assets/img/review/1.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="<?= base_url()?>assets/img/review/1.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="<?= base_url()?>assets/img/review/1.jpg"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Review section end-->


		<!-- Team section -->
		<section class="team-section spad pb-0">
			<div class="container">
				<div class="section-title text-center">
					<h3>OUR AGENTS</h3>
					<p>Our directory of real estate agents who can help you</p>
				</div>
				<div class="row">
				<?php foreach($agents as $agent):?>
				
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="<?= base_url()?>assets/img/team/<?= $agent['passport']?>" alt="#">
								<div class="member-social">
									<a href="<?= $agent['whatsapp']?>"><i class="fa fa-whatsapp"></i></a>
									<a href="<?= $agent['email']?>"><i class="fa fa-envelope"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5><?= $agent['agents_name']?></h5>
								<span>Real Estate Agent</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i><?= $agent['phone']?></p>
									<p><i class="fa fa-envelope"></i><?= $agent['email']?></p>
								</div>
							</div>
						</div>
					</div>
					<?php
					endforeach;
					?>
					
				</div>
			</div>
		</section>
		<!-- Team section end-->
	</section>
	<!-- page end -->
