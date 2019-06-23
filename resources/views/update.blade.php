<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="margin:40px;">

<div class="container">
  <h2 style="text-align:center;margin-bottom:20px;">Info Update Form</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <div class="form-group">
      <label for="author-id">ID:</label>
      <input type="text" class="form-control" id="author-id" placeholder="ID" name="iId">
    </div>
    <div class="form-group">
      <label for="anam">Table Name:</label>
      <input type="text" class="form-control" id="anam" placeholder="Table Name" name="iTable">
    </div>
    <div class="form-group">
      <label for="author-contact">Column Name:</label>
      <input type="text" class="form-control" id="author-contact" placeholder="Column Name" name="iColumn">
    </div>
    <div class="form-group">
      <label for="author-email">Updated Info:</label>
      <input type="text" class="form-control" id="author-email" placeholder="Input Updated Value" name="iUpdate">
    </div>
    <input type="submit" class="btn btn-default"value="Submit" name="iSubmit"/>

    <?php

    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";

    $conn=mysqli_connect($server,$username,$password,$db);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    if(isset($_GET["iSubmit"])){
        function validateFormData($formdata){
           $formdata=trim(stripslashes(htmlspecialchars($formdata)));
          return $formdata;
        }

        $x=validateFormData($_GET["iId"]);
        $y=validateFormData($_GET["iTable"]);
        $z=validateFormData($_GET["iColumn"]);
        $w=validateFormData($_GET["iUpdate"]);
        if($y=="Author"){
            $q="UPDATE Author SET $z='$w' WHERE Id=$x;";
            $r=mysqli_query($conn,$q);
        }
        else if($y=="Publisher"){
            $q="UPDATE Publisher SET $z='$w' WHERE Publisher_id=$x;";
            $r=mysqli_query($conn,$q);
        }
        else if($y=="Book"){
            $q="UPDATE Book SET $z='$w' WHERE Book_id=$x;";
            $r=mysqli_query($conn,$q);
        }
        else if($y=="Genre"){
            $q="UPDATE Genre SET $z='$w' WHERE Genre_id=$x;";
            $r=mysqli_query($conn,$q);
        }

        echo "<h1>Upadated Successfully!!!</h1>";


    }
    ?>

  </form>



</div>

</body>
</html>