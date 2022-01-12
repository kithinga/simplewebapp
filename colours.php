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

<body class="colors">
    <?php
include 'header.php';
?>

    <div class="container-fluid colour-slots">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="coolea">
                    <p>Recording colours for projects</p>
                    <text>Descriptions can be made about the colour use!</text>
                </div>
            </div>
            <div class="col-lg-2">
                <button class="addcl">Add Colour <span class="material-icons coli"
                        <?php printf("#%06X\n", mt_rand(0, 0xFFFFFF));?>>
                        format_color_fill
                    </span></button>
            </div>
            <div class="col-lg-5">
                <div>
                    <?php include './navbar.php';?>
                </div>
            </div>
        </div>


        <div class="ciana row no-gutters">
            <div class="col-lg-3 col-sm-12 col-xs-12" data-aos="fade-down">
                <div>
                    <div class="cl lipin">
                        color
                    </div>
                    <div class="luigai">
                        <h5>Luigai</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, delectus!</p>
                    </div>
                </div>
            </div>


            <div class=" col-lg-3 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl pinli">2</div>
            </div>
            <div class=" col-lg-3 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl yelli">3</div>
            </div>
            <div class="col-lg-3 ">
                <div class="cl lopo">4</div>
            </div>
            <div class="col-lg-3 col-sm-12 col-xs-12" data-aos="fade-down">
                <div class="cl e">1</div>
            </div>
            <div class=" col-lg-3 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl f">2</div>
            </div>
            <div class=" col-lg-3 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl g">3</div>
            </div>
            <div class="col-lg-3 ">
                <div class="cl h">4</div>
            </div>
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