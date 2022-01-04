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
  <div class="adders container-fluid">
    <div class="row no-gutters">
      <!--add button-->
      <button class="imgbtn" data-toggle="modal" data-target="#myModal">
        <span class="add-art material-icons">
          add image
        </span>
      </button>
          <!-- including the navbar -->
          <?php
                    include './navbar.php';
                   ?>

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
    <div class="basal row no-gutters sketches">
      <?php
$sql = "SELECT * FROM art;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="basal col-md-4 col-sm-12 col-xs-12  " data-aos="fade-up" id="<?php print $row['id'];?>">
            <div class="pigment ">
            <a href="database.php?imgdelete=<?php print $row['id']?>">
                                    <span class="idele material-icons">delete</span>
                                </a>
              <img class="artimg img-fluid" src="images/<?php print $row['image'];?>" alt="">
            </div>
          </div>
        <?php }?>
      <?php }?>
    </div>
  </div>

  <script src="vanilla.js"></script>
  <script>
    AOS.init();
  </script>
  <?php
include 'footer.php';
?>
</body>

</html>