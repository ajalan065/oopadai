<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
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
    <a href="http://oopadai.com/" ><img src="images/oopadai.png" style="height: 100%; width: 1.5em;" />Oopadai</a>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="float: right;">
      <li role="presentation"><a href="http://oopadai.com/" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">About Us</a></li>
      <li role="presentation"><a href="http://oopadai.com/packages.php" aria-controls="messages" role="tab" data-toggle="tab">Packages</a></li>
      <li role="presentation"><a href="http://oopadai.com/coming.php" aria-controls="settings" role="tab" data-toggle="tab">Offerzone</a></li>
      <li> <a class="launch-modal" href="#" data-modal-id="modal-register"><i class="fa fa-user-plus fa-lg"></i></a></li>
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

           <form action="register.php" method="post" class="registration-form" enctype="multipart/form-data">
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
		  <div class="form-group">
              <label class="sr-only" for="form-tags">Specialities</label>
              <input type="text" name="form-tags" placeholder="Enter Tags like Chemistry, Physics, etc. seperated by a single comma" class="form-tags form-control" id="form-tags" style="overflow: hidden; resize: none;">
          </div>
          <div class="form-group">
            <label class="sr-only" for="form-about-yourself">Upload Picture</label>
            <input type="file" name="image" id="image" accept="image/*">
          </div>
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

<!-- profiles-->
<div class="container">
	<form class="ui-filterable" style="padding-top: 0.5em;">
		<input id="myFilter" name="myFilter" data-type="search" placeholder="Filter By Tags" style="width: 100%;" onkeyup="showHint(this.value)">
	</form>
	<div id="txtHint">
	
	</div>
</div>
<br />

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
      function setVisibility(id, visibility, id2, visibility2) {
        document.getElementById(id).style.display = visibility;
        document.getElementById(id2).style.display = visibility2;
	  }
	  $(document).ready(function() {
		 var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						myFunction(xmlhttp.responseText);
						//document.getElementById("txtHint").innerHTML =obj ;
					}
				};
				xmlhttp.open("GET", "ajaxcall.php?q=" + "", true);
				xmlhttp.send();
	  });
		function showHint(str) {
			var s="";
			if (str.length == 0) {
				s="";
			} 	
			else {
				s=str;
			}
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						myFunction(xmlhttp.responseText);
						//document.getElementById("txtHint").innerHTML =obj ;
					}
				};
				xmlhttp.open("GET", "ajaxcall.php?q=" + s, true);
				xmlhttp.send();
				
		}
    
		function myFunction(response) {
			var arr=JSON.parse(response);
			var out="";
			for(i=0;i<arr.length;i++) {
				out+='<br />'+
				'<div class="my-container my-light-grey con "><br />'+
					'<div class="my-row my-padding my-border-bottom">'+
						'<div class="my-col m3 my-padding-medium">'+
							'<div class="my-img">'+'<img src="images/'+arr[i].IMAGE+'" class="my-circle" style="width:80%;">'+
							'</div>'+
              '<br/>'+
              
              '<a href="#"> <button class="my-btn my-green my-ripple"><i class="fa fa-comment fa-lg"></i></button></a>'+'&nbsp; '+
              '<a href="#"> <button class="my-btn my-green my-ripple"><i class="fa fa-phone fa-lg"></i><i class="fa fa-inr"></i>5/min</button></a>'+
						'</div>'+
						'<div class="my-col m7 my-padding-medium">'+
            '<h3 >'+arr[i].FNAME+'&nbsp;'+arr[i].LNAME+'</h3>'+
							'<div class="my-row">'+arr[i].ABOUT+
							'</div>'+'<br />'+ '<div class="my-row">';
              var x=arr[i].TAGS.split(",");
              for(j=0;j<x.length;j++) {
              out+='<span class="my-tag my-teal my-round" style="margin-top:0.6em;">'+x[j]+
                '</span>&nbsp; ';
              }
							out+='</div>'+
						'</div>'+
						'<div class="my-col m2 my-padding-medium my-center">'+
							
						'</div>'+
					'</div>'+
				'</div>';
			}
			document.getElementById("txtHint").innerHTML = out;
		}

    </script>
</body>

        </html>
