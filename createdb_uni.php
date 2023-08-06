<?php
$con=mysqli_connect('localhost','root','');
$str="create database university";
if(mysqli_query($con,$str))
{
echo "Database created";
}
else
{
echo "database not created".mysqli_error($con);
}

?>
