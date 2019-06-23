
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Delete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <body style="margin:100px;">
    <div class="container">
    <h1 style="text-align:center;margin-bottom:20px;">Data Deletion</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <div class="form-group">
                <label for="meow">Enter Book ID:</label>
                <input type="text" class="form-control" id="meow" placeholder="Book ID" name="dbid">
            </div>
            <input type="submit" class="btn btn-default"value="Submit" name="s"/>
        </form>
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
                $dpid;$daid;$dgid;
                $fbid=validateFormData($_GET["dbid"]);
                $qu="SELECT getPId($fbid);";
                $dpid=mysqli_query($conn,$qu);
                $qu="select Author_id from Writer where Book_id=$fbid;";
                $ru=mysqli_query($conn,$qu);
                if(mysqli_num_rows($ru)>0){
                    while($dr=mysqli_fetch_assoc($ru)){
                        $daid=$dr["Author_id"];
                    }
                }
                $qu="select Genre_id from Is_Of where Book_id=$fbid;";
                $ru=mysqli_query($conn,$qu);
                if(mysqli_num_rows($ru)>0){
                    while($dr=mysqli_fetch_assoc($ru)){
                        $dgid=$dr["Genre_id"];
                    }
                }
                $qu="delete from Writer where Author_id=$daid and Book_id=$fbid;";
                $ru=mysqli_query($conn,$qu);
                $qu="delete from Is_Of where Genre_id=$dgid and Book_id=$fbid;";
                $ru=mysqli_query($conn,$qu);
                $qu="delete from Book where Book_id=$fbid;";
                $ru=mysqli_query($conn,$qu);

                echo "<h1>Successfully Deleted!!!</h1>";
                
            }
        ?>
    </div>
    </body>
</html>