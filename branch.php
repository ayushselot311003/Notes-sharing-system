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
    <form action='branch2.php'>
        <?php
        Session_Start();
        if(isset($_SESSION['k'])==false)
        {
           echo"<script>
           window.location='teacher student.php';
           </script>";
        }
        ?>
    Branch<input type='text' name='t1' class='form-control'>
    <input type='submit' value='Go' class="btn btn-info">
    
</form>
</body>
</html>