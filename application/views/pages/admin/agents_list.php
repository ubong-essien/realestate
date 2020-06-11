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
                               
                               <div class="row" >
							   <span style="margin-left:10px; "id="msg"></span>
								<div class="col-md-12"  style="width:100%;overflow-x:scroll;">
									<table class="table table-hovered" id="reportn" >
									<thead>	
									<tr>
										
										<th>Image</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
										
										<th>Status</th>
										<th>Activate</th>
										<th>Deactivate</th>
										
									</tr>
									</thead>
									<tbody>
										<?php
											$x=1;
										foreach($agents_data as $data):
										
										?>
										<tr><td><img class="rounded" width="70px" height="70px" src="<?= base_url();?>assets/img/team/<?= $data['passport'];?>"  alt="" /></td><td><?= $data['agents_name'];?></td><td><?= $data['phone'];?></td><td><?= $data['email'];?></td><td><?php if( $data['active'] == 1){echo "<span style='color:green;'>Active</span>";}else{echo "<span style='color:red;'>Not-Active</span>";} ?></td><td><button  id="act" title="activate agent account" onclick="activate('<?= $data['agent_id'];?>');" class="btn btn-success"><li class="fa fa-check"></li></button></td><td><button id="deact" title="deactivate agent account" onclick="deactivate('<?= $data['agent_id'];?>');" class="btn btn-danger"><li class="fa fa-times"></li></button></td></tr>
									<?php
									$x++;
									endforeach;
									?> 
									</tbody> 
									</table>
											
									</div>
                                                      
                            </div>
                        </div>
                           
                    </div>
                                                    
                </div>
                    
                
				
				
			</div>
		</div>
	</section>
	<!-- Page end -->

