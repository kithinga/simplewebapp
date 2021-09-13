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

        <!-- div for page title and adding idea button -->
        <div class="row categ no-gutters">
            <div class="col-lg-6">
                <div class="wording"><span class="idea-head">Viewing all ideas</span></div>
            </div>
            <div class="col-lg-6">
                <div class="add-idea">
                    <!--add button-->
                    <button type="button" class="ideabtn" data-toggle="modal" data-target="#myModal">
                        <span class="material-icons adder">
                            add arrow_drop_down
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- The modal area -->
        <div class="row no-gutters">
            <br>
            <!-- add data to the database -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <br>
                        <div class="modal-header">
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

        <!-- cards for all ideas  -->
        <div class="row no-gutters">
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
                                    <a href="database.php?edit=<?php print $row['id'] ?>" class="btn btn-info">
                                        Edit
                                    </a>
                                    <a href="database.php?delete=<?php print $row['id'] ?>" class="btn btn-danger">
                                        Delete
                                    </a>
                                </div>
                            </div>
                            <div class="texter">
                                <p class="id" data-toggle="tooltip" data-placement="top" title="identifier"><?php print $row['id']; ?></p>
                                <p class="date">Added on <?php print $row['date']; ?></p>
                                <p class="six"><?php print $row['about']; ?></p>
                                <p class="details"><?php print $row['details']; ?></p>
                            </div>
                            <div class="action-sec">
                                <ul>
                                    <li><span class="material-icons">
                                            archive
                                        </span></li>
                                    <li><span class="material-icons edit-btn">
                                            edit
                                        </span></li>
                                    <li><span class="material-icons">
                                            delete_outline
                                        </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
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