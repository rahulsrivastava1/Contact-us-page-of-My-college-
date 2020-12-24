<?php


$usr_eml=$_POST['usr_eml'];
$usr_pas=$_POST['usr_pas'];



$con=mysqli_connect('localhost','id12989739_store','rahul','id12989739_signup');
$e="SELECT * FROM redmi WHERE usr_eml='$usr_eml' and usr_pas='$usr_pas'";

$p=$con->query($e);

 
if (mysqli_num_rows($p)>0 )
{
   
   
        
    
        session_id('abc');
        session_start();
        echo("<script>
        alert ('login successful')</script>");
        $row=mysqli_fetch_assoc($p);
        $_SESSION['usr_nam']=$row['usr_nam'];
        $_SESSION['usr_mob']=$row['usr_mob'];
        $_SESSION['usr_eml']=$row['usr_eml'];
        include 'sessions.php';

        
}
    else{
        echo ("<script>
        alert('Wrong inputs')</script>");
    }

       
    
?>