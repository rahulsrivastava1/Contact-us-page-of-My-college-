<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

echo "Your name is ".$name."your id is ".$email."your mobile no. is".$mobile;

$connection=mysqli_connect('localhost','id12989739_rahul','rahul','id12989739_raja');

$insert="INSERT INTO rahul SET name='$name',email='$email',mobile='$mobile'";

$connection->query($insert);
?>
