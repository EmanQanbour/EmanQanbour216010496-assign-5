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
<?php
include "db_conn.php";
error_reporting(0);
$id_reg= $_GET["id_reg"];

if (isset($_GET["submit"])) {
  $id_reg = $_GET['id_reg'];
  $nam = $_GET['nam'];
  $email = $_GET['email'];
  $pass =$_GET['pass'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  $query ="UPDATE userv SET id_reg='$id_reg',nam='$nam',email='$email', pass='$pass' WHERE id_reg= '$id_reg'";

  //$result = mysqli_query($conn, $query);
  $result = $conn->query($query);
  if ($result) {
    header("Location: tablelogin.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
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
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
  EXPENSE TRACKER
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    //$sql = "SELECT * FROM `regester` WHERE id = $id LIMIT 1";
    //$result = mysqli_query($conn, $sql);
    //$row = mysqli_fetch_assoc($result);
    $query = "SELECT * FROM userv";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="GET" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
            <label class="form-label">id reg:</label>
            <input type="text" class="form-control" name="id_reg" value="<?php echo $_GET['id_reg'] ?>">
          </div>

          <div class="col">
            <label class="form-label"> Name:</label>
            <input type="text" class="form-control" name="nam" value="<?php echo $_GET['nam'] ?>">
          </div>

        

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $_GET['email'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">password:</label>
          <input type="pass" class="form-control" name="pass" value="<?php echo $_GET['pass'] ?>">
        </div>

        

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="tablelogin.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>