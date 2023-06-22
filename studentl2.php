<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
Session_Start();

     
    $a=$_GET['t1'];
    $b=$_GET['t2'];
   
   
    $con=mysqli_connect('localhost','root','','student');
    $q="select * from studentr";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($row['Mobile']==$a && $row['Password']==$b)
        {
           $_SESSION['k']=$a;
            echo"<script>
            window.location='studentdashboard.php'
            </script>";
        }
    }
    echo"invalid";

    ?>
    
    
</body>
</html>