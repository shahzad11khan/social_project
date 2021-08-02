<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['singup']) ){
	
    $firstname = $_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
	$username=$_POST['uname'];
    $password=$_POST['pass'];
    

	require ('PHPMailer\PHPMailer.php');
    require ('PHPMailer\SMTP.php');
    require ('PHPMailer\Exception.php');

    
	$mail= new PHPMailer(true);
  try {
 $mail->SMTPDebug = 0; 
 $mail->isSMTP();
 $mail->Host="smtp.gmail.com";
 $mail->SMTPAuth =true;
 $mail->Username="shahabmalikonline@gmail.com";
 $mail->Password='malakzaidonline';
 $mail->Port=465;
 $mail->SMTPSecure='ssl'; 
	
 $mail->isHTML(true);
 $mail->setFrom($email,$username);
 $mail->addAddress('shahabmalikonline@gmail.com', 'recivername'); 
 $mail->Subject = 'Here is the subject'.$name;
 $mail->Body    = 'This is '.$firstname.' '.$lastname.'.<br> Email :'.$email.'.<br> Username is : '.$username.'. <br> password is : '.$password.'
. <br> <a href="http://localhost/social/inbastf.php" alt="button not work"><input type="submit" value="RESPONSE"/></a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'.$subject;
	

		$mail->send();
    	//echo " email is send";
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  } 
}
	?>