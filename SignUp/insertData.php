<?php
//provide your hostname, username and dbname
$host="localhost"; 
$username="root";  
$password="";
$db_name="registrationdata"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$con = new mysqli("$host", "$username", "$password", "$db_name");
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO `registration`( `name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";
$result = mysqli_query($con,$sql);

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
?>