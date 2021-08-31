<!DOCTYPE html>
<html>
    <body style="background:url(img/up.jpg);background-repeat:no-repeat;background-position: center;background-size: 100% 100%">

<?php
$emp_id=$_REQUEST["emp_id"];
$type=$_REQUEST["type"];
$block=$_REQUEST["block"];
$room=$_REQUEST["room"];

$date1=date("Y/m/d");
date_default_timezone_set("Asia/Kolkata");
$t = date("Y-m-d H:i:s");
    
$entry = "ENTRY";
$exit = "EXIT";

function function_alert($message) {
    echo "<script>alert('$message');";
	echo 'window.location.href = "employee_login.php";';
	echo '</script>';
}

if($emp_id){
$con=mysqli_connect("localhost", "root", "","iocl","3308");
$query="insert into record(emp_id,date1,timestamp1,type,block,office_room) values('$emp_id','$date1','$t','$type','$block','$room')";
if (mysqli_query($con,$query)) {
	if($type == $entry){
		function_alert("Your entry is successful");
	}
	else{
		function_alert("Your exit is successful");
	}
	
}
else {
	echo "Sorry! Error";
}
}
else{
	header("location:index.php");
}
?>

    </body>
</html>