<?php
include_once 'database.php';
include_once 'links.php';
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <div class="container-fluid">
        <div class="row addimage no-gutters">
           <!--add button-->
           <button class="imgbtn" data-toggle="modal" data-target="#myModal">
          Add Art
        </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <br>
              <div class="mdh modal-header">

                <h4 class="modal-title">Adding Art Ideas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form class="frm" action="insert.php" method="POST">
                  <input type="text" name="id" placeholder="image id" required>
                  <br><br>
                  <textarea name="details" cols="26" rows="2" placeholder="title" class="txarea" required></textarea><br><br>
                  <input type="file" name="image" accept="image/*;capture=camera"><br><br>
                  <button type="submit" class="btn addbtn">submit</button>
                </form>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger exit" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
        </div>
        <div class="row no-gutters sketches">
            <?php
            $sql = "SELECT * FROM art;";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($result);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class=" col-md-4 col-sm-12 col-xs-12  " data-aos="fade-up" id="<?php print $row['id']; ?>">
                        <div class="pigment " >
                             <img class="artimg img-fluid" src="images/<?php print $row['image']; ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
     



    <!--Image modal location -->
<div class="centre-image ">
        <div class="card-content ">
           <div class="image-self">
               <img src="images/Moko .jpg" class="img-fluid" alt="" >
           </div>
           <div class="image-details">
              <p class="p1"> Image boy here</p>
              <p class="p2">Lorem ipsum dolor sit amet yeah and more for more.</p>
              <span class="close">&times;</span>
           </div>
        </div>
    </div>
  
     
    <script src="vanilla.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<?php
include 'footer.php';
?>