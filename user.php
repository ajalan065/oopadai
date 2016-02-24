<?php
  session_start();
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $usererr="";
    $passerr="";
    $user=$_POST['form-email'];
    $pass=$_POST['form-password'];

      if(!empty($user))
      {
          $usererr="success";
      }
      if(!empty($pass))
      {
        $passerr="success";
      }

      if($usererr=="success" && $passerr=="success")
      {
        $conn=mysql_connect("localhost", "root", "ajalan065");
        if(!$conn)
          echo "<script type='text/javascript'>alert('Server connection failed');</script>";
        else
        {
          $database="oopadai";
          mysql_select_db($database, $conn);
          $sql="SELECT * FROM Users WHERE email='$user' AND password='$pass'";
		  
          $val=mysql_query($sql, $conn);
          $retval=mysql_fetch_assoc($val);
          if(!$retval) {
            echo "<script type='text/javascript'>alert('Invalid Email or password.');</script>";
          }
          else
            echo "<script type='text/javascript'>alert('Logged In');</script>";
          echo "<script type='text/javascript'>location.assign('index.php');</script>";
        }
        mysql_close($conn);
      }
    }
?>
