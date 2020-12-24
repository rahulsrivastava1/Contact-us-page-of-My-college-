<?php
$usr_eml=$_POST['usr_eml'];
$connection=mysqli_connect('localhost','id12989739_store','rahul','id12989739_signup');
$select="SELECT * from redmi where usr_eml='$usr_eml'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);
if($row==1){
session_start();
$a=mysqli_fetch_assoc($check);
$_SESSION['usr_nam']=$a['usr_nam'];
$to=$usr_eml;
$otp=rand(1000,9999);
$subject="OTP";
$text=("Hello".$_SESSION['usr_nam']."Your OTP is".$otp);
$headers="From:srivastavradmin.com"."\r\n";
mail($to,$subject,$text,$headers);
header("location:otp.html");

$_SESSION['otpentered']=$otp;
}
else

echo("
    <script>
        alert('Email is not registered');
    </script>
   
");
echo("<html>Sign-in <a href='ric.html'>Click Here</a></html>");
?>