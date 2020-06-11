<?php error_reporting(0);?>
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="<?= base_url()?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Agents</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Agents</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
            <div class="col-lg-4 col-md-4 sidebar">
				
                <div class="contact-form-card" style="background-color:#d5d9d9">
                    <ul class="list-group">
                    <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents');?>">Home</a></li>
                    <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents_login');?>">Login</a></li>
                   <li class="list-group-item"><a id="ag_link" href="<?= base_url('agents_register');?>">Register</a></li>
                   <li class="list-group-item"><a id="ag_link" href="#">Terms and Condition</a></li>
                    </ul>
                </div>
                
            </div>
				<div class="col-lg-8 col-md-8 single-list-page">
					
						<?php //print_r($accoms[0]);?>
							<p class="alert alert-info"></p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                     The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                                     content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                      default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                     Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            
                </div>
				<!-- sidebar -->
				
			</div>
		</div>
	</section>
	<!-- Page end -->

