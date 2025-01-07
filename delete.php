<?php
if(!empty($_POST["roll"]))
{
    $rll=$_POST["roll"];
    include "config.php";
    $q="delete from student where roll='$rll'";
    if(mysqli_query($con,$q)==true)
    {
        $message="$rll Record has been deleted";
    }
    else
    {
        $message="$rll Record can't be deleted";
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
    <h1 align="center">delete record</h1>
    <form action="delete.php" method="post" align="center">
        Roll<input type="number" name="roll" required><br><br>
        <button>delete now</button>
</form>

<?php

if(isset($message))
{
    echo "<h1 align='center'>$message</h1>";
}

?>
</body>
</html>