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
      <div onclick="location.href='ideas.php'" class="col-lg-4">
        <div class="idea-items">
          <span class="icon-sec material-icons">batch_prediction</span>
          <h5>Ideas</h5>
        </div>
      </div>
      <div onclick="location.href='sketches.php'" class="col-lg-8">
        <div class="sketches-items">
        <span class="icon-sec material-icons">draw</span>
          <h5>Sketches</h5>
        </div>
      </div>
    </div>


    <!-- section two-->
    <div class="row sec-two no-gutters">
      <div class="col-lg-4">
        <div class="task-items">
         <span class="icon-sec material-icons">task</span>
          <h5>Tasks</h5>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="colour-items">
        <span class="icon-sec material-icons">palette</span>
          <h5>Colours</h5>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="artkit-items">
          <span class="icon-sec material-icons">weekend</span>
          <h5>Artkit</h5>
        </div>
      </div>
    </div>


    <!--section  three-->
    <div class="row sec-three no-gutters">
      <div class="col-lg-8">
        <div class="website-items">
        <span class="icon-sec material-icons">language</span>
          <h5>Websites</h5>
        </div>
      </div>
      <div class="col lg-4">
        <div class="design-items">
        <span class="icon-sec material-icons">architecture</span>
          <h5>Designs</h5>
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