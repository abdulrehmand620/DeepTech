


<!-- ---------------- -->



<!-- --------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css"/>
  <title>Document</title>
</head>
<body>
<?php


$username=$_POST['username'];

$email_id=$_POST['email_id'];

$phone=$_POST['phone'];

$comp=$_POST['comp'];

$msg=$_POST['msg'];

$conn = new mysqli('localhost','deeprcnn','h0%eYF2B;3ya','deeprcnn');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into user(username,email_id, phone,comp,msg) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username,$email_id,$phone,$comp,$msg);
    $execval = $stmt->execute();
    // echo $execval;
    // echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}

?>

  
<div class="container">
    <br><br>
<img src="img\successfully.gif" class=" mx-auto d-block rounded-circle" alt="..." width="250" height="200">
  <br>
  <div class="col-md-12 text-center">
  <a href="index.html"> <button type="button" class="btn btn-primary">Thanks</button></a> 
            
        </div>
        <h1 class="text-center">Artifical Intelligence</h1>

</div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
   setTimeout(function() {
    $('.hide1').fadeOut('slow');
    }, 1200);
	
	
</script>
</body>
</html>