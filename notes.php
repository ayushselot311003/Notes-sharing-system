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
    if(isset($_SESSION['c1'])==false)
     {
        echo"<script>
        window.location='teacher student.php';
        </script>";
     }
    $v=$_SESSION['c1'];
    $a=$_FILES['x']['name'];
    $b=$_FILES['x']['tmp_name'];
    if(move_uploaded_file($b,$a))
    {
        echo"uploaded";
        $_SESSION['k1']=$a;
      
        $c=$_POST['t1'];
        $d=$_POST['t2'];
        $e=$_POST['t3'];
        $f=$_POST['t4'];
        $g=$_POST['t5'];
        $con=mysqli_connect('localhost','root','','student');
        $q="insert into notes values('$v','$c','$d','$e','$f','$g','$a')";
        $rl=mysqli_query($con,$q);
        if($rl)
        echo"save";
        else
        echo"error";
    }
    else{
        echo"error";
    }
    
  
    ?>
    

    
</body>
</html>