<?php
    include  'links.php';
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
    <div class="container-fluid header_container">
    <div class="head row no-gutters">
        <div class="log col-lg-4 col-sm-12"><a href="index.php"><p class="lo"><span class="material-icons md-24">style adjust</span></p></a>
         </div>
        <div class="name col-lg-4 col-sm-12 sp">Kithinga</div>
        <div class="search col-lg-4 col-md-6 col-sm-12"><input type="text"  placeholder="kithinga"></div>
    </div>
    <nav class="navbar navbar-expand-lg ">
          <button class="navbar-toggler toggs" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon con material-icons md-24">view_list</span>
          </button>
          <div class="collapse navbar-collapse viewnav" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="index.php"><p><span class="paddup">Ideas</span><span class="material-icons md-24">home</span></p></a>
              <a class="nav-item nav-link " href="todos.php"><p>Tasks<span class="material-icons">task</span></p></a>
              <a class="nav-item nav-link " href="sketches.php"><span class="paddup">Sketches</span>  <span class="material-icons">draw</span></a>
              <a class="nav-item nav-link" href="colors.php"><span class="paddup">Colors</span><span class="material-icons">palette</span></a>
              <a class="nav-item nav-link" href="landing.php"><span class="paddup">Artkit</span><span class="material-icons">weekend</span></a>
              <a class="nav-item nav-link" href="websites.php"><span class="paddup">Websites</span> <span class="material-icons">language</span></a>
              <a class="nav-item nav-link" href="check.php"><span class="paddup">Designs</span> <span class="material-icons">cloth</span></a>
            </div>
          </div>
        </nav>
    </div>
</body>
</html>