<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Genre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <body style="margin:100px;">
    <div class="container">
    <h1 style="text-align:center;margin-bottom:20px;">Search Genre</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <div class="form-group">
                <label for="meow">Enter Genre Name:</label>
                <input type="text" class="form-control" id="meow" placeholder="Genre Name" name="gname">
            </div>
            <input type="submit" class="btn btn-default"value="Submit" name="s"/>
        </form>
        <br><h1 style="text-align:center;">Searching According to Genre</h1><br>
        <div class="table-responsive">
            <table class="table table-hover table-dark" id="myTable">
                <tr class="header">
                    <th>Book Title</th>
                    <th>Price</th>
                </tr>
        <?php
            $server= "localhost";
            $username="root";
            $password="";
            $db="bangla_academy";
            
            $conn=mysqli_connect($server,$username,$password,$db);
            
            if(!$conn){
              die("Connection failed: ".mysqli_connect_error());
            }
            if(isset($_GET["s"])){
                function validateFormData($formdata){
                   $formdata=trim(stripslashes(htmlspecialchars($formdata)));
                  return $formdata;
                }
                $gn=validateFormData($_GET["gname"]);
                $qu="select b.Title,b.Price from Book b where b.Book_id in (select m.Book_id from Is_Of m where m.Genre_id in(select g.Genre_id from Genre g where g.Genre_name='$gn'));
                ";
                $ru=mysqli_query($conn,$qu);
                if(mysqli_num_rows($ru)>0){
                    while($dr=mysqli_fetch_assoc($ru)){
                        echo "<tr>";
                        echo "<td>".$dr['Title']."</td>";
                        echo "<td>".$dr['Price']."</td>";
                        echo "</tr>";
                    }
                }
                
               
                
            }
        ?>
             </table>
        </div>
    </div>
    </body>
</html>