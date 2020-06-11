<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url();?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Contact</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Contact</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section ">
		<div class="container">

			<div class="contact-info-warp" >
				<p><i class="fa fa-facebook"></i><?= $settings[0]['facebook']?></p>
				<p><i class="fa fa-envelope"></i><?= $settings[0]['email']?></p>
				<p><i class="fa fa-phone"></i><?= $settings[0]['phone']?></p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="<?= base_url();?>assets/img/contact.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
						</div>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your email">
								</div>
								<div class="col-md-12">
									<textarea  placeholder="Your message"></textarea>
									<button class="site-btn">SUBMIT NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->
