<?php

if(!empty($_POST["name"]) and !empty($_POST["roll"]) and !empty($_POST["branch"]) and !empty($_POST["address"]))
{
    $nm=$_POST["name"];
    $rll=$_POST["roll"];
    $brn=$_POST["branch"];
    $adrs=$_POST["address"];
    include "config.php";
    $q1="select * from student where roll='$rll'";
    $count=0;
    $z=mysqli_query($con,$q1);
    while($rows=mysqli_fetch_array($z))
    {
        $count=1;
        break;

    }
    if($count>0)
    {
    $q="update student set name='$nm',branch='$brn',address='$adrs' where roll='$rll'";
    if(mysqli_query($con,$q)==true)
    {
        $message="$nm Record has been updated";

    }
    else
    {
       $message="$nm record not update"; 
    }

}
else
{
    $message="$rll record not exists in database";
}

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Update student records</h1>
    <form action="update2.php" method="post" align="center" onsubmit="return confirm('Are you sure yo want to delete this?');">
        student name <input type="text" name="name" required><br><br>
        Roll<input type="number" name="roll" required><br><br>
        Branch<select required name="branch">
            <option value="" selected disable>Select branch</option>
            <option>CSE</option>
            <option>MECH</option>
</select><br><br>
Address<textarea cols="10" rows="10" name="address"></textarea><br><br>
<button>update now</button>
</form>
<?php

if(isset($message))
{
    echo "<h1 align='center'>$message</h1>";
}

?>
</body>
</html>


