<?php
	$i=0;
$conn=mysql_connect("localhost", "root", "");
$database="oopadai";
mysql_select_db($database, $conn);


//$num_rows = mysql_num_rows($result);
if(isset($_REQUEST["q"])) {
	
	$q=$_REQUEST["q"];

	if($q!="") {
		$alltags= mysql_query("SELECT * FROM stags ", $conn);	
		$i=0;
		$len=strlen($q);
		foreach(explode(",", $q) as $rrows) {
			while($rrow = mysql_fetch_assoc($alltags)) {
				//if(!strpos(strtolower($rrows), strtolower($rrow['TAGS']))) {
				if(stristr($rrow['TAGS'], $rrows)) {
					$email=$rrow['EMAIL'];
					$val=mysql_query("SELECT * FROM rusers WHERE EMAIL='$email'", $conn);
					$search[$i]= mysql_fetch_assoc($val);
					$i++;
				}
			}
			
		}
		
	}
	
	else {
	$i=0;
	$alltags=mysql_query("SELECT * FROM rusers", $conn);
	while($rrow = mysql_fetch_assoc($alltags)) {
					$search[$i]=$rrow;
					$i++;
			}	
}
}
else {
	$i=0;
	$alltags=mysql_query("SELECT * FROM rusers", $conn);
	while($rrow = mysql_fetch_assoc($alltags)) {
					$search[$i]=$rrow;
					$i++;
			}
	
}
echo json_encode($search);
?>