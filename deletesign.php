<?php
include "db_conn.php";
$id_reg = $_GET["id_reg"];

$query= "DELETE FROM `regester` WHERE id_reg = $id_reg";
$result = mysqli_query($conn, $query);

if ($result) {
  //echo "<p>user is deleted into the database.</p>";
  header("Location: tablesign.php?msg=Data deleted successfully");
  
} else {
  echo "Failed: " . mysqli_error($conn);
}
