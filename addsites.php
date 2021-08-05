

<?php
          include 'database.php';

          $site = $_POST['site'];
          $about = $_POST['about'];
          $link = $_POST['link'];
         
          $sql = "INSERT INTO websites(site,about,link)VALUES('$site','$about','$link');";
          mysqli_query($conn, $sql);
    ?>

     <script>
       window.location.href = "websites.php";
    </script>
     
