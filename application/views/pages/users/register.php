<section class="page-top-section set-bg" data-setbg="<?= base_url();?>assets/img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Register to get an accomodation</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>register</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-info" style="font-family:arial narrow">
                    By creating an account with Campus homes,it means you have accepted our terms and conditions.Please see <a href="">Terms and Conditions.</a>
                    </p>
                </div>   
            </div>   
	 <form id="register-form" >
        <div class="row " style="font-family:arial narrow;">
		
		  <span class='col-md-12' id='stg_reg' style='font-family:arial narrow'></span>
      
		   
            <div class="col-md-6">
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
                    <input type="text" name="odaname" class="form-control" required />
                </div>
               
			    <div class="form-group">
                    <label>Phone<span id="req">*</span>(Must be a valid phone number,verification is required)</label>
                    <input type="text" name="fone" class="form-control" required />
                </div> 
            </div>
            <div class="col-md-6">
                
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
                    <input type="text" id="user_name" onkeyup="checkusername();" name="username" class="form-control" required />
                  <span id="username_stg" class="nloader"></span>
                </div>
				
				<div class="form-group">
                    <label>Password<span id="req">*</span></label>
                    <input type="password" name="pswd" class="form-control" required />
                  
                </div>
                <div class="form-group">
                    <input type="submit" style="width:200px;" name="register" value="Register" class="btn btn-primary"  />
                </div>
            </div>
		
        </div>
        <hr/>
		</form>
        <div class="row">
            <div class="col-md-12">
                <ul class="alert alert-info" style="font-family:arial narrow">
                    <h4>Take Note</h4>
                    <li>Campus homes charges for booking accomodations on this platform,This accomodations <b>MAY</b> be reserved for you
                    for a period of 5-7 days for you to be able to make payment to the owner of the house after the expiration of the 5days booking period,
                     the accomodation will be released and can be booked by another client.</li>
                    <li>Campus homes do not collect cash from client,we work as a agents to connects you with house owners.All payments are done to the house owners.</li>
                    <li>PLease ensure before the full rent is paid,that an agent of campus homes is available as a witness as landlords are made to sign aggreements with Campus homes.</li>
                    <li>Campus homes agents are assigned based on their knowledge of the location of the accomodation and they are responsible for 
                        all deals within the area.</li>
                    <li>Campus homes is not liable for any transaction done without the knowledge of an agent.</li>
                </ul>
            </div>
        </div>
        </div>
</section>