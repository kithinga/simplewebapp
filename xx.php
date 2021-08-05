<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kukiweb</title>
    <link rel="stylesheet" href="vanilla.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body id="all">
    <div class="topic">
      <p id="topic">Calcu<span>lator</span></p>
    </div>

    <div class="subhead">
      <div class="btndiv">
        <button class="btn">kukitime</button>
      </div>
      <div class="message">
        <input type="text" id="message" placeholder="Texting" />
      </div>
      <div class="timediv" onclick="dateme()">
        <p class="show">showtime</p>
      </div>
    </div>
   
    <form action="" class="form" method="POST">
      <h5>Calculate stuff</h5>
      <input type="number" name="num1" id="num1" placeholder="Num one" /><br />
      <input type="number" name="num2" id="num2"  placeholder="Num two" /><br />
      <input type="number" name="num3" id="num3"  placeholder="Num 3" /><br />
      <button type="submit" value="submit" id="math">Math</button><br />
      <div class="gift"></div>
      <div class="jjj">Bitch</div>
       <br><br>
      <h5 class="firstValue">My Answer is </h5>
    </form>
    <script src="vanilla.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
