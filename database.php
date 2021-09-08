<?php
    $server="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="vanilla";
    $conn=mysqli_connect($server,$dbusername,$dbpassword,$dbname);



  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM design WHERE id = '$id';";

    // This line is needed in for the query for function
    // it points at the database as well as the database.
    mysqli_query($conn, $sql);
    header("Location: http://localhost/Vanilla/ideas.php
    ", TRUE, 301);
    exit();
    
  }
  

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT FROM design WHERE id = '$id';"; 
    $result = $conn->query($sql);
    if($result->num_rows>0){
      $row = mysqli_fetch_array($result);
      $id = $row['id'];
      $details = $row['details'];
      $about = $row['about'];
      $date = $row['date'];
    }
    else{
      header("Location: http://localhost/Vanilla/notfound.php");
    }
  }
  ?>
