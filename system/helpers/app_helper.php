<?php
function newdestination(){
	$dest="
				
											<h5 style='display:block;text-align:center;font-family:verdana;'>Destination Details</h5>
											<hr/>
											
											Organization Name<span style='color:red'>*</span>
											<input name='org_name' placeholder='Enter organization name'   class='common-input mb-20 form-control' required='' type='text'>
											<br/>
											Organization Email<span style='color:red'>*</span>
											<input name='org_email' placeholder='Organization Email'   class='common-input mb-20 form-control' required='' type='email'>
											<br/>
											<label style='margin:0px;'>Organization Country<span style='color:red'>*</span></label>
											
											<select name='org_country' class='form-control' placeholder='country' id='destination'>
												<option>please select</option>
												<option value='1'>Nigeria</option>
												<option value='0'>Outside Nigeria</option>
												
											</select>
											<br/>	
											Organization Address<span style='color:red'>*</span>:<textarea name='org_addrs' placeholder='Enter address' class='common-input mb-20 form-control' required ></textarea>
											<br/>
										
	";
	return $dest;
}

function GetProgDetails($id,$conn){
$seldept = mysqli_query($conn,"SELECT * FROM programme_tb WHERE ProgID = '$id'");//decode programme id
			$rowdept=mysqli_fetch_array($seldept);
return $rowdept['ProgName'];
}
function uniqidReal($lenght = 10) {
    // uniqid gives 13 chars, but you could adjust it to your needs.
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}

function process_for_bankIT($transId,$amount,$descr){
	// test data
				$time = time();
				$terminalId = "0000000001"; 
				//$responseurl = "http://localhost:8080/responseBankIT.php";
				//$notification = "http://localhost:8080/responseBankIT.php";
				$responseurl =  site_url('notification/notify');
				$notification =site_url('notification/notify');
				$secret_key="DEMO_KEY";
				$str=$amount.$terminalId.$transId.$responseurl.$secret_key;
				$checksum=hash("sha256" ,$str);
				$logourl = base_url()."assets/img/logo2.png";
				////////////////////////////////
				 $gateway_data=array(
						'terminalid'=>$terminalId,
                        'transnum'=>$transId,
                        'amt'=>$amount,
                        'descr'=>$descr,
                        'checksum'=>$checksum,
                        'responseurl'=>$responseurl,
                        'notificationurl'=>$notification,
                       'logo'=>$logourl
                       );
					   
	return $gateway_data;
}
function process_for_vogue($transId,$amount,$descr,$phone,$name,$email){
	// test data
				$currency="NGN";
				$item_1=$descr;
				$descr_1=$descr."payment Via Vogue pay";
				$total=$amount;
				$success_url  = site_url('notification/sucess');
				$fail_url   = site_url('notification/failure');
				$developer_code = "TaliaEssien1";
				$price_x=$amount;
				$v_merchant_id ="DEMO";
				$memo = "AKSU Transcript fee :".$amount;
				$merchant_ref = $transId;
				$notify_url=site_url('notification/notify');
				////////////////////////////////
				
	
	
				 $gateway_data=array(
						'v_merchant_id'=>$v_merchant_id,
						'merchant_ref'=>$merchant_ref,
                        'currency'=>$currency,
                        'total'=>$total,
                        'success_url'=>$success_url,
                        'fail_url'=>$fail_url,
                        'developer_code'=>$developer_code,
						'memo'=>$memo,
						'phone'=>$phone,
						'name'=>$name,
						'email'=>$email,
						'item_1'=>$item_1,
						'descr'=>$descr_1,
						'notify_url'=>$notify_url
						
						
                       );
					   
	return $gateway_data;
}
function decode_pro_status($status_id){
	switch ($status_id) {
    case 1:
     $code="Order Received";
	 
	break;
	
    case 2:
		  $code="Processing/collating Results";
        break;
		
   case 3:
		  $code="Transcript compiled";
        break;
		
	case 4:
		  $code="Transcript forwarded for Approval";
        break;
	case 5:
		  $code="Transcript en-route destination";
        break;
	case 6:
		  $code="Transcript Delivered";
        break;	
		
    default:
        echo"Invalid status error,PLease contact ICT";
	}
	
	return $code;
}
function status_text($name,$status_id){
	switch ($status_id) {
    case 1:
     $msg="Dear {$name} your transcript order has been recieved.Best regards";
	 
	break;
	
    case 2:
		  $msg="Dear {$name} your Transcript request is in the result collation stage.Best regards";
        break;
		
   case 3:
		  $msg="Dear {$name} your Transcript request is currently being compilled.Best regards";
        break;
		
	case 4:
		  $msg="Dear {$name} your Transcript is forwarded for Approval.Best regards";
        break;
	case 5:
		  $msg="Dear {$name} your Transcript en-route destination.Best regards";
        break;
	case 6:
		  $msg="Dear {$name} your Transcript has been Delivered.Best regards";
        break;	
		
    default:
        echo"Invalid status error,PLease contact ICT";
	}
	
	return $msg;
}
//this function checks if the user has already made order for the transcript or has a pending transcript order that is being treated and alerts user

function useHTTPGet($messagetext, $recipients) {
	//$url,
	$username='meetmontero@gmail.com';
	$apikey='91c2e5470d1c17a5663a8c303b18fcc039d9f14d';
	$flash=0;
	$url = "http://api.ebulksms.com:8080/sendsms";
	$sendername="AKSU";
    $query_str = http_build_query(
	array(
	'username' => $username,
	'apikey' => $apikey,
	'sender' => $sendername, 
	'messagetext' => $messagetext,
	'flash' => $flash,
	'recipients' => $recipients
	)
		);
		if(file_get_contents("{$url}?{$query_str}")==FALSE){
			//echo "cant fetch sms api,check network";
		}else{
			 return file_get_contents("{$url}?{$query_str}");
		}
   
}

function SetUpDrive(){
//session_start();
$url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$url = $url_array[0];



//require_once base_url().'google-api-php-client/autoload.php';
//require_once base_url().'google-api-php-client/src/Google_Client.php';

$client = new Google_Client();
$client->setClientId('1091603694757-tj85fqmlobcitnn1itidnf9fc77kdanv.apps.googleusercontent.com');
$client->setClientSecret('g3syT7Vu6m7Tm-GzvT_EMkGt');

$client->setRedirectUri($url);
$client->setScopes(array('https://www.googleapis.com/auth/drive'));
if (isset($_GET['code'])) {
	echo $client->authenticate($_GET['code']);
    $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
	
    header('location:'.$url);exit;
} elseif (!isset($_SESSION['accessToken'])) {
    $client->authenticate();
}
/* $files= array();
$dir = dir('files');
while ($file = $dir->read()) {
    if ($file != '.' && $file != '..') {
        $files[] = $file;
    }
}
$dir->close(); */	
return ;
}


function SaveInDrive($file_name,$directory=''){
	if($directory==''){
			$direct ='archive/';
	}else
	{
		$direct =$directory."/";
	}

	if (!empty($_POST)) {
    $client->setAccessToken($_SESSION['accessToken']);
    $service = new Google_DriveService($client);
	
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
   // $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file = new Google_DriveFile();
  //  foreach ($files as $file_name) {
        $file_path = $direct.$file_name;
        $mime_type = finfo_file($finfo, $file_path);
        $file->setTitle($file_name);
        $file->setDescription('This is a '.$mime_type.' document');
        $file->setMimeType($mime_type);
        $service->files->insert(
            $file,
            array(
                'data' => file_get_contents($file_path),
                'mimeType' => $mime_type
            )
        );
  //  }
    finfo_close($finfo);
    header('location:'.$url);exit;
}

	
}
function save_to_drive($file_name,$directory=''){
	SetUpDrive();
	SaveInDrive($file_name,$directory='');
	return;
}


function phpmailer($name,$sender,$receiver,$body,$filename)
{
		$this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
	try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->SMTPOptions = array(
										'ssl' => array(
										'verify_peer' => false,
										'verify_peer_name' => false,
										'allow_self_signed' => true
										)
									);
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'ubonge80@gmail.com';                 // SMTP username
		    $mail->Password = 'imaobong';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		    //Recipients
		    $mail->setFrom('USEREMAIL', $sender);
		    $mail->addAddress('RECEIPIENTEMAIL01', $receiver);     // Add a recipient
		    $mail->addAddress('RECEIPIENTEMAIL02','webmaster@aksu.edu.ng');               // Name is optional
		    //$mail->addReplyTo('RECEIPIENTEMAIL03', 'Ganesha');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			  $mail->AddAttachment(base_url().'/archive/'.$filename, $name,  $encoding = 'base64', $type = 'application/msword');
			  $mail->AddAttachment(base_url().'/archive/'.$filename, $name,  $encoding = 'base64', $type = 'application/pdf');
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Transcript of '.$name;
		    $mail->Body    = $body;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

	function prep_passport($passport){
		$passport = "UserImages/Student/AK11_NAS_CSC_001.jpeg?452378929082";

			$p = explode("/",$passport);
			if(in_array($p,'Student')){

				echo "student";

			}else if(in_array($p,'PUTME')){
				echo "PUTME";

			}

			$x = substr($passport ,strpos($passport, '?'));
 
	}

	function prep_num($digit){
		$s = strlen($digit);
		switch ($s) {
		case 1:
		 $code="000";
		 
		break;
		
		case 2:
			  $code="00";
			break;
			
	   case 3:
			  $code="0";
			break;
			
		default:
		$code = $digits;
		}
		
		return $code;
	}
?>