<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 25; // set the SMTP port for the GMAIL server
$mail->Username = "pete199599@gmail.com"; // GMAIL username
$mail->Password = "peet991995"; // GMAIL password
$mail->From = "webmaster@thaicreate.com"; // "name@yourdomain.com";
$mail->FromName = "pete";  // set from Name
$mail->Subject = "สวัสดีครับ ทดสอบการส่งเมล์ครับ"; 
$mail->Body = 'ทดสอบการส่งเมล์ครับ body ครับ';
 
$mail->AddAddress('kanawat320@gmail.com'); // to Address
 
$mail->set('X-Priority', '3'); //Priority 1 = High, 3 = Normal, 5 = low
if(!$mail->Send()) 
{
    echo 'Mailer Error: ' . $mail->ErrorInfo.'<br />';
} 
else 
{
    echo 'Message has been sent<br />';
}
?>
