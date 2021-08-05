<?php
          include_once 'database.php';

          $id = $_POST['id'];
          $date = $_POST['date'];
          $about = $_POST['about'];
          $details = $_POST['details'];
          $image = $_POST['image'];

          $sql = "INSERT INTO design (id,date,about,details,image)VALUES('$id','$date','$about','$details','$image');";
          mysqli_query($conn, $sql);
      
    ?>

    <script>
       window.location.href = "index.php";
    </script>

     <?php
         /*insert values into images table*/

         $id = $_POST['id'];
         $title = $_POST['title'];
         $image = $_POST['image'];
         $sql = "INSERT INTO art (id,title,image)VALUES('$id','$title','$image');";
         mysqli_query($conn, $sql);
     ?>

<script>
       window.location.href = "sketches.php";
    </script>