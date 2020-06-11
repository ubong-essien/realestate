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
                        <a href="<?= base_url('create_docs');?>" class="btn btn-primary" style="width:100px;"><li class="fa fa-plus"></li> Add New</a><br/>
                               <div class="row">
                                <table class="table table-hovered ">
								<?php
								$t = 1;
								foreach($doc as $docs):
								?>
                                    <tr><td><?= $t ?></td><td><?= $docs['doc_title'];?></td><td><?= $docs['doc_descr'];?></td><td><li class="fa fa-file"></li></td><td><button class="btn btn-success"><li class="fa fa-edit"></li></button></td><td><button class="btn btn-danger"><li class="fa fa-trash"></li></button></td></tr>
								  <?php
								  
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

