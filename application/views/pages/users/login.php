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
			<span><i class="fa fa-angle-right"></i>Login</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
            <?php // include('user_sidebar.php');?>
                    <div class="col-lg-12 col-md-12 single-list-page" style="background-color:#d5d9d9;padding-top:30px;height:auto!important;">
                        <div class="row">
                      
                        <div class="col-md-4">
						</div>
                        <div class="col-md-4 card" style="padding-top:30px;height:auto;margin-bottom:30px;padding-bottom:30px;">
                        <?php
                            if($this->session->flashdata('loginerror')){
                                echo "<p class='alert alert-danger'>".$this->session->flashdata('loginerror')."</p>";
                            }
                            if($this->session->flashdata('session_error')){
                                echo "<p class='alert alert-danger'>".$this->session->flashdata('session_error')."</p>";
                            }
                            if($this->session->flashdata('privilege')){
                                echo "<p class='alert alert-danger'>".$this->session->flashdata('privilege')."</p>";
                            }
                        ?>
                            <form action="<?= base_url('users/checklogin')?>" method="POST">
                                    <div class="form-group">
									<p>Login if you already have an account</p>
                                        <label>User Name<span id="req">*</span></label>
                                        <input type="text" name="user" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Password<span id="req">*</span></label>
                                        <input type="password" name="pass" class="form-control" required />
                                        
                                    </div>
                                    <input  type="submit" name="" class="form-control btn btn-primary" />
                            </form>
                                 <a href="#">Forgot Password</a>
                       
                        </div>
                           <div class="col-md-4">
							</div>      
                     </div>
                    </div>
                
				<!-- sidebar -->
				
			</div>
		</div>
	</section>
	<!-- Page end -->

