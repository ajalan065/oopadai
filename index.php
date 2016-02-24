<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript">
      function setVisibility(id, visibility, id2, visibility2) {
        document.getElementById(id).style.display = visibility;
        document.getElementById(id2).style.display = visibility2;
}
    </script>
    <style type="text/css">
    #register{
        display: none;
    }
    a:hover {
        cursor: pointer;
    }
     .con {
      width:1100px;
      margin:auto;
    }
    body {
      background-color:#74AFAD;
    }
    #head > a {
      font-family: Tahoma, Geneva, sans-serif;
      text-shadow: 2px 2px 5px gray;
      font-weight: bold;
      font-size: 2em;
      color: #4682B4;

    }
    #head > a:hover {
      border-bottom: none;
    }
    </style>
    </head>

    <body>
    <div class="my-topnav my-card my-top my-light-grey" id="head">
    <a href="http://oopadai.com/" ><img src="images/logo.png" style="height: 100%; width: 1.5em;" />Oopadai</a>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="float: right;">
      <li role="presentation"><a href="http://oopadai.com/" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">About Us</a></li>
      <li role="presentation"><a href="http://oopadai.com/packages.php" aria-controls="messages" role="tab" data-toggle="tab">Packages</a></li>
      <li role="presentation"><a href="http://oopadai.com/coming.php" aria-controls="settings" role="tab" data-toggle="tab">Offerzone</a></li>
      <li> <a class="launch-modal" href="#" data-modal-id="modal-register"><i class="fa fa-user fa-fw"></i></a></li>
    </ul>
  </div>


     <!-- MODAL -->
     <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">

           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
             <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
         </button>
        <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a onclick="setVisibility('register', 'inline', 'login', 'none');" aria-controls="home" role="tab" data-toggle="tab">
         <h4 class="modal-title" id="modal-register-label">Join us</h4></a></li>
         <li role="presentation" class="active"><a onclick="setVisibility('login', 'inline', 'register', 'none');" aria-controls="profile" role="tab" data-toggle="tab"><h4 class="modal-title" id="modal-register-label">Login</h4></a></li>
         </ul>
     </div>
     <div id="register">
     <div class="modal-body">

           <form action="register.php" method="post" class="registration-form">
              <div class="form-group">
                 <label class="sr-only" for="form-first-name">First name</label>
                 <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
             </div>
             <div class="form-group">
              <label class="sr-only" for="form-last-name">Last name</label>
              <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
          </div>
          <div class="form-group">
              <label class="sr-only" for="form-email">Email</label>
              <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
          </div>
          <div class="form-group">
              <label class="sr-only" for="form-password">Password</label>
              <input type="password" name="form-password" placeholder="Enter Password" class="form-password form-control" id="form-password">
          </div>
          <div class="form-group">
              <label class="sr-only" for="form-password"> Confirm Password</label>
              <input type="password" name="form-confirm" placeholder="Confirm Password" class="form-confirm form-control" id="form-confirm">
          </div>
          <div class="form-group">
              <label class="sr-only" for="form-about-yourself">About yourself</label>
              <textarea name="form-about-yourself" placeholder="About yourself..."
              class="form-about-yourself form-control" id="form-about-yourself" style="overflow: hidden; resize: none;"></textarea>
          </div>
          <!--<div class="form-group">
            <label class="sr-only" for="form-about-yourself">Upload Picture</label>
            <input type="file" name="pic" id="pic">
          </div>-->
          <button type="submit" class="btn">Sign me up!</button>
      </form>
  </div>
</div>

<!-- login -->
     <div id="login">
        <div class="modal-body">
           <form action="user.php" method="post" class="registration-form">
          <div class="form-group">
              <label class="sr-only" for="form-email">Your Email Address</label>
              <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
          </div>
          <div class="form-group">
              <label class="sr-only" for="form-email"> Your Password</label>
              <input type="password" name="form-password" placeholder="Enter Password" class="form-password form-control" id="form-password">
          </div>
          <button type="submit" class="btn">Login</button>
      </form>
  </div>
</div>
</div>
</div>
</div>
<form class="ui-filterable">
      <input id="myFilter" data-type="search" value="Filter By Tags">
    </form>
<!-- profiles-->
<?php
$i=1;
$conn=mysql_connect("localhost", "root", "ajalan065");
$database="oopadai";
mysql_select_db($database, $conn);;
$result = mysql_query("SELECT * FROM Users", $conn);
$num_rows = mysql_num_rows($result);
?>
<div class="container">

<div class="my-container my-light-grey con ">
<?php
while($row = mysql_fetch_assoc($result)){

?>
<br />
  <div class="my-row my-padding my-border-bottom">
    <div class="my-col m2 my-padding-medium">
      <div class="my-img">
      <img src="http://www.planwallpaper.com/static/images/Winter-Tiger-Wild-Cat-Images.jpg" alt="tiger" class="my-circle" style="width:100%;">
      </div><h4 class="my-center">mR.TIGER</h4>
    </div>

    <div class="my-col m7 my-padding-medium">
      <div class="my-row">
	  <?php
	  	echo $row["ABOUT"];
} ?>
      </div>
     <!-- <div class="my-row">
        <a href="#"><span class="my-tag my-teal my-round">Mathematics!</span></a>
        <a href="#"><span class="my-tag my-teal my-round">Chemistry!</span></a>
        <a href="#"><span class="my-tag my-teal my-round">IIT!</span><a>
      </div>-->
    </div>
    <!--<div class="my-col m3 my-padding-medium my-center">
      <br>
      <i class="fa fa-inr"></i>5
      <br>
      per minute
      <br>

      <a href="#"> <button class="my-btn my-green my-ripple">Request a call <i class="fa fa-angle-right"></i></button></a>
      <br>
      OR
      <br>
      <a href="#"> <button class="my-btn my-green my-ripple">Request a chat <i class="fa fa-angle-right"></i></button></a>
    </div>-->

  </div>



</div>
</div>
<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

        </html>
