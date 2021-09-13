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


  // delete  a task form the todos/ could push to all done for reviews.
  if(isset($_GET['taskdelete'])){
    $id = $_GET['taskdelete'];
    $query = "DELETE FROM todos WHERE id='$id';";
    mysqli_query($conn, $query);
    $_SESSION['message'] = "Hello user, the task has been deleted";
    header("Location: http://localhost/Vanilla/todos.php",true, 301);
  }
 

  // push a task to finished tasks already
  // if(isset($_GET['taskpush'])){
  //   $id = $_GET['taskpush'];
  //   $query = "INSERT INTO finished WHERE id='$id';";
  //   mysqli_query($conn, $query);
  //   header("Location: http://localhost/Vanilla/todos.php",true, 301);
  // }


  // delete all done tasks form the todos
  if(isset($_GET['taskdone'])){
    $id = $_GET['taskdone'];
    $query = "DELETE FROM finished WHERE id='$id';";
    mysqli_query($conn, $query);
    header("Location: http://localhost/Vanilla/todos.php",true, 301);
  }
  
  
  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT FROM design WHERE id = '$id';"; 
    $result = $conn->query($sql);
    if($result->num_rows>=0){
      while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $details = $row['details'];
        $about = $row['about'];
        $date = $row['date'];
      }
    }
  }
?>