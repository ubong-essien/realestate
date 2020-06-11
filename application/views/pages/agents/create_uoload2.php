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
                                <hr/>
                               <div class="row">
                               
                                           <div class="  col-md-8 col-xs-8 " >
                                               <form id="uploadimage1" enctype="multipart/form-data">
                                                         <div class="input-group">
                                                        <label>Image1: <span id="req">image size = 300KB</span></label>
                                                        <input type="file" name="img1" id="img1"  onchange="readURL1(this);" class="form-control" style="height:40px;width:100px;" required />
                                                        <input type="hidden" id="record_id" name="record_id" value="<?= $rec_id ;?>" />
                                                        <button type="submit" value="upload" class="btn btn-primary " style="width:100px;margin-bottom:20px;" >Upload <li id="loader" class="fa fa-upload"></li></button></button>
                                                
                                                        </div>
                                                </form>  
                                                <form id="uploadimage2" enctype="multipart/form-data">     
                                                        <br/>
                                                        <div class="input-group">
                                                        <label>Image2: <span id="req">image2 size = 300KB</span></label>
                                                        <input type="file" name="img2" id="img2" onchange="readURL2(this)" class="form-control" style="height:40px;width:100px;" required />
                                                        <input type="hidden" id="record_id" name="record_id" value="<?= $rec_id ;?>" />
                                                        <button type="submit" value="upload" class="btn btn-primary " style="width:100px;margin-bottom:20px;" >Upload <li id="loader" class="fa fa-upload"></li></button></button>
                                                        
                                                        </div>
                                                 </form>  
                                                <form id="uploadimage3" enctype="multipart/form-data">
                                                        <br/>
                                                        <div class="input-group">
                                                        <label>Image3: <span id="req">image3 size = 300KB</span></label>
                                                        <input type="file" name="img3" id="img3" onchange="readURL3(this)" class="form-control" style="height:40px;width:100px;" required />
                                                        <input type="hidden" id="record_id" name="record_id" value="<?= $rec_id ;?>" />
                                                        <button type="submit" value="upload" class="btn btn-primary " style="width:100px;margin-bottom:20px;" >Upload <li id="loader" class="fa fa-upload"></li></button></button>
                                                        
                                                        </div>
                                                </form>  
                                                <form id="uploadimage4" enctype="multipart/form-data">
                                                        <br/>
                                                        <div class="input-group">
                                                        <label>Image4: <span id="req">image4 size = 300KB</span></label>
                                                        <input type="file" name="img4" id="img4" onchange="readURL4(this)" class="form-control" style="height:40px;width:100px;" required />
                                                        <input type="hidden" id="record_id" name="record_id" value="<?= $rec_id ;?>" />
                                                        <button type="submit" value="upload" class="btn btn-primary " style="width:100px;margin-bottom:20px;" >Upload <li id="loader" class="fa fa-upload"></li></button></button>
                                                        
                                                         </div>
                                                </form>  
                                                <form id="uploadimage5" enctype="multipart/form-data">
                                                         <br/>
                                                        <div class="input-group">
                                                        <label>Images5: <span id="req">image5 size = 300KB</span></label>
                                                        <input type="file" name="img5" id="img5" onchange="readURL5(this)" class="form-control" style="height:40px;width:100px;" required />
                                                        <input type="hidden" id="record_id" name="record_id" value="<?= $rec_id ;?>" />
                                                        <button type="submit" value="upload" class="btn btn-primary " style="width:100px;margin-bottom:20px;" >Upload <li id="loader" class="fa fa-upload"></li></button></button>
                                                        
                                                        </div>
                                                </form>  
                                               
                                             </div> 
                                             <div class="  col-md-4 col-xs-4 " style="border-left:2px solid #000">
                                             <h4>Image Preview</h4>
                                                         <div class="row">
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <img id="li_img1" class="img_d img-responsive" src="<?= base_url();?>assets/img/imgph.png" alt="agent-img" />
                                                            </div>
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <img id="li_img2" class="img_d img-responsive" src="<?= base_url();?>assets/img/imgph.png" alt="agent-img" />
                                                            </div>
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <img id="li_img3"  class="img_d img-responsive" src="<?= base_url();?>assets/img/imgph.png" alt="agent-img" />
                                                            </div>
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <img id="li_img4" class="img_d img-responsive" src="<?= base_url();?>assets/img/imgph.png" alt="agent-img" />
                                                            </div>
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <img id="li_img5" class="img_d img-responsive" src="<?= base_url();?>assets/img/imgph.png" alt="agent-img" />
                                                            </div>
                                                         </div>
                                             </div> 
                                </div>
                                                         
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

