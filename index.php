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
    <!-- section one -->
    <div class="row no-gutters sec-one">
      <div class="col-lg-4">
        <div class="idea-items">
          <h5>Ideas</h5>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="sketches-items">
          <h5>Sketches</h5>
        </div>
      </div>
    </div>


    <!-- section two-->
    <div class="row sec-two no-gutters">
      <div class="col-lg-4">
        <div class="task-items">
          <h5>Tasks</h5>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="colour-items">
          <h5>Colours</h5>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="artkit-items">
          <h5>Artkit</h5>
        </div>
      </div>
    </div>


    <!--section  three-->
    <div class="row sec-three no-gutters">
      <div class="col-lg-8">
        <div class="website-items">
          <h5>Websites</h5>
        </div>
      </div>
      <div class="col lg-4">
        <div class="design-items">
          <h5>Designs</h5>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  ?>

  <script src="vanilla.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>