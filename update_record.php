<?php

if(!empty($_POST["name"]) and !empty($_POST["roll"]) and !empty($_POST["branch"]) and !empty($_POST["address"]))
{
    $id=$_POST["id"];
    $nm=$_POST["name"];
    $rll=$_POST["roll"];
    $brn=$_POST["branch"];
    $adrs=$_POST["address"];
    include "config.php";
    $q="update student set name='$nm',branch='$brn',address='$adrs',roll='$rll' where id='$id'";
    if(mysqli_query($con,$q)==true)
    {
        echo "<script>alert('record updated succesfully');</script>";
        echo "<script> window.location='display.php';</script>";

    }
    else
    {

        echo "<script>alert('record not updated');</script>";
        echo "<script> window.location='display.php';</script>";   
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
    <form action="update_record.php" method="post" align="center">
    Student id <input type="number" name="id" value="<?php echo $_GET['id']; ?>" readonly required><br><br>
        student name <input type="text" name="name" value="<?php echo $_GET['name']; ?>" required><br><br>
        Roll<input type="number" name="roll" required value="<?php echo $_GET['roll']; ?>"><br><br>
        Branch<select required name="branch">
            <?php
            if($_GET['branch']=='CSE')
            {
                echo "<option selected>CSE</option>";
                echo "<option>MECH</option>";
            }
            else
            {
                echo "<option>CSE</option>";
                echo "<option selected>MECH</option>";
            }
            ?>
        

</select><br><br>
Address<textarea cols="10" rows="10" name="address"<?php echo $_GET['address']; ?>></textarea><br><br>
<button>update now</button>
</form>

</body>
</html>


