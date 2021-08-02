<?php
//session code 
include "php/config.php";
if((isset($_POST['login']))){
 
    $email = $_POST['email'];
    $password=$_POST['pass'];
    
    $query ="SELECT *FROM submission WHERE email='$email' && pass='$password'";
    $fire =mysqli_query($con,$query) or die("no" .mysqli_error($con));
  
  if($fire){
      if(mysqli_num_rows($fire)>0){
        session_start();
        $_SESSION['is_login']=true;
        $_SESSION['email']=$email;
        header("Location:basao.php");
  }else{   
          echo '<script type="text/javascript">';
          echo 'alert("invalid email and password");';
          echo 'window.location.href="inbastf.php"';
      echo '</script>';
   }

    }
  }

?>