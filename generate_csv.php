<?php
$servername = "localhost";
//server address
$db_username = "root";
//database user's username
$db_password = "";
//your database password
$db_name ="project"
//your database name

$conn = new mysqli($servername,$db_username,$db_password,$db_name);
if($conn->connect_error)
{
	die("error in datbase connection".$conn->connect_error);
}
//connect to the database
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="mailinglist.csv"');
//colums name you wanna get from database
$user_CSV[0] = array('firstname', 'lastname', 'email');
//your csv heading as first data

$sql ="SELECT firstname,lastname,email FROM users WHERE paid_status ='true';";
//select needed columns from the database 
$result= $conn->query($sql);
if($result->num_rows  > 0)
{
	$count = 0;
while($user = $result->fetch_assoc())
{
	
$user_CSV[$count +1] = $user;
//variable $user;an array representing one row of the db at a time 
$count++;
	

}
}

$conn->close();

$fp = fopen('php://output', 'wb');
foreach ($user_CSV as $line) {
	//comma seperated value
    fputcsv($fp, $line, ',');
}
fclose($fp);



?>