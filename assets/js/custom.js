$(document).ready(function(){
		   
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
/**************************************** */
   
/*********************************************************** */
      function deactivate(){
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
      
      }

  });

