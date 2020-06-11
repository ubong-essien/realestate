	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="<?= base_url()?>assets/img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="<?= base_url()?>assets/img/logo2.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="<?= $settings[0]['facebook']?>"><i class="fa fa-facebook"></i></a>
						<a href="<?= $settings[0]['twitter']?>"><i class="fa fa-twitter"></i></a>
						<a href="<?= $settings[0]['facebook']?>"><i class="fa fa-instagram"></i></a>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i><?= "Uyo, Akwa Ibom State";?> </p>
						<p><i class="fa fa-phone"></i><?= $settings[0]['phone']?></p>
						<p><i class="fa fa-envelope"></i><?= $settings[0]['email']?>m</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="<?= site_url();?>">Home</a></li>
						<li><a href="">Featured Listing</a></li>
						<li><a href="<?= site_url('home/about_us')?>">About us</a></li>
						<li><a href="<?= site_url('home/contact')?>">contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url();?>assets/js/masonry.pkgd.min.js"></script>
	<script src="<?= base_url();?>assets/js/magnific-popup.min.js"></script>
	<script src="<?= base_url();?>assets/js/main.js"></script>
	<script src="<?= base_url();?>assets/js/img_upload.js"></script>
	
	<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="//voguepay.com/js/voguepay.js"></script>
	<script>
   // Voguepay.init({form:'payform'});
	</script>
          
	 <script type="text/javascript">
 
   $(document).ready(function(){

	$('#reportn').DataTable(); 

		  $('#sch_type').change(function(e){
			 
			   var sch_type =  $('#sch_type').val();
			// alert(sch_type);
			 e.preventDefault();
			   if(sch_type){
				$.ajax({ 
					type:'POST',
					url:'school/show_schools',
					data:'sch_type='+sch_type,
					success:function(html){
						//alert(html);
						$('#sch').html(html);
						
					}
				}); 
			}else{
			   alert('School type not found');
				} 
			  
			  
		  })

/***************************************************** */
		  $('#acc_type').change(function(e){
      
	  var accom_type = $('#acc_type').val();
	  
		if(accom_type >= 3){
		  var x=$('#booking_fee').val('2000');
		  console.log(x);
		
		}else if(accom_type <= 2){
		  
		  var x=$('#booking_fee').val('1500');
		  console.log(x);
		}
	  
	  
	  });
 /*****************************************************************************/
			 $('#sch').change(function(e){
			
			 var sch =  $('#sch').val();
			  e.preventDefault();
			   if(sch){
				$.ajax({ 
					type:'POST',
					url:'locality/show_locality',
					data:'sch='+sch,
					success:function(html){
						$('#locate').html(html);
						
					}
				}); 
			}else{
			   alert('no locality available');
				} 
			  
			  
		  })
  /****************************************************************************/  
		 $('#search').submit(function(e){
			
			 var acc_type =  $('#acc_type').val();
			 var locate =  $('#locate').val();
			// var min =  $('#bud_min').val();
			 var max =  $('#bud_max').val();
			 //alert(max);
			  e.preventDefault();
			  //return;
			   //if(sch){
				$.ajax({ 
					type:'POST',
					url:'accomodation/show_accomodation',
					data:{'acc_type': acc_type ,'locate': locate ,'max': max },
					success:function(html){
						//alert(html);
						$('#stg').html(html);
						
					}
				}); 
			//}else{
			//   alert('course not found');
			//	} 
			  
			  
		  })
	/*************************************************************************/
					$('#to_checkout').submit(function(e){
												
												var item =  $('#single_item_id').val();
												e.preventDefault(e);
												//alert(item);
												//return;
												//if(sch){
												$.ajax({ 
													type:'POST',
													url:'<?= site_url('cart/to_cart');?>',
													data:'item_id='+item,
													success:function(html){
														console.log(html);
													//	return;
														$('#item_in_cart').html(html);
														
														
													}
												}); 
											//}else{
											//   alert('course not found');
											//	} 
												
												
											});	

	function addloader(){

	$('.loader').removeClass('fa-upload');
	$('.loader').addClass('fa-cog fa-spin');
	}
	function removeloader(){
	$('.loader').removeClass('fa-cog fa-spin');
	$('.loader').addClass('fa-upload');

	}
	function addnewloader(){

	
	$('.nloader').addClass('fa-cog fa-spin');
	}
	function removenewloader(){
	
	$('.nloader').removeClass('fa-cog fa-spin');

	}
		$("#uploadimage").submit(function(e){
		addloader();
		e.preventDefault();
			var formData = new FormData($(this)[0]);
			var rec_data =$('#record_id').val();
			formData.append('record_id',rec_data);
			//console.log(formData.values());
			//return;
				$.ajax({
				type: "POST",
				url: "<?= base_url('agents/upload_handler')?>", // Url to which the request is send
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type "used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(html)   // A function to be called if request succeeds
				{
					removeloader();
				$('#message').html(html);
				}
			}); 

		});
		/**************************************************** */
		$(".uploadsingleimage").submit(function(e){
		
		//alert("jhfds");
		addloader();
		//return;
		e.preventDefault(e);
		 	var formData = new FormData($(this)[0]);
			var rec_data =$('#record_id').val();
			var img_name =$('.upload_btn').val();
			alert(img_name);
			return;
			formData.append('record_id',rec_data);
			formData.append('img_name',img_name);
			//console.log(formData.values());
			//return;
				$.ajax({
				type: "POST",
				url: "<?= base_url('agents/edit_upload_handler')?>", // Url to which the request is send
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type "used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(html)   // A function to be called if request succeeds
				{
					console.log(html);
					removeloader();
				//$('#message').html(html);
				}
			});  

		});
/************************************************* */	 
/* $("#uploadimage2").submit(function(e){
		addloader();
		e.preventDefault();
			var formData = new FormData($(this)[0]);
			var rec_data =$('#record_id').val();
			formData.append('record_id',rec_data);
			//console.log(formData.values());
			//return;
				$.ajax({
				type: "POST",
				url: "<?= base_url('agents/upload_handler2')?>", // Url to which the request is send
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type "used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(html)   // A function to be called if request succeeds
				{
					console.log(html);
				//$("#message").html(data);
			// setTimeout($('#modal').modal('hide'), 3000);

				}
			}); 

		});
/************************************************* 	
$("#uploadimage3").submit(function(e){
		addloader();
		e.preventDefault();
			var formData = new FormData($(this)[0]);
			var rec_data =$('#record_id').val();
			formData.append('record_id',rec_data);
			//console.log(formData.values());
			//return;
				$.ajax({
				type: "POST",
				url: "<?= base_url('agents/upload_handler3')?>", // Url to which the request is send
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type "used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(html)   // A function to be called if request succeeds
				{
					console.log(html);
				//$("#message").html(data);
			// setTimeout($('#modal').modal('hide'), 3000);

				}
			}); 

		});
/************************************************* *
$("#uploadimage4").submit(function(e){
		addloader();
		e.preventDefault();
			var formData = new FormData($(this)[0]);
			var rec_data =$('#record_id').val();
			formData.append('record_id',rec_data);
			//console.log(formData.values());
			//return;
				$.ajax({
				type: "POST",
				url: "<?= base_url('agents/upload_handler4')?>", // Url to which the request is send
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type "used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(html)   // A function to be called if request succeeds
				{
					console.log(html);
				//$("#message").html(data);
			// setTimeout($('#modal').modal('hide'), 3000);

				}
			}); 

		});
/************************************************* **/	
$("#register-form").submit(function(e){
		addloader();
		e.preventDefault();
			var regdata = $("#register-form").serialize();
			alert(regdata);
				$.ajax({
				type: "POST",
				url: "<?= base_url('users/process_register');?>", // Url to which the request is send
				data: regdata, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				success: function(html)   // A function to be called if request succeeds
				{
					//console.log(html);
				$("#stg_reg").html(html);
			// setTimeout($('#modal').modal('hide'), 3000);

				}
			}); 

		}); 
/************************************************* */

/************************************************* */	 

});
/*******************************************/
function del_item(del_id){
							//alert(del_id);
												//if(sch){
							$.ajax({ 
							type:'POST',
							url:'<?= site_url('cart/del_item');?>',
							data:'key='+del_id,
							success:function(html){
							var url = '<?php echo site_url('cart/checkout/');?>';
							var ful_url = url + html;
							alert(ful_url);
							$(location).attr('href',ful_url);
							//	$('#chk').html(html);			
										}
							}); 
} 

	function checkusername(){
		//alert('running');
							var user = $('#user_name').val();
							addnewloader();
							$.ajax({ 
							type:'POST',
							url:'<?= site_url('users/checkusername');?>',
							data:'user='+user,
							success:function(html){
							removenewloader();
								$('#username_stg').html(html)
										}
							}); 
	} 
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		/******************************* */
function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#li_img1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
			/******************************* */
		function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#li_img2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
		}
				/******************************* */
			function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#li_img3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
		}
				/******************************* */
			function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#li_img4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
		}
				/******************************* */
			function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#li_img5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
		}
		//activator
function activate(id){
	$('#deact').attr('disabled:disabled');
	// alert(id);
	// return;
	 $.ajax({ 
		 type:'POST',
		 url:'<?= site_url('admin/activate_agents');?>',
		 data:'agentid='+id,
		 success:function(html){
			$('#msg').html(html);
			var urlx = '<?php echo site_url('all_agents');?>';
			setTimeout($(location).attr('href',urlx),1000);
		 }
				}); 

}
function deactivate(id){
	//alert(id);
	$('#act').attr('disabled:disabled');
	 $.ajax({ 
		 type:'POST',
		 url:'<?= site_url('admin/deactivate_agents');?>',
		 data:'agentid='+id,
		 success:function(html){
			 $('#msg').html(html);
			 var urlx = '<?php echo site_url('all_agents');?>';
			 setTimeout($(location).attr('href',urlx),1000);
			
		 }
				}); 

}
function savesms(){
	//e.preventDefault();
	var v = $('#sms_title').val();
	var r = $('#sms_txt').val();
	//alert(v);
	
	//return;
	 $.ajax({ 
		 type:'POST',
		 url:'<?= site_url('message_sms/save_sms');?>',
		 data:{'sms_title': v,'sms_txt': r},
		 success:function(html){
			 $('#msg').html(html);
			 var urlx = '<?php echo site_url('send_message');?>';
			 setTimeout($(location).attr('href',urlx),1000);
			
		 }
				}); 

}
</script>
</body>
</html>