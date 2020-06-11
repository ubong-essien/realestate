<!-- Footer section -->
<footer class="footer-section set-bg" data-setbg="<?= base_url()?>assets/img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="<?= base_url()?>assets/img/logo2.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="<?= $settings[0]['facebook']?>"><i class="fa fa-facebook"></i></a>
						<a href="<?= $settings[0]['twitter']?>"><i class="fa fa-twitter"></i></a>
						<a href="<?= $settings[0]['facebook']?>"><i class="fa fa-instagram"></i></a>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i><?= "Uyo, Akwa Ibom State";?> </p>
						<p><i class="fa fa-phone"></i><?= $settings[0]['phone']?></p>
						<p><i class="fa fa-envelope"></i><?= $settings[0]['email']?>m</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="<?= site_url();?>">Home</a></li>
						<li><a href="">Featured Listing</a></li>
						<li><a href="<?= site_url('home/about_us')?>">About us</a></li>
						<li><a href="<?= site_url('home/contact')?>">contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url();?>assets/js/masonry.pkgd.min.js"></script>
	<script src="<?= base_url();?>assets/js/magnific-popup.min.js"></script>
	<script src="<?= base_url();?>assets/js/main.js"></script>
	<script src="<?= base_url();?>assets/js/custom.js"></script>
	<script>
	
	
	function activate(id){
     
				alert(id);
				return;
				$.ajax({ 
					type:'POST',
					url:'<?= site_url('admin/activate');?>',
					data:'agentid='+id,
					success:function(html){
						
					}
						   }); 
	 
	 }

	</script>
</body>
</html>