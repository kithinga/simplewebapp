<?php

session_start();
echo 'Welcome to page 2';



include_once 'database.php';

// $id = $_POST['id'];
$id = $_GET['status'];

$sql = "DELETE FROM design WHERE id = '$id';";

if (mysqli_query($conn, $sql)) {
  echo "Records deleted succesfuly";
} else {
  echo "ERROR: could not be able to execute $sql. " . mysqli_error($conn);
}
mysqli_query($conn, $sql);

echo "life is fun";
?>

<script src="vanilla.js"></script>

<script>
  window.location.href = "ideas.php";
</script>