<?php
include "db_conn.php";
$id_catg = $_GET["id_catg"];

$query= "DELETE FROM `categori` WHERE id_catg= $id_catg";
$result = mysqli_query($conn, $query);

if ($result) {
  //echo "<p>user is deleted into the database.</p>";
  header("Location: tablecatg.php?msg=Data deleted successfully");
  
} else {
  echo "Failed: " . mysqli_error($conn);
}
