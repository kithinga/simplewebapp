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

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="navb">
        <div class="items">
            <button class="btni" onclick="location.href='ideas.php'">
                <li>ideas</li>
            </button>
            <button class="btni" onclick="location.href='sketches.php'">
                <li>Sketches</li>
            </button>
            <button class="btni" onclick="location.href='todos.php'">
                <li>Tasks</li>
            </button>
            <button class="btni" onclick="location.href='colours.php'">
                <li>Colours</li>
            </button>
            <button class="btni" onclick="location.href='artkit.php'">
                <li>Artkit</li>
            </button>
            <button class="btni" onclick="location.href='websites.php'">
                <li>Websites</li>
            </button>
            <button class="btni" onclick="location.href='design.php'">
                <li>Designs</li>
            </button>
        </div>
    </div>
    <script src="vanilla.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>