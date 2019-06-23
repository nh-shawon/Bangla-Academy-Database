<!DOCTYPE html>
<html>
<head>
	<title>Show Table</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
        <br><h1 style="text-align:center;">Book Count Table</h1><br>
    <?php
    $server= "localhost";
    $username="root";
    $password="";
    $db="bangla_academy";
    
    $conn=mysqli_connect($server,$username,$password,$db);
    
    if(!$conn){
      die("Connection failed: ".mysqli_connect_error());
    }

    $query1="select a.Name,count(b.Title) from Author a,Writer w,Book b where a.Id=w.Author_id and w.Book_id=b.Book_id group by a.Name;";
    $result1=mysqli_query($conn,$query1);
     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Name</th>
         <th>Book Number</th>
         
       </tr>
      <?php
      if(mysqli_num_rows($result1)>0){
        while($row1=mysqli_fetch_assoc($result1)){
            echo "<tr>";
            echo "<td>".$row1['Name']."</td>";
            echo "<td>".$row1['count(b.Title)']."</td>";
            echo "</tr>";
        }
      }
     
      ?>
     </table>
  </div>
</body>
</html>
