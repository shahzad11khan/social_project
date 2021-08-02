<?php
//include "php/config.php";
session_start();
if((isset($_POST['singup']))){

    $firstname = $_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
	$username=$_POST['uname'];
    $password=$_POST['pass'];
    
    
    $query="INSERT INTO submission(fname,lname,email,uname,pass)
    value('$firstname','$lastname','$email','$username','$password')";

    $fire=mysqli_query($con,$query) or die ("not send your data".mysqli_error($con));

    if($fire){
       // echo "data sumbited";
        header('location:upbastf.php');
    }
    else{
        echo "<script>alert('something wrong!!')</script>";
    }
    
}  
?>