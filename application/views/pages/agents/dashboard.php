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
            <?php include('sidebar.php');
            
            ?>
                    <div class="col-lg-8 col-md-8 single-list-page" style="background-color:#d5d9d9;padding-top:30px;height:100%!important;">
                        
                        <div class="col-md-12 card" style="margin-bottom:30px;padding-top:30px;height:94%">
                        <p class="alert alert-success"><span class="fa fa-user"></span> Welcome agent <b><?= $_SESSION['logged_agent_user'];?></b></p>
                              <div class="row ">
                                    <div class=" col-md-4 col-xs-12 " >
                                    <img style="" src="<?= base_url();?>assets/img/team/<?= $auth_agent[0]['passport']?>" alt="agent-img" />
                                    </div>
                                    <div class="col-md-8 col-xs-12 ">
                                        <table  class="table table-bordered table-hover table-stripped">
                                            <tr><td><b>Name</b></td><td><?= strtoupper($auth_agent[0]['agents_name']);?></td></tr>
                                            <tr><td><b>Phone Number</b></td><td><?= $auth_agent[0]['phone']?></td></tr>
                                            <tr><td><b>Agents ID</b></td><td>CH-2019-1</td></tr>
                                            <tr ><td colspan="2"><a style="margin-left:70%" title="Edit Your Profile" href="#<?= $auth_agent[0]['agent_id']?>" class="btn btn-primary"><li class="fa fa-edit"></li> Edit Profile</a></td></tr>
                                        </table>
                                    </div>
                                    
                        </div>  <hr/>
                        <div class="row">
                                   <div class="card col-md-3 col-xs-3 d_icondiv" id="d_icondiv1" >
                                       <span id="d_icon" class="fa fa-home fa-4x"></span>
                                       <h3 class="dashtext">23 </h3>
                                       <h3 class="dashtext">LISTING(S)</h3>
                                    </div>
                                   
                                    <div class=" card col-md-3 col-md-3 d_icondiv" id="d_icondiv2">
                                    <span id="d_icon" class="fa fa-folder-open fa-4x"></span>
                                    <h3 class="dashtext">23</h3>
                                    <h3 class="dashtext"> FILE(S)</h3>
                                    </div> 
                                    <div class=" card col-md-3 col-xs-3 d_icondiv" id="d_icondiv3">
                                    <span id="d_icon" class="fa fa-bullhorn fa-4x"></span>
                                    <h3 class="dashtext">2 </span> </h3>
                                    <h3 class="dashtext">MESSAGE(S)</span> </h3>
                                    </div>
                                </div>
                               
                        
                    </div>
             </div>
		</div>
	</div>
	</section>
	<!-- Page end -->

