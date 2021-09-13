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

    <div class="row no-gutters">
      <div class="col-lg-3">

      </div>
      <div class="col-lg-6">
        <div class="row no-gutters sec-one" data-aos="fade-down" data-aos-duration="2000">
          <div onclick="location.href='ideas.php'" class="col-lg-4 ">
            <div class="idea-items">
              <span class="icon-sec material-icons">batch_prediction</span>
              <h4>Ideas</h4>
            </div>
          </div>
          <div onclick="location.href='sketches.php'" class="col-lg-8 col-xs-6">
            <div class="sketches-items">
              <span class="icon-sec material-icons">draw</span>
              <h4>Sketches</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>



    <!-- section two-->
    <div class="row no-gutters">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="row sec-two no-gutters">
          <div onclick="location.href='todos.php'" class="col-lg-4">
            <div class="task-items" data-aos="zoom-out" data-aos-duration="3000">
              <span class="icon-sec material-icons">task</span>
              <h4>Tasks</h4>
            </div>
          </div>
          <div onclick="location.href='colours.php'" class="col-lg-4">
            <div class="colour-items" data-aos="zoom-in" data-aos-duration="3000">
              <span class="icon-sec material-icons">palette</span>
              <h4>Colours</h4>
            </div>
          </div>
          <div onclick="location.href='artkit.php'" class="col-lg-4">
            <div class="artkit-items" data-aos="fade-left" data-aos-duration="3000">
              <span class="icon-sec material-icons">weekend</span>
              <h4>Artkit</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>


    <!--section  three-->
    <div class="row no-gutters">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="row sec-three no-gutters" data-aos="fade-up" data-aos-duration="1500">
          <div onclick="location.href='websites.php'" class="col-lg-8">
            <div class="website-items">
              <span class="icon-sec material-icons">language</span>
              <h5>Websites</h5>
            </div>
          </div>
          <div onclick="location.href='check.php'" class="col lg-4">
            <div class="design-items">
              <span class="icon-sec material-icons">architecture</span>
              <h5>Designs</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>

  </div>

  <script src="vanilla.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>