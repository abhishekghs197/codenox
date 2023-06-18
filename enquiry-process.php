<?php
ob_start();
session_start();
//require_once("PHPMailer/class.phpmailer.php");
//echo"<pre>post==";print_r($_POST); //exit;

if($_POST["name"]!='')

				{
				    
				    if(isset($_POST['g-recaptcha-response']) && ($_POST['g-recaptcha-response']!=""))
		{
		    $captcha = $_POST['g-recaptcha-response'];	
	   
			$response = VerifyRecaptcha($captcha); //exit;
			
			if($response==1)
			{
		
			    
$name 		        = 	$_POST['name'];
$email 		        = 	$_POST['email'];
$phone		        =	$_POST['phone'];
//$company_name	    =	$_POST['company_name'];
//$designation	    =	$_POST['designation'];
$solution_discuss   =   $_POST['solution_discuss'];
$subject		    = 	"Brands2be It Development Services Enquiry";
$to				    =	"mudit@brands2be.com,angshuman@niht-india.com";
$emailList          =   "nihtabhinaba@gmail.com";
$from			    =	"Brands2be It Development Services Enquiry <no-reply@brands2be.com>";
$headers		    .=	"from:".$from."\r\n";
$headers            .= "Bcc: $emailList\r\n";
$body               =   
"
Name: $name\r\n
Email: $email\r\n
Mobile No: $phone\r\n
Solution Discuss: $solution_discuss\r\n
";


$mail = mail($to, $subject, $body, $headers);

$_SESSION['error_check']=2;
$_SESSION['alert_msg']="Thanks, We will get back to you shortly.";
header("location:thank-you/");

}
			else
			{   
				
				$_SESSION[error_check]=2;
				$_SESSION[alert_msg]="Captcha is not verified! Please try again.";
				header("location:".$_SERVER['HTTP_REFERER']);
			}
			
}
else
{
            $_SESSION[error_check]=2;
			$_SESSION[alert_msg]="Captcha is not checked! Please try again.";
			header("location:".$_SERVER['HTTP_REFERER']);  
}



}
else

{
	$_SESSION[error_check]=2;
	$_SESSION[alert_msg]="Mandetory field should not blank.";
	header("location:".$_SERVER['HTTP_REFERER']);
	
	
 }



function VerifyRecaptcha($g_recaptcha_response)
{
    $ch = curl_init();
    $curlConfig = array(
        CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_POSTFIELDS     => array(
            'secret' => '6LdtnuMgAAAAADKCp7IPHQOAksp5oeOy39v-080H',
            'response' => $g_recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        )
    );
    curl_setopt_array($ch, $curlConfig);
	
    if($result = curl_exec($ch))
    {
        curl_close($ch);
		//echo"result===<pre>";print_r($result);
	
        $response = json_decode($result,true);
        // echo"res==".$response['success'];
	    //	die();
        return $response['success'];
        //return true;
    }else{
      //  var_dump(curl_error($ch)); // this for debug remove after you test it
        return false;
    }
 }




?>
