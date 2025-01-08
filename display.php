<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.0/css/dataTables.dataTables.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>

</head>
<body>

<div class="contaoner">
    <div class="rows">
        <h1 class="text-center">Student record list</h1>
        <div class="col-sm-8 offset-sm-2 mt-4">
        <table id="ankit" border="1" align="center">
        <thead>
        <tr>
            <th>Sno</th>
            <th>Student Name</th>
            <th>Student Branch</th>
            <th>Studebt Roll</th>
            <th>Studebt Address</th>
        </tr>
</thead>

<tbody>
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

</tbody>

</table>


</div>
</div>
</div>>
    

<script>
   
   new DataTable('#ankit', {
    order: [[3, 'desc']]
});
    </script>
</body>
</html>