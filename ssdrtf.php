 <?php
         $to = "shahabmalikscholar@gmail.com, ims.hamid@gmail.com";
         $selectedProjects  = 'None';
         if(isset($_POST['projects']) && is_array($_POST['projects']) && count($_POST['projects']) > 0){
         $selectedProjects = implode(', ', $_POST['projects']);
         }
		// $check_list = $_POST['Traningcourse'];
		 $fname = $_POST['fname'];
		 $lname = $_POST['lname'];
		 $from = $_POST['from'];
		 $city = $_POST['city'];
		 $country = $_POST['country'];
		 $sp = $_POST['sp'];
		 $zr = $_POST['zr'];
		 $company = $_POST['company'];
		 $job = $_POST['job'];
		 $managemnet = $_POST['management'];
		 $tel = $_POST['tel'];
		 $telex = $_POST['telex'];
        // $message = "Course: ".$_POST['Traningcourse']."<br/>Name: ". $_POST['fname']." ".$_POST['lname']."<br/>Email: "
         $message = "Course: ".$selectedProjects."<br/>Name: ". $_POST['fname']." ".$_POST['lname']."<br/>Email: "
		 .$_POST['from']."<br/>City: ".$_POST['city']."<br/>Country: ".$_POST['country']."<br/>State/Province: "
		 .$_POST['sp']."<br/>Zip/Reg: ".$_POST['zr']."<br/>Company: ".$_POST['company']."<br/>Job: "
		 .$_POST['job']."<br/>Management: ".$_POST['management']."<br/>Mobile: ".$_POST['tel']." / ".$_POST['telex']."<br/>Message: ".$_POST['message'];
		 $subject = "Contact Us Get In Touch RCMSPS";
         
         $header .= "From:$fromname $from.\r\n";
         $header .= "Cc:reg@rcmsps.com \r\n"; 
       // $header .= "Cc:muhommadraahim1@gmail.com \r\n"; 
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html; charset=ISO-8859-1\r\n";
         $header .= "X-Priority: 3\r\n";
         $header .= "X-Mailer: PHP". phpversion() ."\r\n";
$retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include 'Thankyou.html';
         }
	else {
            echo "Message could not be sent...";
         }

         
          
    
      ?>