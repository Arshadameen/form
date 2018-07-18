
<?php

$name = filter_input(INPUT_POST,'name');
$mobile = filter_input(INPUT_POST,'mobile');
$email = filter_input(INPUT_POST,'email');
$address = filter_input(INPUT_POST,'address');

$host="localhost";
$username="root";
$password="Ameen@mysql@123";
$dbname="Customer_Information";

$connect = new mysqli ($host,$username,$password,$dbname);

if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sql = "INSERT INTO info_table (Name,Mobile,Email,Address) VALUES ('$name','$mobile','$email','$address')";

	if($connect->query($sql)){
		echo "New record inserted successfully!!";
	}
	else{
		echo "Error: ".$sql."<br>".$connect->error;
	}
	$connect->close();
}

	header("refresh:2; url=form_database.html");
?>