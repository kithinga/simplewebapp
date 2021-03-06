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
    <!-- the intro area -->
    <div class="container-fluid ki">
        <div class="row no gutters intro">
            <div class="col-lg-3 decoy1">

            </div>
            <div class="col-lg-3 quotes">
                <h5 class="quote-head">Self Mastery</h5>
                <p class="quote">working to tap all my potentials!</p>
            </div>
            <div class="col-lg-3 times">
                <h5 class="clock-time">O 1 O O 1 1</h5>
                <p class="clock-date">01 03 2022</p>
            </div>
            <div class="col-lg-3 decoy2">
            </div>
        </div>
    </div>

    <!--  grid for mobile responsive -->
    <div class="container-fluid daio">
        <div class="crga row no-gutters" data-aos="fade-up" data-aos-duration="1500">
            <div class="rga">
                <div class="ga ideas" onclick="location.href='ideas.php'">
                    <span class="ics material-icons">batch_prediction</span>
                    <h5>Ideas</h5>
                </div>
                <div class="ga sketch" onclick="location.href='sketches.php'"> <span
                        class="ics material-icons">draw</span>
                    <h5>Sketches</h5>
                </div>
                <div class="ga task" onclick="location.href='notes.php'">
                    <span class="ics material-icons">task</span>
                    <h5>Notes to tasks</h5>
                </div>
                <div class="ga colour" onclick="location.href='colours.php'">
                    <span class=" ics material-icons">palette</span>
                    <h5>Colours</h5>
                </div>
                <div class="ga artkit" onclick="location.href='artkit.php'"><span
                        class="ics material-icons">weekend</span>
                    <h5>Artkit</h5>
                </div>
                <div class="ga website" onclick="location.href='websites.php'">
                    <span class="ics material-icons">web</span>
                    <h5>Websites</h5>
                </div>
                <div class="ga design" onclick="location.href='design.php'">
                    <span class="ics material-icons">architecture</span>
                    <h5>Designs</h5>
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid all-slots">

        <!-- web responsive -->
        <div class="row no-gutters webresp">
            <div class="col-lg-3"></div>
            <!-- section one -->
            <div class="col-lg-6">
                <div class="row no-gutters sec-one" data-aos="fade-down" data-aos-duration="2000">
                    <div onclick="location.href='ideas.php'" class="col-lg-4">
                        <div class="idea-items ha">
                            <span class="icon-sec material-icons">batch_prediction</span>
                            <h4>Ideas</h4>
                        </div>
                    </div>
                    <div onclick="location.href='sketches.php'" class="col-lg-8">
                        <div class="sketches-items ha">
                            <span class="icon-sec material-icons">draw</span>
                            <h4>Sketches</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>


        <!-- section two-->
        <div class="row no-gutters">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="row sec-two no-gutters">
                    <div onclick="location.href='todos.php'" class="col-lg-4">
                        <div class="task-items ha" data-aos="fade-up" data-aos-duration="1500">
                            <span class="icon-sec material-icons">task</span>
                            <h4>Notes to tasks</h4>
                        </div>
                    </div>
                    <div onclick="location.href='colours.php'" class="col-lg-4">
                        <div class="colour-items ha" data-aos="fade-up" data-aos-duration="1500">
                            <span class="icon-sec material-icons">palette</span>
                            <h4>Colours</h4>
                        </div>
                    </div>
                    <div onclick="location.href='artkit.php'" class="col-lg-4">
                        <div class="artkit-items ha" data-aos="fade-up" data-aos-duration="1500">
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
                        <div class="website-items ha">
                            <span class="icon-sec material-icons">language</span>
                            <h4>Websites</h4>
                        </div>
                    </div>
                    <div onclick="location.href='design.php'" class="col-lg-4">
                        <div class="design-items ha">
                            <span class="icon-sec material-icons">architecture</span>
                            <h4>Designs</h4>
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