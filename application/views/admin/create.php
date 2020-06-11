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
                               <div class="row">
                               
                                            <div class=" col-md-4 col-xs-4 " id="" >
                                                    <div class="form-group">
                                                    <label>School:<span id="req">*</span></label>
                                                        <select name="sch" class="form-control" style="height:40px;">
                                                            <option>Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Locality:<span id="req">*</span></label>
                                                            <select name="sch_loc" class="form-control" style="height:40px;">
                                                            <option>Option 1</option>
                                                             </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Accomodation Type:<span id="req">*</span></label>
                                                        <select name="sch_loc" class="form-control" style="height:40px;">
                                                            <option>Option 1</option>
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                                <label>Amount:<span id="req">NGN/yr</span></label>
                                                                <input type="text" name="" class="form-control" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Dimensions:<span id="req">Length X breadth-In feet</span></label>
                                                            <input type="text" name="" class="form-control" style="height:40px;" required />
                                                     </div>
                                            </div>
                                            <div class="  col-md-4 col-xs-4 " id="d_icondiv3">
                                                        <div class="form-group">
                                                            <label>Address:<span id="req">*</span></label>
                                                            <textarea class="form-control" name="" rows="4"></textarea>
                                                        </div>
                                                            <div class="form-group">
                                                                    <label>Details:<span id="req" >(eg fenced,Generator,security)seperated by commas</span></label>
                                                                    <input type="text" name="" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Distance From School:<span id="req">-in KM</span></label>
                                                                <input type="text" name="" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Average Transportation:<span id="req">NGN</span></label>
                                                                <input type="text" name="" class="form-control" style="height:40px;" required />
                                                            </div>
                                             </div>
                                           <div class="  col-md-4 col-xs-4 " >
                                                         <div class="form-group">
                                                        <label>Image1: <span id="req">Primary image size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Image2: <span id="req">image2 size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Image3: <span id="req">image3 size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Image4: <span id="req">image4 size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Images5: <span id="req">image5 size = 300KB</span></label>
                                                        <input type="file" name="" class="form-control" style="height:40px;" required />
                                                        </div>
                                                       
                                             </div> 
                                </div>
                                                         <input type="submit" name="" class="btn btn-primary form-control" style="width:300px;margin-left:30%;margin-bottom:20px;" />
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

