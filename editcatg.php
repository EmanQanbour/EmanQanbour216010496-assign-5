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
//$id_catg= $_GET['id_catg'];

if (isset($_GET["submit"])) {
  $id_catg = $_GET['id_catg'];
  $catg_name = $_GET['catg_name'];
  $the_amount = $_GET['the_amount'];
  $the_date = $_GET['the_date'];
  $payment_type= $_GET['payment_type'];
  $conn = new mysqli($servername, $username, $password, $dbname);
  $query ="UPDATE categori SET id_catg='$id_catg',catg_name='$catg_name',the_amount='$the_amount',the_date='$the_date',payment_type='$payment_type' WHERE id_catg= '$id_catg'";

  //$result = mysqli_query($conn, $query);
  $result = $conn->query($query);
  if ($result) {
    header("Location: tablecatg.php?msg=Data updated successfully");
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
    $query = "SELECT * FROM categori";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="GET" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
            <label class="form-label">id catg:</label>
            <input type="text" class="form-control" name="id_catg" value="<?php echo $_GET['id_catg'] ?>">
          </div>

          <div class="col">
            <label class="form-label">categori name:</label>
            <input type="text" class="form-control" name="catg_name" value="<?php echo $_GET['catg_name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">the amount:</label>
            <input type="text" class="form-control" name="the_amount" value="<?php echo $_GET['the_amount'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">the date:</label>
          <input type="the_date" class="form-control" name="the_date" value="<?php echo $_GET['the_date'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">payment type:</label>
          <input type="payment_type" class="form-control" name="payment_type" value="<?php echo $_GET['payment_type'] ?>">
        </div>

       
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="tablecatg.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>