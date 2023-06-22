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
    if(isset($_SESSION['k'])==false)
    {
       echo"<script>
       window.location='teacher student.php';
       </script>";
    }
    $a=$_GET['t1'];
    $con=mysqli_connect('localhost','root','','student');
    $q="select * from notes where Branch='$a'";
    $rl=mysqli_query($con,$q);
echo"<table border=1px>";
    while($row=mysqli_fetch_array($rl))
    {
        echo"<tr><td>$row[Mobile]</td><td>$row[date]</td><td>$row[Branch]</td><td>$row[sem]</td><td>$row[topic]</td><td>$row[sub]</td><td><a href='$row[filename]'>Dwnld</td></tr>";
    }
    echo"</table>";

    
    ?>
    
</body>
</html>