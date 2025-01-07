<?php
if(!empty($_POST["roll"]))
{
    $rll=$_POST["roll"];
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
    <h1 align="center">delete record</h1>
    Roll<input type="number" name="roll" required><br><br>
    <form action="delete2.php" method="post" align="center" onsubmit="return confirm('Are you sure yo want to delete this?');">
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