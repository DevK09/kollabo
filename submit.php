<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$reffer_id=substr(str_shuffle("0123456789aceftQWERTYUIOPASDFGHJKLZXCVBNM"), 0, 6);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$count=0;
	session_start();
	if(isset($_POST['comment'])){
	$comment=mysqli_real_escape_string($con,$_POST['comment']);
	}else{
	$comment="";
	}	
	if(isset($_POST['refferal'])){
	$refferal_from=mysqli_real_escape_string($con,$_POST['refferal']);
	}else{
	$refferal_from=0;
	}
	

	$query = mysqli_query($con,"INSERT INTO `user_tbl`(`username`,`email`, `mobile`, `reffer_id`, `count`, `comment`) VALUES ('$name','$email','$mobile','$reffer_id','$count','$comment')");
	$msg="We appreciate your interest!";
	if($query){
		$link = "https://kollabo.in/notify.php?refferal=$reffer_id";
	}else{
		$msg="Something went wrong. Please try again later.";
	}
	if($refferal_from!=0 && $refferal_from != "CONTACT FORM"){
		$count=1;
		$refferal_from=mysqli_fetch_assoc(mysqli_query($con,"select * from user_tbl where reffer_id='$refferal_from'"));
		$refferal_from=$refferal_from['id'];
		mysqli_query($con,"update user_tbl set count=count+1 where id='$refferal_from'");
	}

	$html="<!doctype html><html><head><meta name='viewport' content='width=device-width,initial-scale=1'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><title>KOLLABO</title><style>@media only screen and (max-width:620px){table.body h1{font-size:28px!important;margin-bottom:10px!important}table.body a,table.body ol,table.body p,table.body span,table.body td,table.body ul{font-size:16px!important}table.body .article,table.body .wrapper{padding:10px!important}table.body .content{padding:0!important}table.body .container{padding:0!important;width:100%!important}table.body .main{border-left-width:0!important;border-radius:0!important;border-right-width:0!important}table.body .btn table{width:100%!important}table.body .btn a{width:100%!important}table.body .img-responsive{height:auto!important;max-width:100%!important;width:auto!important}}@media all{.ExternalClass{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}.apple-link a{color:inherit!important;font-family:inherit!important;font-size:inherit!important;font-weight:inherit!important;line-height:inherit!important;text-decoration:none!important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e!important}.btn-primary a:hover{background-color:#34495e!important;border-color:#34495e!important}}</style></head><body style='background-color:#f6f6f6;font-family:sans-serif;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%'><span class='preheader' style='color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0'>Thank you for signing up $name.</span><table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;background-color:#f6f6f6;width:100%' width='100%' bgcolor='#f6f6f6'><tr><td style='font-family:sans-serif;font-size:14px;vertical-align:top' valign='top'>&nbsp;</td><td class='container' style='font-family:sans-serif;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;margin:0 auto' width='580' valign='top'><div class='content' style='box-sizing:border-box;display:block;margin:0 auto;max-width:580px;padding:10px'><table role='presentation' class='main' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;background:#fff;border-radius:3px;width:100%' width='100%'><tr><td class='wrapper' style='font-family:sans-serif;font-size:14px;vertical-align:top;box-sizing:border-box;padding:20px' valign='top'><table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;width:100%' width='100%'><tr><td style='font-family:sans-serif;font-size:14px;vertical-align:top' valign='top'><p style='font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px'>Dear $name,</p><p style='font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px'>Welcome to our platform! We're excited to have you on board, and we can't wait to see what you'll achieve as a part of our community. Let's create something amazing together! <br><br>Share it with your friends!<br /><br /></p><table role='presentation' border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;box-sizing:border-box;width:100%' width='100%'><tbody><tr><td align='left' style='font-family:sans-serif;font-size:14px;vertical-align:top;padding-bottom:15px' valign='top'><table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;width:auto'><tbody><tr><td style='font-family:sans-serif;font-size:14px;vertical-align:top;border-radius:5px;text-align:center;background-color:#3498db' valign='top' align='center' bgcolor='#3498db'><a href='$link' target='_blank' style='border:solid 1px #3498db;border-radius:5px;box-sizing:border-box;cursor:pointer;display:inline-block;font-size:14px;font-weight:700;margin:0;padding:12px 25px;text-decoration:none;text-transform:capitalize;background-color:#3498db;border-color:#3498db;color:#fff'>Refer Now</a></td></tr></tbody></table></td></tr></tbody></table><p style='font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px'>$link</p><p style='font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px'>Regards,<br>Team Kollabo</p></td></tr></table></td></tr></table><div class='footer' style='clear:both;margin-top:10px;text-align:center;width:100%'><table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;width:100%' width='100%'><tr><td class='content-block' style='font-family:sans-serif;vertical-align:top;padding-bottom:10px;padding-top:10px;color:#999;font-size:12px;text-align:center' valign='top' align='center'><span class='apple-link' style='color:#999;font-size:12px;text-align:center'>The Creative hub for creators to network & collaborate. </span>Don't like these emails? <a href='' style='text-decoration:underline;color:#999;font-size:12px;text-align:center'>Unsubscribe</a>.</td></tr><tr></tr></table></div></div></td><td style='font-family:sans-serif;font-size:14px;vertical-align:top' valign='top'>&nbsp;</td></tr></table></body></html>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->CharSet = 'UTF-8';
	$mail->Username="contact@kollabo.in";
	$mail->Password="loxfdrpczzhppxmz";
	$mail->SetFrom('contact@kollabo.in', 'Kollabo');
	$mail->addAddress("$email");
	$mail->IsHTML(true);
	$mail->Subject="Hey Creator!👋";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>true
	));
	if($mail->send()){
		//echo "Mail send";
		echo "<script>alert('Thanks! We'll notify you when our website is ready)</script>";
	}else{
		//echo "Error occur";
		echo "<script>alert('Unexpected Error.. Try again later')</script>";

	}
	echo $msg;
}
?>