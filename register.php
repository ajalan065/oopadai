<?php
    session_start();
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $fname=$_POST['form-first-name'];
    $lname=$_POST['form-last-name'];
    $user=$_POST['form-email'];
    $pass=$_POST['form-password'];
	$pass2=$_POST['form-confirm'];
    $about=$_POST['form-about-yourself'];
	if($pass==$pass2){ 
		
        $conn=mysql_connect("localhost", "root", "ajalan065");
        if(!$conn)
          echo "Server connection failed";
        else
        {
			echo "Connected";
          $database="oopadai";
          $dbconn=mysql_select_db($database, $conn);
		  
          if(!$dbconn) {
            echo "Could not coonect to db";
          }
		  else {
			  $check="SELECT EMAIL FROM Users WHERE EMAIL='$user'";
			  $val=mysql_query($check, $conn);
			  if(mysql_num_rows($val)>=1) {
				  echo "<script type='text/javascript'>alert('This email is already registered');</script>";
			  }
			  else {
			    $sql="INSERT INTO Users (FNAME, LNAME, EMAIL, PASSWORD, ABOUT) VALUES ('$fname', '$lname','$user', '$pass', '$about')";
			    $retval=mysql_query($sql, $conn);
				echo "<script type='text/javascript'>alert('You have been registered');</script>";
			  }
		  }
        }
		
	}
	else {
		echo "<script type='text/javascript'>alert('Please confirm the same password');</script>";
	}
	session_destroy();
		echo "<script type='text/javascript'>location.assign('index.php');</script>";
        mysql_close($conn);
      }
?>
