<?php
if(isset($_POST['submit'])){
$fastName = $_POST['fastName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];

/** database connection**/
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'portquery';
$conn = mysql_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO my queries(fastName,lastName,email,phone,massage) value ('$fastName','$lastName','$email','$phone','$massage')";
mysqli_query($conn,$sql);


}

?>