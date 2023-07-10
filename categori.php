<header class="header">
  
  <img src="imges/mh.png"style="width:100px;">
  
  <a href="#" class="logo">EXPENSE TRACKER</a>
  <nav class="nav-items">
    <a href="home.html">Home</a>
    <a href="AboutUs.html">Aboutus</a>
    <a href="login.php">Login</a>
    <a href="Signup.php">Signoup</a>
    <a href="logout.php">logout</a>
 
  </nav>
  <div>
  
  </div>
  
</header>

<link rel="stylesheet" href="home.css">
<link rel="Home" href="home.html">
      <link rel="Login" href="login.php">
      <link rel="Signup" href="signup.php">
  <link rel="logout" href="logout.php">
  
<?php
include "db_conn.php";
error_reporting(0);
if (isset($_POST["submit"])) {
   $id_catg = $_POST['id_catg'];
   $catg_name = $_POST['catg_name'];
   $the_amount = $_POST['the_amount'];
   $the_date= $_POST['the_date'];
   $payment_type = $_POST['payment_type'];
   $conn = new mysqli($servername, $username, $password, $dbname);
   $query = "INSERT INTO categori( id_catg,catg_name,the_amount,the_date,payment_type) VALUES ('$id_catg','$catg_name','$the_amount','$the_date','$payment_type')";
   $result = $conn->query($query);
   //$result = mysqli_query($conn, $query);

   if ($result) {
      echo "<p>categori inserted into the database.</p>";
      header("Location:tablecatg.php?msg=Data updated successfully");
      } else {
      echo  $conn -> error ;
      echo  "<br/>.The item was not added.";
       echo "<br/>$query ";
      }
      
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>EXPENSE TRACKER</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:lightcoral;">
   insert New categori
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>insert New categori</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
            <div class="col">
                  <label class="form-label">id categori:</label>
                  <input type="id_catg" class="form-control" name="id_catg" placeholder="Albert">
               </div>
               <div class="col">
                  <label class="form-label">categori name:</label>
                  <input type="catg_name" class="form-control" name="catg_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">the amount:</label>
                  <input type="number" class="form-control" name="the_amount" placeholder="the_amount">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">the date:</label>
               <input type="the_date" class="form-control" name="the_date" placeholder="year-mounth-day">
            </div>

            <div class="mb-3">
               <label class="form-label">payment type:</label>
               <input type="payment_type" class="form-control" name="payment_type" placeholder="enter type">
            </div>
           
            <div>
            <button  type="submit" class="btn btn-success" name="submit">save</button>
            
               <a href="tablecatg.php" class="btn btn-dark">cencle</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>