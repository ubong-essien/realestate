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
			<span><i class="fa fa-angle-right"></i>messages</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
       
			<div class="row">
          <?php include('sidebar.php');?>
                    <div class="col-lg-8 col-md-8 single-list-page" style="background-color:#d5d9d9;padding-top:30px;height:100%!important;font-family:arial narrow">
                        <div class="col-md-12 card" style="margin-bottom:30px;padding-top:30px;height:94%">
                        <a href="<?= base_url('create_sms');?>" class="btn btn-primary" style="width:100px;"><li class="fa fa-plus"></li> Add New</a><br/>
                               <div class="row">
                                <table class="table table-hovered ">
								<?php
								$y=1;
								foreach($sms_data as $sms):
									
								?>
                                    <tr><td><?= $y;?></td><td><b><?= strtoupper($sms['sms_descr']);?></b></td><td><?= $sms['sms_txt'];?></td><td><?= $sms['date_added'];?></td><td><button class="btn btn-primary"><li class="fa fa-upload"></li> send</button></td><td><button class="btn btn-success"><li class="fa fa-edit"></li></button></<td><td><button class="btn btn-danger"><li class="fa fa-trash"></li></button></<td></tr>
								  <?php
								  $y++;
								 endforeach; 
								  ?> 
								   </table>
                                         
                                </div>
                                                      
                            </div>
                           
                        </div>
                                                    
                     </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

