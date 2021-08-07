<!--adding php to my code -->
<?php
include 'database.php';
include 'links.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vanilla</title>
</head>

<body>
  
  <div class="container-fluid all-slots">
    <!-- ideas section -->
    <div class="row no-gutters sec-one">
      <div class="col lg-4">
         <div class="idea-items">
           <h5>Tasks</h5>
         </div>
      </div>
      <div class="col lg-8">
         <div class="sketches-items">
           <h5>Sketches</h5>
         </div>
      </div>
    </div>


     <!-- todods section -->
    <div class="row sec-two">
      <div class="col md-6">rown2 col two</div>
      <div class="col md-6">rown2 col two</div>
    </div>

    <!-- sketches section -->
    <div class="row sec-three">
      <div class="col lg-6">rown2 col two</div>
      <div class="col lg-6">rown2 col two</div>
    </div>

  </div>





  <div class="container-fluid bui">
    <div class="row no-gutters roro">
      <div class="add col-sm-12 col-lg-3 col-xs-12">
        <div class="luna">
          <h4>Keeping all Ideas Fresh</h4>
          <p>all in for the taking</p>
        </div>
        <br>
        <!-- add data to the database -->
        <!--add button-->
        <button type="button" class="ideabtn" data-toggle="modal" data-target="#myModal">
          <span>Add idea</span>
        </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <br>
              <div class="mdh modal-header">

                <h4 class="modal-title">Add some ideas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form class="frm" action="insert.php" method="POST" autocomplete="off">
                  <input type="text" name="id" placeholder="identifier" required>
                  <input type="color" name="color" placeholder="colorpicker" required>
                  <br><br>
                  <input type="date" name="date" placeholder="date" required><br><br>
                  <input type="text" name="about" placeholder="about" required><br><br>

                  <textarea name="details" cols="26" rows="2" placeholder="details" class="txarea" required></textarea><br><br>
                  <input type="file" name="image" accept="image/*;capture=camera"><br><br>
                  <button type="submit" class=" addbtn">submit</button>
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

      <div class="view col-sm-12 col-lg-9 col-xs-12">

        <div class="categ">
          <p>Viewing all ideas</p>
        </div>


        <div class="comp row nospace no-gutters">

          <?php
          $sql = "SELECT * FROM design;";
          $result = mysqli_query($conn, $sql);
          $check = mysqli_num_rows($result);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <div class="w-30 col-lg-3 col-md-4 col-sm-6 col-xs-12 " data-aos="fade-up" id="<?php print $row['id']; ?>">
                <div class="card " contenteditable="truename">
                  <div class="dropdown">
                    <span class="material-icons md-24 spa">more_vert</span>
                    <div class="dropdown-content">
                      <p>Editin</p>
                      <a href="delete.php?status=<?php print $row['id'] ?>">
                        <p id="remove">Remove</p>
                      </a>
                    </div>
                  </div>
                  <div class="texter">
                    <p class="id" data-toggle="tooltip" data-placement="top" title="identifier"><?php print $row['id']; ?></p>
                    <p class="date">Added on <?php print $row['date']; ?></p>
                    <p class="six"><?php print $row['about']; ?></p>
                    <p class="details"><?php print $row['details']; ?></p>
                  </div>
                  <!-- <div class="imager">
                  <p><img class="ima" src="images/<?php print $row['image']; ?>" alt=""></p>
                </div> -->
                </div>


              </div>
            <?php } ?>
          <?php } ?>
        </div>
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