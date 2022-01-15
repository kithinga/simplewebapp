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
    <br>
    <br>
    <div class="container-fluid ncont">
        <div class="row no-gutters nrow">
            <div class="col-lg-5">
                <div class="coolea">
                    <h5>COLOURS </h5>
                    <p>Recording colours for projects</p>
                    <text>harmoniously!</text>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="acls">
                    <button class="addcl">Add Colour
                        <span class="material-icons coli">
                            format_color_fill
                        </span>
                    </button>
                </div>
            </div>

            <div class="col-lg-5">
                <!-- Web navbar  -->
                <?php include 'navbar.php'   ?>
            </div>
        </div>
    </div>


    <div class="container-fluid colour-slots">
        <br>
        <div class="ciana row no-gutters">
            <div class="col-lg-2 col-sm-12 col-xs-12" data-aos="fade-down">
                <div class="cl cmac">
                    <p class="cmact">Black</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>

            <div class=" col-lg-2 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl cmac2">
                    <p class="cmact">Light Green</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>

            <div class=" col-lg-2 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl cmac3">
                    <p class="cmact">Midnight Green</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl cmac4">
                    <p class="cmact">indigo shade</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>

            <div class=" col-lg-2 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl cmac5">
                    <p class="cmact">Orange shade</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>

            <div class=" col-lg-2 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="cl cmac6">
                    <p class="cmact">Blue shade</p>
                    <P class="pis">Hex colours: #1f2020</P>
                    <p class="pis">RGB (31,32,32)</p>
                    <p class="pis">CMYK ( 73,66, 65,74 )</p>
                    <p class="pis">project</p>
                </div>
            </div>
        </div>

    </div>


    <script src="vanilla.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>