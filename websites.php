<?php
include 'links.php';

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
    <?php
include 'header.php';
   ?>
    <br><br>
    <div class="sites container-fluid">
        <div class="row no-gutters nrow">
            <div class="col-lg-5">
                <div class="wordi">
                    <h5>Here because its important</h5>
                    <p>we keep these close to us !</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="addnav">
                    <button class=" addsite" data-toggle="modal" data-target="#myModal">Addsite</button>
                </div>
            </div>
            <div class="col-lg-5">
                <?php include 'navbar.php'?>
            </div>
        </div>

        <br>
        <br>

        <div class="row no-gutters">

            <?php
$sql = "SELECT * FROM websites;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class=" col-sm-12 col-md-3 col-lg-3 " data-aos="fade-up" id="<?php print $row['site'];?>">

                <div class="segment">
                    <h6 class="hd"> <?php print $row['site'];?></h6>
                    <p class="mid"> <?php print $row['about'];?></p>
                    <a href="<?php print $row['link'];?>" target="_blank">
                        <p class="link">view site <span class="look"><span class="material-icons">
                                    chevron_right
                                </span></span></p>
                    </a>
                </div>

            </div>
            <?php }?>
            <?php }?>

        </div>


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
                        <form class="frm" action="addsites.php" method="POST">
                            <input type="text" name="site" placeholder="site id" required>
                            <br><br>
                            <textarea name="about" cols="26" rows="2" placeholder="about site" class="txarea"
                                required></textarea><br><br>
                            <input type="text" name="link" placeholder="site link" required>
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

</body>

</html>