<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    echo"<form method='post' action='notes.php' enctype='multipart/form-data'>
    Date<input type='text' name='t1' class='form-control'>
        Branch<input type='text' name='t2' class='form-control'><br>
        Sem<input type='text' name='t3' class='form-control'><br>
        Topic<input type='text' name='t4' class='form-control'>
        Sub<input type='text' name='t5' class='form-control'>
        File<input type='file' name='x' class='form-control'>
        
        <input type='submit' value='save' class='btn btn-success' >
</form>";
?>


    
</body>
</html>