<?php
$con  = mysqli_connect('127.0.0.0.1', 'root','');
mysqli_select_db($con , "university");
$str = "create table student(rollNo int not null , studName varchar(20) , studDept varchar(20) ,passingYear int ,classGrades varchar(20)) ";
if(mysqli_query($con , $str)){
    echo "table created";
}
else{
    echo "table not created " .mysqli_error($con);
}
?>
