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
	<span id="msg"></span>
					    <div class="col-md-12 card" style="margin-bottom:30px;padding-top:30px;height:94%">
											<form id="addsms" onsubmit="savesms();" >
                                                    <div class="form-group">
                                                    <label>Document Title:<span id="req">*</span></label>
                                                    <input type="text" id="sms_title" name="sms_title" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>SMS Text:<span id="req">*</span></label>
                                                           <textarea class="form-control" rows="5" id="sms_txt" name="sms_txt">
														   
														   </textarea>
                                                    </div>
                                                    <input type="submit" name="" value="Save" class="btn btn-primary form-control" style="width:300px;margin-left:30%;margin-bottom:20px;" />
                                         </form>
                                </div>
                                                      
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

