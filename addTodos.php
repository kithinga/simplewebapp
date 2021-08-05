
<?php
          include_once 'database.php';

          $id = $_POST['id'];
          $task = $_POST['task'];
          $date = $_POST['date'];
         

          $sql = "INSERT INTO todos(id,task,date)VALUES('$id','$task','$date');";
          mysqli_query($conn, $sql);
         
          
      /* for the completed tasks*/
          $id = $_POST['id'];
          $task = $_POST['task'];
          $date = $_POST['date'];
         
          $sql = "INSERT INTO finished(id,task,date)VALUES('$id','$task','$date');";
          mysqli_query($conn, $sql);
    ?>

     <script>
       window.location.href = "todos.php";
    </script>
     
