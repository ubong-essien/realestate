<section class="page-top-section set-bg" data-setbg="<?= base_url();?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Register as an Agent</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Agents Register</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
             
        <div class="row form-card" style="font-family:arial narrow;">
            <div class="col-lg-4 col-md-4 sidebar">
                    
                    <div class="contact-form-card" style="background-color:#d5d9d9">
                        <ul class="list-group">

                        <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents');?>">Home</a></li>
                        <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents_login');?>">Login</a></li>
                    <li class="list-group-item"><a id="ag_link" href="<?= base_url('agents_register');?>">Register</a></li>
                    <li class="list-group-item"><a id="ag_link" href="#">Terms and Condition</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-8">
                <p class="alert alert-success" style="font-family:arial narrow">
                    By creating an account with Campus homes,it means you have accepted our terms and conditions.Please see <a href="">Terms and Conditions.</a>
                    </p>
                    <?php
                        if($this->session->flashdata['upload_status_message_error']){

                           echo "<p class='alert alert-danger' style='font-family:arial narrow'>".$this->session->flashdata['upload_status_message_error']."</p>" ;
                            
                        }else if($this->session->flashdata['upload_status_message_success']){
                            echo "<p class='alert alert-success' style='font-family:arial narrow'>".$this->session->flashdata['upload_status_message_success']."</p>" ;
                           
                        }
                    ?>
                    <p class="alert alert-success" style="font-family:arial narrow">
                   </p>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="card" id="pix">
                            <img id="blah" src="<?= base_url();?>assets/img/ph.jpg" alt="agent-img" />
                            </div>
                           <br/>
                           <form action="<?= base_url('agents/process_register');?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name="agent_pix" class="form-control"  onchange="readURL(this);" required />
                        </div> 
                      
                    </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Surname<span id="req">*</span></label>
                                <input type="text" name="sname" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>First Name<span id="req">*</span></label>
                                <input type="text" name="fname" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Other Names<span id="req">*</span></label>
                                <input type="text" name="oname" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Phone<span id="req">*</span></label>
                                <input type="text" name="fone" class="form-control" required />
                            </div> 
                        </div>
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label>Email<span id="req">*</span>(Must be a valid e-mail)</label>
                            <input type="text" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Address<span id="req">*</span></label>
                            <input type="text" name="addrs" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>User Name<span id="req">*</span></label>
                            <input type="text" name="username" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Password<span id="req">*</span></label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                       
                    </div>
                   
					
            </div><hr/>
				<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
										<input type="submit" style="width:230px;" name="" value="Register" class="btn btn-primary"  />
							 </div>
						</div>
						<div class="col-md-4">
						</div>
					</div> 
					
        </div>
		</form>
        
		
       
        </div>
</section>