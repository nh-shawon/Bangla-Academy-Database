<!DOCTYPE html>
<html>
<head>
	<title>Show Table</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1 style="text-align:center;">Showing Table Data</h1><br>
    <div class="table-responsive">
        <br><h1 style="text-align:center;">Author Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query1="select * from Author;";
    $result1=mysqli_query($conn,$query1);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Id.</th>
         <th>Name</th>
         <th>Email</th>
         <th>Contact_No</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result1)>0){
        while($row1=mysqli_fetch_assoc($result1)){
            echo "<tr>";
            echo "<td>".$row1['Id']."</td>";
            echo "<td>".$row1['Name']."</td>";
            echo "<td>".$row1['Email']."</td>";
            echo "<td>".$row1['Contact_No']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>

  <div class="table-responsive">
        <br><h1 style="text-align:center;">Book Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query2="select * from Book;";
    $result2=mysqli_query($conn,$query2);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Book_id</th>
         <th>Title</th>
         <th>Price</th>
         <th>Publisher_id</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result2)>0){
        while($row2=mysqli_fetch_assoc($result2)){
            echo "<tr>";
            echo "<td>".$row2['Book_id']."</td>";
            echo "<td>".$row2['Title']."</td>";
            echo "<td>".$row2['Price']."</td>";
            echo "<td>".$row2['Publisher_id']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>

  <div class="table-responsive">
        <br><h1 style="text-align:center;">Genre Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query3="select * from Genre;";
    $result3=mysqli_query($conn,$query3);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Genre_id</th>
         <th>Genre_name</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result3)>0){
        while($row3=mysqli_fetch_assoc($result3)){
            echo "<tr>";
            echo "<td>".$row3['Genre_id']."</td>";
            echo "<td>".$row3['Genre_name']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>


  <div class="table-responsive">
        <br><h1 style="text-align:center;">Publisher Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query4="select * from Publisher;";
    $result4=mysqli_query($conn,$query4);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Publisher_id</th>
         <th>Publisher_name</th>
         <th>Contact_No</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result4)>0){
        while($row4=mysqli_fetch_assoc($result4)){
            echo "<tr>";
            echo "<td>".$row4['Publisher_id']."</td>";
            echo "<td>".$row4['Publisher_name']."</td>";
            echo "<td>".$row4['Contact_No']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>


  <div class="table-responsive">
        <br><h1 style="text-align:center;">Writer Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query5="select * from Writer;";
    $result5=mysqli_query($conn,$query5);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Author_id</th>
         <th>Book_id</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result5)>0){
        while($row5=mysqli_fetch_assoc($result5)){
            echo "<tr>";
            echo "<td>".$row5['Author_id']."</td>";
            echo "<td>".$row5['Book_id']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>

  <div class="table-responsive">
        <br><h1 style="text-align:center;">Is_Of Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query6="select * from Is_Of;";
    $result6=mysqli_query($conn,$query6);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Genre_id</th>
         <th>Book_id</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result6)>0){
        while($row6=mysqli_fetch_assoc($result6)){
            echo "<tr>";
            echo "<td>".$row6['Genre_id']."</td>";
            echo "<td>".$row6['Book_id']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>
  </body>
  </head>