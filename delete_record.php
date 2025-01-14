<?php
$student_id=$_GET['id'];
include "config.php";
$q="delete from student where id='$student_id'";
if(mysqli_query($con,$q)==true)
{
    echo "<script>alert('record delete succesfully');</script>";
    echo "<script> window.location='display.php';</script>";
}
else{
    echo "<script>alert('record not delete');</script>";
    echo "<script> window.location='display.php';</script>";
}