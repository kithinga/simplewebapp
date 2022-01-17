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
    <br><br>
    <div class="container-fluid">
        <div class="row no-gutters nrow">
            <div class="col-lg-5">
                <div class="imagine">
                    <h6>SKETCHES</h6>
                    <p>Creativity and beyond</p>
                    <text>depuis to the things.</text>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="navbc">
                    <button class="imgbtn" data-toggle="modal" data-target="#myModal">
                        <span class="add-art material-icons">
                            add image
                        </span>
                    </button>
                </div>
            </div>

            <div class="col-lg-5">
                <?php include 'navbar.php'?>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container-fluid">
        <div class="row no-gutters sketches">
            <?php
$sql = "SELECT * FROM art;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-2 col-sm-12 col-xs-12  " data-aos="fade-up" id="<?php print $row['id'];?>">
                <div class="pigment ">
                    <img class="artimg img-fluid" src="images/<?php print $row['image'];?>" alt="">
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
    </div>

    <script src="vanilla.js">
    </script>
    <script>
    AOS.init();
    </script>
</body>

</html>