



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Search Student Based on Roll</h1>
    <form action="search.php" method="post" align="center">
        Enter your roll<input type="number" name="roll" required><br><br>
        <button>Search now</button><br><br>
</form>


<table border="1" align="center">

<tr>
    <th>Student id</th>
    <th>Student Name</th>
    <th>Student Branch</th>
    <th>Student roll</th>
    <th>Student Address</th>
</tr>






<?php
if(!empty($_POST["roll"]))
{
$rll=$_POST["roll"];
include "config.php";
$q= "select * from student where roll='$rll'" ;
$z=mysqli_query($con,$q); 
$flag=0;
while($rows=mysqli_fetch_array($z))
{
    $flag++;
    echo "<tr>";
    echo "<td>";
    echo $rows["id"];
    echo "</td>";
    echo "<td>";
    echo $rows["name"];
    echo "</td>";
    echo "<td>";
    echo $rows["branch"];
    echo "</td>";
    echo "<td>";
    echo $rows["roll"];
    echo "</td>";
    echo "<td>";
    echo $rows["address"];
    echo "</td>";
    echo "</tr>";

} 
if($flag==0)
{
    $message="This $rll not exists in your database";
} 
else
{
    $message="$rll record found";
}
}



?>
</table>


<?php

if(!empty($message))
{
    echo "<h3 align='center'>$message</h3>";
}
?>



</body>
</html>