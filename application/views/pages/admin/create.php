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
                                <ul class="alert alert-primary">
                                    <h5>Note:</h5>
                                    <li>image2-image4 may be other locations of the house.</li>
                                    <li>Details are seperated by comma.</li>
                                </ul>
                                 <form action="<?= base_url('admin/create_listing')?>" method="post">
                               <div class="row">
                               <?php
                                    if($this->session->flashdata('create_error')){
                                        echo "<p class='  col-md-12 alert alert-danger'>".$this->session->flashdata('create_error')."</p>";
                                    }
                                    echo validation_errors('<span class=" col-md-12 alert alert-danger">', '</span>');
                                 ?>
                                           
                                            <div class=" col-md-6 col-xs-6 " id="" >
                                            <div class="form-group">
                                                    <label>School Type:<span id="req">*</span></label>
                                                    <select id="sch_type" class="form-control" name="sch_type" placeholder="Select a school Type" style="height:40px;" required>
				                                    	<option value="">Select a school Type</option>
				                                    	<option value="1">University</option>
				                                    	<option value="2">Polytechnic</option>
				                                    	<option value="3">College Of Education</option>
				                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>School:<span id="req">*</span></label>
                                                    <select id="sch" class="form-control" name="sch" placeholder="Select a University/Poly/College of Education" style="height:40px;" required>
				                                    	<option value="">Select a University/Poly/College</option>
				                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Locality:<span id="req">*</span></label>
                                                            <select id="locate" name="sch_loc" class="form-control" style="height:40px;">
                                                            <option value="">Select a location</option>
                                                             </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Accomodation Type:<span id="req">*</span></label>
                                                        <select id="acc_type" class="form-control" name="acc_type" placeholder="Select type" style="height:40px;">
                                                            <option value="">Select type</option>
                                                            <option value="1">Single room</option>
                                                            <option value="2">Self Con</option>
                                                            <option value="3">One Bedroom</option>
                                                            <option value="4">Two Bedroom</option>
                                                            <option value="5">Three Bedroom</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                                <label>Amount:<span id="req">NGN/yr</span></label>
                                                                <input type="text" name="amount" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Dimensions:<span id="req">Length X breadth-In feet</span></label>
                                                            <input type="text" name="dimension" class="form-control" style="height:40px;" required />
                                                     </div>
                                            </div>
                                            <div class="  col-md-6 col-xs-4 " id="d_icondiv3">
                                                        <div class="form-group">
                                                            <label>Address:<span id="req">*</span></label>
                                                            <textarea class="form-control" name="addrs" rows="5"></textarea>
                                                        </div>
                                                            <div class="form-group">
                                                                    <label>Details:<span id="req" >(eg fenced,Generator,security)seperated by commas</span></label>
                                                                    <input type="text" name="details" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Distance From School:<span id="req">-in KM</span></label>
                                                                <input type="text" name="distance" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Average Transportation:<span id="req">NGN</span></label>
                                                                <input type="text" name="trans" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <input type="hidden" id="booking_fee" name="booking_fee" value="0" />
                                                            <input type="hidden" name="agent_id" value="<?php $_SESSION['logged_agent_id']; ?>" />
                                                            
                                             </div>
                                       
                                </div>
                                                         <input type="submit" name="" class="btn btn-primary form-control" style="width:300px;margin-left:30%;margin-bottom:20px;" />
                                             </form>
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

