
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <header class="header">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <img src="imges/mh.png"style="width:100px;">
    
    <a href="#" class="logo">EXPENSE TRACKER</a>
    <nav class="nav-items">
      <a href="home.html">Home</a>
      <a href="tablecatg.php">categori</a>
      <a href="login.php">Login</a>
      <a href="Signup.php">Signoup</a>
      <a href="categori.php">categori</a>
      <a href="logout.php">logout</a>
   
    </nav>
    <div>
    
    </div>
    
  </header>
 
  <link rel="stylesheet" href="home.css">
  <link rel="Home" href="home.html">
		<link rel="Login" href="login.php">
		<link rel="Signup" href="signup.php">
    <link rel="categori" href="tablecatg.php">
    <link rel="logout" href="logout.php">
    

    
<?php
include "db_conn.php";
error_reporting(0);

session_start();
$_SESSION['nam']=$nam;
if (isset($_POST["submit"])) {
   $id_reg = $_POST['id_reg'];
   $nam=$_POST['nam'];
   $email = $_POST['email'];
   $pass=$_POST['pass'];
   $conn = new mysqli($servername, $username, $password, $dbname);
   $query = "INSERT INTO userv( id_reg,nam, email,pass) VALUES ('$id_reg','$nam','$email','$pass')";
   $result = $conn->query($query);
   //$result = mysqli_query($conn, $query);

   if ($result) {
      echo "<p>user inserted into the database.</p>";
      header("Location:tablelogin.php?msg=Data updated successfully");
      } else {
      echo  $conn -> error ;
      echo  "<br/>.The user was not added.";
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
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightcoral;">
      EXPENSE TRACHER
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>LOGIN USER</h3>
         <p class="text-muted">Complete the form below to insert  user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
            <div class="col">
                  <label class="form-label">id reg:</label>
                  <input type="text" class="form-control" name="id_reg" placeholder="Albert">
               </div>
               <div class="col">
                  <label class="form-label"> Name:</label>
                  <input type="text" class="form-control" name="nam" placeholder="Albert">
               </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            
            <div class="mb-3">
               <label class="form-label">password:</label>
               <input type="password" class="form-control" name="pass" placeholder=" eAlbert">
            </div>

            

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="tablelogin.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>


</html>