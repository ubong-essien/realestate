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
								<div class="col-md-12"  style="width:100%;overflow-x:scroll;">
									<table class="table table-hovered" id="reportn" >
									<thead>	
									<tr>
										<th>SNO</th>
										<th>NAME</th>
										<th>ADDRESS</th>
										<th>LOCALITY</th>
										<th>AMT</th>
										<th>EDIT</th>
										<th>DEL</th>
										
									</tr>
									</thead>
									<tbody>
										<?php
											$x=1;
										foreach($acc_data as $data):
										
										?>
										<tr><td><?= $x;?></td><td><?= $data['accomodation_type_name'];?></td><td><?= $data['address'];?></td><td><?= $data['locality_name'];?></td><td><?= $data['amount'];?></td><td><a href="<?= base_url("agents/edit_listing/{$data['id']}");?>" class="btn btn-success"><li class="fa fa-edit"></li></button></td><td><button class="btn btn-danger"><li class="fa fa-trash"></li></button></td></tr>
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

