<!--adding php to my code -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vanilla</title>
</head>

<body>
    <?php
include 'database.php';
include 'links.php';
include 'header.php';
?>


    <!--  grid for mobile responsive -->
    <div class="container-fluid daio">
        <div class="crga row no-gutters" data-aos="fade-up" data-aos-duration="1500">
            <div class=" rga">
                <div class="ga ideas" onclick="location.href='ideas.php'">
                    <span class="ics material-icons">batch_prediction</span>
                    <h4>Ideas</h4>
                </div>
                <div class="ga sketch" onclick="location.href='sketches.php'"> <span
                        class="ics material-icons">draw</span>
                    <h4>Sketches</h4>
                </div>
                <div class="ga task" onclick="location.href='todos.php'">
                    <span class="ics material-icons">task</span>
                    <h4>Tasks</h4>
                </div>
                <div class="ga colour">
                    <span class="ics material-icons">palette</span>
                    <h4>Colours</h4>
                </div>
                <div class="ga artkit"><span class="ics material-icons">weekend</span>
                    <h4>Artkit</h4>
                </div>
                <div class="ga website">
                    <span class="ics material-icons">web</span>
                    <h4>Websites</h4>
                </div>
                <div class="ga design">
                    <span class="ics material-icons">architecture</span>
                    <h4>Designs</h4>
                </div>
            </div>

        </div>
    </div>



    <div class="container-fluid all-slots">
        <!-- this is the intro part-->
        <!-- small section with watch and words -->

        <div class="container-fluid">
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
        <div class="row no-gutters webresp">
            <div class="col-lg-3">

            </div>
            <!-- section one -->
            <div class="col-lg-8">
                <div class="row no-gutters sec-one" data-aos="fade-down" data-aos-duration="2000">
                    <div onclick="location.href='ideas.php'" class="col-lg-3">
                        <div class="idea-items ha">
                            <span class="icon-sec material-icons">batch_prediction</span>
                            <h4>Ideas</h4>
                        </div>
                    </div>
                    <div onclick="location.href='sketches.php'" class="col-lg-6">
                        <div class="sketches-items ha">
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
                        <div class="task-items ha" data-aos="fade-up" data-aos-duration="1500">
                            <span class="icon-sec material-icons">task</span>
                            <h4>Tasks</h4>
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