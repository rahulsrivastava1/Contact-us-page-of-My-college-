<?php

$usr_nam=$_POST["usr_nam"];
$usr_eml=$_POST["usr_eml"];
$usr_mob=$_POST["usr_mob"];
$usr_pas=$_POST["usr_pas"];
$usr_re_pas=$_POST["usr_re_pas"];

$connection=mysqli_connect('localhost','id12989739_store','rahul','id12989739_signup');
$insert="INSERT INTO redmi SET usr_nam='$usr_nam',usr_eml='$usr_eml',usr_mob='$usr_mob',usr_pas='$usr_pas'";
$select="SELECT * from redmi where usr_eml='$usr_eml'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);
if($row>0)
{
    echo "The user already exists";
    echo "</br>";
    echo "Your account cannot be created. Use a different emailid";
}
else if($usr_pas==$usr_re_pas)
{
    $connection->query($insert);
    echo "Your account has been created";
}
else
{
    echo "Your account cannot be created.Enter the credentials carefully.";
}
?>