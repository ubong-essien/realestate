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
          <?php include('sidebar.php');?>
                    <div class="col-lg-8 col-md-8 single-list-page" style="background-color:#d5d9d9;padding-top:30px;height:100%!important;font-family:arial narrow">
                        <div class="col-md-12 card" style="margin-bottom:30px;padding-top:30px;height:94%">
                                                    <div class="form-group">
                                                    <label>Document Title:<span id="req">*</span></label>
                                                    <input type="text" name="" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Document Description:<span id="req">*</span></label>
                                                            <input type="text" name="" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Images5: <span id="req">image5 size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <input type="submit" name="" value="Save" class="btn btn-primary form-control" style="width:300px;margin-left:30%;margin-bottom:20px;" />
                                         
                                </div>
                                                      
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

