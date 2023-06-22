<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
       window.location='teacher student notes.php';
       </script>";
    }
    ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      
      <li><a href='addnotes.php'>addnotes</a></li>
      <li><a href='view.php'>view</a></li>
      <li> <a href='logout student.php'>logout</a></li>
     
    </ul>
  </div>
</nav>
   
    
    
    
</body>
</html>