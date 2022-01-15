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
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="row no-gutters iconrow">
            <div class="col-lg-5">
                <div class="tasktitle">
                    <p class="tsk">NOTES TO TASKS</p>
                    <p>Notes to Tasks</p>
                    <text>Lorem ipsum dolor sit amet consectetur.</text>
                </div>
            </div>

            <div class="col-lg-2">
                <div>

                </div>
            </div>

            <div class="col-lg-5">
                <div> <?php include './navbar.php';?> </p>
                </div>
            </div>
        </div>



        <hr>
        <div class="row no-gutters tasks">
            <div class="col-sm-12  col-lg-6 ">
                <div class="column_1">
                    <h5>Changing Notes to tasks<span class="material-icons yah1" data-toggle="modal"
                            data-target="#myModal">add</span>
                    </h5>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <br>
                            <div class="mdh modal-header">
                                <h4 class="modal-title">Adding tasks</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="frm" action="addTodos.php" method="POST">
                                    <input type="text" name="id" placeholder="Task type" required>
                                    <br><br>
                                    <input type="text" name="task" placeholder="task" required><br><br>
                                    <input type="date" name="date" placeholder="date" required><br><br>
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

                <div class="row no-gutters note_row ">

                    <?php
$sql = "SELECT * FROM todos;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="col-sm-12 col-md-4" data-aos="fade-up" id="<?php print $row['id'];?>">
                        <div class="note_item">
                            <a href="database.php?taskdelete=<?php print $row['id']?>">
                                <span class=" material-icons">delete</span>
                            </a>
                            <a href="database.php?taskpush=<?php print $row['id']?>">
                                <span class=" material-icons">move_to_inbox</span>
                            </a>
                            <p class="type"><?php print $row['id'];?></p>
                            <p class="task"><?php print $row['task'];?></p>
                            <p class="dat"><?php print $row['date'];?></p>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>

                </div>
            </div>





            <div class="col-sm-12 col-lg-6 ">
                <div class="column_2">
                    <h5>Tasks todo <span class="material-icons yah2" data-toggle="modal" data-target="#myModal">add
                        </span> </h5>
                </div>

                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <br>
                            <div class="mdh modal-header">
                                <h4 class="modal-title">Adding tasks</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="frm" action="addTodos.php" method="POST">
                                    <input type="text" name="id" placeholder="Task type" required>
                                    <br><br>
                                    <input type="text" name="task" placeholder="task" required><br><br>
                                    <input type="date" name="date" placeholder="date" required><br><br>
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


                <div class="row no-gutters todo_row">
                    <?php
$sql = "SELECT * FROM finished;";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="col-sm-12 col-md-4" data-aos="fade-up" id="<?php print $row['id'];?>">
                        <div class="todo_item">
                            <p class="type2"><?php print $row['id'];?> <a
                                    href="database.php?taskdone=<?php print $row['id']?>">
                                    <span class="tdicon material-icons">task</span>
                                </a> </p>
                            <p class="task2"><?php print $row['task'];?></p>
                            <p class="dat"><?php print $row['date'];?></p>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <script src="vanilla.js">
    </script>
    <script>
    AOS.init();
    </script>
</body>

</html>