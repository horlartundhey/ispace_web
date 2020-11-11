<?php 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require '../vendor/autoload.php'; 
$mail = new PHPMailer(true);

const MAIL_SMTP_HOST = "smtpout.secureserver.net";
const MAIL_SMTP_USERNAME = "info@proxynetgroup.com";
const MAIL_SMTP_PASSWORD = "infoo";
const MAIL_SMTP_PORT = "80";
const MAIL_IS_SMTP = true;
const MAIL_ENABLE_SMTP_AUTH = true;
const MAIL_SMTP_SECURITY = '';
const MAIL_SMTP_DEFAULT_FROM_EMAIL = "info@proxynetgroup.com";
const MAIL_SMTP_DEFAULT_FROM_NAME = "Proxynet Communications";    
const WEBMASTER_EMAIL = 'christiana@proxynetgroup.com';

const ADMIN_EMAIL = 'info@proxynetgroup.com';    


$mail->SMTPDebug = 0;                                        
$mail->isSMTP();                                                                 
$mail->Host       =  MAIL_SMTP_HOST;                     
$mail->SMTPAuth   = MAIL_ENABLE_SMTP_AUTH;                              
$mail->Username   = MAIL_SMTP_USERNAME;                  
$mail->Password   = MAIL_SMTP_PASSWORD;                         
$mail->SMTPSecure = MAIL_SMTP_SECURITY; 


$mail->SMTPOptions = array(
  'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
  )
);



$mail->Port       = MAIL_SMTP_PORT;   
$mail->isHTML(true);                                   
$mail->addReplyTo("noreply@proxynetgroup.com", "noreply");
$mail->setFrom('info@proxynetgroup.com'); 
?>