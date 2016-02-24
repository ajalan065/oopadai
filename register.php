<?php
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $usererr="";
    $passerr="";
    $fname=$_POST['form-first-name'];
    $lname=$_POST['form-last-name'];
    $user=$_POST['form-email'];
    $pass=$_POST['form-password'];
    $about=$_POST['form-about-yourself'];

    if(!empty($user))
      {
        if(preg_match("/[^A-Za-z0-9_.]@/", $user))
        {
          echo "<script type='text/javascript'>alert('Invalid email address');</script>";
          echo "<script type='text/javascript'>location.assign('index.html');</script>";
        }
        else
        {
          $usererr="success";
        }
      }
      if(!empty($pass))
      {
        if(preg_match('/[^A-Za-z0-9]/', $pass))
        {
          echo "<script type='text/javascript'>alert('Password should only have letters and digits');</script>";
          echo "<script type='text/javascript'>location.assign('index.html');</script>";
        }
        else $passerr="success";
      }
    }
    else {
      if($usererr=="success" && $passerr=="success")
      {
        $conn=mysql_connect("localhost", "root", "ajalan065");
        if(!$conn)
          echo "Server connection failed";
        else
        {
          $database="oopadai";
          $dbconn=mysql_select_db($database, $conn);
          if(!$dbconn) {
            echo "Could not coonect to db";
          }
          $sql="INSERT INTO Users (fname, lname, email, password, about) VALUES ('$fname', '$lname','$user', '$pass', '$about')";
          $_SESSION['form-email']=$user;
          $retval=mysql_query($sql, $conn);
            echo "<script type='text/javascript'>alert('working');</script>";
          if(!$retval)
          {
            echo "<script type='text/javascript'>alert('This email is already registered');</script>";
          }
          else
          {
            echo "<script type='text/javascript'>alert('You have been registered');</script>";
          }
        }
        mysql_close($conn);
      }
    }
