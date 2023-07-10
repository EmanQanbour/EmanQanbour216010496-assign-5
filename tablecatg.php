<header class="header">
  
    <img src="imges/mh.png"style="width:100px;">
    
    <a href="#" class="logo">EXPENSE TRACKER</a>
    <nav class="nav-items">
      <a href="home.html">Home</a>
      <a href="tablecatg.php">categori</a>
      <a href="login.php">Login</a>
      <a href="Signup.php">Signoup</a>
      <a href="logout.php">logout</a>
   
    </nav>
    <div>
    
    </div>
    
  </header>
 
  <link rel="stylesheet" href="home.css">
  <link rel="Home" href="home.html">
  <link rel="tablecatg" href="tablecatg.php">
		<link rel="Login" href="login.php">
		<link rel="Signup" href="signup.php">
    <link rel="logout" href="logout.php">
    
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title>EXPENSE TRACKER</title>
</head>
   
<body>
<h3 id="namei">
           
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
  EXPENSE TRACKER
  </nav>

  <div class="container">
   
    <a href="categori.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">categori Name</th>
          <th scope="col">the the amount</th>
          <th scope="col">the date</th>
          <th scope="col">payment type</th>
          <th scope="col">Action</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include ('db_conn.php');
        error_reporting(0);
$query = "SELECT * FROM categori";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
   //class=link-dark><i class=fa-solid fa-pen-to-square fs-5 me-3></i></a>
   //<a href=\'delete.php?id_reg= $result[id_reg]\'> class=link-dark><i class=fa-solid fa-pen-to-square fs-5 me-3></i></a>
if($total!=0){
while ($result = mysqli_fetch_assoc($data )) {
    echo"
  <tr>
    <td>". $result["id_catg"] ."</td>
    <td>". $result["catg_name"]."</td>
    <td>". $result["the_amount"]."</td>
    <td>". $result["the_date"] ."</td>
    <td>". $result["payment_type"]."</td>
    <td>
      <a href='editcatg.php?id_catg= $result[id_catg]'><input type ='submit' value='edit'></a></td>
     <td> <a href='deletecatg.php?id_catg= $result[id_catg]'><input type ='submit' value='delete'></a>
     
      
    </td>
  </tr>";

}
}
?>
  
  
  </tbody>
 
    </table>
  </div>
  
 

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>