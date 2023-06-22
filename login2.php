<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     Session_Start();
     
    $a=$_GET['t1'];
    $b=$_GET['t2'];
   
   
    $con=mysqli_connect('localhost','root','','student');
    $q="select * from login";
    $rl=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rl))
    {
        if($row['Mobile']==$a && $row['Password']==$b)
        {
            $_SESSION['c1']=$a;
            echo"<script>
            window.location='teacherdashboard.php'
            </script>";
        }
    }
    echo"invalid";

    ?>
    
</body>
</html>