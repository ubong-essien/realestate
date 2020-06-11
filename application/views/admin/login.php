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
                    <div class="col-lg-8 col-md-8 single-list-page" style="background-color:#d5d9d9;padding-top:30px;height:338px!important;">
                        <div class="row">
                        <div class="col-md-3">  
                            
                        </div>
                        
                        <div class="col-md-6 card" style="padding-top:30px;height:278px">
                                <div class="form-group">
                                    <label>User Name<span id="req">*</span></label>
                                    <input type="text" name="" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Password<span id="req">*</span></label>
                                    <input type="password" name="" class="form-control" required />
                                    
                                </div>
                                 <input  type="submit" name="" class="form-control btn btn-primary" />
                                 <a href="#">Forgot Password</a>
                       
                        </div>
                                
                     </div>
                    </div>
                
				<!-- sidebar -->
				
			</div>
		</div>
	</section>
	<!-- Page end -->

