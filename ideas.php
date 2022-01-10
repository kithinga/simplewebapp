<?php
include 'database.php';
include 'links.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home kithinga</title>
</head>

<body>
    <div class="view container-fluid bui">

                  <div class="modes">
                                <!-- Modal content -->
                                <div class="modes-content">
                                <span class="close">X</span>
                                    <br>
                                    <div class="drpi">
                                                <div class="edit-div">
                                                    <form action="database.php" autocomplete="off">
                                                    <br>
                                                        <h6>Make changes on ideas</h6>
                                                        <input type="text" name="id" placeholder="Fight To Keep Them Alive" required />
                                                        <br>
                                                        <input type="text" name="date" placeholder="I Will Live Every Single Talent" required />
                                                        <br>
                                                        <input type="text" name="about" placeholder="The Risk Which Is Worth" required ><br>
                                                        <input type="text" name="details" placeholder="The Risk Which Is Worth" required />
                                                        <br>
                                                        <button class="keep">keep</button>
                                                        <button class="save"  type="submit" name="submit">submit changes</button>
                                                        <p class="id" data-toggle="tooltip" data-placement="top" title="identifier"><?php print $row['id'];?></p>
                                                    </form>
                                                </div>
                                            </div>
                                <span class="close">&times;</span>
                                </div>
                                </div>
     <!-- FIX THIS IS PART AND HAVE A BEAUTIFUL UI -->

        <!-- new category area -->
        <div class="row no-gutters categ">
            <div class="col-lg-4">
                   <div class="describer">
                    <h5>This space allows you note down all your ideas and keep
                        working on them ! </h5>
                    <p>the feeling of mindfullness</p>
                   </div>
            </div>
            <div class="col-lg-3">
                <div class="ideabutton">
                    <button type="button" class="ideabtn" data-toggle="modal" title="adding" data-target="#myModal">
                        <span class="material-icons icod">add</span>
                      <h6 > Add idea</h6>
                   </button>
                </div>
            </div>
            <div class="col-lg-5">
                     <div class="navtabs">
                      <?php include './navbar.php';?>
                     </div>
            </div>
        </div>

        <!-- The modal area -->
        <div class="row no-gutters">
            <!-- add data to the database -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <br>
                        <div class="modal-header">
                            <h4 class="modal-title">Glad to accumulate some ideas</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form class="frm" action="insert.php" method="POST" autocomplete="off">
                                <label for="title">Title</label>
                                <input type="text" name="id" placeholder="Title of idea" id="title" required><br>
                                <label for="date">Date</label>
                                <input type="date" name="date" placeholder="the date that the idea is recorded" id="date" required><br>
                                <label for="about">About</label>
                                <input type="text" name="about" placeholder="what is the idea about" id="about" required><br>
                                <label for="txtarea">Details</label>
                                <br>
                                <textarea name="details" cols="26" rows="2" placeholder="details to describe the idea" class="txarea" id="txarea" required></textarea><br><br>
                                <!-- <input type="file" name="image" accept="image/*;capture=camera"><br><br> -->
                                <button type="submit" class=" submitbtn">Submit</button>
                                <button type="button" class="btnclose exit" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                        <!-- Modal footer -->
                    </div>
                </div>
            </div>
        </div>

        <!-- cards for all ideas  -->
        <div class="row no-gutters vin">
            <?php
$sql = "SELECT * FROM design;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="w-30 col-lg-3 col-md-4 col-sm-6 col-xs-12 " data-aos="fade-up" id="<?php print $row['id'];?>">
                        <div class="card " contenteditable="truename">

                        <div class="dropdown">
                                <span class="material-icons md-24 spa">more_vert</span>
                                <div class="dropdown-content">
                                 <button class="btn-edit btnn iop">Edit</button>
                                    <!-- edit div -->
                             <!-- <div class="modes"> -->
                                <!-- Modal content -->
                                <!-- <div class="modes-content">
                                <span class="close">X</span>
                                    <br>
                                    <div class="drpi">
                                                <div class="edit-div">
                                                    <form action="database.php" autocomplete="off">
                                                    <br>
                                                        <h6>Make changes on ideas</h6>
                                                        <input type="text" name="id" placeholder="Fight To Keep Them Alive" required />
                                                        <br>
                                                        <input type="text" name="date" placeholder="I Will Live Every Single Talent" required />
                                                        <br>
                                                        <input type="text" name="about" placeholder="The Risk Which Is Worth" required ><br>
                                                        <input type="text" name="details" placeholder="The Risk Which Is Worth" required />
                                                        <br>
                                                        <button class="keep">keep</button>
                                                        <button class="save"  type="submit" name="submit">submit changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                <span class="close">&times;</span>
                                </div>
                                </div> -->

                                  <!-- delete div -->
                                 <button class="btn_delete iop">Delete</button>

                                  <div class="custom-model-main">
                                        <div class="custom-model-inner">
                                        <div class="close-btn">×</div>
                                            <div class="custom-model-wrap">
                                                <div class="pop-up-content-wrap">
                                                  <h5 class="hp">Are you sure you want to delete ?</h5>
                                                  <button class="cancel">No</button>
                                                 <a href="database.php?delete=<?php print $row['id']?>">
                                                 <button class="yes">Yes</button>
                                                 </a>
                                                </div>
                                            </div>
                                        </div>
                                     <div class="bg-overlay"></div>
                                 </div>
                                </div>
                            </div>

                            <div class="texter">
                                <p class="id" data-toggle="tooltip" data-placement="top" title="identifier"><?php print $row['id'];?></p>
                                <p class="date">Added On  <?php print $row['date'];?></p>
                                <p class="six"><?php print $row['about'];?></p>
                                <p class="details"><?php print $row['details'];?></p>
                            </div>
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
</body>
<?php
include 'footer.php';
?>

</html>


