<?php
  
$server= "localhost";
$username="root";
$password="";
$db="bangla_academy";

$conn=mysqli_connect($server,$username,$password,$db);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

if(isset($_GET["add"])){
  function validateFormData($formdata){
     $formdata=trim(stripslashes(htmlspecialchars($formdata)));
    return $formdata;
  }

  $q1="select MAX(Id) FROM Author;";
  $q2="select MAX(Publisher_id) FROM Publisher;";
  $q3="select MAX(Book_id) FROM Book;";
  $q4="select MAX(Genre_id) FROM Genre;";
  $r1=mysqli_query($conn,$q1);
  $a1;$p1;$b1;$g1;
  while($ad1=mysqli_fetch_assoc($r1)){
    $a1=$ad1["MAX(Id)"]+1;
  }
  $r2=mysqli_query($conn,$q2);
  while($pd1=mysqli_fetch_assoc($r2)){
    $p1=$pd1["MAX(Publisher_id)"]+1;
  }
  $r3=mysqli_query($conn,$q3);
  while($bd1=mysqli_fetch_assoc($r3)){
    $b1=$bd1["MAX(Book_id)"]+1;
  }
  $r4=mysqli_query($conn,$q4);
  while($gd1=mysqli_fetch_assoc($r4)){
    $g1=$gd1["MAX(Genre_id)"]+1;
  }
  
  

  $aname=validateFormData($_GET["aname"]);
  $aemail=validateFormData($_GET["aemail"]);
  $acnt=validateFormData($_GET["acnt"]);
  $pname=validateFormData($_GET["pname"]);
  $pcnt=validateFormData($_GET["pcnt"]);
  $btitle=validateFormData($_GET["btitle"]);
  $bprice=validateFormData($_GET["bprice"]);
  $byp=validateFormData($_GET["byp"]);
  $genre=validateFormData($_GET["genre"]);

  $query1="Insert into Author (Id,Name,Email,Contact_No) VALUES ($a1,'$aname','$aemail','$acnt');";
  $query2="Insert into Publisher (Publisher_id,Publisher_name,Contact_No) VALUES ($p1,'$pname','$pcnt');";
  $query3="Insert into Book(Book_id,Title,Price,Publisher_id,Year_of_publicaton) VALUES ($b1,'$btitle',$bprice,$p1,$byp);";
  $query4="insert into Writer(Author_id,Book_id) VALUES ($a1,$b1);";
  $query5="insert into Genre(Genre_id,Genre_name) VALUES ($g1,'$genre');";
  $query6="insert into Is_Of(Genre_id,Book_id) VALUES ($g1,$b1);";


  $result1=mysqli_query($conn,$query1);
  $result2=mysqli_query($conn,$query2);
  $result3=mysqli_query($conn,$query3);
  $result4=mysqli_query($conn,$query4);
  $result5=mysqli_query($conn,$query5);
  $result6=mysqli_query($conn,$query6);

  }

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="margin:40px;">

<div class="container">
  <h2 style="text-align:center;margin-bottom:20px;">Data Input Form</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <div class="form-group">
      <label for="anam">Author's Name:</label>
      <input type="text" class="form-control" id="anam" placeholder="Enter Name" name="aname">
    </div>
    <div class="form-group">
      <label for="email">Author's Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="aemail">
    </div>
    <div class="form-group">
      <label for="contact">Author's Contact-No:</label>
      <input type="text" class="form-control" id="contact" placeholder="Conatct-No" name="acnt">
    </div>
    <div class="form-group">
      <label for="bt">Book Title:</label>
      <input type="text" class="form-control" id="bt" placeholder="Book Title" name="btitle">
    </div>
    <div class="form-group">
      <label for="bp">Book Price:</label>
      <input type="text" class="form-control" id="bp" placeholder="Book Price" name="bprice">
    </div>
    <div class="form-group">
      <label for="yp">Year Of Publication:</label>
      <input type="text" class="form-control" id="yp" placeholder="Year Of Publication" name="byp">
    </div>
    <div class="form-group">
      <label for="gt">Genre Type:</label>
      <input type="text" class="form-control" id="gt" placeholder="Genre" name="genre">
    </div>
    <div class="form-group">
      <label for="pn">Publisher's Name:</label>
      <input type="text" class="form-control" id="pn" placeholder="Publisher's Name" name="pname">
    </div>
    <div class="form-group">
      <label for="pcontact">Publisher's Contact-No:</label>
      <input type="text" class="form-control" id="pcontact" placeholder="Publisher's Conatct-No" name="pcnt">
    </div>
    
    <input type="submit" class="btn btn-default"value="Submit" name="add"/>
  </form>
</div>

</body>
</html>
