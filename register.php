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
	$tags=$_POST['form-tags'];
	//$target = "images/"; 
	//$target = $target . basename( $_FILES['image']['name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
	$pic=$_FILES["image"]["name"];
	//$pic=($_FILES['image']['name']); 
	if($pass==$pass2){ 
		
        $conn=mysql_connect("localhost", "root", "");
        if(!$conn)
          echo "Server connection failed";
        else
        {
          $database="oopadai";
          $dbconn=mysql_select_db($database, $conn);
		  
          if(!$dbconn) {
            echo "Could not conect to database server";
          }
		  else {
			  $check="SELECT EMAIL FROM rusers WHERE EMAIL='$user'";
			  $val=mysql_query($check, $conn);
			  if(mysql_num_rows($val)>=1) {
				  echo "<script type='text/javascript'>alert('This email is already registered');</script>";
			  }
			  else {
			    $sql="INSERT INTO rusers (FNAME, LNAME, EMAIL, PASSWORD, ABOUT, TAGS, IMAGE) VALUES ('$fname', '$lname','$user', md5('$pass'), '$about', '$tags', '$pic')";
			    mysql_query($sql, $conn);
				echo "<script type='text/javascript'>alert('You have been registered');</script>";
			  }
			  $search=mysql_query("SELECT TAGS FROM stags;", $conn);
			  foreach(explode("," , $tags) as $rows) {
					  mysql_query("INSERT INTO stags (TAGS, EMAIL) VALUES('$rows', '$user')", $conn);

			  }
		  }
        }
		
	}
	else {
		echo "<script type='text/javascript'>alert('Please confirm the same password');</script>";
	}
	session_destroy();
			echo "<script type='text/javascript'>location.assign('index.html');</script>";
        mysql_close($conn);
      }
?>
