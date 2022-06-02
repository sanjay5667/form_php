<?php

$a=$_POST['one'];
$b=$_POST['two'];
$c=$_POST['three'];
$d=$_POST['four'];
$e=$_POST['five'];
$f=$_POST['six'];
$g=$_POST['seven'];
$h=$_POST['nine'];


$con=mysqli_connect("localhost","root","","studentrecord");
$sql="INSERT INTO registration values('$a','$b','$c','$d','$e','$f','$g','$h')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "USER DETAILS ADDED SUCCESSFULLY";
}
else 
{
    echo "NOT ADDED";    
}

?>