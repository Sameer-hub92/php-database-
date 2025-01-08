<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>Sno</th>
            <th>Student Name</th>
            <th>Student Branch</th>
            <th>Studebt Roll</th>
            <th>Studebt Address</th>
        </tr>
<?php
include "config.php";
$q="select * from student";
$z=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($z))
{
    echo "<tr>";
    echo "<td>";
    echo $rows["id"];
    echo "</td>";
    echo "<td>";
    echo $rows["name"];
    echo "</td>";
    echo "<td>";
    echo $rows["roll"];
    echo "</td>";
    echo "<td>";
    echo $rows["branch"];
    echo "</td>";
    echo "<td>";
    echo $rows["address"];
    echo "</td>";


    echo "</tr>";
}
?>

</table>
</body>
</html>