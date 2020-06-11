<?php //error_reporting(0);?>
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
                                    
                                    <li>Details are seperated by comma.</li>
                                </ul>
                                 <form action="<?= base_url('agents/create_listing')?>" method="post">
                               <div class="row">
                               <?php
                                    if($this->session->flashdata('create_error')){
                                        echo "<p class='  col-md-12 alert alert-danger'>".$this->session->flashdata('create_error')."</p>";
                                    }
                                    echo validation_errors('<span class=" col-md-12 alert alert-danger">', '</span>');
                                 ?>
                                
                                           
                                            <div class=" col-md-6 col-xs-12 " id="" >
                                                     <div class="form-group">
                                                                    <img src="" width="" height="" alt="" />
                                                                    <label>Details:<span id="req" >(eg fenced,Generator,security)seperated by commas</span></label>
                                                                    <input type="text" name="details" class="form-control" value="<?= $s_acc[0]['details']?>" style="height:40px;" required />
                                                            </div>
                                                    <div class="form-group">
                                                                <label>Amount:<span id="req">NGN/yr</span></label>
                                                                <input type="text" name="amount" class="form-control" value="<?= $s_acc[0]['amount']?>" style="height:40px;" required />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Dimensions:<span id="req">Length X breadth-In feet</span></label>
                                                            <input type="text" name="dimension" value="<?= $s_acc[0]['dimension'];?>" class="form-control" style="height:40px;" required />
                                                     </div>
                                                     <div class="form-group">
                                                            <label>Address:<span id="req">*</span></label>
                                                            <textarea class="form-control" name="addrs" rows="3"><?= $s_acc[0]['address']?></textarea>
                                                        </div>
                                                           
                                                            <div class="form-group">
                                                                <label>Distance From School:<span id="req">-in KM</span></label>
                                                                <input type="text" value="<?= $s_acc[0]['distance_from_school']?>" name="distance" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Average Transportation:<span id="req">NGN</span></label>
                                                                <input type="text" name="trans" value="<?= $s_acc[0]['average_transportation']?>" class="form-control" style="height:40px;" required />
                                                            </div>
                                                            <input type="hidden" id="booking_fee" name="booking_fee" value="<?= $s_acc[0]['booking_fee']?>" />
                                                            <input type="hidden" name="agent_id" value="<?php echo $_SESSION['logged_agent_id']; ?>" />
                                                            <input type="hidden" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                            <input type="submit" name="" class="btn btn-primary form-control" style="width:300px;" />
                                            
                                            </div>
                                </form>
                                            <div class=" col-md-6 col-xs-12 " id="d_icondiv3"  >
                                                <?php
                                                $c = explode("~",$s_acc[0]['accomodation_images']);

                                                ?>
                                 <form class="uploadsingleimage" enctype="multipart/form-data">
                                                         <div class="input-group">
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <span class="f_div"><img id="li_img1" class="img_d img-responsive" src="<?= base_url();?>assets/img/properties/<?= $c[0];?>" alt="li_img5-img" /></span>
                                                            <span id="img1" class="s_div" >
                                                            <div class="upload-btn-wrapper">
                                                                <button class="filebtn">Update the file</button>
                                                                 <input type="file" name="img1" id="img1"  onchange="readURL1(this);" />
                                                             </div>
                                                                
                                                            </span>
                                                           </div>
                                                            <div id="uploadform" class="col-xs-12">
                                                                    <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                    <input type="hidden" class="imgname" name="imgname" value="img1_0" />
                                                                <button type="submit"  id="upload_img0_1" value="upload_img0_1" class="upload_btn btn btn-primary " style="width:100px;margin-bottom:20px;margin-left:10px;" >Upload <li id="loader" class="fa fa-upload"></li></button>
                                                            </div>
                                                        </div>
                                </form>
                                <form class="uploadsingleimage" enctype="multipart/form-data">
                                                        <div class="input-group">
                                                            <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                            <span class="f_div"><img id="li_img2" class="img_d img-responsive" src="<?= base_url();?>assets/img/properties/<?= $c[1];?>" alt="li_img5-img" /></span>
                                                            <span id="img2" class="s_div" ><div class="upload-btn-wrapper">
                                                                <button class="filebtn">Update the file</button>
                                                                 <input type="file" name="img2" id="img2"  onchange="readURL2(this);" />
                                                             </div>
                                                            </span>
                                                        </div>
                                                            <div id="uploadform">
                                                                    <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                    <input type="hidden" class="imgname" name="imgname" value="img2_1" />
                                                                    <button type="submit" id="upload_img2_1" value="upload_img2_1" class="upload_btn btn btn-primary " style="width:100px;margin-bottom:20px;margin-left:10px;" >Upload <li id="loader" class="fa fa-upload"></li></button>
                                                                
                                                            </div>
                                                        </div>
                                 </form>
                                <form class="uploadsingleimage" enctype="multipart/form-data"> 
                                                        <div class="input-group">
                                                             <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                             <span class="f_div"> <img id="li_img3" class="img_d img-responsive" src="<?= base_url();?>assets/img/properties/<?= $c[2];?>" alt="li_img5-img" /></span>
                                                             <span id="img3" class="s_div" >
                                                                 <div class="upload-btn-wrapper">
                                                                  <button class="filebtn">Update the file</button>
                                                                  <input type="file" name="img3" id="img3"  onchange="readURL3(this);" />
                                                                 </div>
                                                            </span>
                                                            </div>
                                                                <div id="uploadform">
                                                                <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                <input type="hidden" class="imgname" name="imgname" value="img3_2" />
                                                                    <button type="submit" id="upload_img3_2" value="upload_img3_2" class=" upload_btn btn btn-primary " style="width:100px;margin-bottom:20px;margin-left:10px;" >Upload <li id="loader" class="fa fa-upload"></li></button>
                                                                
                                                                </div>
                                                        </div>
                                   </form>
                                <form class="uploadsingleimage" enctype="multipart/form-data">
                                                        <div class="input-group">
                                                             <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                             <span class="f_div"> <img id="li_img4" class="img_d img-responsive" src="<?= base_url();?>assets/img/properties/<?= $c[3];?>" alt="li_img5-img" /></span>
                                                             <span id="img4" class="s_div" > <div class="upload-btn-wrapper">
                                                                <button class="filebtn">Update the file</button>
                                                                <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                <input type="hidden" class="imgname" name="imgname" value="img4_3" />
                                                                 <input type="file" name="img4" id="img4"  onchange="readURL4(this);" />
                                                             </div>
                                                            </span>
                                                            </div>
                                                                <div id="uploadform">
                                                               <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                    <button type="submit" id="upload_img4_3" value="upload_img4_3" class=" upload_btn btn btn-primary " style="width:100px;margin-bottom:20px;margin-left:10px;" >Upload <li id="loader" class="fa fa-upload"></li></button>
                                                                
                                                                </div>
                                                         </div>
                                  </form>
                                <form class="uploadsingleimage" enctype="multipart/form-data">
                                                        <div class="input-group">
                                                             <div id="l_img" class="l_img card  col-md-11 col-xs-12 " >
                                                             <span class="f_div"> <img id="li_img5" class="img_d img-responsive" src="<?= base_url();?>assets/img/properties/<?= $c[4];?>" alt="li_img5-img" /></span>
                                                             <span id="img5" class="s_div" >
                                                                 <div class="upload-btn-wrapper">
                                                                <button class="filebtn">Update the file</button>
                                                                <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                <input type="hidden" class="imgname" name="imgname" value="img5_4" />
                                                                 <input type="file" name="img5" id="img5"  onchange="readURL5(this);" />
                                                                 </div>
                                                            </span>
                                                        </div>
                                                                <div id="uploadform">
                                                                    <input type="hidden" id="record_id" name="record_id" value="<?php echo $s_acc[0]['id'];?>" />
                                                                    <button type="submit" id="upload_img5_4" value="upload_img5_4" class="upload_btn btn btn-primary " style="width:100px;margin-bottom:20px;margin-left:10px;" >Upload <li id="loader" class="fa fa-upload"></li></button>
                                                                </div>
                                                         </div>
                                                         </form>
                                    
                                                          
                                                           
                                                            
                                             </div>
                                </div>
                                           
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		
	</section>
	<!-- Page end -->

