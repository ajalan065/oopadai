<?php
  session_start();
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $usererr="";
    $passerr="";
    $user=$_REQUEST['form-email'];
    $pass=md5($_REQUEST['form-password']);
echo md5($pass); echo "  ";
echo "0ba4439ee9a46d9d9f14";
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
          $sql="SELECT * FROM RUsers WHERE email='$user' AND password='$pass'";
		  
          $val=mysql_query($sql, $conn);
          $retval=mysql_fetch_assoc($val);
          if(!$retval) {
            echo "<script type='text/javascript'>alert('Invalid Email or password.');</script>";
          }
          else
            echo "<script type='text/javascript'>alert('Logged In');</script>";
          echo "<script type='text/javascript'>location.assign('index.html');</script>";
        }
        mysql_close($conn);
      }
    }
?>
